<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GameController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('/games', [GameController::class, 'index'])->name('api.v1.games.index');
    Route::get('/games/{id}', [GameController::class, 'show'])->name('api.v1.games.show');

    // Route::post('/games', [GameController::class, 'store'])->name('api.v1.games.store');
    // Route::put('/games/{id}', [GameController::class, 'update'])->name('api.v1.games.update');
    // Route::delete('/games/{id}', [GameController::class, 'destroy'])->name('api.v1.games.destroy');
});
