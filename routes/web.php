<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SummaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::post('summary', 'HandleFormController@handleForm'); */

Route::post('/getFormData',[
    'as' => 'getFormData',
    'uses' => 'HandleFormController@handleForm'
]);

Route::get('/summary', function () {
    return view('summary');
})->name('summary');
