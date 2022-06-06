@extends('layouts.main')
@section('content')
    <div class="container py-3">
        <div class="row">
            <h1>Pendaftaran Siswa</h1>
            <div class="col-lg-12 text-center">
                <div style="width: 60%" class="mx-auto">
                    <h3>Kelas</h3>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" interval="15000"
                        pause="hover">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="/images/tk-a.png" alt="TK-A">
                                <div class="carousel-caption">
                                    <h3>Kelas TK-A</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="/images/tk-b.png" alt="TK-B">
                                <div class="carousel-caption">
                                    <h3>Kelas TK-B</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="/images/play-group.png" alt="PLAY-GROUP">
                                <div class="carousel-caption">
                                    <h3>Kelas Playgroup</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <p class="my-3"><b>Formulir : Rp. 100,000</b></p>
            </div>
            @if (session('status'))
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @elseif (session('status_error'))
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        {{ session('status_error') }}
                    </div>
                </div>
            @endif
            <div class="col-lg-12">
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-10">
                        <label for="kelas">Pilih Kelas</label>
                        <select id="kelas" name="kelas" class="form-control" required>
                            <option selected disabled>Pilih Kelas</option>
                            <option value="1">TK-A</option>
                            <option value="2">TK-B</option>
                            <option value="3">Playgroup</option>
                        </select>
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                            placeholder="Nama Lengkap" required>

                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>

                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                            placeholder="Tempat Lahir" required>

                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>

                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" required>

                        <label for="agama">Agama</label>
                        <select id="agama" name="agama" class="form-control" required>
                            <option selected disabled>Pilih Agama</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen Protestan</option>
                            <option value="3">Kristen Katolik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                            <option value="6">Konghucu</option>
                        </select>

                        <label for="anak_ke">Anak ke</label>
                        <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak Ke"
                            required>
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah"
                            required>
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu"
                            required>
                        <label for="pekerjaan">Pekerjaan Ayah/Ibu</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                            placeholder="Pekerjaan Ayah/Ibu" required>
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        {{-- <div id="map" style="width: 100%"></div> --}}
                        <iframe id="maps" width="400" height="300" style="border:0" loading="lazy" allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade" hidden>
                        </iframe>
                        <label for="telp_wa">No. Telp WA</label>
                        <input type="number" class="form-control" id="telp_wa" name="telp_wa" placeholder="No. Telp WA"
                            required>
                        <label for="form_pendaftaran">Upload Berkas Form Pendaftaran</label>
                        <input type="file" class="form-control" id="form_pendaftaran" name="form_pendaftaran" required>
                        <label for="lembar_kesediaan">Upload Berkas Lembar Kesediaan</label>
                        <input type="file" class="form-control" id="lembar_kesediaan" name="lembar_kesediaan" required>
                        <label for="surat_pernyataan">Upload Berkas Surat Pernyataan</label>
                        <input type="file" class="form-control" id="surat_pernyataan" name="surat_pernyataan" required>
                    </div>
                    <div class="col-lg-12 my-3">
                        <button type="submit" class="btn btn-primary">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end main-content -->
@endsection

@section('addScript')
    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnzOiGhaW_G5QyGO_fugRXe5OV3UxFau8&callback=initAutocomplete&libraries=places&v=weekly"
        defer></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script>
        $("#alamat").on("input", function() {
            var address = $(this).val()
            // Print entered value in a div box
            $("#maps").show()
            $("#maps").attr('src', `https://www.google.com/maps/embed/v1/place?key=AIzaSyAnzOiGhaW_G5QyGO_fugRXe5OV3UxFau8
                    &q=${address}`)
        });
    </script>

    {{-- <script>
        function initAutocomplete() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13,
                mapTypeId: "roadmap",
            });
            // Create the search box and link it to the UI element.
            const input = document.getElementById("alamat");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        window.initAutocomplete = initAutocomplete;
    </script> --}}
@endsection
