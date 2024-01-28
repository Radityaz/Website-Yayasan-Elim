<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;

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
//     return view('layout.main');
// });


Route::get('/', function () {
    return view('layout.content.home');
});

Route::get('/about', function () {
    return view('layout.content.about');
});

Route::get('/article', function () {
    return view('layout.content.article');
});

Route::get('/sd', function () {
    return view('layout.content.sdwidyakirana');
});

Route::get('/kb', function () {
    return view('layout.content.kbfirdaus');
});

Route::get('/tpa', function () {
    return view('layout.content.tpamoms');
});
