@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="">
            {{--        Pilih Jenis Acara   --}}
            <div class="tab">
                <h1>Pilih Jenis Acara</h1>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Pernikahan
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-acara-1" type="radio"
                                           name="jenis-acara" value="pernikahan">
                                    <label class="form-check-label" for="jenis-acara-1">
                                        Pilih
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Custom
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-acara-2" type="radio"
                                           name="jenis-acara" value="custom">
                                    <label class="form-check-label" for="jenis-acara-2">
                                        Pilih
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        Pilih desain    --}}
            <div class="tab">
                <h1>Pilih desain</h1>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Template 1
                            </div>
                            <img src="{{ asset('img/undangan-sample01.jpg') }}" style="max-width: 303px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-acara-1" type="radio"
                                           name="jenis-acara" value="pernikahan">
                                    <label class="form-check-label" for="jenis-acara-1">
                                        Pilih
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Template 1
                            </div>
                            <img src="{{ asset('img/undangan-sample01.jpg') }}" style="max-width: 303px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-acara-1" type="radio"
                                           name="jenis-acara" value="pernikahan">
                                    <label class="form-check-label" for="jenis-acara-1">
                                        Pilih
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Template 1
                            </div>
                            <img src="{{ asset('img/undangan-sample01.jpg') }}" style="max-width: 303px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <p class="card-text" style="margin-left: 2rem">
                                    <input class="form-check-input" id="jenis-acara-1" type="radio"
                                           name="jenis-acara" value="pernikahan">
                                    <label class="form-check-label" for="jenis-acara-1">
                                        Pilih
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        Isi Acara Pernikahan    --}}
            <div class="tab">
                <h1>Isi Acara Pernikahan</h1>
                <div class="row">
                    <div class="col-md">
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
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="namawanita">Nama mempelai wanita: </label>
                        <input type="text" id="namawanita" class="form-control @error('namawanita') is-invalid @enderror"
                               name="namawanita" placeholder="cth: putri endah">
                        <label class="form-label" for="ibuwanita">Ibu mempelai wanita: </label>
                        <input type="text" id="ibuwanita" class="form-control @error('ibuwanita') is-invalid @enderror"
                               name="ibuwanita" placeholder="cth: Sinta">
                        <label class="form-label" for="bapakwanita">Bapak mempelai wanita: </label>
                        <input type="text" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Bayu">
                        <label class="form-label" for="bapakwanita">Tanggal akad: </label>
                        <input type="date" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Bayu">
                        <label class="form-label" for="bapakwanita">Jam mulai akad: </label>
                        <input type="time" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Bayu">
                        <label class="form-label" for="bapakwanita">Jam selesai akad: </label>
                        <input type="time" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Bayu">
                        <label class="form-label" for="bapakwanita">Tempat akad: </label>
                        <input type="text" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Manarul ilmi">
                    </div>
                    <div class="col-md">
                        <label class="form-label" for="namapria">Tanggal resepsi: </label>
                        <input type="date" id="namapria" class="form-control @error('namapria') is-invalid @enderror"
                               name="namapria" placeholder="cth: aldo hendro">
                        <label class="form-label" for="bapakwanita">Jam mulai resepsi: </label>
                        <input type="time" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Bayu">
                        <label class="form-label" for="bapakwanita">Jam selesai resepsi: </label>
                        <input type="time" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Bayu">
                        <label class="form-label" for="bapakwanita">Tempat resepsi: </label>
                        <input type="text" id="bapakwanita" class="form-control @error('bapakwanita') is-invalid @enderror"
                               name="bapakwanita" placeholder="cth: Manarul ilmi">
                    </div>
                </div>
            </div>
            {{--        Isi Acara    --}}
            <div class="tab">
                <h1>Isi Acara (Custom)</h1>
                <div class="container">
                    <label class="form-label" for="namaAcara">Nama Acara: </label>
                    <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                           name="namaAcara" placeholder="cth: ulang tahunkku">
                    <label class="form-label" for="namaAcara">Tempat: </label>
                    <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                           name="namaAcara" placeholder="cth: Masjid Pondok Indah">
                    <label class="form-label" for="namaAcara">Tanggal: </label>
                    <input type="date" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                           name="namaAcara" placeholder="cth: ulang tahunkku">
                    <label class="form-label" for="namaAcara">Jam mulai: </label>
                    <input type="time" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                           name="namaAcara" placeholder="cth: ulang tahunkku">
                    <label class="form-label" for="namaAcara">Jam selesai: </label>
                    <input type="time" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                           name="namaAcara" placeholder="cth: ulang tahunkku">
                    <label class="form-label" for="namaAcara">Nama tuan rumah: </label>
                    <input type="text" id="namaAcara" class="form-control @error('namaAcara') is-invalid @enderror"
                           name="namaAcara" placeholder="cth: Wacilatul">
                </div>
            </div>
            {{--        Pilih layanan    --}}
            <div class="tab">
                <h1>Pilih Layanan</h1>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Paket 1
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Paket 2
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
                                Paket 3
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Deskripsi: </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="card">
                            <div class="card-header">
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

            <div style="float:right;">
                <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Previous
                </button>
                <button type="button" id="nextBtn" class="btn btn-primary" onclick="nextPrev(1)">Next</button>
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
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";

            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
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
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                // document.getElementById("regForm").submit();
                // return false;
                window.location = "{{ route('tamu-daftar') }}";
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
