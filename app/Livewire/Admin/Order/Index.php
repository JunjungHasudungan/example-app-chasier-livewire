<?php

namespace App\Livewire\Admin\Order;

use Livewire\Attributes\{Layout, On, Title};
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    #[Title('ORDER')]
    public function render()
    {
        return view('livewire.admin.order.index');
    }
}
