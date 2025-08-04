<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
   public function index()
{
    $posts = Post::with(['user', 'category'])->get();
    return view('posts.main', compact('posts'));
    
}



    public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('posts.new_post', compact('categories', 'users'));
    }


    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string|min:10',
    ]);

    Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'checked' => $request->has('checked'),
        'user_id' => $request->user_id,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
}



public function edit($id)
{
     $post = Post::findOrFail($id);
    $users = User::all();
    $categories = Category::all();

    return view('posts.edit', compact('post', 'users', 'categories'));
}




public function update(Request $request, $id)
{

    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string|min:10',
    ]);

    $post = Post::findOrFail($id);
    $post->update([
        'title' => $request->title,
        'body' => $request->body,
        'checked' => $request->has('checked'),
        'user_id' => $request->user_id,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('posts.index')->with('success', 'Post updated successfully');
}




public function destroy($id)
{
   $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
}





public function show($id)
{
     $post = Post::with(['user', 'category'])->findOrFail($id);

    return view('posts.show', compact('post'));
}

}
