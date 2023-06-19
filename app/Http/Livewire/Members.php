<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;
use App\Models\Member;
use Livewire\WithPagination;

class Members extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $departments, $name, $email, $department, $koperasi, $ic_no, $member_id, $search, $member_list, $active;
    public $filter_department, $filter_kospera, $filter_aktif;
    public $jumlah_ahli, $aktif, $non_aktif, $kospera;

    public function mount()
    {

        $this->departments = Department::orderby('name')->get();

    }

    public function render()
    {
        $this->jumlah_ahli = Member::count();
        $this->aktif = Member::whereActive('1')->count();
        $this->non_aktif = Member::whereActive('0')->count();
        $this->kospera = Member::whereKospera('1')->count();

        $results = Member::when($this->search, function($query){
            $query->where('name', 'LIKE', '%'. $this->search . '%')
                  ->orWhere('ic_no', 'LIKE' , '%'. $this->search . '%');
        })
        ->when($this->filter_department, function($query) {
            return $query->where('department_id' , $this->filter_department);
        })
        ->when($this->filter_kospera, function($query) {
            return $query->where('kospera' , $this->filter_kospera);
        })
        ->when($this->filter_aktif, function($query) {
            return $query->where('active' , $this->filter_aktif);
        })
        ->orderby('name')->paginate(20);

        return view('livewire.members', compact('results'))->extends('layouts.master');
    }

    public function showModal()
    {
        // dd('1');
        $this->dispatchBrowserEvent('show-modal');

    }

    public function store()
    {
        // dd('ddd');
        $store = Member::updateOrCreate(['id' => $this->member_id], 
        [
            'name' => $this->name,
            'ic_no' => $this->ic_no,
            'email' => $this->email,
            'department_id' => $this->department,
            'kospera' => $this->koperasi,
            'active' => $this->active,

        ]);

        $this->reset(['name','ic_no', 'member_id','email','department','active','koperasi']);

        $this->dispatchBrowserEvent('close-add-modal');


    }

    public function edit($id)
    {
        $result = Member::find($id);

        $this->member_id = $id;
        $this->name = $result->name;
        $this->department = $result->department_id;
        $this->email = $result->email;
        $this->ic_no = $result->ic_no;
        $this->koperasi = $result->kospera;
        $this->active = $result->active;

        $this->dispatchBrowserEvent('show-modal');


    }

    public function list($id)
    {

        // dd('x');
        $this->member_list = Member::with('payments','bahagian:id,name')->whereId($id)->first();

        // dd($this->member);

       
        $this->dispatchBrowserEvent('show-list');

    }

    public function delete($id)
    {
        $delete = Member::find($id)->delete();
    }
    
}
