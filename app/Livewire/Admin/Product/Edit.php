<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Livewire\Forms\ProductForm;
use Livewire\Attributes\{Layout, Title};
use Livewire\Component;

class Edit extends Component
{
    public ProductForm $formProduct;

    public function mount(Product $product)
    {
        $this->formProduct->setProduct($product);
    }

    #[Layout('layouts.app')]
    #[Title('PRODUK')]
    public function render()
    {
        return view('livewire.admin.product.edit');
    }

    public function update()
    {
        $this->formProduct->updateProduct();

        $this->redirectRoute('admin-product', navigate: true);

        $this->dispatch('product-updated');
    }

    public function cancel()
    {
        $this->redirectRoute('admin-product', navigate: true);
    }

    public function deleteProduct(Product $product)
    {
        dd($product);
        $product->delete();
    }
}
