@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pembayaran {{$undangan->nama_acara}}</h1>
                <div class="container-fluid mt-3">
                    <div>Total Pembayaran : {{$bayar->total_bayar}} </div>
                    <div>Status Pembayaran : {{$bayar->status}} </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div>Upload bukti pembayaran : </div>
                    <input type="number" name="id" id="id" value="{{$bayar->id}}" hidden>
                    <input type="file" name="Bukti Pembayaran" id="Bukti">
                    <input type="submit" value="Submit" name="submit">
                    </form>
                </div>
                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                <a href="{{route('undangan-detail', $undangan->id)}}" class="btn btn-primary">Kembali</a>
                </div>
    </div>


    
@endsection

