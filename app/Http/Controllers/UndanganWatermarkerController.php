<?php

namespace App\Http\Controllers;

use App\Tamu;
use App\Undangan;
use App\Undangan_Custom;
use App\Undangan_Pernikahan;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Milon\Barcode\DNS2D;
use function GuzzleHttp\Psr7\str;

class UndanganWatermarkerController extends Controller
{
    //

    public function watermarker()
    {
        $undangan = Undangan::find('1');
        $daftarTamu = Tamu::where('undangan_id', $undangan->id)->get();
        if ($undangan->nama_acara == "pernikahan") {
            $undanganDetail = Undangan_Pernikahan::first($undangan->id);
        } else {
            $undanganDetail = Undangan_Custom::where('undangan_id', $undangan->id)->first();
        }

        return $this->makeUndangans($undangan->nama_acara, $undanganDetail, $daftarTamu);
    }

    public function makeUndangans($undanganTipe, $undanganDetail, $daftarTamu)
    {
        $folder = str_replace(' ', '', $undanganDetail->nama);
        $folder = "{$undanganDetail->id}".$folder;
        $path = public_path("undangan/_order/{$folder}/");

        if(is_dir($path)){
            $files = glob($path . '*', GLOB_MARK);
            foreach ($files as $file){
                unlink($file);
            }
            rmdir( $path );
        }
        mkdir(public_path("undangan/_order/{$folder}"), 0777, true);

        if ($undanganTipe == "pernikahan") {
            return $this->undanganWedding1($undanganDetail);
            //TODO::
        } else {
            $undanganKosong = $path.'_undangan_kosong.png';
            $undanganFile = $this->undanganCustomFrom($undanganDetail);
            $undanganFile->save($undanganKosong);
            foreach ($daftarTamu as $detailTamu){
                $undanganMod = $this->undanganCustomTo($undanganKosong, $detailTamu);
                $undanganMod->save($path.$detailTamu->nama.'_'.$detailTamu->no_hp.'.png');
            }
        }

        $zip_file = $folder.'.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file)
        {
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();
                $relativePath = $folder.'/'.substr($filePath, strlen($path) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
        return response()->download($zip_file);
    }

    public function undanganCustomFrom($undanganDetail)
    {
        $img = Image::make('undangan/template/custom/birthday-1.jpg');
        //judul
        $img->text($undanganDetail->nama, 750, 1010, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(100);
            $font->align('center');
            $font->valign('top');
        });
        //tanggal
        $img->text(date("D, d M Y", strtotime($undanganDetail->tanggal)), 560, 1130, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(50);
            $font->align('center');
            $font->valign('top');
        });
        //jam
        $time = date("H:i", strtotime($undanganDetail->jam_mulai)) . " s.d " . date("H:i", strtotime($undanganDetail->jam_selesai));
        $img->text($time, 940, 1130, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(50);
            $font->align('center');
            $font->valign('top');
        });
        //tempat
        $img->text($undanganDetail->tempat, 750, 1200, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(60);
            $font->align('center');
            $font->valign('top');
        });
        //alamat
        $img->text($undanganDetail->alamat, 750, 1280, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(50);
            $font->align('center');
            $font->valign('top');
        });

        return $img;
    }

    public function undanganCustomTo($file, $tamu)
    {
        $img = Image::make($file);
        //nama
        $img->text($tamu->nama, 50, 50, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(50);
            $font->align('left');
            $font->valign('top');
        });
        //nohp
        $img->text($tamu->no_hp, 50, 120, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(45);
            $font->align('left');
            $font->valign('top');
        });
        //alamat
        $img->text($tamu->alamat, 50, 180, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(50);
            $font->align('left');
            $font->valign('top');
        });
        //barcode
        $barcode = DNS2D::getBarcodePNG($tamu->kode_tamu, "QRCODE", "12", "12");
        $img->insert($barcode, 'bottom-right', 70, 70);

        return $img;
    }


    public function undanganWedding1()
    {
        $img = Image::make('undangan/template/wedding/wedding-0.jpg');
        $barcode = DNS2D::getBarcodePNG("halo.wacil.puti?", "QRCODE", "5", "5");
        $img->insert($barcode, 'bottom-right', 70, 70);
        $img->text('Wacil', 200, 400, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        $img->text('Puti', 450, 400, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        $img->text('10 Nopember 999', 320, 530, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->color('#fff');
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        $img->text('10:00 - 15:00', 320, 595, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->color('#777');
            $font->size(22);
            $font->align('center');
            $font->valign('top');
        });

        return $img->response('png');
    }
}
