<?php

namespace App\Http\Controllers;

use App\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    //
    public function createTamu(Request $request)
    {
        $request->validate([]);

        $tamu = Tamu::create([
            'undangan_id' => $request['undangan'],
            'nama' => $request['nama-tamu'],
            'alamat' => $request['alamat-tamu'],
            'no_hp' => $request['nohp-tamu']
        ]);

        return redirect()->back()->with('message', 'Berhasil: Tamu telah ditambahkan!');
    }

    public function deleteTamu(Request $request)
    {
        Tamu::where('id', '=', $request['tamu'])->delete();
        return redirect()->back()->with('message', 'Berhasil: Tamu telah dihapus!');
    }
}
