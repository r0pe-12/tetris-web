<?php

use App\Http\Controllers\ScoreController;
use App\Models\Score;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $scores = Score::all()->sortByDesc('score')->take(10);
    return view('welcome', ['scores' => $scores]);
});

Route::post('/save_score', [ScoreController::class, 'saveScore']);

Route::get('/download', function () {
    $path = storage_path('app/public/tetris.zip');
    return response()->download($path, 'tetris.zip');
});
