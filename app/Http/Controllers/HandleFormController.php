<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleFormController
{
    public function handleForm(Request $request) {
        /* dd($request->all(), $request->input('originAccount'), 'chegou aqui caralho'); */

        $summary = [
            'originAccount' => $request->input('originAccount'),
            'destinationIban' => $request->input('destinationIban'),
            'transferDescription' => $request->input('transferDescription'),
            'amount' => $request->input('amount'),
        ];

        /* $originAccount = $request->input('originAccount'),
        $destinationIban = $request->input('destinationIban'),
        $transferDescription = $request->input('transferDescription'),
        $amount = $request->input('amount'), */

        /* return view('summary', [
            'summary' => $summary,
        ]); */

        return redirect()->route('summary')->with('summary', [$summary]);
    }
}
