<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSiswa implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::select(
            'NIS', 
            'nama', 
            'kelas', 
            'jurusan', 
            'seragam', 
            'total_seragam', 
            'magang', 
            'total_magang')->get();
    }
}
