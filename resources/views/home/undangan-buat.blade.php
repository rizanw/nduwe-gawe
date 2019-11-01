@extends('layouts.app')

@section('content')

    <div class="container">
        <form id="form-undangan" action="{{route('create-undangan')}}" method="post">
            @csrf
            {{--        Pilih Jenis Acara   --}}
            <div class="tab">
                <h1 style="text-align: center">Pilih Jenis Acara</h1>
                <div class="mb-4" style="text-align: center">
                    Apa jenis acara untuk undangan mu?
                </div>

                <div class="row">
                    <div class="col-md">
                        <label class="card" for="jenis-undangan-1">
                            <div class="card-header"
                                 style="text-align: center; font-weight: bold; background-color: #ffa3a0">
                                Pernikahan
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Memilih pernikahan, jika acara yang ingin Anda adakan seperti akad nikah
                                    dan resepsi.
                                </p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-undangan-1" type="radio"
                                           name="jenis-undangan" value="pernikahan">
                                    <label class="form-check-label" for="jenis-undangan-1">
                                        Pilih Pernikahan
                                    </label>
                                </p>
                            </div>
                        </label>
                    </div>
                    <div class="col-md">
                        <label class="card" for="jenis-undangan-2">
                            <div class="card-header"
                                 style="text-align: center; font-weight: bold; background-color: #c1c1c1">
                                Custom
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Memilih Custom, jika acara yang akan Anda adakan adalah seperti ulang tahun, khitan,
                                    tasyakurun, dan pesta lainnya.
                                </p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-undangan-2" type="radio"
                                           name="jenis-undangan" value="custom">
                                    <label class="form-check-label" for="jenis-undangan-2">
                                        Pilih Custom
                                    </label>
                                </p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            {{--        Pilih desain    --}}
            {{--            <div class="tab">--}}
            {{--                <h1 style="text-align: center">Pilih Desain Undangan</h1>--}}
            {{--                <div class="mb-4" style="text-align: center">--}}
            {{--                    Berikut adalah pilihan desain modern yang sesuai untuk acara Anda..--}}
            {{--                </div>--}}
            {{--                <div class="row">--}}
            {{--                    <div class="col-md">--}}
            {{--                        <label class="card" for="desain01">--}}
            {{--                            <img src="{{ asset('img/undangan-sample01.jpg') }}" class="card-img-top" alt="desain nikah">--}}
            {{--                            <div class="card-body">--}}
            {{--                                <input class="form-check-input" id="desain01" type="radio"--}}
            {{--                                       name="desainundangan" value="desain01">--}}
            {{--                                <label class="form-check-label" for="desain01">--}}
            {{--                                    Pilih--}}
            {{--                                </label>--}}
            {{--                            </div>--}}
            {{--                            <div class="card-footer">--}}
            {{--                                <h5 class="card-title">Love Is</h5>--}}
            {{--                            </div>--}}
            {{--                        </label>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-md">--}}
            {{--                        <label class="card" for="desain02">--}}
            {{--                            <img src="{{ asset('img/undangan-sample01.jpg') }}" class="card-img-top" alt="desain nikah">--}}
            {{--                            <div class="card-body">--}}
            {{--                                <input class="form-check-input" id="desain02" type="radio"--}}
            {{--                                       name="desainundangan" value="desain02">--}}
            {{--                                <label class="form-check-label" for="desain02">--}}
            {{--                                    Pilih--}}
            {{--                                </label>--}}
            {{--                            </div>--}}
            {{--                            <div class="card-footer">--}}
            {{--                                <h5 class="card-title">Love Is</h5>--}}
            {{--                            </div>--}}
            {{--                        </label>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-md">--}}
            {{--                        <label class="card" for="desain03">--}}
            {{--                            <img src="{{ asset('img/undangan-sample01.jpg') }}" class="card-img-top" alt="desain nikah">--}}
            {{--                            <div class="card-body">--}}
            {{--                                <input class="form-check-input" id="desain03" type="radio"--}}
            {{--                                       name="desainundangan" value="desain03">--}}
            {{--                                <label class="form-check-label" for="desain03">--}}
            {{--                                    Pilih--}}
            {{--                                </label>--}}
            {{--                            </div>--}}
            {{--                            <div class="card-footer">--}}
            {{--                                <h5 class="card-title">Love Is</h5>--}}
            {{--                            </div>--}}
            {{--                        </label>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--        Isi Acara Pernikahan    --}}
            <div class="tab tab-nikah">
                <h1 style="text-align: center">Silakan Isi Acara Pernikahan Kamu</h1>
                <div class="mb-4" style="text-align: center">
                    Anda telah memilih acara Pernikahan, silakan melengkapi data acara Pernikahan Anda.
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black">
                            Data Mempelai Pria
                        </div>
                        <label class="form-label" for="nama-pria">Nama mempelai pria: </label>
                        <input type="text" id="nama-pria" class="form-control @error('nama-pria') is-invalid @enderror"
                               name="nama-pria" placeholder="cth: aldo hendro">
                        <label class="form-label" for="ibu-pria">Ibu mempelai pria: </label>
                        <input type="text" id="ibu-pria" class="form-control @error('ibu-pria') is-invalid @enderror"
                               name="ibu-pria" placeholder="cth: Susi">
                        <label class="form-label" for="bapak-pria">Bapak mempelai pria: </label>
                        <input type="text" id="bapak-pria"
                               class="form-control @error('bapak-pria') is-invalid @enderror"
                               name="bapak-pria" placeholder="cth: Budi">
                        <div class="form-label mb-2 font-italic"
                             style="border-bottom: 1px solid black; margin-top: 24px;">
                            Data Mempelai Wanita
                        </div>
                        <label class="form-label" for="nama-wanita">Nama mempelai wanita: </label>
                        <input type="text" id="nama-wanita"
                               class="form-control @error('nama-wanita') is-invalid @enderror"
                               name="nama-wanita" placeholder="cth: putri endah">
                        <label class="form-label" for="ibu-wanita">Ibu mempelai wanita: </label>
                        <input type="text" id="ibu-wanita"
                               class="form-control @error('ibu-wanita') is-invalid @enderror"
                               name="ibu-wanita" placeholder="cth: Sinta">
                        <label class="form-label" for="bapak-wanita">Bapak mempelai wanita: </label>
                        <input type="text" id="bapak-wanita"
                               class="form-control @error('bapak-wanita') is-invalid @enderror"
                               name="bapak-wanita" placeholder="cth: Bayu">
                    </div>
                    <div class="col-md">
                        <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black">
                            Akad Nikah
                        </div>
                        <label class="form-label" for="tanggal-akad">Tanggal akad: </label>
                        <input type="date" id="tanggal-akad"
                               class="form-control @error('tanggal-akad') is-invalid @enderror"
                               name="tanggal-akad" placeholder="cth: Bayu">
                        <label class="form-label" for="jam-mulai-akad">Jam mulai akad: </label>
                        <input type="time" id="jam-mulai-akad"
                               class="form-control @error('jam-mulai-akad') is-invalid @enderror"
                               name="jam-mulai-akad" placeholder="cth: Bayu">
                        <label class="form-label" for="jam-selesai-akad">Jam selesai akad: </label>
                        <input type="time" id="jam-selesai-akad"
                               class="form-control @error('jam-selesai-akad') is-invalid @enderror"
                               name="jam-selesai-akad" placeholder="cth: Bayu">
                        <label class="form-label" for="tempat-akad">Tempat akad: </label>
                        <input type="text" id="tempat-akad"
                               class="form-control @error('tempat-akad') is-invalid @enderror"
                               name="tempat-akad" placeholder="cth: Manarul ilmi">
                    </div>
                    <div class="col-md">
                        <div class="form-label mb-2 font-italic" style="border-bottom: 1px solid black;">
                            Resepsi
                        </div>
                        <label class="form-label" for="tanggal-resepsi">Tanggal resepsi: </label>
                        <input type="date" id="tanggal-resepsi"
                               class="form-control @error('tanggal-resepsi') is-invalid @enderror"
                               name="tanggal-resepsi">
                        <label class="form-label" for="jam-mulai-resepsi">Jam mulai resepsi: </label>
                        <input type="time" id="jam-mulai-resepsi"
                               class="form-control @error('jam-mulai-resepsi') is-invalid @enderror"
                               name="jam-mulai-resepsi">
                        <label class="form-label" for="jam-selesai-resepsi">Jam selesai resepsi: </label>
                        <input type="time" id="jam-selesai-resepsi"
                               class="form-control @error('jam-selesai-resepsi') is-invalid @enderror"
                               name="jam-selesai-resepsi">
                        <label class="form-label" for="tempat-resepsi">Tempat resepsi: </label>
                        <input type="text" id="tempat-resepsi"
                               class="form-control @error('tempat-resepsi') is-invalid @enderror"
                               name="tempat-resepsi" placeholder="cth: Manarul ilmi">
                        <div class="form-label mb-2 font-italic"
                             style="border-bottom: 1px solid black; margin-top: 24px;">
                            Tuan Rumah
                        </div>
                        <label class="form-label" for="tuan-rumah-pernikahan">Nama Tuan Rumah : </label>
                        <input type="text" id="tuan-rumah-pernikahan"
                               class="form-control mb-1 @error('tuan-rumah-pernikahan') is-invalid @enderror"
                               name="tuan-rumah-pernikahan" placeholder="cth: Joni">
                        <label class="form-label" for="undangan-kosong-pernikahan">Request Undangan Kosong : </label>
                        <div class="input-group mb-3">
                            <input type="number" min="0" step="1" id="undangan-kosong-pernikahan"
                                   class="form-control @error('undangan-kosong-pernikahan') is-invalid @enderror"
                                   name="undangan-kosong-pernikahan" placeholder="cth: 5">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">lembar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        Isi Acara Custom    --}}
            <div class="tab tab-custom">
                <h1 style="text-align: center">Silakan Isi Acara Custom Kamu</h1>
                <div class="mb-4" style="text-align: center">
                    Anda telah memilih acara Custom, silakan melengkapi data acara yang Anda akan adakan.
                </div>
                <div class="row">
                    <div class="col-md">
                        <label class="form-label" for="nama-acara">Nama Acara: </label>
                        <input type="text" id="nama-acara"
                               class="form-control @error('nama-acara') is-invalid @enderror"
                               name="nama-acara" placeholder="cth: ulang tahunkku">
                        <label class="form-label" for="tuan-rumah-acara">Nama tuan rumah: </label>
                        <input type="text" id="tuan-rumah-acara"
                               class="form-control @error('tuan-rumah-acara') is-invalid @enderror"
                               name="tuan-rumah-acara" placeholder="cth: Wacilatul">
                        <label class="form-label" for="tempat-acara">Tempat Acara: </label>
                        <input type="text" id="tempat-acara"
                               class="form-control @error('tempat-acara') is-invalid @enderror"
                               name="tempat-acara" placeholder="cth: Rumah Wacil">
                        <label class="form-label" for="alamat-acara">Alamat lengkap: </label>
                        <input type="text" id="alamat-acara"
                               class="form-control @error('alamat-acara') is-invalid @enderror"
                               name="alamat-acara" placeholder="cth: Jl Teknik Informatika VII A/01">
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="tanggal-acara">Tanggal: </label>
                        <input type="date" id="tanggal-acara"
                               class="form-control @error('tanggal-acara') is-invalid @enderror"
                               name="tanggal-acara">
                        <label class="form-label" for="jam-mulai-acara">Jam mulai: </label>
                        <input type="time" id="jam-mulai-acara"
                               class="form-control @error('jam-mulai-acara') is-invalid @enderror"
                               name="jam-mulai-acara">
                        <label class="form-label" for="jam-selesai-acara">Jam selesai: </label>
                        <input type="time" id="jam-selesai-acara"
                               class="form-control mb-1 @error('jam-selesai-acara') is-invalid @enderror"
                               name="jam-selesai-acara">
                        <label class="form-label" for="undangan-kosong-acara">Request Undangan Kosong : </label>
                        <div class="input-group mb-3">
                            <input type="number" min="0" step="1" id="undangan-kosong-acara"
                                   class="form-control @error('undangan-kosong-acara') is-invalid @enderror"
                                   name="undangan-kosong-acara" placeholder="cth: 5">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">lembar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        Pilih layanan    --}}
            <div class="tab">
                <h1 style="text-align: center">Silakan Pilih Paket Layanan</h1>
                <div class="mb-4" style="text-align: center">
                    Nduwe Gawe menawarkan beberapa paket layanan undangan online yang dapat Anda pilih sesuai dengan
                    kebutuhan Anda.
                </div>
                <div class="row">
                    <div class="col-md">
                        <label class="card" for="paket-1">
                            <div class="card-header" style="text-align: center;">
                                Paket 1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="paket-1" type="radio"
                                           name="paket" value="1">
                                    <label class="form-check-label" for="paket-1">
                                        Pilih Paket 1
                                    </label>
                                </p>
                            </div>
                        </label>
                    </div>
                    <div class="col-md">
                        <label class="card" for="paket-2">
                            <div class="card-header" style="text-align: center;">
                                Paket 2
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="paket-2" type="radio"
                                           name="paket" value="2">
                                    <label class="form-check-label" for="paket-2">
                                        Pilih Paket 2
                                    </label>
                                </p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row" style="float:right; margin-top: 17px;">
                <div class="col-md">
                    <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">< Kembali
                    </button>
                    <button type="button" id="nextBtn" class="btn btn-gold" onclick="nextPrev(1)">Selanjutnya ></button>
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>


@endsection

@section('script')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            var p = document.getElementsByName('jenis-undangan')[0].checked;

            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Simpan";

            } else {
                document.getElementById("nextBtn").innerHTML = "Selanjutnya >";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            // if (n == 1 && !validateForm()) return false;

            // Hide the current tab:
            x[currentTab].style.display = "none";
            var p = document.getElementsByName('jenis-undangan')[0].checked;

            if (currentTab == 3 && p == true && n == -1) {
                n = n - 1;
            } else if (p == true && currentTab == 1 && n != -1) {
                n = n + 1;
            }
            if (p == false && currentTab == 2 && n == -1) {
                n = n - 1;
            } else if (p == false && currentTab == 0) {
                n = n + 1;
            }

            console.log('n: ' + n)
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("form-undangan").submit();
                // return false;
                {{--window.location = "{{ route('undangan-detail') }}";--}}
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
@endsection
