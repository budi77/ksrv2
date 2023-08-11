<?php

namespace App\Http\Livewire\Patriotik;

use Livewire\Component;
use App\Models\Department;
use App\Models\Patriotik;
use Carbon\Carbon;

class Index extends Component
{

    public $departments, $penyertaan, $nama, $department_id, $alamat, $telefon, $emel, $tajuk_lagu, $penyanyi, $pautan, $extra1;


    public function mount()
    {
        $this->departments  = Department::orderby('name')->get();
    }

    protected $rules = [
        'penyertaan' => 'required',
        'nama' => 'required',
        'department_id' => 'required',
        'alamat' => 'required',
        'telefon' => 'required',
        'emel' => 'required|email',
        'tajuk_lagu' => 'required',
        'penyanyi' => 'required|max:20|integer',
        'pautan' => 'required',
        'extra1' => 'required',
    ];

    protected $messages = [
        'penyertaan.required' => 'Sila pilih PENYERTAAN.',
        'nama.required' => 'Sila masukkan NAMA.',
        'department_id.required' => 'Sila pilih BAHAGIAN/NEGERI.',
        'alamat.required' => 'Sila masukkan ALAMAT.',
        'telefon.required' => 'Sila masukkan TELEFON.',
        'emel.required' => 'Sila masukkan EMEL.',
        'tajuk_lagu.required' => 'Sila masukkan TAJUK LAGU.',
        'penyanyi.required' => 'Sila masukkan BILANGAN PESERTA.',
        'penyanyi.max' => 'Peserta tidak boleh melebihi 20 orang.',
        'pautan.required' => 'Sila masukkan PAUTAN.',
        'extra1.required' => 'Sila masukkan EMEL.',
        'emel.email' => 'Semak format Email',
    ];
    
    public function render()
    {
        // $close_date = Carbon::parse('11-08-2023 17:00')->format('d-m-Y H:i');
        // $curr_date = Carbon::now()->format('d-m-Y H:i');

        // $compare = $curr_date->gt($close_date);

        // dd($compare);

        // if ($curr_date->gt($close_date)) { 
        //     dd($curr_date . ' is greater than ' . $close_date);
        // } else {
        //     dd($curr_date . ' is not greater than ' . $close_date);
        // }

        // dd($close_date);
        // dd(Carbon::now()->format('d-m-Y H:m'));
        return view('livewire.patriotik.tutup')->extends('layouts.master-without-nav');
    }

    public function store()
    {
        // dd($this->department_id);
        $validatedData = $this->validate();

        Patriotik::create($validatedData);

        return redirect()->route('patriotik.berjaya');



    }

    
}
