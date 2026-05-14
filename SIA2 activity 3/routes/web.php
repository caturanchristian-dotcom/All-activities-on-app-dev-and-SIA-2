<?php
use App\Http\Controllers\EggController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('eggs.index');
});

Route::resource('eggs', EggController::class);