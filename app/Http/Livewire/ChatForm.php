<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $nombre;

    public function mount()
    {
        $this->nombre = "";
    }

    public function render()
    {
        return view('livewire.chat-form');
    }
}
