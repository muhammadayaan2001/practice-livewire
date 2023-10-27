<?php

namespace App\Livewire;

use Livewire\Component;

class LivewareActions extends Component
{

    public $msg = "This is message from livewire action's component";

    public $username = 'Ayaan';

    public function updateMsg(){
        $this->msg = "Livewire action messsage has been updated";
    }

    public function updateName($name){
        $this->username = $name;
    }

    public function render()
    {
        return view('livewire.liveware-actions');
    }
}
