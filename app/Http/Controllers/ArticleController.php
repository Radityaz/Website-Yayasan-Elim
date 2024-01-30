<?php

namespace App\Http\Controllers;

use App\Models\Articletable;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function add (Request $request) {

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
        $data->description = $request->description;
        $data->content = $request->content;

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public/images');
        //     $data->image = basename($imagePath);
        // }
    
        $data->save();
    
    
        return redirect('/add')->with('success', 'Data berhasil ditambahkan!');

    }
}
