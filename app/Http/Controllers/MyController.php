<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::orderBy('updated_at', 'DESC')->take(5)->get();

      return view('home-page', compact('posts'));
    }

    public function showCategory($id)
    {
      $category = Category::findOrFail($id);

      return view('categories', compact('category'));
    }

    public function showPost($id)
    {
      $post = Post::findOrFail($id);

      return view('post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();

      return view('create-post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request -> validate([
        'title' => 'required',
        'text' => 'required',
        'category_id' => 'required'
      ]);
      Post::create($validatedData);

      return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = Category::all();
      $post = Post::findOrFail($id);

      return view('edit-post', compact('categories', 'post'));
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
      $validatedData = $request -> validate([
        'title' => 'required',
        'text' => 'required',
        'category_id' => 'required'
      ]);
      Post::whereId($id) -> update($validatedData);

      return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Post::findOrFail($id) -> delete();

      return redirect('/');
    }
}
