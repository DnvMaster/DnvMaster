<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortfoliosController;


Route::resource('/',IndexController::class,['only'=>['index'],'names'=>['index'=>'home']]);
Route::resource('/portfolios',PortfoliosController::class,['parameters' => ['portfolios'=>'alias']]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
