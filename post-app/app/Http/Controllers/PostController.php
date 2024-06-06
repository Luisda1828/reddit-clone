<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Post::all();
        return view('post.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,)
    {
        //
        Post::create([
            'title' => $request->title,
            'content' =>  $request->content,
        ]);
        return redirect()->route('posts.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
        $data = Post::find($id);
        return view('post.edit', compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     */

     public function edit(String $id)
     {
         //

         $data = Post::find($id);
         $data->delete();
         return redirect()->route('posts.index');
     }


    public function update(Request $request)
    {  
        $data = Post::find($request->id);
        if($data){
         $data->update([
             
             'title' => $request->title,
             'content' => $request->content
             
         ]);
        }
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //
        $data = Post::find($id);
        $data->delete();
        return redirect()->route('posts.index');
    } 
}
