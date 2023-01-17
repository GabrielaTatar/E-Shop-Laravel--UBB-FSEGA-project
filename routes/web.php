<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.category');

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    
//     Route::get('/dashboard', function () 
//     {
//         return view('dashboard');
//     })->name('dashboard');
// });

//Pentru client
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//Pentru admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dasboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');

    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');

    Route::get('/admin/product/edit/{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');
});