<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Nduwe Gawe') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
{{--    <script src="{{ asset('js/qr-scanner.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/qr-scanner-worker.min.js') }}"></script>--}}
</head>
<body>
<div><p id="text"></p></div>
<video muted="" playsinline="" id="qr-video" style="transform: scaleX(-1);" width="100%" height="100%"></video>
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
</body>
</html>
