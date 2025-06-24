<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\File\FileController;

Route::middleware(['auth', 'isModerator'])->group(function () {
    Route::resource('files', FileController::class);
});