@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Undangan [Nama Acara]</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#detail" role="tab"
                   aria-controls="home"
                   aria-selected="true">Detail Acara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tamu" role="tab"
                   aria-controls="profile" aria-selected="false">Daftar Tamu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bayar" role="tab"
                   aria-controls="contact" aria-selected="false">Pembayaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lihat" role="tab"
                   aria-controls="contact" aria-selected="false">Lihat undangan</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black">
                                Data Mempelai Pria
                            </div>
                            <label class="form-label" for="namapria">Nama mempelai pria: </label>
                            <input type="text" id="namapria" class="form-control @error('namapria') is-invalid @enderror"
                                   name="namapria" placeholder="cth: aldo hendro">
                            <label class="form-label" for="ibupria">Ibu mempelai pria: </label>
                            <input type="text" id="ibupria" class="form-control @error('ibupria') is-invalid @enderror"
                                   name="ibupria" placeholder="cth: Susi">
                            <label class="form-label" for="bapakpria">Bapak mempelai pria: </label>
                            <input type="text" id="bapakpria" class="form-control @error('bapakpria') is-invalid @enderror"
                                   name="namapria" placeholder="cth: Budi">
                            <label class="form-label" for="ruanrumah">Nama tuan rumah: </label>
                            <input type="text" id="ruanrumah" class="form-control @error('ruanrumah') is-invalid @enderror"
                                   name="ruanrumah" placeholder="cth: Budi">
                            <div class="form-label mb-2 font-italic"
                                 style="border-bottom: 1px solid black; margin-top: 24px;">
                                Data Mempelai Wanita
                            </div>
                            <label class="form-label" for="namawanita">Nama mempelai wanita: </label>
                            <input type="text" id="namawanita"
                                   class="form-control @error('namawanita') is-invalid @enderror"
                                   name="namawanita" placeholder="cth: putri endah">
                            <label class="form-label" for="ibuwanita">Ibu mempelai wanita: </label>
                            <input type="text" id="ibuwanita" class="form-control @error('ibuwanita') is-invalid @enderror"
                                   name="ibuwanita" placeholder="cth: Sinta">
                            <label class="form-label" for="bapakwanita">Bapak mempelai wanita: </label>
                            <input type="text" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Bayu">
                        </div>
                        <div class="col-md">
                            <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black">
                                Akad Nikah
                            </div>
                            <label class="form-label" for="bapakwanita">Tanggal akad: </label>
                            <input type="date" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Bayu">
                            <label class="form-label" for="bapakwanita">Jam mulai akad: </label>
                            <input type="time" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Bayu">
                            <label class="form-label" for="bapakwanita">Jam selesai akad: </label>
                            <input type="time" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Bayu">
                            <label class="form-label" for="bapakwanita">Tempat akad: </label>
                            <input type="text" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Manarul ilmi">
                        </div>
                        <div class="col-md">
                            <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black;">
                                Resepsi
                            </div>
                            <label class="form-label" for="namapria">Tanggal resepsi: </label>
                            <input type="date" id="namapria" class="form-control @error('namapria') is-invalid @enderror"
                                   name="namapria" placeholder="cth: aldo hendro">
                            <label class="form-label" for="bapakwanita">Jam mulai resepsi: </label>
                            <input type="time" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Bayu">
                            <label class="form-label" for="bapakwanita">Jam selesai resepsi: </label>
                            <input type="time" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Bayu">
                            <label class="form-label" for="bapakwanita">Tempat resepsi: </label>
                            <input type="text" id="bapakwanita"
                                   class="form-control @error('bapakwanita') is-invalid @enderror"
                                   name="bapakwanita" placeholder="cth: Manarul ilmi">
                            <div class="form-label mb-2 font-italic"
                                 style="border-bottom: 1px solid black; margin-top: 24px;">
                                Tuan Rumah
                            </div>
                            <label class="form-label" for="tuanrumah">Nama Tuan Rumah : </label>
                            <input type="text" id="tuanrumah"
                                   class="form-control @error('tuanrumah') is-invalid @enderror"
                                   name="tuanrumah" placeholder="cth: Joni">
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-md">
                            <label class="form-label" for="namaAcara">Nama Acara: </label>
                            <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                                   name="namaAcara" placeholder="cth: ulang tahunkku">
                            <label class="form-label" for="namaAcara">Nama tuan rumah: </label>
                            <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                                   name="namaAcara" placeholder="cth: Wacilatul">
                            <label class="form-label" for="namaAcara">Tempat: </label>
                            <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                                   name="namaAcara" placeholder="cth: Masjid Pondok Indah">
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="namaAcara">Tanggal: </label>
                            <input type="date" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                                   name="namaAcara" placeholder="cth: ulang tahunkku">
                            <label class="form-label" for="namaAcara">Jam mulai: </label>
                            <input type="time" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                                   name="namaAcara" placeholder="cth: ulang tahunkku">
                            <label class="form-label" for="namaAcara">Jam selesai: </label>
                            <input type="time" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                                   name="namaAcara" placeholder="cth: ulang tahunkku">
                        </div>
                    </div>

                </div>

                <div style="position: absolute; bottom: 50px; right: 0px; padding-right: 200px;">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Penerima Tamu
                    </button>
                    <button class="btn btn-success">Edit</button>
                </div>
            </div>
            <div class="tab-pane fade" id="tamu" role="tabpanel" aria-labelledby="tamu-tab">
                <div class="container-fluid mt-3">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No hp</th>
                            <th scope="col">Alamat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Putri End</td>
                            <td>0812345678</td>
                            <td>Jl anytin</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Putri Dewi</td>
                            <td>0812345678</td>
                            <td>Jl fatfood</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Dewilatul</td>
                            <td>@0812345678</td>
                            <td>Jl twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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

@section('script')

@endsection
