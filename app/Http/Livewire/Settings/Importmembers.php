<?php

namespace App\Http\Livewire\Settings;
use Livewire\WithFileUploads;
use App\Member;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MembersImport;

use Livewire\Component;

class Importmembers extends Component
{

    use WithFileUploads;

    public $file;



    public function render()
    {
        return view('livewire.settings.importmembers');
    }

    public function import()
    {
        Excel::import(new MembersImport, $this->file, null, \Maatwebsite\Excel\Excel::CSV);

        return back();

    }
}
