<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- If your happiness depends on money, you will never be happy with yourself. --}}

            <h3>I m inline component, when your component size will be small or you want to do work in a small file. You can choose me.</h3>

        </div>
        HTML;
    }
}
