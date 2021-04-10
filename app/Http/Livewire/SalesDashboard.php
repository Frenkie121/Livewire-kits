<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SalesDashboard extends Component
{
    public function render()
    {
        return view('livewire.sales-dashboard', [
            'new_orders' => rand(1, 100),
            'amount' => rand(2500, 300000),
            'satisfactions' => rand(1, 100)
        ]);
    }
}
