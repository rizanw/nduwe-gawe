@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: inline">
            <h1 style="display: inline-block;">Daftar Tamu : <a href="{{route('undangan-detail', $undangan->id)}}">{{$undangan->nama_acara}}</a></h1>
        </div>
            <div class="text-right">
                <a href="{{ route('undangan-buat') }}"  class="btn btn-gold ml-1 mr-1 mb-2"><i class="fas fa-qrcode"></i> Scan QR</a>
                <a href="{{ route('undangan-buat') }}"  class="btn btn-gold ml-1 mr-1 mb-2 disabled" aria-disabled="true"><i class="fas fa-file-download"></i> Unduh</a>
            </div>
        <div class="small align-text-bottom" style="color: #555">
            Berikut daftar tamu undangan
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($tamus as $tamu)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                            {{$tamu->nama}}
                        </td>
                        <td>{{$tamu->no_hp}}</td>
                        <td>{{$tamu->alamat}}</td>
                        <td>
                            {{$tamu->status->nama}}
                        </td>
                        <td>
                            [jam hadir tamu]
                        </td>
                        <td>
                            @if($tamu->status_id >= 2 && $tamu->status_id <= 6)
                                <a href="{{route('undangan-detail', $tamu->id)}}" class="btn btn-primary">Hadir</a>
                            @elseif($tamu->status_id == 1)
                                <a href="{{route('undangan-detail', $tamu->id)}}" class="btn btn-danger disabled" aria-disabled="true">Hapus</a>
                            @elseif($tamu->status_id >= 7 && $tamu->status_id <=8)
                                <a href="{{route('undangan-detail', $tamu->id)}}" class="btn btn-primary disabled" aria-disabled="true">Hadir</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                @if($tamus->isEmpty())
                    <tr>
                        <td colspan="7" style="text-align: center; font-style: italic">Tamu belum ditambahkan.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
