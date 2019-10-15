@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: inline">
            <h1 style="max-width: 50%; display: inline-block;">Daftar Acara Kamu</h1>
            <a href="{{ route('undangan-buat') }}" style="float: right" class="btn btn-primary">Buat Undangan Acara</a>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal Acara</th>
                <th scope="col">Nama Acara</th>
                <th scope="col">Nama Tuan Rumah</th>
                <th scope="col">Penerima Tamu</th>
                <th scope="col">Daftar Tamu</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>10 Mei 2020</td>
                <td>Ulang Tahun</td>
                <td>Wasilatul</td>
                <td>Dewi</td>
                <td>
                    <a href="#" class="btn btn-success">Lihat</a>
                    <a href="#" class="btn btn-primary">Buku tamu</a>
                </td>
                <td>
                    <a href="{{ route('undangan-detail') }}" class="btn btn-success">Detail</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>21 November 2021</td>
                <td>Pernikahan</td>
                <td>Putri & Aldo</td>
                <td>Wacil </td>
                <td>
                    <a href="#" class="btn btn-success">Lihat</a>
                    <a href="#" class="btn btn-primary">Buku tamu</a>
                </td>
                <td>
                    <a href="{{ route('undangan-detail') }}" class="btn btn-success">Detail</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
