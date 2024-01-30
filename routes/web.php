<?php

use App\Http\Controllers\ArticleController;
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

    $page = 'home';
    $navcontent = '';

    return view('layout.content.home', compact('page', 'navcontent'));
});

Route::get('/add', function () {

    $page = '';
    $navcontent = 'Tambah Data';

    return view('layout.content.add', compact('page','navcontent'));
});


Route::get('/about', function () {

    $page = 'about';
    $navcontent = 'About';

    return view('layout.content.about', compact('page','navcontent'));
});

Route::get('/article', function () {

    $page = 'article';
    $navcontent = 'Artikel';

    return view('layout.content.article', compact('page','navcontent'));
});

Route::get('/sd', function () {

    $page = 'place';
    $navcontent = 'SD Widya Kirana';

    return view('layout.content.sdwidyakirana', compact('page','navcontent'));
});

Route::get('/kb', function () {

    $page = 'place';
    $navcontent = 'KB Firdaus';
    
    return view('layout.content.kbfirdaus', compact('page','navcontent'));
});

Route::get('/tpa', function () {

    $page = 'place';
    $navcontent = "TPA Mom's Care";

    return view('layout.content.tpamoms', compact('page','navcontent'));
});


Route::post('/create', [ArticleController::class, 'add']);
