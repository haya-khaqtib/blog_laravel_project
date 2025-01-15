<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

class PostsController extends Controller
{

    public function index()
    {
        //$post=Post::all();
        ////لطباعة النتيجة من قاعدة البيانات نستخدم الدالة dd
        //dd($post);
        return view('blog.index')->with('posts', Post::orderBy('title', 'DESC')->get());
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);


        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $newImageName,
            'user_id' => Auth::user()->id,
            'slug' => $slug
        ]);
        return redirect('/blog')->with('message', 'Post Created Successfully');
    }

    public function show(string $slug)
    {
        //
    
    
        return view('blog.show')->with
        ('post', Post::where('slug', $slug)->first());
    }
    public function edit(string $slug)
    {
        return view('blog.edit')->
        with('post', Post::where('slug', $slug)->first());
    }
    public function update(Request $request, string $slug)
    {
        
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::where('slug', $slug)
        ->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' =>Str::slug($request->title, '-'),
            'image_path' => $newImageName,
            'user_id' => Auth::user()->id
        ]);
        $slug = Str::slug($request->title, '-');
    return redirect('/blog/'.$slug)->with('message', 'Post Updated Successfully');
    }
    public function destroy(string $slug)
    {
        
    Post::where('slug', $slug)->delete();
    return redirect('/blog')->with('message', 'Post Deleted Successfully');
    }
}
