<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Category;

use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();

        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->description = $product->description;
        $this->regular_price = $product->regulat_price;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->product_id = $product->id;       
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;

        }
        
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Produsul s-a updatat cu succes');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
