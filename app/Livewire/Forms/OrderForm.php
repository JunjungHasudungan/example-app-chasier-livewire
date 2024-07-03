<?php

namespace App\Livewire\Forms;

use App\Models\{
    Order, Product
};
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    public ?Order $order;

    public ?Product $product;


    public $orderId;

    public $name;

    public $description;

    public $amount;

    public $category;

    public $price;



    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->amount = $product->amount;
        $this->category = $product->category;
        $this->description = $product->description;
    }

    public function setOrder(Order $order)
    {
        $this->order = $order;
        $this->orderId = $order->id;
    }
}
