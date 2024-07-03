<?php

namespace App\Livewire\Admin;
use App\Models\{Product, Order};
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public string $title = 'Halaman';
    public $amountProduct;

    #[Layout('layouts.app')]
    #[Title('Dashboard')]
    public function render()
    {
        $this->amountProduct = DB::table('products')->count();

        return view('livewire.admin.dashboard', [
            'listProduct'          => $this->amountProduct,
        ]);
    }
}
