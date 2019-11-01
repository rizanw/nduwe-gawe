@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profile Kamu</h1>
        <p>
            Nama : {{ Auth::user()->name }}
        </p>
        <p>
            Email : {{ Auth::user()->email }}
        </p>
        <p>
            Alamat : {{ Auth::user()->alamat }}
        </p>
        <p>
            No. Hp : {{ Auth::user()->no_hp }}
        </p>
    </div>
@endsection
