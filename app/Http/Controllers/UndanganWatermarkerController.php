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

    public function watermarker(Request $request)
    {
        $undanganId = $request->input('undangan', false);
        $undangan = Undangan::find($undanganId);
        $daftarTamu = Tamu::where('undangan_id', $undangan->id)->get();
        if ($undangan->nama_acara == "Pernikahan") {
            $undanganDetail = Undangan_Pernikahan::where('undangan_id', '2')->first();
        } else {
            $undanganDetail = Undangan_Custom::where('undangan_id', $undangan->id)->first();
        }

        return $this->makeUndangans($undangan->nama_acara, $undanganDetail, $daftarTamu);
    }

    public function makeUndangans($undanganTipe, $undanganDetail, $daftarTamu)
    {
        $namaPria = str_replace(' ', '', $undanganDetail->nama_pria);
        $namaWanita = str_replace(' ', '', $undanganDetail->nama_wanita);
        $folder = 'pernikahan' . $namaPria . $namaWanita;
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

        $undanganKosong = $path.'_undangan_kosong.png';
        if ($undanganTipe == "Pernikahan") {
            $undanganFile = $this->undanganWeddingFrom($undanganDetail);
            $undanganFile->save($undanganKosong);
        } else {
//            $undanganKosong = $path.'_undangan_kosong.png';
            $undanganFile = $this->undanganCustomFrom($undanganDetail);
            $undanganFile->save($undanganKosong);
//            foreach ($daftarTamu as $detailTamu){
//                $undanganMod = $this->undanganTo($undanganKosong, $detailTamu);
//                $undanganMod->save($path.$detailTamu->nama.'_'.$detailTamu->no_hp.'.png');
//            }
        }
        foreach ($daftarTamu as $detailTamu){
            $undanganMod = $this->undanganTo($undanganKosong, $detailTamu);
            $undanganMod->save($path.$detailTamu->nama.'_'.$detailTamu->no_hp.'.png');
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

    public function undanganWeddingFrom($undanganDetail)
    {
        $img = Image::make('undangan/template/wedding/wedding-0.jpg');
//        $barcode = DNS2D::getBarcodePNG("halo.wacil.puti?", "QRCODE", "5", "5");
//        $img->insert($barcode, 'bottom-right', 70, 70);
        //nama cowo
        $img->text($undanganDetail->nama_pria, 200, 400, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        //nama cewe
        $img->text($undanganDetail->nama_wanita, 450, 400, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        //tanggal acara resepsi
        $img->text(date("D, d M Y", strtotime($undanganDetail->tanggal_resepsi)), 320, 530, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->color('#fff');
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        //jam acara resepsi
        $time = date("H:i", strtotime($undanganDetail->jam_mulai_resepsi)) . " s.d " . date("H:i", strtotime($undanganDetail->jam_selesai_resepsi));
        $img->text($time, 320, 595, function ($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->color('#777');
            $font->size(22);
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

    public function undanganTo($file, $tamu)
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
        $barcode = DNS2D::getBarcodePNG($tamu->kode_tamu, "QRCODE", "10", "10");
        $img->insert($barcode, 'bottom-right', 70, 70);

        return $img;
    }
}
