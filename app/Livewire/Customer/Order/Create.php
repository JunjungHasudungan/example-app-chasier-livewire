<?php

namespace App\Livewire\Customer\Order;

use App\Livewire\Forms\OrderForm;
use Livewire\Attributes\{Layout, Title};
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public OrderForm $orderForm;

    // public Order $order;
    public $product;
    public $order;
    public $amountSelledProduct;
    public $amountOrder = 1;
    public $subTotal;

    public function mount(Product $product)
    {
        $this->product = Product::where('id', $product->id)->with(['image', 'orders'])->first();
        $this->subTotal = $product->price;

    }

    #[Layout('layouts.app')]
    #[Title('Order')]
    public function render()
    {
        // dd($this->order);
        return view('livewire.customer.order.create');
    }
    public function btnKurang()
    {
        $this->amountOrder = ($this->amountOrder > 1) ? $this->amountOrder - 1 : $this->amountOrder;
        // if ($this->amountOrder > 1) {
        //     $this->amountOrder--;
        // } else {
        //     $this->amountOrder;
        // }
        
    }

    public function btnTambah()
    {
        $this->amountOrder++;
    }
}
