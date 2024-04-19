<?php

namespace App\Livewire;

use App\Models\Distribuidora;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Listas extends Component
{
    public $distribuidora_id = null;
    public $desarrolladora_id = null;
    public $desarrolladoras = [];

    public function mount()
    {
        $this->cambia();
    }

    public function cambia()
    {
        if ($this->distribuidora_id) {
            $this->desarrolladoras = Distribuidora::find($this->distribuidora_id)
                ->desarrolladoras()
                ->get();
        } else {
            $this->desarrolladoras = [];
        }
    }

    public function render()
    {
        return view('livewire.listas')->with([
            'distribuidoras' => Distribuidora::all(),
        ]);
    }
}
