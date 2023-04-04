<?php

namespace App\Http\Livewire\Settings;
use App\Models\Department;
use Livewire\Component;
use App\Models\User;
use Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Users extends Component
{
    use LivewireAlert;

    public $departments, $name, $email, $department, $pwd, $role, $user_id;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    protected $listeners = [
        'confirmed'
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
        $this->alert('success', 'Berjaya!');


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

        $this->alert('success', 'Berjaya!');
        // $this->alert('info', 'This is not as toast alert', [
        //     'toast' => false
        // ]);


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

    public function delete($id)
    {
        $this->user_id = $id;

        $this->alert('warning', 'Are you sure want to delete?', [
            'timer' => 8000,
            'showConfirmButton' => true,
            'denyButtonText' => 'Deny',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed' ,
            'confirmButtonColor' => '#ff0000'
        ]);
        
        // $this->confirm('Are you sure do want to delete?', [
        //     'confirmButtonText' => 'Ya',
        //     'cancelButtonText' => 'Batal',

        //     'onConfirmed' => 'confirmed',
        // ]);
    }

    public function confirmed()
    {
        User::find($this->user_id)->delete();
        $this->alert('success', 'Deleted!');

        $this->reset('user_id');
    }


}
