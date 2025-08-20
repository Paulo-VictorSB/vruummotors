<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/', function (){
    return redirect()->to('home');
});
