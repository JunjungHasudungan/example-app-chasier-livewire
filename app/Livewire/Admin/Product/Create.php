<?php

namespace App\Livewire\Admin\Product;

use App\Livewire\Forms\ProductForm;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Create extends Component
{
    public string $title = 'Halaman';

    public ProductForm $formProduct;

    public  $name,
            $price,
            $amount,
            $category,
            $description;

    #[Layout('layouts.app')]
    #[Title('PRODUK')]
    public function render()
    {
        return view('livewire.admin.product.create');
    }

    public function store()
    {
        $this->validate();
        
        $this->formProduct->storeProduct();

        $this->redirectRoute('admin-product', navigate: true);

        $this->dispatch('product-created',  title: $this->formProduct->name);
    }

    public function cancel()
    {
        // $this->redirectIntended(default: route('customer-dashboard', absolute: false), navigate: true);
        $this->redirectRoute('admin-product', navigate: true);
    }
}
