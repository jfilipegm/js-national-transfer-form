@extends('layout.master')
@section('content')

{{-- @if(session()->get('summary')) --}}
{{-- @dd(session()->get('summary')[0]['originAccount']) --}}

{{-- @dd('chegou aqui', session()->get('summary'),  $sum, $sum['originAccount']) --}}
<div class="">
    <p>{{session()->get('summary')[0]['originAccount']}}</p>
    <p>{{session()->get('summary')[0]['destinationIban']}}</p>
    <p>{{session()->get('summary')[0]['transferDescription']}}</p>
    <p>{{session()->get('summary')[0]['amount']}}</p>
</div>
{{-- @endif --}}
