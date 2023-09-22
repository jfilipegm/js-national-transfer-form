<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public string $originAccount = '';
    public string $iban = '';
    public string $transferDescription = '';
    public int $amount = 0;

    protected $rules = [
        'origin_account' => ['required'],
        'iban' => ['required'],
        'email' => ['required'],
        'amount' => ['required'],
    ];

    public function render()
    {
        return view('livewire.form');
    }

    public function submit() {
        $this->validate();
    }
}
