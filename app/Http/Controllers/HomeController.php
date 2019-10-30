<?php

namespace App\Http\Controllers;

use App\Undangan;
use App\Undangan_Custom;
use App\Undangan_Pernikahan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $undangan = Undangan::all();

        return view('home')
            ->with(compact('undangan'));
    }

    public function indexProfile()
    {
        return view('home.profile');
    }

    public function indexUndanganDetail($id)
    {
        $undangan = Undangan::find($id);
        if($undangan->nama_acara == "Pernikahan"){
            $undanganDetail = Undangan_Pernikahan::where('undangan_id', '=', $undangan->id)->first();
        }else{
            $undanganDetail = Undangan_Custom::where('undangan_id', '=', $undangan->id)->first();
        }

        return view('home.undangan-detail')
            ->with(compact('undangan'))
            ->with(compact('undanganDetail'));
    }

    public function indexUndanganBuat()
    {
        return view('home.undangan-buat');
    }
    public function indexTambahTamu()
    {
        return view('home.daftar-tamu');
    }


    public function indexLayananKami()
    {
        return view('home.layanan-kami');
    }
}
