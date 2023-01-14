<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\str;

class AdminEditCategoryComponent extends Component
{

    public $category_slug; 
    public $category_id;
    public $name ;
    public $slug;

    public function mount($category_slug){

        $this->category_slug = $category_slug;
        $category = category::where('slug',$category_slug)->first(); 
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    } 

    public function generateslug(){
      $this->slug = Str::slug($this->name);

    }
        
    public function updateCategory(){
        $category = Category::find($this->category_id);
        $category->name = $this->name; 
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Categorie a été mis à jour avec succès' );
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.base');
    }
}
