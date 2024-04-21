<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class DemoButton extends Component
{

    /**
     * Define the listeners.
     *
     * @return array
     */
    public function getListeners(): array
    {
        return [
            'livewire-request' => 'handleRequest',
        ];
    }

    public function render()
    {
        return view('livewire.demo-button');
    }

    public function handleRequest()
    {
        Log::info('Livewire request handled!');
    }
}
