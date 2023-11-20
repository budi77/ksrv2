<?php

namespace App\Http\Livewire\KSRArena;

use Livewire\Component;
use App\Models\Department;
use App\Models\KsrArena;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Borang extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $departments, $department_id, $nama_pengurus, $no_tel, $volleyball, $netball, $borang_penyertaan, $jumlah_bayaran, $resit_bayaran;

    protected $rules = [
        'nama_pengurus' => 'required',
        'no_tel' => 'required',
        'department_id' => 'required',
        'borang_penyertaan' => 'required',
        'jumlah_bayaran' => 'required',
        'resit_bayaran' => 'required',
      
     
    ];

    protected $messages = [
        'nama_pengurus.required' => 'Sila masukkan Nama Pengurus',
        'no_tel.required' => 'Sila masukkan No Telefon',
        'department_id.required' => 'Sila masukkan Bahagian',
        'borang_penyertaan.required' => 'Sila masukkan Borang Penyertaan',
        'jumlah_bayaran.required' => 'Sila masukkan Jumlah Bayaran',
        'resit_bayaran.required' => 'Sila masukkan Resit Bayaran',
        

    ];

    public function render()
    {

        $this->departments = Department::orderby('name')->get();

        return view('livewire.k-s-r-arena.borang')->extends('layouts.master-without-nav');
    }

    public function store()
    {

       
        $this->validate();

        $borang_penyertaan = md5($this->borang_penyertaan . microtime()).'.'.$this->borang_penyertaan->extension();
        $resit_bayaran = md5($this->resit_bayaran . microtime()).'.'.$this->resit_bayaran->extension();

        $this->borang_penyertaan->storeAs('public', $borang_penyertaan);
        $this->resit_bayaran->storeAs('public', $resit_bayaran);


        KsrArena::create([
            'nama_pengurus' => $this->nama_pengurus,
            'no_tel' => $this->no_tel,
            'department_id' => $this->department_id,
            'volleyball' => $this->volleyball,
            'netball' => $this->netball,
            'borang_penyertaan' => $borang_penyertaan,
            'jumlah_bayaran' => $this->jumlah_bayaran,
            'resit_bayaran' => $resit_bayaran,
            
        ]);

        $this->alert('success','Pendaftaran Diterima', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => false,
            'showConfirmButton' => true,
            'confirmButtonText' => 'OK',
           ]);
        

        $this->resetExcept('departments');
        // $this->lampiran_bayaran = "";

       


        


    }

}
