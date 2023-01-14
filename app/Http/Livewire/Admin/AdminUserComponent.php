<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUserComponent extends Component
{
    use WithPagination;
    
    public function deleteUser($id){
        $user = user::find($id);
        $user->delete();
        session()->flash('message','Utilisateur a été supprimé avec succès' );
    }


    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.admin-user-component', ['users'=>$users])->layout('layouts.base');
    }
}
