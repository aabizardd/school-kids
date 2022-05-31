<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Models\Students;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'title' => 'Penerimaan Murid',
            'allMurid' => Students::all()->sortByDesc('created_at')
        ];

        return view('admin.penerimaan', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'title' => 'Detail Murid',
            'dataMurid' => Students::where('id', $id)->first()
        ];
        return view('admin.detail_murid', $data);
    }

    public function downloadFile($fileName)
    {
        return Storage::download('public/files_upload/' . $fileName);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Murid',
            'dataMurid' => Students::where('id', $id)->first()
        ];
        return view('admin.edit_murid', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $murid = Students::findOrFail($id);
        $murid->kelas = $request->input('kelas');
        $murid->nama_lengkap = $request->input('nama_lengkap');
        $murid->jenis_kelamin = $request->input('jenis_kelamin');
        $murid->tempat_lahir = $request->input('tempat_lahir');
        $murid->tanggal_lahir = $request->input('tanggal_lahir');
        $murid->nik = $request->input('nik');
        $murid->agama = $request->input('agama');
        $murid->anak_ke = $request->input('anak_ke');
        $murid->nama_ayah = $request->input('nama_ayah');
        $murid->nama_ibu = $request->input('nama_ibu');
        $murid->pekerjaan_wali = $request->input('pekerjaan');
        $murid->alamat = $request->input('alamat');
        $murid->telp_wa = $request->input('telp_wa');
        if ($request->file('surat_pernyataan')) {
            //hapus old image
            Storage::disk('local')->delete('public/files_upload/' . $murid->surat_pernyataan);
            $suratPernyataanName = time() . '-' . $request->input('nama_lengkap')  . '-SURAT_PERNYATAAN.' . $request->file('surat_pernyataan')->getClientOriginalExtension();
            $murid->surat_pernyataan = $suratPernyataanName;
        } else if ($request->file('form_pendaftaran')) {
            Storage::disk('local')->delete('public/files_upload/' . $murid->form_pendaftaran);
            $formPendaftaranName = time() . '-' . $request->input('nama_lengkap')  . '-FORM_PENDAFTARAN.' . $request->file('form_pendaftaran')->getClientOriginalExtension();
            $murid->form_pendaftaran = $formPendaftaranName;
        } else if ($request->file('lembar_kesediaan')) {
            Storage::disk('local')->delete('public/files_upload/' . $murid->lembar_kesediaan);
            $lembarKesediaanName = time() . '-' . $request->input('nama_lengkap')  . '-LEMBAR_KESEDIAAN.' . $request->file('lembar_kesediaan')->getClientOriginalExtension();
            $murid->lembar_kesediaan = $lembarKesediaanName;
        }
        if ($murid->save()) {
            if ($request->file('surat_pernyataan')) {
                $request->file('surat_pernyataan')->storeAs('public/files_upload', $suratPernyataanName);
            } else if ($request->file('form_pendaftaran')) {
                $request->file('form_pendaftaran')->storeAs('public/files_upload', $formPendaftaranName);
            } else if ($request->file('lembar_kesediaan')) {
                $request->file('lembar_kesediaan')->storeAs('public/files_upload', $lembarKesediaanName);
            }
            return redirect('/admin/detail-murid/' . $id)->with('status', 'Ubah Data Berhasil');
        } else {
            return redirect('/admin/edit-murid/' . $id)->with('status_error', 'Ubah Data Gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid = Students::findOrFail($id);
        if (Students::where('id', $id)->delete()) {
            Storage::disk('local')->delete('public/files_upload/' . $murid->surat_pernyataan);
            Storage::disk('local')->delete('public/files_upload/' . $murid->form_pendaftaran);
            Storage::disk('local')->delete('public/files_upload/' . $murid->lembar_kesediaan);
            return redirect('/admin')->with('status', 'Data berhasil dihapus');
        } else {
            return redirect('/admin')->with('status_error', 'Data gagal dihapus');
        }
    }

    public function export_excel(Request $request)
    {
        return Excel::download(new StudentsExport($request->kelas), 'siswa-' . $request->kelas . '.xlsx');
    }
}
