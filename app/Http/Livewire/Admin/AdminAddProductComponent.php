<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

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

    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Produsul s-a creat cu succes');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
