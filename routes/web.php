<?php

use App\Livewire\Admin\{
    Dashboard as AdminDashboard
};
use App\Livewire\Admin\Order\{
    Index as AdminOrderIndex
};
use App\Livewire\Admin\Product\{
    Create as ProductCreate,
    Edit as ProductEdit,
    Index as ProductIndex
};
use App\Livewire\Customer\{
    Dashboard as CustomerDashboard
};
use App\Livewire\Customer\Order\{
    Create as CustomerOrderCreate,
    Index as CustomerOrderIndex
};
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->group(function(){
    // ROUTE FOR ADMIN-PRODUCT
    Route::get('admin-dashboard', AdminDashboard::class)->name('admin-dashboard');
    Route::get('admin-product', ProductIndex::class)->name('admin-product');
    Route::get('admin-product-create', ProductCreate::class)->name('admin-product-create');
    Route::get('admin-product-edit/{product}', ProductEdit::class)->name('admin-product-edit');

    // ROUTE FOR ADMIN-ORDER
    Route::get('admin-order', AdminOrderIndex::class)->name('admin-order-index');


    // ROUTE FOR CUSTOMER
    Route::get('customer-dashboard', CustomerDashboard::class)->name('customer-dashboard');

    // ROUTE FOR CUSTOMER-ORDER
    Route::get('customer-order', CustomerOrderIndex::class)->name('customer-order-index');
    Route::get('customer-order-create/{product}', CustomerOrderCreate::class)->name('customer-order-create');
});
require __DIR__.'/auth.php';
