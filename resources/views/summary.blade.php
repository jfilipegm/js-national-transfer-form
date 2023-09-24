@extends('layout.master')

@section('content')

@include('header', ['step' =>  $summary['step'], 'description' =>  $summary['description']])
<div class="row p-3">
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-sm-5">
                <h6>
                    Origin Account
                </h6>
                <p>{{ $summary['originAccount'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-5">
                <h6>
                    Destination IBAN
                </h6>
                <p> {{ $summary['destinationIban'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">
                <h6>
                    Transfer Description
                </h6>
                <p>{{ $summary['transferDescription'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-2">
                <h6>
                    Amount 
                </h6>
                <p>{{ $summary['amount'] }}</p>
            </div>
        </div>
        <div class="row flex-column min-vh-30">
            <div class="col-12 mt-auto">
                <button id="backBtn" type="submit" class="btns back-btn">Back</button>
                <button id="confirmBtn" type="submit" class="btns next-step-btn">Confirm</button>
            </div>
        </div>
    </div>
</div>
