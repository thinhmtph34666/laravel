<?php

use App\Http\Middleware\EnsureTokenIsValid;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(EnsureTokenIsValid::class);
// Route::view('/', 'welcome');
// Route::get('/user/{id}/{name?}', function(string $id, string $name = null) {
//     return 'User ' . $id . '- Name:' . $name;
// })->where('id', '[0-9]+');
