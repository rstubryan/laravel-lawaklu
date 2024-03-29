<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            "categories" => Category::all(),
            "title" => "Manage Categories"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            "categories" => Category::all(),
            "title" => "Add categories",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "slug" => "unique:posts",
        ]);

        $validatedData["user_id"] = auth()->user()->id;

        Category::create($validatedData);
        return redirect("/dashboard/categories")->with("success", "Berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Periksa apakah ada post yang menggunakan kategori ini
        $postsWithCategory = Post::where('category_id', $category->id)->exists();

        // Jika ada post yang menggunakan kategori ini, kembalikan dengan pesan error
        if ($postsWithCategory) {
            return redirect("/dashboard/categories")->with("error", "Tidak dapat menghapus kategori ini karena masih digunakan oleh satu atau lebih post.");
        }

        // Jika tidak ada post yang menggunakan kategori ini, lanjutkan dengan penghapusan
        Category::destroy($category->id);

        return redirect("/dashboard/categories")->with("success", "Berhasil dihapus!");
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
