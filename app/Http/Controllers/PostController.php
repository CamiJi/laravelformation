<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $post = Post::find(1);
        // $post->update([
        //     'title' => 'Mon titre modifié'
        // ]);

        // $post = Post::find(10);
        // $post->delete();
        // dd($post);

        // $posts = Post::orderBy('created_at', 'desc')->take(3)->get();


        $posts = Post::all();
        $video = Video::find(1);


        return view('articles', [
            'posts' => $posts,
            'video' => $video
        ]);

        // dd($posts);

        // return view('articles', [
        //     'title' => $title,
        //     'title2' => $title2
        // ]);

        // return view('articles')->with('title', $title);
        // return view('articles', compact('posts', 'title', 'title2'));
    }

    public function show($id)
    {
        // $posts = [
        //     1 => 'Mon titre n°1',
        //     2 => 'Mon titre n°2'
        // ];

        // $post = $posts[$id] ?? 'Pas de post trouvé';


        $post = Post::findOrFail($id); //FinfOrFail() renvoie une erreur 404 si l'id n'existe pas
        // $post = Post::where('title', '=', '')->firstOrFail();

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // dd($request->title);

        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        //Pour utiliser ::create() il faut définir $fillable dans le model 
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);



        // dd($post);
        // dd($request->input('content'));
    }

    public function register()
    {
        $post = Post::find(11);

        $comment1 = new Comment(["content" => "Mon commentaire 1"]);
        $comment2 = new Comment(["content" => "Mon commentaire 2"]);
        $post->comments()->saveMany([$comment1, $comment2]);


        $video = Video::find(1);
        $comment3 = new Comment(["content" => "Mon commentaire video"]);
        $video->comments()->save($comment3);
    }
}
