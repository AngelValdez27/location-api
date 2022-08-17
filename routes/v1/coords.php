<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\CoordsController;

Route::get('coords', [CoordsController::class, 'getCoords']);
Route::post('coords', [CoordsController::class, 'create']);
