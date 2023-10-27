<?php

namespace App\Livewire;

use Livewire\Component;

class LivewireRoute extends Component
{
    public function render()
    {
        return view('livewire.livewire-route');
    }

    public function name(){
        return "ayaan";
    }

}
