@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Isi list tamu</h1>
        <label class="form-label" for="namaAcara">Nama : </label>
        <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
               name="namaAcara" placeholder="Jono">
        <label class="form-label" for="namaAcara">No hp : </label>
        <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
               name="namaAcara" placeholder="no hp">
        <a style="margin-top: 10px" class="btn btn-primary" href="#">Submit</a>
    </div>
@endsection
