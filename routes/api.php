<?php
use App\Http\Controllers\UserLanguageController;
use App\Http\Controllers\UserSkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/reverse-me', function (Request $request) {
    $reversed = strrev($request->input('reverse_this'));
    return $reversed;
  });

  
Route::post('/register_user_language', [UserLanguageController::class, 'store']);
Route::post('/register_user_skill', [UserSkillController::class, 'store']);

Route::get('/posts', function(){
    dd('test api update');
});
