<?php

namespace App\Livewire;

use Livewire\Component;

class PropertyBinding extends Component
{
    // public $message = "Hello World";
    public $message;

    // mount is a pre-defined function
    function mount(){
        $this->message = "hello from mount"; 
    }

    public function render()
    {
        return view('livewire.property-binding');
    }
}
