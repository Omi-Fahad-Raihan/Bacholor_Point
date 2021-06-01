<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PetitionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/petitions', [PetitionController::class,'index']);
// Route::get('/petitions', [PetitionController::class,'store']);

Route::apiResource('/petitions',PetitionController::class);
// Route::resource('/petitions',PetitionController::class)->only([
//     'index' ,'store'
// ]);

/**
 * showing a strong error "Array to string conversion"
 * lots of time it take to solve,let's go ahead
 * MURDERER: "[AuthorController::class]"
 * SOLUTION: "AuthorController::class"
 */
// Route::resource('/authors', [AuthorController::class])->only([
//     'index' ,'show'
// ]);
Route::resource('/authors', AuthorController::class);
