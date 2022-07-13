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

Route::get('/', function () {
    return view('list-materials');
});
Route::get('list-materials', function () {
    return view('list-materials');
});
Route::get('create-category', function () {
    return view('create-category');
});
Route::get('create-tag', function () {
    return view('create-tag');
});
Route::get('list-tag', function () {
    return view('list-tag');
});
Route::get('list-category', function () {
    return view('list-category');
});
Route::get('view-materials', function () {
    return view('view-materials');
});
Route::get('create-material',[MaterialsController::class, 'createView']);
Route::post('post-material',[MaterialsController::class, 'insertMaterial']);
Route::get('list-materials',[MaterialsController::class, 'index']);
Route::post('materialsSearch',[MaterialsController::class, 'materialsSearch']);
Route::get('edit-material/{id}',[MaterialsController::class, 'showUpdate']);
Route::post('update-material/{id}', [MaterialsController::class, 'update']);
