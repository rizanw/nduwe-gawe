@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: inline">
            <h1 style="max-width: 50%; display: inline-block;">Hi, {{  Auth::user()->name  }}</h1>
            </div>
        <div class="small mb-2" style="color: #555">
            Berikut Daftar Seluruh Undangan yang Dibuat oleh Semua User.
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Acara</th>
                <th scope="col">Tuan Rumah</th>
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
                        <a href="{{route('admin-undangan-detail', $u->id)}}" class="btn btn-success">Detail</a>
                    </td>
                    <td>
                    <form action="{{route('delete-undangan')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$u->id}}">
                            <input type="submit" class="btn btn-danger delete-undangan" value="Hapus">
                        </div>
                    </form>
                    </td>
                </tr>
            @endforeach
            @if($undangan->isEmpty())
                <tr>
                    <td colspan="7" style="text-align: center; font-style: italic">Tidak ada undangan, Silakan buat undangan anda.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
