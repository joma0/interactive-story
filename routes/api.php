<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ChoiceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('stories', StoryController::class);

Route::apiResource('chapters', ChapterController::class);

Route::apiResource('choices', ChoiceController::class);

Route::get('stories/{story}/chapters', function (App\Models\Story $story) {
    return response()->json($story->chapters);
});

Route::get('chapters/{chapter}/choices', function (\App\Models\Chapter $chapter) {
    return response()->json($chapter->originChoices);
});
