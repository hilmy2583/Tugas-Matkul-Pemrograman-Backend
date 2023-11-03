<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
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

// Route::get('/animals', function () {
//     return "Menampilkan Seluruh Data Animals";
// });

// Route::post('/animals', function () {
//     return "Menambahkan Data Animals Baru";
// });

// Route::put('/animals/{id}', function ($id) {
//     return "Mengedit Data Animals id $id";
// });

// Route::delete('/animals/{id}', function ($id) {
//     return "Menghapus Data Animals id $id";
// });

Route::get('/animals', [AnimalController::class, 'index']);

Route::post('/animals', [AnimalController::class, 'store']);

Route::put('/animals/{id}', [AnimalController::class, 'update']);

Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

//Pertemuan05
Route::get('/students', [StudentController::class, 'index']);

Route::post('/students', [StudentController::class, 'store']);

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/students/{id}', [StudentController::class, 'destroy']);

//Pertemuan06
Route::get('/students/{id}', [StudentController::class, 'show']);
