<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Exists;
use PDO;

class FormSiswa extends Component
{
    public $nis;
    public $nama;
    public $kelas;
    public $jurusan;
    public $seragam;
    public $total_seragam;
    public $magang;
    public $total_magang;
    public $event;
    public $checker;
    public $model = Siswa::class;

    public function render()
    {
        return view('livewire.form-siswa');
    }

    public function mount()
    {
        $nis = request()->segment(count(request()->segments()));
        $data = $this->model::find($nis);
        $this->event = null;

        if ($data) {
            $this->event = $data;

            $this->nis = $data->nis;
            $this->nama = $data->nama;
            $this->kelas = $data->kelas;
            $this->jurusan = $data->jurusan;
            $this->seragam = $data->seragam;
            $this->total_seragam = $data->total_seragam;
            $this->magang = $data->magang;
            $this->total_magang = $data->total_magang;
        }
    }

    public function submit()
    {
        $this->validate(
            [
                'nis'   => 'required',
                'nama'   => 'required',
                'kelas'   => 'required',
                'jurusan' => 'required',
                'total_seragam' => 'required',
                'total_magang' => 'required',
            ],
            [
                'nis.required' => 'Form tidak boleh kosong!',
                'nama.required' => 'Form tidak boleh kosong!',
                'total_magang.required' => 'Perlu memasukan total pembayaran yang sudah dilakukan!',
                'total_magang.required' => 'Perlu memasukan total pembayaran yang sudah dilakukan!',
            ]
        );

        $checker = Siswa::where('nis', '=', $this->nis)->exists();
        // dd($checker);
        if ($checker  == true) {
            return Redirect::back()->withErrors($checker);
        }


        $data = [
            'nis' => $this->nis,
            'nama'  => $this->nama,
            'kelas'  => $this->kelas,
            'jurusan'  => $this->jurusan,
            'seragam' => $this->seragam ? true : false,
            'total_seragam' => $this->total_seragam,
            'magang'  => $this->magang ? true : false,
            'total_magang'  => $this->total_magang,
        ];

        if ($this->event) {
            $this->model::find($this->event->nis)->update($data);
        } else {
            $this->model::create($data);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        $this->dispatchBrowserEvent('swal', [
            'title' => "created",
            'text'  => "usercreated",
            'icon'  => 'success',
            'timer' => 3000
        ]);

        //redirect
        return redirect('/admin');
    }
}
