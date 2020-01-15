<?php

namespace App\Http\Controllers;

use App\Tamu;
use Illuminate\Http\Request;

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

    public function deleteTamu(Request $request)
    {
        Tamu::where('id', '=', $request['tamu'])->delete();
        return redirect()->back()->with('message', 'Berhasil: Tamu telah dihapus!');
    }
}
