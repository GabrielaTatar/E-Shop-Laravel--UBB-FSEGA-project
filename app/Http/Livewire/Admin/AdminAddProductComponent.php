<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $image;
    public $category_id;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
