<?php

namespace App\Livewire\Customer\Order;

use Livewire\Attributes\{Layout, Title};
use App\Models\Product as ProductOrder;
use Livewire\Component;

class Index extends Component
{
    public $products;

    #[Layout('layouts.app')]
    #[Title('Order')]
    public function render()
    {

        return view('livewire.customer.order.index',[
            'listProduct'   => ProductOrder::with('image')->get()
        ]);
    }
}
