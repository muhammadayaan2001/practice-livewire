<?php

namespace App\Livewire;

use Livewire\Component;

class LivewareLifeCycleHook extends Component
{
    public $name = "Initial value";
    public $counter;

    function mount(){
        // $this->name;
        $this->name = "Ayaan" ;
    }


   function hydrate(){
        $this->counter++;
    }

    function updated(){
        $this->counter++;
    }

    function updateName($name){
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.liveware-life-cycle-hook');
    }
}
