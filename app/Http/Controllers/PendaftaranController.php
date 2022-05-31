<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classes;
use App\Models\Learning;
use App\Models\Students;

class PendaftaranController extends Controller
{
    public function index()
    {

        $metode_pembelajran = Learning::get();
        $kelas = Classes::get();

        $data = [
            'title' => 'Pendaftaran Siswa',
            'classes' => $kelas,
        ];

        return view('home.pendaftaran', $data);
    }

    public function store(Request $request)
    {
        $suratPernyataanName = time() . '-' . $request->input('nama_lengkap')  . '-SURAT_PERNYATAAN.' . $request->file('surat_pernyataan')->getClientOriginalExtension();

        $formPendaftaranName = time() . '-' . $request->input('nama_lengkap') . '-FORM_PENDAFTARAN.' . $request->file('form_pendaftaran')->getClientOriginalExtension();

        $lembarKesediaanName = time() . '-' . $request->input('nama_lengkap') . '-LEMBAR_KESEDIAAN.' . $request->file('lembar_kesediaan')->getClientOriginalExtension();
        $insert = new Students;
        $insert->kelas = $request->input('kelas');
        $insert->nama_lengkap = $request->input('nama_lengkap');
        $insert->jenis_kelamin = $request->input('jenis_kelamin');
        $insert->tempat_lahir = $request->input('tempat_lahir');
        $insert->tanggal_lahir = $request->input('tanggal_lahir');
        $insert->nik = $request->input('nik');
        $insert->agama = $request->input('agama');
        $insert->anak_ke = $request->input('anak_ke');
        $insert->nama_ayah = $request->input('nama_ayah');
        $insert->nama_ibu = $request->input('nama_ibu');
        $insert->pekerjaan_wali = $request->input('pekerjaan');
        $insert->alamat = $request->input('alamat');
        $insert->telp_wa = $request->input('telp_wa');
        $insert->form_pendaftaran = $formPendaftaranName;
        $insert->lembar_kesediaan = $lembarKesediaanName;
        $insert->surat_pernyataan = $suratPernyataanName;
        if ($insert->save()) {
            $request->file('surat_pernyataan')->storeAs('public/files_upload', $suratPernyataanName);
            $request->file('lembar_kesediaan')->storeAs('public/files_upload', $lembarKesediaanName);
            $request->file('form_pendaftaran')->storeAs('public/files_upload', $formPendaftaranName);
            return redirect('/pendaftaran')->with('status', 'Pendaftaran Berhasil, Admin akan memberikan informasi lebih lanjut melalui telepon / whatsapp');
        } else {
            return redirect('/pendaftaran')->with('status_error', 'Pendaftaran gagal, terjadi kesalahan');
        }
    }
}
