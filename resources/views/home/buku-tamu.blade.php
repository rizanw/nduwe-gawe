@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: inline">
            <h1 style="display: inline-block;">Daftar Tamu : <a href="{{route('undangan-detail', $undangan->id)}}">{{$undangan->nama_acara}}</a></h1>
        </div>
            <div class="text-right">
                <button type="button" class="btn btn-gold ml-1 mr-1 mb-2" data-toggle="modal" data-target="#QRModal">
                    <i class="fas fa-qrcode"></i> Scan QR
                </button>
                <a href="{{ route('undangan-buat') }}"  class="btn btn-gold ml-1 mr-1 mb-2 disabled" aria-disabled="true"><i class="fas fa-file-download"></i> Unduh</a>
            </div>
        <div class="small align-text-bottom" style="color: #555">
            Berikut daftar tamu undangan
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($tamus as $tamu)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                            {{$tamu->nama}}
                        </td>
                        <td>{{$tamu->no_hp}}</td>
                        <td>{{$tamu->alamat}}</td>
                        <td>
                            {{$tamu->status->nama}}
                        </td>
                        <td>
                            [jam hadir tamu]
                        </td>
                        <td>
                            @if($tamu->status_id >= 2 && $tamu->status_id <= 6)
                                <a href="{{route('undangan-detail', $tamu->id)}}" class="btn btn-primary">Hadir</a>
                            @elseif($tamu->status_id == 1)
                                <a href="{{route('undangan-detail', $tamu->id)}}" class="btn btn-danger disabled" aria-disabled="true">Hapus</a>
                            @elseif($tamu->status_id >= 7 && $tamu->status_id <=8)
                                <a href="{{route('undangan-detail', $tamu->id)}}" class="btn btn-primary disabled" aria-disabled="true">Hadir</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                @if($tamus->isEmpty())
                    <tr>
                        <td colspan="7" style="text-align: center; font-style: italic">Tamu belum ditambahkan.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="QRModal" tabindex="-1" role="dialog" aria-labelledby="QRModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Scan QR Tamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video muted="" playsinline="" id="qr-video" style="transform: scaleX(-1);" width="100%" height="100%"></video>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="module">
        import QrScanner from "{{asset('js/qr-scanner.min.js')}}";
        QrScanner.WORKER_PATH = "{{asset('js/qr-scanner-worker.min.js')}}";

        const video = document.getElementById("qr-video");
        const qrScanArea = $(".show_qrscan");
        const hashingProcess = $(".hashing_process");
        const noCameraAlert = $(".nocamera_alert");
        const inactiveAlert = $(".inactive_alert");
        function presensi(data) {
            qrScanArea.hide();
            hashingProcess.show();
            $.ajax({
                type: "POST",
                url: "/kehadiran-mahasiswa/qr-scan/store",
                data: {qrcode: data},
                dataType: "json",
                success: function (response) {
                    if (response.status === '200') {
                        Swal.fire({
                            type: 'success',
                            title: 'Sukses',
                            text: response.message,
                            footer: 'Klik tombol&nbsp;<strong>OK</strong>&nbsp;untuk beralih ke halaman tatap muka.',
                        }).then((result) => {
                            if (result.value) {
                                hashingProcess.hide();
                                qrScanArea.show();
                                window.location = "https://presensi.its.ac.id/tatap-muka/" + response.kelas;
                            }
                        });
                    } else {
                        Swal.fire({
                            type: 'error',
                            title: 'Kesalahan',
                            text: response.message,
                        }).then((result) => {
                            if (result.value) {
                                scan();
                                hashingProcess.hide();
                                qrScanArea.show();
                            }
                        });
                    }
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
        function scan() {
            const scanner = new QrScanner(video, result => {
                console.log("sedang scanning: ");
                console.log(result);
                // scanner.destroy();
                // presensi(result);
                // $('#text').innerHTML(result);
                console.log("sedang scanning: ");
                console.log(result);
            });
            scanner.start();
        }
        QrScanner.hasCamera().then(response => {
            if (!response) {
                noCameraAlert.show();
            } else {
                qrScanArea.show();
            }
        });
        scan();
    </script>
@endsection
