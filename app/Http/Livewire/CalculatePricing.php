<?php

namespace App\Http\Livewire;

use Livewire\Component;
use SebastianBergmann\CodeCoverage\Percentage;

class CalculatePricing extends Component
{
    public $book = 2;
    public $initial_amount = 250;
    // public $amount;

    // public function mount()
    // {
    //     $this->amount = $this->calculateAmount($this->book);
    // }

    // public function updatedBook($value)
    // {
    //     $this->amount = $this->calculateAmount($value);
    // }

    public function calculateAmount($count)
    {
        $total = $count * $this->initial_amount;

        return $count >= 5
                ? $total - ($total * 0.05)
                : $total;
    }

    public function render()
    {
        return view('livewire.calculate-pricing', [
            'amount' => $this->calculateAmount($this->book),
        ]);
    }
}
