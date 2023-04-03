<?php

namespace App\Http\Livewire\Settings;
use App\Models\Department;
use Livewire\Component;
use App\Models\User;
use Hash;

class Users extends Component
{

    public $departments, $name, $email, $department, $pwd, $role, $user_id;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

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

    public function showModal()
    {
        // dd('1');
        $this->dispatchBrowserEvent('show-modal');

    }

    public function store()
    {
        // dd($this->department);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'department_id' => $this->department,
            'password' => Hash::make($this->pwd),
            'role' => $this->role,
            'avatar' => 'user.jpg'

        ]);

        $this->reset(['name','email','department','pwd','role']);

        $this->dispatchBrowserEvent('close-add-modal');

    }

    public function edit($id)
    {

        $this->user_id = $id;

        $user = User::find($id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->department = $user->department_id;
        $this->role = $user->role;
        
        $this->dispatchBrowserEvent('show-edit');


    }

    public function update()
    {
        // dd($this->department);
        User::find($this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'department_id' => $this->department,
            'role' => $this->role,
            
        ]);

        $this->reset(['name','email','department','user_id','role']);

        $this->dispatchBrowserEvent('hide-edit');

    }

    public function editpwd($id)
    {

        $this->user_id = $id;

        $user = User::find($id);

        $this->name = $user->name;
        // $this->email = $user->email;
        // $this->department = $user->department_id;
        // $this->role = $user->role;
        
        $this->dispatchBrowserEvent('show-pwd');


    }

    public function updatepwd()
    {
        // dd($this->department);
        User::find($this->user_id)->update([
            'password' => Hash::make($this->pwd),
            
        ]);

        $this->reset(['user_id','pwd']);

        $this->dispatchBrowserEvent('hide-pwd');

    }


}
