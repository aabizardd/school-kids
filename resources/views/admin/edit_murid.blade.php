@extends('admin.layouts.main')
@section('addHeader')
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 py-3">
                        <div class="card">
                            <div class="card-header">
                                <h5>Ubah Data Murid</h5>
                            </div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="col-lg-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('status') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                @elseif (session('status_error'))
                                    <div class="col-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('status_error') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                                <form action="/admin/update-murid/{{ $dataMurid->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h5>Nama lengkap</h5>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Nama Lengkap" value="{{ $dataMurid->nama_lengkap }}" required>
                                    <h5>Kelas</h5>
                                    <select id="kelas" name="kelas" class="form-control" required>
                                        <option selected disabled>Pilih Kelas</option>
                                        <option value="1" {{ $dataMurid->kelas === 'TK-A' ? 'selected' : '' }}>TK-A
                                        </option>
                                        <option value="2" {{ $dataMurid->kelas === 'TK-B' ? 'selected' : '' }}>TK-B
                                        </option>
                                        <option value="3" {{ $dataMurid->kelas === 'Playgroup' ? 'selected' : '' }}>
                                            Playgroup
                                        </option>
                                    </select>
                                    <h5>Jenis Kelamin</h5>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="1"
                                            {{ $dataMurid->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-Laki</option>
                                        <option value="2"
                                            {{ $dataMurid->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                    <h5>Tempat Lahir</h5>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir" value="{{ $dataMurid->tempat_lahir }}" required>
                                    <h5>Tanggal Lahir</h5>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                        value="{{ $dataMurid->tanggal_lahir }}" required>
                                    <h5>NIK</h5>
                                    <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK"
                                        value="{{ $dataMurid->nik }}" required>
                                    <p class="text-bold"></p>
                                    <h5>Agama</h5>
                                    <select id="agama" name="agama" class="form-control" required>
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="1" {{ $dataMurid->agama === 'Islam' ? 'selected' : '' }}>Islam
                                        </option>
                                        <option value="2"
                                            {{ $dataMurid->agama === 'Kristen Protestan' ? 'selected' : '' }}>Kristen
                                            Protestan</option>
                                        <option value="3"
                                            {{ $dataMurid->agama === 'Kristen Katolik' ? 'selected' : '' }}>Kristen
                                            Katolik</option>
                                        <option value="4" {{ $dataMurid->agama === 'Hindu' ? 'selected' : '' }}>Hindu
                                        </option>
                                        <option value="5" {{ $dataMurid->agama === 'Budha' ? 'selected' : '' }}>Budha
                                        </option>
                                        <option value="6" {{ $dataMurid->agama === 'Konghucu' ? 'selected' : '' }}>
                                            Konghucu
                                        </option>
                                    </select>
                                    <h5>Anak ke</h5>
                                    <input type="number" class="form-control" id="anak_ke" name="anak_ke"
                                        placeholder="Anak Ke" value="{{ $dataMurid->anak_ke }}" required>
                                    <h5>Nama Ayah</h5>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                        placeholder="Nama Ayah" value="{{ $dataMurid->nama_ayah }}" required>
                                    <h5>Nama Ibu</h5>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                        placeholder="Nama Ibu" value="{{ $dataMurid->nama_ibu }}" required>
                                    <h5>Pekerjaan Ayah/Ibu</h5>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                        placeholder="Pekerjaan Ayah/Ibu" value="{{ $dataMurid->pekerjaan_wali }}"
                                        required>
                                    <h5>Alamat</h5>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                                        value="{{ $dataMurid->alamat }}" required>
                                    <h5>Telepon / Whatsapp</h5>
                                    <input type="number" class="form-control" id="telp_wa" name="telp_wa"
                                        placeholder="No. Telp WA" value="{{ $dataMurid->telp_wa }}" required>
                                    <h5>Form Pendaftaran</h5>
                                    <div class=" d-flex align-items-center mb-2">
                                        <p class="text-bold mb-0">{{ $dataMurid->form_pendaftaran }}</p>
                                        <a role="button"
                                            href="{{ url('/admin/download') . '/' . $dataMurid->form_pendaftaran }}"
                                            type="button" class="btn btn-outline-success mx-2">Download</a>
                                    </div>
                                    <input type="file" class="form-control" id="form_pendaftaran" name="form_pendaftaran">
                                    <h5>Lembar Kesediaan</h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <p class="text-bold mb-0">{{ $dataMurid->lembar_kesediaan }}</p>
                                        <a role="button"
                                            href="{{ url('/admin/download') . '/' . $dataMurid->lembar_kesediaan }}"
                                            type="button" class="btn btn-outline-success mx-2">Download</a>
                                    </div>
                                    <input type="file" class="form-control" id="lembar_kesediaan" name="lembar_kesediaan">
                                    <h5>Surat Pernyataan</h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <p class="text-bold mb-0">{{ $dataMurid->surat_pernyataan }}</p>
                                        <a role="button"
                                            href="{{ url('/admin/download') . '/' . $dataMurid->surat_pernyataan }}"
                                            type="button" class="btn btn-outline-success mx-2">Download</a>
                                    </div>
                                    <input type="file" class="form-control" id="surat_pernyataan" name="surat_pernyataan">
                                    <div>
                                        <button type="submit" class="btn btn-primary my-3">
                                            Update data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('addScript')
@endsection
