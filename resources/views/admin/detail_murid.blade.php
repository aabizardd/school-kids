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
                                <h5 class="float-left m-0">Detail Murid</h5>
                                <a role="button" href="/admin/delete-murid/{{ $dataMurid->id }}"
                                    class="btn btn-danger float-right mx-1">Delete</a>
                                <a role="button" class="btn btn-warning float-right mx-1"
                                    href="/admin/edit-murid/{{ $dataMurid->id }}">
                                    Ubah Data
                                </a>
                                <a role="button" href="https://wa.me/{{ $dataMurid->telp_wa }}"
                                    class="btn btn-success float-right mx-1" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                    Link to Whatsapp
                                </a>

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
                                @endif
                                <h5>Nama lengkap</h5>
                                <p class="text-bold">{{ $dataMurid->nama_lengkap }}</p>
                                <h5>Kelas</h5>
                                <p class="text-bold">{{ $dataMurid->kelas }}</p>
                                <h5>Jenis Kelamin</h5>
                                <p class="text-bold">{{ $dataMurid->jenis_kelamin }}</p>
                                <h5>Tempat, Tanggal Lahir</h5>
                                <p class="text-bold">{{ $dataMurid->tempat_lahir }},
                                    {{ $dataMurid->tanggal_lahir }}
                                </p>
                                <h5>NIK</h5>
                                <p class="text-bold">{{ $dataMurid->nik }}</p>
                                <h5>Agama</h5>
                                <p class="text-bold">{{ $dataMurid->agama }}</p>
                                <h5>Anak ke</h5>
                                <p class="text-bold">{{ $dataMurid->anak_ke }}</p>
                                <h5>Nama Ayah</h5>
                                <p class="text-bold">{{ $dataMurid->nama_ayah }}</p>
                                <h5>Nama Ibu</h5>
                                <p class="text-bold">{{ $dataMurid->nama_ibu }}</p>
                                <h5>Pekerjaan Ayah/Ibu</h5>
                                <p class="text-bold">{{ $dataMurid->pekerjaan_wali }}</p>
                                <h5>Alamat</h5>
                                <p class="text-bold">{{ $dataMurid->alamat }}</p>
                                <h5>Telepon / Whatsapp</h5>
                                <p class="text-bold">{{ $dataMurid->telp_wa }}</p>
                                <h5>Form Pendaftaran</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <p class="text-bold mb-0">{{ $dataMurid->form_pendaftaran }}</p>
                                    <a role="button"
                                        href="{{ url('/admin/download') . '/' . $dataMurid->form_pendaftaran }}"
                                        type="button" class="btn btn-outline-success mx-2">Download</a>
                                </div>
                                <h5>Lembar Kesediaan</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <p class="text-bold mb-0">{{ $dataMurid->lembar_kesediaan }}</p>
                                    <a role="button"
                                        href="{{ url('/admin/download') . '/' . $dataMurid->lembar_kesediaan }}"
                                        type="button" class="btn btn-outline-success mx-2">Download</a>
                                </div>
                                <h5>Surat Pernyataan</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <p class="text-bold mb-0">{{ $dataMurid->surat_pernyataan }}</p>
                                    <a role="button"
                                        href="{{ url('/admin/download') . '/' . $dataMurid->surat_pernyataan }}"
                                        type="button" class="btn btn-outline-success mx-2">Download</a>
                                </div>
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
