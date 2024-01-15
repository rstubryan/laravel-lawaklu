<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            "posts" => Post::where('user_id', auth()->user()->id)->get(),
            "title" => "Manage memes",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            "categories" => Category::all(),
            "title" => "Add memes",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|max:255",
            "slug" => "unique:posts",
            "category_id" => "required",
        ]);

        $validatedData["user_id"] = auth()->user()->id;

        Post::create($validatedData);
        return redirect("/dashboard/posts")->with("success", "Berhasil dipost!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            "post" => $post,
            "title" => "Show post",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            "post" => $post,
            "categories" => Category::all(),
            "title" => "Edit post",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            "title" => "required|max:255",
            "category_id" => "required",
        ];

        if ($request->slug != $post->slug) {
            $rules["slug"] = "required|unique:posts";
        }

        $validatedData = $request->validate($rules);

        $validatedData["user_id"] = auth()->user()->id;

        Post::where('id', $post->id)
            ->update($validatedData);
        return redirect("/dashboard/posts")->with("success", "Berhasil diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect("/dashboard/posts")->with("success", "Berhasil dihapus!");
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
