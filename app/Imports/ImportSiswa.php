<?php

namespace App\Imports;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
class ImportSiswa implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Siswa([
            'nis'   => $row[0],
            'nama'   => $row[1],
            'kelas'   => $row[2],
            'jurusan' => $row[3],
            'seragam' => $row[4],
            'total_seragam' => $row[5],
            'magang' => $row[6],
            'total_magang' => $row[7]
        ]);
    }
}
