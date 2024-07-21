<?php

use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('client.index');
// });
// Route::get('single-post', function () {
//     return view('client.single-post');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/chitiet/{id}', [HomeController::class, 'chitiet']);
