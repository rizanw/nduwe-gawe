<?php

namespace App\Http\Controllers;

use App\Tamu;
use App\Undangan;
use App\Undangan_Custom;
use App\Undangan_Pernikahan;
use App\Paket;
use App\Pembayaran;
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

    public function indexUndanganDetail($id)
    {
        $undangan = Undangan::find($id);
        $tamus = Tamu::where('undangan_id', '=', $id)->get();
        $pembayaran = Pembayaran::where('undangan_id', '=', $id)->first();
        // $wordCount = count($tamus);
        // dd($wordCount);
        if ($undangan->user_id != Auth::user()->id)
            abort(404);

        if($undangan->nama_acara == "Pernikahan"){
            $undanganDetail = Undangan_Pernikahan::where('undangan_id', '=', $undangan->id)->first();
        }else{
            $undanganDetail = Undangan_Custom::where('undangan_id', '=', $undangan->id)->first();
        }

        return view('home.undangan-detail')
            ->with(compact('undangan'))
            ->with(compact('undanganDetail'))
            ->with(compact('pembayaran'))
            ->with(compact('tamus'));
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

    public function indexBukuTamuDetail($id)
    {
        $undangan = Undangan::find($id);
        $tamus = Tamu::where('undangan_id', '=', $id)->get();

        if ($undangan->user_id != Auth::user()->id)
            abort(404);

        return view('home.buku-tamu')
            ->with(compact('undangan'))
            ->with(compact('tamus'));
    }

    public function pembayaranDetail($id)
    {
        $undangan = Undangan::find($id);
        $paket = Paket::where('id', '=', $undangan->paket_id)->first();
        $tamus = Tamu::where('undangan_id', '=', $id)->get();
        $jumlahTamu = count($tamus);
        $total = ($jumlahTamu*$paket->harga)+($undangan->jumlah_undangan_kosong*10000);
        $pembayaran = Pembayaran::where('undangan_id', '=', $id)->first();
        if($pembayaran)
        {
            $bayar = Pembayaran::where('undangan_id', '=', $id)->first();
            // echo "aa";die();
        }
        else{
            $bayar = Pembayaran::create([
                'undangan_id' => $id,
                'total_bayar' => $total,
                'status' => "BELUM BAYAR"
            ]);
            // echo "bb";die();
            return redirect()->route('pembayaran', ['id' => $id]);
        }
        $bayar = Pembayaran::where('undangan_id', '=', $id)->first();
        return view('home.pembayaran')
            ->with(compact('bayar'))
            ->with(compact('undangan'));
    }

    public function updatePembayaran(Request $request)
{
    // echo "aa"; die();
    // update data pegawai
    // if ($this->$request->hasFiles() == true) {
        $file = file_get_contents($_FILES['bukti-bayar']['tmp_name']);
        $efile = base64_encode($file);
    // }
	$upload = Pembayaran::where('id',$request->id)->update([
        'bukti_bayar' => $efile,
        'status' => "MENUNGGU VERIFIKASI"
	]);
    // alihkan halaman ke halaman pegawai
    $pembayaran = Pembayaran::find($request->id);
	return redirect()->route('pembayaran', ['id' => $pembayaran->undangan_id]);
}
}
