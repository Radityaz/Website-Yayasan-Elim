<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articletable;


class ArticleDetailController extends Controller
{
    public function index($id) {

        $page = 'articledetail';
        $navcontent = '';
        $article = Articletable::find($id);


        return view('layout.content.articledetail')->with(['page' => $page, 'navcontent' => $navcontent, 'article' => $article]);
    }
}
