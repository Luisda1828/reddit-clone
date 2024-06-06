<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('post.comments');   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{


    // Crear el comentario
    Comment::create([
        'post_id' => $request->post_id,
        'content' => $request->content,
    ]);

    // Redirigir a la página de comentarios del post con un mensaje de éxito
    $post= Post::find($request->post_id);
    $comments= Comment::where('post_id', $request->post_id)->get();
    return view('post.comments', compact('post', 'comments'));
   
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $post= Post::find($id);
        $comments= Comment::where('post_id', $id)->get();
        return view('post.comments', compact('post', 'comments'));
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        //
       
        $comment = Comment::find($request->comment_id);
        $comment->delete();
        $post= Post::find($id);
        $comments= Comment::where('post_id', $id)->get();
        return view('post.comments', compact('post', 'comments'));
    }
}
