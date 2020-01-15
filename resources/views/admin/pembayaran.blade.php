@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pembayaran {{$undangan->nama_acara}}</h1>
        @if($bayar)
        <div class="container-fluid mt-3">                    
                    <div>Bukti transfer :</div>
                    <img src="data:image/jpg/png;base64,{{$bayar->bukti_bayar}}" height="140px;">
                    <div>Status : {{$bayar->status}}</div>
                    @if($bayar->status == "MENUNGGU VERIFIKASI")
                    <div>Verifikasi pembayaran : </div>

                    <form action="{{route('verifikasi-pembayaran')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="number" name="id" id="id" value="{{$bayar->id}}" hidden>
                    <input type="radio" name="verdict" value="verifikasi"> Verifikasi
                    <input type="radio" name="verdict" value="tolak"> tolak
                    <input type="submit" value="Verifikasi" name="submit" class="btn btn-success">
                    </form>
                    @else
                    <div>Pembayaran sudah diverifikasi</div>
                    @endif
                </div>
                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                <a href="{{route('admin-undangan-detail', $undangan->id)}}" class="btn btn-primary">Kembali</a>
                </div>
        @else
        <div>Belum ada bukti pembayaran</div>
        @endif
                
    </div>


    
@endsection

