<?php

namespace App\Http\Controllers;

use App\Tamu;
use App\Undangan;
use App\Undangan_Custom;
use App\Undangan_Pernikahan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\AlignFormatter;

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
        $undangan = Undangan::where('user_id', '=', Auth::user()->id)->get();

        return view('home')
            ->with(compact('undangan'));
    }

    public function indexProfile()
    {
        return view('home.profile');
    }

    public function indexBukuTamu($id)
    {
        $undangan = Undangan::find($id);
        $tamus = Tamu::where('undangan_id', '=', $id)->get();

        if ($undangan->user_id != Auth::user()->id)
            abort(404);

        if ($undangan->nama_acara == "Pernikahan") {
            $undanganDetail = Undangan_Pernikahan::where('undangan_id', '=', $undangan->id)->first();
        } else {
            $undanganDetail = Undangan_Custom::where('undangan_id', '=', $undangan->id)->first();
        }

        return view('home.buku-tamu')
            ->with(compact('undangan'))
            ->with(compact('undanganDetail'))
            ->with(compact('tamus'));
    }

    public function indexUndanganDetail($id)
    {
        $undangan = Undangan::find($id);
        $tamus = Tamu::where('undangan_id', '=', $id)->get();
        $undanganDesain = array();
        $path = "";

        if ($undangan->user_id != Auth::user()->id)
            abort(404);

        if ($undangan->nama_acara == "Pernikahan") {
            $undanganDetail = Undangan_Pernikahan::where('undangan_id', '=', $undangan->id)->first();
            $path = glob(public_path('undangan/example/wedding/*.jpg'));
        } else {
            $undanganDetail = Undangan_Custom::where('undangan_id', '=', $undangan->id)->first();
            $path = glob(public_path('undangan/example/custom/*.jpg'));
        }

        foreach ($path as $p) {
            array_push($undanganDesain, basename($p, '.jpg'));
        }

        return view('home.undangan-detail')
            ->with(compact('undangan'))
            ->with(compact('undanganDetail'))
            ->with(compact('tamus'))
            ->with(compact('undanganDesain'));
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
