<?php

use App\Models\Score;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $scores = Score::all()->sortByDesc('score');
    return view('welcome', ['scores' => $scores]);
});

Route::get('/download', function () {
    $path = storage_path('app/public/tetris.zip');
    return response()->download($path, 'tetris.zip');
});
