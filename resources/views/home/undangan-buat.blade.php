@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="">
            {{--        Pilih Jenis Acara   --}}
            <div class="tab">
                <h1 style="text-align: center">Pilih Jenis Acara</h1>
                <div class="mb-4" style="text-align: center">
                    Apa jenis acara untuk undangan mu?
                </div>

                <div class="row">
                    <div class="col-md">
                        <label class="card" for="jenis-acara-1">
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
                                    <input class="form-check-input" id="jenis-acara-1" type="radio"
                                           name="jenisacara" value="pernikahan">
                                    <label class="form-check-label" for="jenis-acara-1">
                                        Pilih Pernikahan
                                    </label>
                                </p>
                            </div>
                        </label>
                    </div>
                    <div class="col-md">
                        <label class="card" for="jenis-acara-2">
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
                                    <input class="form-check-input" id="jenis-acara-2" type="radio"
                                           name="jenisacara" value="custom">
                                    <label class="form-check-label" for="jenis-acara-2">
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
            {{--        Isi Acara    --}}
            <div class="tab tab-custom">
                <h1 style="text-align: center">Silakan Isi Acara Custom Kamu</h1>
                <div class="mb-4" style="text-align: center">
                    Anda telah memilih acara Custom, silakan melengkapi data acara yang Anda akan adakan.
                </div>
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
            {{--        Pilih layanan    --}}
            <div class="tab">
                <h1 style="text-align: center">Silakan Pilih Paket Layanan</h1>
                <div class="mb-4" style="text-align: center">
                    Nduwe Gawe menawarkan beberapa paket layanan undangan online yang dapat Anda pilih sesuai dengan
                    kebutuhan Anda.
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header" style="text-align: center;">
                                Paket 1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header" style="text-align: center;">
                                Paket 2
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header" style="text-align: center;">
                                Paket 3
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header" style="text-align: center;">
                                Paket 4
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
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
            var p = document.getElementsByName('jenisacara')[0].checked;


            console.log(currentTab)
            console.log(p);

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
            var p = document.getElementsByName('jenisacara')[0].checked;

            if (currentTab == 3 && p == true && n == -1){
                n=n-1;
            }else if (p == true && currentTab == 1 && n != -1){
                n=n+1;
            }
            if (p == false && currentTab == 2 && n == -1){
                n = n-1;
            }else if (p == false && currentTab == 0){
                n=n+1;
            }

            console.log('n: ' + n)
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                // document.getElementById("regForm").submit();
                // return false;
                window.location = "{{ route('undangan-detail') }}";
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
