<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function saveScore(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'string'],
            'score' => ['required', 'integer'],
            'level' => ['required', 'integer'],
        ]);

        Score::create($validatedData);
        return response()->json(['status' => 'success']);
    }
}
