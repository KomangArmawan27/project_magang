<?php

namespace App\Http\Livewire;

use App\Models\Siswa;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireSiswa extends LivewireDatatable
{
    // public function render()
    // {
    //     return view('livewire.livewire-siswa');
    // }

    public $nis;
    public $nama;
    public $kelas;
    public $jurusan;
    public $seragam;
    public $magang;
    public $model = Siswa::class;

    public function columns()
    {
        return [
            // NumberColumn::name('nis')->label('NIS')->sortBy('nis')->defaultSort('asc'),
            Column::name('nis')->label('NIS')->searchable(),
            Column::name('nama')->label('Nama')->searchable(),
            Column::name('kelas')->label('Kelas')->searchable(),
            Column::name('jurusan')->label('Jurusan')->searchable(),

            Column::callback(['seragam'], function ($seragam) {
                return $seragam ? "Lunas" : "Belum Lunas";
            })->label('Seragam')->unsortable(),

            Column::callback(['magang'], function ($magang) {
                return $magang ? "Lunas" : "Belum Lunas";
            })->label('magang')->unsortable(),

            Column::callback(['id'], function ($id) {
                return view('livewire.actions-siswa', ['id' => $id]);
            })->label('Action')->unsortable()
        ];
    }
}
