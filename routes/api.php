<?php

//use App\Http\Controllers\API\FilmController;
use App\Http\Controllers\API\GenreController;
use App\Http\Controllers\API\AktorController;
use App\Http\Controllers\API\FilmController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "API" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [LoginController::class,'logout']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('aktor', AktorController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('film', FilmController::class);


});
Route::post('login', [LoginController::class,'authenticate']);
Route::post('register', [LoginController::class,'register']);

//route kategori
// Route::get('kategori', [KategoriController::class,'index']);
// Route::post('kategori', [KategoriController::class,'store']);
// Route::get('kategori/{id}', [KategoriController::class,'show']);
// Route::put('kategori/{id}', [KategoriController::class,'update']);
// Route::delete('kategori/{id}', [KategoriController::class,'destroy']);



//route film
//Route::resource('film', FilmController::class);
