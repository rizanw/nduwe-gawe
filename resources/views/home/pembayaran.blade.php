@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pembayaran {{$undangan->nama_acara}}</h1>
                <div class="container-fluid mt-3">
                    <div>Total Pembayaran : {{$bayar->total_bayar}} </div>
                    <div>Status Pembayaran : {{$bayar->status}} </div>
                    @if($bayar->status == "MENUNGGU VERIFIKASI")
                    <img src="data:image/jpg/png;base64,{{$bayar->bukti_bayar}}" height="140px;" />
                    @else
                    <div>Upload bukti pembayaran : </div>
                    <form action="{{route('update-pembayaran')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="number" name="id" id="id" value="{{$bayar->id}}" hidden>
                    <input type="file" name="bukti-bayar" id="bukti-bayar">
                    <input type="submit" value="Submit" name="submit">
                    </form>
                    @endif
                </div>
                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                <a href="{{route('undangan-detail', $undangan->id)}}" class="btn btn-primary">Kembali</a>
                </div>
    </div>


    
@endsection

