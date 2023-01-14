<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminEditUserComponent extends Component
{   
    use WithPagination;

    public $name;
    public $email;
    public $password;
    public $utype;
    public $user_id;

   
    public function mount($id){

        $user = User::findorfail($id);
        $this->name=$user->name;
        $this->email=$user->email;
        $this->password=$user->password;
        $this->utype=$user->utype;
        $this->user_id=$user->id;
       
        
    } 
    
    public function updateUser(){
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->utype = $this->utype;
        $user->save();
        session()->flash('message','Utilisateur a été mis à jour avec succès' );
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-user-component')->layout('layouts.base');
    }
}
