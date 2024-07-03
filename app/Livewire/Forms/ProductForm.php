<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\{Validate};
use Livewire\Form;

class ProductForm extends Form
{
    #[Validate('required', message: 'Nama produk wajib disi..')]
    #[Validate('unique:products,name', message: 'Nama produk sudah ada')]
    public $name = '';

    #[Validate('required', message: 'Harga produk wajib disi..')]
    #[Validate('integer', message: 'H..')]
    public $price;

    #[Validate('required', message: 'Jumlah produk wajib disi..')]
    #[Validate('integer', message: 'Jumlah produk minimal 5 karakter..')]
    public $amount;

    #[Validate('required', message: 'Kategori produk wajib disi..')]
    public $category;

    #[Validate('required', message: 'Keterangan produk wajib disi..')]
    // #[Validate('min:5', message: 'Keterangan produk minimal 5 karakter..')]
    public $description;

    public ?Product $product;

    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->amount = $product->amount;
        $this->category = $product->category;
        $this->description = $product->description;
    }

    public function storeProduct()
    {
        $validated = $this->validate();

        $dataProdct = Product::create($validated);

    }

    public function updateProduct()
    {
        $this->validate();

        $this->product->update(
            $this->all()
        );

        $this->reset();

    }

}
