<?php

namespace App\Http\Livewire\Angsi;

use Livewire\Component;
use App\Models\Department;
use App\Models\Angsi;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Borang extends Component
{
    use LivewireAlert;

    public $nama, $kp, $tel, $emel, $department_id,$nama_waris, $tel_waris, $pengangkutan, $penyakit, $jenis_penyakit, $departments;
    public $isOpen = true, $isClosed = false, $isAccepted = false, $isCompleted = false, $kouta = 30;
    public bool $checked = false;
    public bool $disabled = true;


    protected $rules = [
        'nama' => 'required',
        'kp' => 'required',
        'tel' => 'required',
        'emel' => 'required',
        'department_id' => 'required',
        'nama_waris' => 'required',
        'tel_waris' => 'required',
        'pengangkutan' => 'required',
        'penyakit' => 'required',
        // 'jenis_penyakit' => 'required',
     
    ];

    protected $messages = [
        'nama.required' => 'Sila masukkan nama',
        'kp.required' => 'Sila masukkan No Kad Pengenalan',
        'tel.required' => 'Sila masukkan No Telefon',
        'emel.required' => 'Sila masukkan Emel',
        'department_id.required' => 'Sila masukkan Bahagian',
        'nama_waris.required' => 'Sila masukkan Nama Waris',
        'tel_waris.required' => 'Sila masukkan No Kecemasan Untuk Dihubungi',
        'pengangkutan.required' => 'Sila masukkan Jenis Pengangkutan',
        'penyakit.required' => 'Sila pilih jika ada penyakit',
        
    ];

    public function render()
    {
        $this->departments = Department::orderby('name')->get();

        //check qouta
        $total = Angsi::count();

        if($total >= $this->kouta)
        {
            $this->isOpen = false;

        }

        // dd($departments);

        return view('livewire.angsi.borang')->extends('layouts.master-without-nav');
    }

    public function store()
    {

        $total = Angsi::count();

        if($total >= $this->kouta)
        {
            abort(503);
        }

        $this->validate();

        Angsi::create([
            'nama' => $this->nama,
            'kp' => $this->kp,
            'tel' => $this->tel,
            'emel' => $this->emel,
            'department_id' => $this->department_id,
            'kecemasan' => $this->tel_waris,
            'waris' => $this->nama_waris,
            'pengangkutan' => $this->pengangkutan,
            'penyakit' => $this->penyakit,
            'sakit' => $this->jenis_penyakit,
        ]);

        $this->resetExcept('departments');
        
        // $this->alert('success', 'Berjaya!');

        $this->isOpen = false;
        $this->isCompleted = true;


        


    }

    public function processMark()
    {
        if ($this->checked) {
            $this->disabled = false;
        } else {
            $this->disabled = true;

        }

    }


}
