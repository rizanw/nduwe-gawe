<?php

namespace App\Http\Controllers;

use App\Tamu;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class TamuController extends Controller
{
    //
    public function createTamu(Request $request)
    {
        $request->validate([
            'nama-tamu' => 'required',
            'nohp-tamu' => 'required|unique:tamus,no_hp',
            'alamat-tamu' => 'required'
        ]);

        Tamu::create([
            'undangan_id' => $request['undangan'],
            'nama' => $request['nama-tamu'],
            'alamat' => $request['alamat-tamu'],
            'no_hp' => $request['nohp-tamu'],
            'kode_tamu' => $request['undangan'] . strrev($request['nohp-tamu']),
        ]);

        return redirect()->back()->with('success', 'Berhasil: Tamu telah ditambahkan!');
    }

    public function confirmTamu(Request $request)
    {
        $undanganId = $request->id;
        $kodetamu = $request->qrcode;
        $tamu = Tamu::where('kode_tamu', '=', $kodetamu)->first();

        if ($tamu == null)
            return redirect()->back()->with('error', 'Gagal: Tamu tidak terdaftar!');

        if($tamu->undangan_id != $request->id){
//            return "Tamu tidak terdaftar!";
            return redirect()->back()->with('error', 'Gagal: Tamu tidak terdaftar!');
        }

        try{
            if ($tamu->status_id != 7){
                $tamu->status_id = "7";
                $tamu->save();
//                return "berhasil";
                return redirect()->back()->with('success', 'Berhasil: Tamu terkonfirmasi!');
            }
//            return "tamu sudah terdaftar";
            return redirect()->back()->with('success', 'Peringatan: Tamu sudah dikonfirmasi!');
        }catch (Exception $exception){
            return "salah";
        }
//        return "berhasil";
    }

    public function deleteTamu(Request $request)
    {
        Tamu::where('id', '=', $request['tamu'])->delete();
        return redirect()->back()->with('message', 'Berhasil: Tamu telah dihapus!');
    }
}
