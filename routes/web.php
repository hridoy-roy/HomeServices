<?php

use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use Faker\Guesser\Name;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

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

Route::get('/',HomeComponent::class);

Route::get('/service-categories',ServiceCategoriesComponent::class)->name('home.service-categories');

// Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/customer/dashboard',CustomerDashboardComponent::class)->name('customer.dashboard');
});

// Service Provider
Route::middleware(['auth:sanctum', 'verified','authsprovider'])->group(function () {
    Route::get('/sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovide.dashboard');
});

// Admin 
// Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function() {
//     Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
// });

Route::group(['middleware' => ['auth','authadmin']],function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-category',AdminServiceComponent::class)->name('admin.service_category');
    Route::get('/admin/service-category/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
    
});