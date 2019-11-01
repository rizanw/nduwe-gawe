@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buku Tamu {{$undangan->nama_acara}}</h1>
                <div class="container-fluid mt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No hp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jam Kehadiran</th>
                            <!-- <th scope="col">Aksi</th> -->
                        </tr>
                        </thead>
                        <tbody>
                        @php($i_tamu = 1)
                        @foreach($tamus as $tamu)
                            <tr>
                                <th scope="row">{{$i_tamu++}}</th>
                                <td>{{$tamu->nama}}</td>
                                <td>{{$tamu->no_hp}}</td>
                                <td>{{$tamu->alamat}}</td>
                                <td>[14:33 PM]</td>
                                <!-- <td> -->
                                    <!-- <form action="{{route('delete-tamu')}}" method="post"> -->
                                        <!-- @csrf -->
                                        <!-- <div class="form-group"> -->
                                            <!-- <input type="hidden" name="tamu" value="{{$tamu->id}}"> -->
                                            <!-- <input type="submit" class="btn btn-danger delete-tamu" value="Hapus"> -->
                                        <!-- </div> -->
                                    <!-- </form> -->
                                <!-- </td> -->
                            </tr>
                        @endforeach
                        @if($tamus->isEmpty())
                            <tr>
                                <td colspan="6" style="text-align: center; font-style: italic">Tidak ada data tamu,
                                    Silakan tambahkan data tamu anda.
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                <a href="{{route('undangan-detail', $undangan->id)}}" class="btn btn-primary">Kembali</a>
                </div>
    </div>


    
@endsection

