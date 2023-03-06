<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/task', function () {
    return view('task');
});

Route::get('/recieve', function () {
    return view('listener');
});

Route::post('/sendEvent', function (Request $request) {
    $message = $request->get('message');
    event(new \App\Events\SendMessage($message));
});