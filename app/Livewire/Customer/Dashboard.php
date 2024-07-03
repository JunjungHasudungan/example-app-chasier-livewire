<?php

namespace App\Livewire\Customer;

use Livewire\Attributes\{Layout, Title};
use Livewire\Component;
use App\Models\Order;

class Dashboard extends Component
{
    public string $title = 'Halaman';

    #[Layout('layouts.app')]
    #[Title('Dashobard')]
    public function render()
    {
        
        return view('livewire.customer.dashboard', [
            'list-order'    => Order::where('user_id', auth()->id())->get()
        ]);
    }
}
