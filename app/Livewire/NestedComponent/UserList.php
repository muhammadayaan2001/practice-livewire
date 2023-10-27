<?php

namespace App\Livewire\NestedComponent;

use Livewire\Component;

class UserList extends Component
{
    public $user;

    function mount($user){
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.nested-component.user-list');
    }
}
