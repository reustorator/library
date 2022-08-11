<?php

use App\Http\Controllers\Api\MaterialApiController;
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
Route::get('materials/{id}', [MaterialApiController::class, 'show']);
Route::post('materials/create', [MaterialApiController::class, 'store']);
Route::put('materials/{id}', [MaterialApiController::class, 'update']);
Route::delete('materials/{id}', [MaterialApiController::class, 'delete']);
Route::get('materials', [MaterialApiController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
