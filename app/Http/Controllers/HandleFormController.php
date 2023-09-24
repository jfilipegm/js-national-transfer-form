<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleFormController
{
    public function handleForm(Request $request) {
        $summary = [
            'originAccount' => $request->input('originAccount'),
            'destinationIban' => $request->input('destinationIban'),
            'transferDescription' => $request->input('transferDescription'),
            'amount' => $request->input('amount'),
            'description' => 'Summary',
            'step' => 2,
            'stepCircle' => 'progress-bar-full'
        ];
    
        session(['summary' => $summary]);

        return redirect()->route('summary');
    }      
}
