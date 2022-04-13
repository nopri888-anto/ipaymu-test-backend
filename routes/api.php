<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BiodataController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/biodatas', [BiodataController::class, 'index']);
Route::post('/add-biodata', [BiodataController::class, 'store']);
Route::get('/edit-biodata/{uuid}', [BiodataController::class, 'edit']);
Route::put('/update-biodata/{uuid}', [BiodataController::class, 'update']);
Route::delete('/delete-biodata/{uuid}', [BiodataController::class, 'destroy']);
