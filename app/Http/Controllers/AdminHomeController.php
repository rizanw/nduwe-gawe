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

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
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

    public function editStatus($id)
    {
        $tamu = Tamu::where('id', '=', $id)->first();
        return view('admin.edit-status')
            ->with(compact('tamu'));
    }

    public function indexUndanganDetail($id)
    {
        $undangan = Undangan::find($id);
        $tamus = Tamu::where('undangan_id', '=', $id)->get();
        $pembayaran = Pembayaran::where('undangan_id', '=', $id)->first();
        // $wordCount = count($tamus);
        // dd($wordCount);

        if($undangan->nama_acara == "Pernikahan"){
            $undanganDetail = Undangan_Pernikahan::where('undangan_id', '=', $undangan->id)->first();
        }else{
            $undanganDetail = Undangan_Custom::where('undangan_id', '=', $undangan->id)->first();
        }

        return view('admin.undangan-detail')
            ->with(compact('undangan'))
            ->with(compact('undanganDetail'))
            ->with(compact('pembayaran'))
            ->with(compact('tamus'));
    }

    public function deleteUndangan(Request $request)
    {
        $undangan = Undangan::find($request['id']);
        if($undangan->nama_acara == "Pernikahan"){
            Undangan_Pernikahan::where('undangan_id', '=', $request['id'])->delete();
        }else{
            Undangan_Custom::where('undangan_id', '=', $request['id'])->delete();
        }
        Undangan::where('id', '=', $request['id'])->delete();

        return redirect()->back()->with('message', 'Berhasil: Undangan telah dihapus!');
    }

    public function updateStatus(Request $request)
    {
        // echo "aa"; die();
        // update data pegawai
        // if ($this->$request->hasFiles() == true) {
            // $file = file_get_contents($_FILES['bukti-bayar']['tmp_name']);
            // $efile = base64_encode($file);
        // }
        $tamu = Tamu::where('id', '=', $request['id'])->first();
        $baru = Tamu::where('id',$request['id'])->update([
            'status' => $request['status']
        ]);

        return redirect()->route('admin-undangan-detail', ['id' => $tamu->undangan_id]);
    }

    public function verifikasiPembayaran(Request $request)
    {
        // $tamu = Tamu::where('id', '=', $request['id'])->first();
        if($request['verdict'] == "verifikasi")
        {
            $verif = "SUDAH DIVERIFIKASI";
        }
        else{
            $verif = "PEMBAYARAN DITOLAK";
        }
        $baru = Pembayaran::where('id',$request['id'])->update([
            'status' => $verif
        ]);

        return redirect()->back();
    }

    public function pembayaranDetail($id)
    {
        $undangan = Undangan::find($id);
        $bayar = Pembayaran::where('undangan_id', '=', $id)->first();
        return view('admin.pembayaran')
            ->with(compact('bayar'))
            ->with(compact('undangan'));
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

    


}
