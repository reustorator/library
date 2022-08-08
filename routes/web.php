<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[MaterialsController::class, 'index']);
Route::get('create-material',[MaterialsController::class, 'createView']);
Route::post('insertMaterial',[MaterialsController::class, 'insertMaterial']);
Route::get('list-materials',[MaterialsController::class, 'index']);
Route::get('materialsSearch',[MaterialsController::class, 'index']);
Route::get('edit-material/{id}',[MaterialsController::class, 'showUpdate']);
Route::post('update-material/{id}', [MaterialsController::class, 'update']);
Route::get('delete-material/{id}', [MaterialsController::class, 'destroy']);
Route::get('view-material/{id}', [MaterialsController::class, 'viewMaterial']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
