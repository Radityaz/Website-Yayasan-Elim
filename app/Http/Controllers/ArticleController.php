<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Articletable;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index (Request $request) {

        $post = Articletable::all();
        $page = 'article';
        $navcontent = 'Artikel';
    
        return view('layout.content.article', compact('page','navcontent','post'));
    }


    public function add (Request $request) {

        $DateNow = Carbon::now();

        // $request->validate([
        //     'title' => 'required|string|max:100',
        //     'author' => 'required|string|max:100',
        //     // 'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'description' => 'required|string|max:300',
        //     'content' => 'required|string',
        // ]);

        $data = new Articletable;
        $data->title = $request->title;
        $data->author = $request->author;
        $data->content = $request->content;
        $data->date = $DateNow->format('d F Y');


        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public/images');
        //     $data->image = basename($imagePath);
        // }
    
        $data->save();
    
    
        return redirect('/add')->with('success', 'Data berhasil ditambahkan!');

    }
}
