<?php

namespace App\Exports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StudentsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $kelas;

    function __construct($kelas)
    {
        $this->kelas = $kelas;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Students::all();
        return Students::select('nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'nik', 'agama', 'anak_ke', 'nama_ayah', 'nama_ibu', 'pekerjaan_wali', 'alamat', 'telp_wa')->where('kelas', $this->kelas)->get();
    }

    public function headings(): array
    {
        return [
            "Nama Lengkap", "Jenis Kelamin", "Tempat Lahir", 'Tanggal Lahir', 'NIK', 'Agama', 'Anak ke', 'Nama Ayah', 'Nama Ibu',
            'Pekerjaan Ayah/Ibu', 'Alamat', 'Telp/WA'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
