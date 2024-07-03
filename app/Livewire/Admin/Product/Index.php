<?php

namespace App\Livewire\Admin\Product;

use Livewire\{WithPagination, WithoutUrlPagination};
use App\Models\Product;
use Livewire\Attributes\{Layout, On, Title};
use Livewire\Component;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public string $pageTitle = 'HALAMAN';
    public string $description = "";
    public $product;


    #[On('product-updated')]
    #[Layout('layouts.app')]
    #[Title('PRODUK')]
    public function render()
    {
        return view('livewire.admin.product.index', [
            'listProduct'   => Product::paginate(5)
        ]);
    }

    // #[On('product-created')]
    // public function updatePostList($title)
    // {
    //     // ...
    // }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);
        $product->delete();

        $this->dispatch('product-deleted');
    }

    public function shortenString($string, $length) {

        if (strlen($string) > $length) {
         return substr($string, 0, $length) . '...';
        } else {
         return $string;
        }
     }
}
