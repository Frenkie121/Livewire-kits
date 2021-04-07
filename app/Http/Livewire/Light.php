<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 25;

    public function empty()
    {
        $this->brightness = 0;
    }

    public function full()
    {
        $this->brightness = 100;
    }

    public function increase()
    {
        $this->brightness = min(100, $this->brightness + 10);
    }

    public function decrease()
    {
        $this->brightness = max(0, $this->brightness - 10);
    }

    public function render()
    {
        return view('livewire.light');
    }
}
