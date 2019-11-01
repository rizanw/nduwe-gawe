@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Undangan {{$undangan->nama_acara}}</h1>
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
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lihat" role="tab"
                   aria-controls="contact" aria-selected="false">Desain Undangan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bayar" role="tab"
                   aria-controls="contact" aria-selected="false">Pembayaran</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                @if($undangan->nama_acara == 'Pernikahan')
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black">
                                    Data Mempelai Pria
                                </div>
                                <label class="form-label" for="nama-pria">Nama mempelai pria: </label>
                                <input type="text" id="nama-pria"
                                       class="form-control @error('nama-pria') is-invalid @enderror"
                                       name="nama-pria" placeholder="cth: aldo hendro"
                                       value="{{$undanganDetail->Nama_Pria}}" disabled>
                                <label class="form-label" for="ibu-pria">Ibu mempelai pria: </label>
                                <input type="text" id="ibu-pria"
                                       class="form-control @error('ibu-pria') is-invalid @enderror"
                                       name="ibu-pria" placeholder="cth: Susi" value="{{$undanganDetail->Ibu_Pria}}"
                                       disabled>
                                <label class="form-label" for="bapak-pria">Bapak mempelai pria: </label>
                                <input type="text" id="bapak-pria"
                                       class="form-control @error('bapak-pria') is-invalid @enderror"
                                       name="bapak-pria" placeholder="cth: Budi" value="{{$undanganDetail->Bapak_Pria}}"
                                       disabled>
                                <div class="form-label mb-2 font-italic"
                                     style="border-bottom: 1px solid black; margin-top: 24px;">
                                    Data Mempelai Wanita
                                </div>
                                <label class="form-label" for="nama-wanita">Nama mempelai wanita: </label>
                                <input type="text" id="nama-wanita"
                                       class="form-control @error('nama-wanita') is-invalid @enderror"
                                       name="nama-wanita" placeholder="cth: putri endah"
                                       value="{{$undanganDetail->Nama_Wanita}}" disabled>
                                <label class="form-label" for="ibu-wanita">Ibu mempelai wanita: </label>
                                <input type="text" id="ibu-wanita"
                                       class="form-control @error('ibu-wanita') is-invalid @enderror"
                                       name="ibu-wanita" placeholder="cth: Sinta"
                                       value="{{$undanganDetail->Ibu_Wanita}}" disabled>
                                <label class="form-label" for="bapak-wanita">Bapak mempelai wanita: </label>
                                <input type="text" id="bapak-wanita"
                                       class="form-control @error('bapak-wanita') is-invalid @enderror"
                                       name="bapak-wanita" placeholder="cth: Bayu"
                                       value="{{$undanganDetail->Bapak_Wanita}}" disabled>
                            </div>
                            <div class="col-md">
                                <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black">
                                    Akad Nikah
                                </div>
                                <label class="form-label" for="tanggal-akad">Tanggal akad: </label>
                                <input type="date" id="tanggal-akad"
                                       class="form-control @error('tanggal-akad') is-invalid @enderror"
                                       name="tanggal-akad" value="{{$undanganDetail->tanggal_akad}}" disabled>
                                <label class="form-label" for="jam-mulai-akad">Jam mulai akad: </label>
                                <input type="time" id="jam-mulai-akad"
                                       class="form-control @error('jam-mulai-akad') is-invalid @enderror"
                                       name="jam-mulai-akad" placeholder="cth: Bayu"
                                       value="{{$undanganDetail->jam_mulai_akad}}" disabled>
                                <label class="form-label" for="jam-selesai-akad">Jam selesai akad: </label>
                                <input type="time" id="jam-selesai-akad"
                                       class="form-control @error('jam-selesai-akad') is-invalid @enderror"
                                       name="jam-selesai-akad" value="{{$undanganDetail->jam_selesai_akad}}" disabled>
                                <label class="form-label" for="tempat-akad">Tempat akad: </label>
                                <input type="text" id="tempat-akad"
                                       class="form-control @error('tempat-akad') is-invalid @enderror"
                                       name="tempat-akad" placeholder="cth: Manarul ilmi"
                                       value="{{$undanganDetail->tempat_akad}}" disabled>
                            </div>
                            <div class="col-md">
                                <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black;">
                                    Resepsi
                                </div>
                                <label class="form-label" for="tanggal-resepsi">Tanggal resepsi: </label>
                                <input type="date" id="tanggal-resepsi"
                                       class="form-control @error('tanggal-resepsi') is-invalid @enderror"
                                       name="tanggal-resepsi" value="{{$undanganDetail->tanggal_resepsi}}" disabled>
                                <label class="form-label" for="jam-mulai-resepsi">Jam mulai resepsi: </label>
                                <input type="time" id="jam-mulai-resepsi"
                                       class="form-control @error('jam-mulai-resepsi') is-invalid @enderror"
                                       name="jam-mulai-resepsi" value="{{$undanganDetail->jam_mulai_resepsi}}" disabled>
                                <label class="form-label" for="jam-selesai-resepsi">Jam selesai resepsi: </label>
                                <input type="time" id="jam-selesai-resepsi"
                                       class="form-control @error('jam-selesai-resepsi') is-invalid @enderror"
                                       name="jam-selesai-resepsi" value="{{$undanganDetail->jam_selesai_resepsi}}"
                                       disabled>
                                <label class="form-label" for="tempat-resepsi">Tempat resepsi: </label>
                                <input type="text" id="tempat-resepsi"
                                       class="form-control @error('tempat-resepsi') is-invalid @enderror"
                                       name="tempat-resepsi" placeholder="cth: Manarul ilmi"
                                       value="{{$undanganDetail->tempat_resepsi}}" disabled>
                                <div class="form-label mb-2 font-italic"
                                     style="border-bottom: 1px solid black; margin-top: 24px;">
                                    Tuan Rumah
                                </div>
                                <label class="form-label" for="tuan-rumah-pernikahan">Nama Tuan Rumah : </label>
                                <input type="text" id="tuan-rumah-pernikahan"
                                       class="form-control mb-1 @error('tuan-rumah-pernikahan') is-invalid @enderror"
                                       name="tuan-rumah-pernikahan" placeholder="cth: Joni"
                                       value="{{$undangan->tuan_rumah}}" disabled>
                                <label class="form-label" for="undangan-kosong-pernikahan">Request Undangan Kosong
                                    : </label>
                                <div class="input-group mb-3">
                                    <input type="number" min="0" step="1" id="undangan-kosong-pernikahan"
                                           class="form-control @error('undangan-kosong-pernikahan') is-invalid @enderror"
                                           name="undangan-kosong-pernikahan" placeholder="cth: 5"
                                           value="{{$undangan->jumlah_undangan_kosong}}" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">lembar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col-md">
                                <label class="form-label" for="nama-acara">Nama Acara: </label>
                                <input type="text" id="nama-acara"
                                       class="form-control @error('nama-acara') is-invalid @enderror"
                                       name="nama-acara" placeholder="cth: ulang tahunkku"
                                       value="{{$undangan->nama_acara}}" disabled>
                                <label class="form-label" for="tuan-rumah-acara">Nama tuan rumah: </label>
                                <input type="text" id="tuan-rumah-acara"
                                       class="form-control @error('tuan-rumah-acara') is-invalid @enderror"
                                       name="tuan-rumah-acara" placeholder="cth: Wacilatul"
                                       value="{{$undangan->tuan_rumah}}" disabled>
                                <label class="form-label" for="tempat-acara">Tempat Acara: </label>
                                <input type="text" id="tempat-acara"
                                       class="form-control @error('tempat-acara') is-invalid @enderror"
                                       name="tempat-acara" placeholder="cth: Rumah Wacil"
                                       value="{{$undanganDetail->tempat}}" disabled>
                                <label class="form-label" for="alamat-acara">Alamat lengkap: </label>
                                <input type="text" id="alamat-acara"
                                       class="form-control @error('alamat-acara') is-invalid @enderror"
                                       name="alamat-acara" placeholder="cth: Jl Teknik Informatika VII A/01"
                                       value="{{$undanganDetail->alamat}}" disabled>
                            </div>
                            <div class="col-md">
                                <label class="form-label" for="tanggal-acara">Tanggal: </label>
                                <input type="date" id="tanggal-acara"
                                       class="form-control @error('tanggal-acara') is-invalid @enderror"
                                       name="tanggal-acara" value="{{$undanganDetail->tanggal}}" disabled>
                                <label class="form-label" for="jam-mulai-acara">Jam mulai: </label>
                                <input type="time" id="jam-mulai-acara"
                                       class="form-control @error('jam-mulai-acara') is-invalid @enderror"
                                       name="jam-mulai-acara" value="{{$undanganDetail->jam_mulai}}" disabled>
                                <label class="form-label" for="jam-selesai-acara">Jam selesai: </label>
                                <input type="time" id="jam-selesai-acara"
                                       class="form-control mb-1 @error('jam-selesai-acara') is-invalid @enderror"
                                       name="jam-selesai-acara" value="{{$undanganDetail->jam_selesai}}" disabled>
                                <label class="form-label" for="undangan-kosong-acara">Request Undangan Kosong : </label>
                                <div class="input-group mb-3">
                                    <input type="number" min="0" step="1" id="undangan-kosong-acara"
                                           class="form-control @error('undangan-kosong-acara') is-invalid @enderror"
                                           name="undangan-kosong-acara" placeholder="cth: 5"
                                           value="{{$undangan->jumlah_undangan_kosong}}" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">lembar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
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
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
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
                                <td>[Status Undangan]</td>
                                <td>
                                    <form action="{{route('delete-tamu')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="tamu" value="{{$tamu->id}}">
                                            <input type="submit" class="btn btn-danger delete-tamu" value="Hapus">
                                        </div>
                                    </form>
                                </td>
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
                    <a href="{{route('buku-tamu', $undangan->id)}}" class="btn btn-primary">Buku Tamu</a>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah-tamu">
                        Tambah Tamu
                    </button>
                </div>
            </div>

            <div class="tab-pane fade" id="bayar" role="tabpanel" aria-labelledby="bayar-tab">
                <p>
                <ol>
                    <li>Jika Sudah klik BAYAR data tidak dapat diedit</li>
                    <li>Maks bayar 1x24jam</li>
                </ol>
                </p>
                
                <!-- <button class="btn btn-success">Bayar</button> -->
                <a href="{{route('pembayaran', $undangan->id)}}" class="btn btn-danger">Bayar</a>


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
    <!-- Modal Tambah Tamu -->
    <div class="modal fade" id="tambah-tamu" tabindex="-1" role="dialog" aria-labelledby="tambah-tamu"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambah-tamu-title">Tambah Tamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('create-tamu')}}" method="post">
                    @csrf
                    <input type="hidden" name="undangan" value="{{$undangan->id}}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama-tamu">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama-tamu" name="nama-tamu"
                                   placeholder="cth: Jono Martelo">
                        </div>
                        <div class="form-group">
                            <label for="nohp-tamu">No hp</label>
                            <input type="number" min="999" class="form-control" id="nohp-tamu" name="nohp-tamu"
                                   placeholder="cth: 08219876543">
                        </div>
                        <div class="form-group">
                            <label for="alamat-tamu">Alamat</label>
                            <input type="text" class="form-control" id="alamat-tamu" name="alamat-tamu"
                                   placeholder="cth: Jl. Sebrang Kedol RT 10/05 Surabaya">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--    script  --}}
    <script>
        //script for tab navigator
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
        }

        // delete tamu
        $('.delete-tamu').click(function (e) {
            e.preventDefault();
            if (confirm('Apakah kamu yakin?')) {
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
@endsection
