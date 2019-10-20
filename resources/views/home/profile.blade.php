@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profile Kamu</h1>
        <p>
            Nama : {{ Auth::user()->name }}
        </p>
        <p>
            Email :
        </p>
        <p>
            Alamat :
        </p>
        <p>
            No. Hp :
        </p>
    </div>
@endsection
