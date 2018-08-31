<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;




class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts/index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post = \Domain\Post::create([
        //     'title' => $request->title,
        //     'pictureThumb' => 'nada ainda',
        //     'content'   => $request->content

        // ]);
       
        $post = new Post;
        $post->title = $request->title;
        $post->pictureThumb = 'nada por enquanto';
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Post criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Post::findOrFail(['id'=> $id]);
        $post = $p['0'];
        return view('posts/edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $p = Post::findOrFail(['id'=>$id]);
        $post = $p['0'];
        $post->title = $request->title;
        $post->pictureThumb = 'nada por enquanto';
        $post->content = $request->content;
        $post->save();

       
        return redirect()->route('posts.index')
            ->with('success', 'Post Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
       
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post apagado com sucesso!');
    }

    // public function list()
    // {
    //     $posts = Post::all();
    //     return view('posts/list', ['posts' => $posts]);
    // }

}
