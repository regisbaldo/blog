<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();

       
        return view('painel.posts.posts')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.posts.create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->hasFile('photo')){

            $dir = 'uploads/profile_images/';

            $profileImage = $request->file('photo');
            $profileImageSaveAsName = time() . "-profile." . $profileImage->getClientOriginalExtension();
            $profile_image_url = $dir . $profileImageSaveAsName;
            $profileImage->move($dir, $profileImageSaveAsName);
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $profile_image_url,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/painel/posts')->with('message', 'Cadastro adicionado com sucesso');
        
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
        
        $post = Post::find($id);

        return view('painel.posts.edit_post')->with(['post' => $post]);
        
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
    
        $post = Post::find($id);

        if($request->hasFile('photo')){

            $dir = 'uploads/profile_images/';

            $profileImage = $request->file('photo');
            $profileImageSaveAsName = time() . "-profile." . $profileImage->getClientOriginalExtension();
            $profile_image_url = $dir . $profileImageSaveAsName;
            $profileImage->move($dir, $profileImageSaveAsName);
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->photo = $profile_image_url;

        $post->save();

        return redirect('/painel/posts')->with('message', 'Cadastro Atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
