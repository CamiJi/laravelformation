<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {

        $posts = [
            'Mon premier post',
            'Mon deuxième post'
        ];

        $title = 'Mon super Tiiiiitre';
        $title2 = 'Mon second Titre';

        // return view('articles', compact('title', 'title2'));
        // return view('articles')->with('title', $title);

        // return view('articles', [
        //     'title' => $title,
        //     'title2' => $title2
        // ]);

        return view('articles', compact('posts', 'title', 'title2'));
    }

    public function show($id){
        $posts = [
            1 => 'Mon titre n°1',
            2 => 'Mon titre n°2'
        ];

        $post = $posts[$id] ?? 'Pas de post trouvé';

        return view('article',[
            'post' => $post
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
