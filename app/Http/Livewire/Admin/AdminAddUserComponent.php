<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class AdminAddUserComponent extends Component
{
    public $name;
    public $email;

    public $password;
    public $utype;
    public function mount()
    {
        $this->utype ='USR';

    }
    public function addUser(){
        $user=new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->utype = $this->utype;
        $user->save();
        session()->flash('message','Utilisateur a été créé avec succès!'  );
    }
    public function render()
    {
        return view('livewire.admin.admin-add-user-component')->layout('layouts.base');
    }
}
