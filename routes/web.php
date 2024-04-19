<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::resource('/',IndexController::class,['only'=>['index'],'names'=>['index'=>'home']]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
