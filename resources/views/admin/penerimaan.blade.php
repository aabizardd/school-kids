@extends('admin.layouts.main')
@section('addHeader')
    <!-- DataTables -->
    <link rel="stylesheet" href="assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Penerimaan Murid Baru</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <a role="button" class="btn btn-success" href="/admin/export-excel/TK-A">
                            Export kelas TK-A
                        </a>
                        <a role="button" class="btn btn-success" href="/admin/export-excel/TK-B">
                            Export kelas TK-B
                        </a>
                        <a role="button" class="btn btn-success" href="/admin/export-excel/Playgroup">
                            Export kelas Playgroup
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @elseif (session('status_error'))
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('status_error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <table id="table-murid" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allMurid as $murid)
                                    <tr>
                                        <td>{{ $murid->nama_lengkap }}</td>
                                        <td>{{ $murid->jenis_kelamin }}</td>
                                        <td>{{ $murid->kelas }}</td>
                                        <td>{{ $murid->tanggal_lahir }}</td>
                                        <td>
                                            <a role="button" href="/admin/detail-murid/{{ $murid->id }}" type="button"
                                                class="btn btn-info">Detail</a>
                                            <a role="button" href="/admin/edit-murid/{{ $murid->id }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <a role="button" href="https://wa.me/{{ $murid->telp_wa }}"
                                                class="btn btn-success" target="_blank">
                                                <i class="fab fa-whatsapp"></i>
                                                Link to Whatsapp
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('addScript')
    <!-- Bootstrap 4 -->
    <script src="assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets_admin/plugins/jszip/jszip.min.js"></script>
    <script src="assets_admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets_admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#table-murid").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            })
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
