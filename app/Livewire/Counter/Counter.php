<?php

namespace App\Livewire\Counter;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public $close = false;

    public function add()
    {
        $this->counter++;
    }

    public function minus()
    {
        if ($this->counter >= 1)
            $this->counter--;
        else {
            # do nothing
        }
    }


    public function render()
    {
        return view('livewire.counter.counter');
    }
}
