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

    public function confirmTamu()
    {
        $kodetamu = '1567543231280';
        try{
            $tamu = Tamu::where('kode_tamu', '=', $kodetamu)->first();
            $tamu->status_id = "7";
            $tamu->save();
        }catch (Exception $exception){
            return redirect()->back()->with('fail', 'Gagal: ' . $exception);
        }
        return redirect()->back()->with('success', 'Berhasil: Tamu terkonfirmasi!');
    }

    public function deleteTamu(Request $request)
    {
        Tamu::where('id', '=', $request['tamu'])->delete();
        return redirect()->back()->with('message', 'Berhasil: Tamu telah dihapus!');
    }
}
