<?php

use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;

Route::post('/save_score', [ScoreController::class, 'saveScore']);
