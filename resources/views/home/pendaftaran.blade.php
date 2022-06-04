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
                    <div class="col-lg-12">
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
