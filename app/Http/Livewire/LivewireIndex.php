<?php

namespace App\Http\Livewire;

use App\Models\Index;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireIndex extends LivewireDatatable
{
    // public function render()
    // {
    //     return view('livewire.livewire-index');
    // }

    public $nama;
    public $kelas;
    public $jurusan;
    public $seragam;
    public $magang;
    public $model = index::class;

    public function columns()
    {
        return [
            // NumberColumn::name('id')->label('ID')->sortBy('id')->defaultSort('asc'),
            Column::name('nama')->label('Nama')->searchable(),
            Column::name('kelas')->label('Kelas')->searchable(),
            Column::name('jurusan')->label('Jurusan')->searchable(),

            Column::callback(['seragam'], function ($seragam) {
                return $seragam ? "Lunas" : "Belum Lunas";
            })->label('Seragam')->unsortable(),

            Column::callback(['magang'], function ($magang) {
                return $magang ? "Lunas" : "Belum Lunas";
            })->label('magang')->unsortable()
        ];
    }
}
