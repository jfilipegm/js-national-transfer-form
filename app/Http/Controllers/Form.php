<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
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
