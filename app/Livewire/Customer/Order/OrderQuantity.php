<?php

namespace App\Livewire\Customer\Order;

use App\Models\{Order, Product};
use Livewire\Component;

class OrderQuantity extends Component
{
    public $subTotal = 0;
    public $amountOrder = 1;
    public $disableAddButton = false;
    public $disableSubtractButton = true;
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->subTotal =  $this->updateSubTotal();
    }

    public function render()
    {
        return view('livewire.customer.order.order-quantity');
    }


    public function btnSubtractOrderItem()
    {
        if ($this->amountOrder > 1) {
            $this->amountOrder--;
            $this->checkButtonStatus();
            $this->updateSubTotal();
        }
    }

    public function btnAddOrderItem()
    {
        if ($this->amountOrder < $this->product->amount) {
            $this->amountOrder++;
            $this->checkButtonStatus();
            $this->updateSubTotal();
        }
    }

    public function updateSubTotal()
    {
    return $this->subTotal = $this->amountOrder * $this->product->price;
    }

    private function checkButtonStatus()
    {
        $this->disableAddButton = $this->amountOrder >= $this->product->amount;
        $this->disableSubtractButton = $this->amountOrder == 1;
    }

    public function orderProduct()
    {
            Order::create([
                'user_id'       => auth()->id(),
                'product_id'    => $this->product->id,
                'amount'        => $this->amountOrder,
                'subTotal'      => $this->subTotal,
                'created_at'    => now(),
            ]);

            $this->product->update([
                'amount'    => $this->product->amount - $this->amountOrder
            ]);

            $this->dispatch('success-ordered');

            $this->redirectRoute('customer-order-index', navigate: true);
    }

}
