<?php

use App\Http\Controllers\PetAdoptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PetAdoptionController::class, 'create']);
Route::post('/', [PetAdoptionController::class, 'store']);

Route::get('/pet-adoption', [PetAdoptionController::class, 'create']);
Route::post('/pet-adoption', [PetAdoptionController::class, 'store']);