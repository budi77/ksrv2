<?php

namespace App\Http\Livewire\Pancing;

use Livewire\Component;
use App\Models\Department;
use App\Models\Pancing;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Borang extends Component
{

    use LivewireAlert;
    use WithFileUploads;

    public $departments, $nama,$nokp, $jantina, $bahagian, $ahli, $no_tel, $tarikh, $jumlah_bayaran, $lampiran, $saiz ;
    public $isOpen = true, $isClosed = false, $isAccepted = false, $isCompleted = false, $kouta = 50;

    public bool $checked = false;
    public bool $disabled = true;

    protected $rules = [
        'nama' => 'required',
        'nokp' => 'required',
        'no_tel' => 'required',
        'jantina' => 'required',
        'bahagian' => 'required',
        // 'ahli' => 'required',
        'tarikh' => 'required',
        'jumlah_bayaran' => 'required',
        'saiz' => 'required',
        'lampiran' => 'required',
     
    ];

    
    protected $messages = [
        'nama.required' => 'Sila masukkan nama',
        'nokp.required' => 'Sila masukkan No Kad Pengenalan',
        'no_tel.required' => 'Sila masukkan No Telefon',
        'jantina.required' => 'Sila masukkan Jantina',
        'bahagian.required' => 'Sila masukkan Bahagian',
        'tarikh.required' => 'Sila masukkan Tarikh Bayaran',
        'jumlah_bayaran.required' => 'Sila masukkan Jumlah Bayaran',
        'pengangkutan.required' => 'Sila masukkan Jenis Pengangkutan',
        'lampiran.required' => 'Sila muatnaik Lampiran Bayaran',
        'saiz.required' => 'Sila pilih saiz baju',
       
    ];

    public function render()
    {

        $this->departments = Department::orderby('name')->get();

        $total = Pancing::count();

        if($total >= $this->kouta)
        {
            $this->isOpen = false;

            $this->isClosed = true;

        }

        return view('livewire.pancing.borang')->extends('layouts.master-without-nav');
    }

    public function processMark()
    {
        if ($this->checked) {
            $this->disabled = false;
        } else {
            $this->disabled = true;

        }

    }

    public function store()
    {

        // $total = Angsi::count();

        // if($total >= $this->kouta)
        // {
        //     abort(503);
        // }

        $this->validate();

        $name = md5($this->lampiran . microtime()).'.'.$this->lampiran->extension();

        $this->lampiran->storeAs('public', $name);


        Pancing::create([
            'nama' => $this->nama,
            'no_kp' => $this->nokp,
            'ext2' => $this->no_tel,
            'jantina' => $this->jantina,
            'department_id' => $this->bahagian,
            'ahli' => $this->ahli,
            'tarikh_bayaran' => $this->tarikh,
            'jumlah_bayaran' => $this->jumlah_bayaran,
            'lampiran_bayaran' => $this->name,
            'ext1' => $this->saiz,
            
        ]);

        $this->alert('success','Pendaftaran Diterima', [
            'position' => 'center',
            'timer' => '5000',
            'toast' => false,
            'showConfirmButton' => true,
            // 'onConfirmed' => '',
            'confirmButtonText' => 'OK',
           ]);
        

        $this->resetExcept('departments');
        $this->lampiran_bayaran = "";

        
        // $this->alert('success', 'Berjaya!');

        // $this->isOpen = false;
        // $this->isCompleted = true;


        


    }




    
}
