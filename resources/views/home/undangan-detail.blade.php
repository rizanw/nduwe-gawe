@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Undangan</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#detail" role="tab"
                   aria-controls="home"
                   aria-selected="true">Detail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tamu" role="tab"
                   aria-controls="profile" aria-selected="false">Tamu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bayar" role="tab"
                   aria-controls="contact" aria-selected="false">Bayar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lihat" role="tab"
                   aria-controls="contact" aria-selected="false">Lihat undangan</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                <label class="form-label" for="namaAcara">Nama Acara: </label>
                <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                       name="namaAcara" placeholder="cth: ulang tahunkku" value="Ulang Tahun" disabled>
                <label class="form-label" for="namaAcara">Alamat: </label>
                <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                       name="namaAcara" placeholder="cth: ulang tahunkku" value="JL Teknik Computer 17" disabled>
                ...

                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Penerima Tamu
                    </button>
                    <button class="btn btn-success">Edit</button>
                </div>
            </div>
            <div class="tab-pane fade" id="tamu" role="tabpanel" aria-labelledby="tamu-tab">
                <ol>
                    <li>Putri End - 0812345678</li>
                    <li>Putri Dewi - 0812345678</li>
                    <li>Dewilatul - 0812345678</li>
                </ol>
                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                    <button class="btn btn-primary">Buku tamu</button>
                    <button class="btn btn-success">Edit</button>
                </div>
            </div>
            <div class="tab-pane fade" id="bayar" role="tabpanel" aria-labelledby="bayar-tab">
                <p>
                <ol>
                    <li>Jika Sudah bayar data tidak dapat diedit</li>
                    <li>Maks bayar 1x24jam</li>
                </ol>
                </p>
                ...
                <button class="btn btn-success">Bayar</button>


            </div>
            <div class="tab-pane fade" id="lihat" role="tabpanel" aria-labelledby="lihat-tab">
                <img style="max-width: 320px;" src="{{asset('img//undangan-sample01.jpg')}}">
                ...

                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                    <button class="btn btn-primary">+ Penerima Tamu</button>
                    <button class="btn btn-success">Edit</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penerima Tamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Penerima Tamu</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
