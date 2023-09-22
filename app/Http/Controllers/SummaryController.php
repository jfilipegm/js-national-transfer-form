<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function handleForm(Request $request) {
        dd($request->all());

        return view('livewire.summary');
    }
}
