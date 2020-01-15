<?php

namespace App\Http\Controllers;

use App\Undangan;
use App\Undangan_Custom;
use App\Undangan_Pernikahan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function createUndangan(Request $request)
    {
        $request->validate([]);

        $undangan = Undangan::create([
            'user_id' => $request->user()->id,
            'paket_id' => $request['paket'],
            'nama_acara' => $request['jenis-undangan'] == 'pernikahan' ? "Pernikahan" : $request['nama-acara'],
            'tuan_rumah' => $request['tuan-rumah-pernikahan'] != null? $request['tuan-rumah-pernikahan'] : $request['tuan-rumah-acara'],
            'jumlah_undangan_kosong' => $request['undangan-kosong-pernikahan'] != null? $request['undangan-kosong-pernikahan'] : $request['undangan-kosong-acara'],
        ]);

        if($request['jenis-undangan'] == 'pernikahan'){
            $undanganPernikahan = Undangan_Pernikahan::create([
                'undangan_id' => $undangan->id,
                'Nama_Pria' => $request['nama-pria'],
                'Ibu_Pria' => $request['ibu-pria'],
                'Bapak_Pria' => $request['bapak-pria'],
                'Nama_Wanita' => $request['nama-wanita'],
                'Ibu_Wanita' => $request['ibu-wanita'],
                'Bapak_Wanita' => $request['bapak-wanita'],
                'tanggal_akad' => $request['tanggal-akad'],
                'jam_mulai_akad' => $request['jam-mulai-akad'],
                'jam_selesai_akad' => $request['jam-selesai-akad'],
                'tempat_akad' => $request['tempat-akad'],
                'tanggal_resepsi' => $request['tanggal-resepsi'],
                'jam_mulai_resepsi' => $request['jam-mulai-resepsi'],
                'jam_selesai_resepsi' => $request['jam-selesai-resepsi'],
                'tempat_resepsi' => $request['tempat-resepsi'],
            ]);
        }else if($request['jenis-undangan'] == 'custom'){
            $undanganCustom = Undangan_Custom::create([
                'undangan_id' => $undangan->id,
                'nama' => $request['nama-acara'],
                'tempat' => $request['tempat-acara'],
                'alamat' => $request['alamat-acara'],
                'tanggal' => $request['tanggal-acara'],
                'jam_mulai' => $request['jam-mulai-acara'],
                'jam_selesai' => $request['jam-selesai-acara'],
            ]);
        }
        return redirect()->route('undangan-detail', [$undangan->id])->with('success', 'Berhasil: Undangan telah dibuat! Silakan isi daftar tamu, pilih desain undangan, dan lakukan pembayaran.');
    }

    public function updateUndanganDesain(Request $request)
    {
        $request->validate([]);

        $undangan = Undangan::find($request['undangan']);
        $undangan->desain_undangan = $request['desain-undangan'];
        $undangan->save();

        return redirect()->back()->with('success', 'Berhasil: Desain undangan telah dipilih');
    }

    public function readDetailUndangan()
    {

    }
}
