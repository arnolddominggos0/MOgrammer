<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\KuisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/comment-save', [ForumController::class, 'saveComment'])->name('saveComment');
Route::post('/comment-view', [ForumController::class, 'viewComment'])->name('viewComment');

Route::get('/kuis/{category}', [KuisController::class, 'getQuestionsByCategory']);
Route::post('/submitresult', [KuisController::class, 'saveResult']);