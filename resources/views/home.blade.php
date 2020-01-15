@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: inline">
            <h1 style="max-width: 50%; display: inline-block;">Hi, {{  Auth::user()->name  }}</h1>
            <a href="{{ route('undangan-buat') }}" style="float: right" class="btn btn-gold">Buat Undangan Acara</a>
        </div>
        <div class="small mb-2" style="color: #555">
            Berikut Daftar Undangan dan Acara yang pernah Anda buat.
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Acara</th>
                <th scope="col">Nama Tuan Rumah</th>
                <th scope="col">Daftar Tamu</th>
                <th scope="col">Opsi</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @php($i = 1)
            @foreach($undangan as $u)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$u->nama_acara}}</td>
                    <td>{{$u->tuan_rumah}}</td>
                    <td>
                        <a href="#" class="btn btn-success">Lihat</a>
                        <a href="{{route('buku-tamu', $u->id)}}" class="btn btn-primary">Buku Tamu</a>
                    </td>
                    <td>
                        <a href="{{route('undangan-detail', $u->id)}}" class="btn btn-success">Detail</a>
                    </td>
                    <td>
                    <form action="{{route('user-delete-undangan')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$u->id}}">
                            <input type="submit" class="btn btn-danger delete-undangan" value="Hapus">
                        </div>
                    </form>
                    </td>

                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($undangan as $u)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                            @if($u->undangan_pernikahan != null)
                                {{$u->undangan_pernikahan->tanggal_akad}} <span style="font-weight: bold">(Akad)</span>
                                <br>
                                {{$u->undangan_pernikahan->tanggal_resepsi}} <span
                                    style="font-weight: bold">(Resepsi)</span>
                            @else
                                {{$u->undangan_custom->tanggal}}
                            @endif
                        </td>
                        <td>{{$u->nama_acara}}</td>
                        <td>{{$u->tuan_rumah}}</td>
                        <td>
                            @if($u->undangan_pernikahan != null)
                                {{$u->undangan_pernikahan->tempat_akad}} <span style="font-weight: bold">(Akad)</span>
                                <br>
                                {{$u->undangan_pernikahan->tempat_resepsi}} <span
                                    style="font-weight: bold">(Resepsi)</span>
                            @else
                                {{$u->undangan_custom->tempat}}
                            @endif
                        </td>
                        <td>
                            <a href="{{route('undangan-detail', $u->id)}}" class="btn btn-success">Lihat</a>
                            <a href="{{route('buku-tamu', $u->id)}}" class="btn btn-primary">Buku tamu</a>
                        </td>
                        <td>
                            <a href="{{route('undangan-detail', $u->id)}}" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                @endforeach
                @if($undangan->isEmpty())
                    <tr>
                        <td colspan="7" style="text-align: center; font-style: italic">Tidak ada undangan, Silakan buat
                            undangan anda.
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
