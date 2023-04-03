<?php

namespace App\Http\Livewire\Settings;
use App\Models\Department;
use Livewire\Component;
use App\Models\User;

class Users extends Component
{

    public $departments;

    public function mount()
    {

        $this->departments = Department::orderby('name')->get();

    }

    public function render()
    {
        $users = User::all();

        // dd($users);

        return view('livewire.settings.users', compact('users'));
    }
}
