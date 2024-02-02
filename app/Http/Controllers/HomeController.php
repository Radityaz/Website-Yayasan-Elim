<?php

namespace App\Http\Controllers;

use App\Models\Articletable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index (Request $request) {
        $post = Articletable::all();
        $page = 'home';
        $navcontent = '';
    
        return view('layout.content.home', compact('page','navcontent','post'));
    }
}
