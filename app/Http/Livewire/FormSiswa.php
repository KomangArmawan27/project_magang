<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;
use PDO;

class FormSiswa extends Component
{
    public $nama;
    public $kelas;
    public $jurusan;
    public $seragam;
    public $total_seragam;
    public $magang;
    public $total_magang;
    public $event;
    public $model = Siswa::class;

    public function render()
    {
        return view('livewire.form-siswa');
    }

    public function mount(){
        $id = request()->segment(count(request()->segments()));
        $data = $this->model::find($id);
        $this->event = null;

        if($data){
            $this->event = $data;

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
        $this->validate([
            'nama'   => 'required',
            'kelas'   => 'required',
            'jurusan' => 'required',
            'total_seragam' => 'required',
            'total_magang' => 'required',
        ]);

        $data = [
            'nama'  => $this->nama,
            'kelas'  => $this->kelas,
            'jurusan'  => $this->jurusan,
            'seragam' => $this->seragam ? true : false,
            'total_seragam' => $this->total_seragam,
            'magang'  => $this->magang ? true : false,
            'total_magang'  => $this->total_magang,
        ];

        if($this->event){
            $this->model::find($this->event->id)->update($data);
        }else{
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
