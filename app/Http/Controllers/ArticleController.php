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

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('image', $file_name,'public');

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
        $data->image = $image;
        $data->content = $request->content;
        $data->date = $DateNow->format('d F Y');


    
        $data->save();
    
    
        return redirect('/add')->with('success', 'Data berhasil ditambahkan!');

    }


}
