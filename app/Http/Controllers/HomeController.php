<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function indexProfile()
    {
        return view('home.profile');
    }
    // todo
    // gimana kalo undangannya beda antara pernikahan dan biasa

    public function indexUndanganDetail()
    {
        return view('home.undangan-detail');
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
