<?php

use App\Http\Controllers\Api\VideoGiocoController;
use Illuminate\Support\Facades\Route;

Route::get('/videogiochi', [VideoGiocoController::class, 'index']);
Route::get('/videogiochi/{videoGioco}', [VideoGiocoController::class, 'show']);