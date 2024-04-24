<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\ArticlesController;


Route::resource('/',IndexController::class,['only'=>['index'],'names'=>['index'=>'home']]);
Route::resource('/portfolios',PortfoliosController::class,['parameters' => ['portfolios'=>'alias']]);
Route::resource('/articles',ArticlesController::class,['parameters'=>['articles'=>'alias']]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
