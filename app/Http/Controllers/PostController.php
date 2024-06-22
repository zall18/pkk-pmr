<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['artikel'] = Post::latest()->paginate(8);
        return view('index', $data);
    }

    // Article Controller (SHOW DATA)

    public function article()
    {

        $data['post'] = post::where('type_post', '=', 'article')->latest()->get();
        $data['obat'] = post::where('type_post', '=', 'article')->where('id_category', '=', '1')->get();
        $data['p3k'] = post::where('type_post', '=', 'article')->where('id_category', '=', '2')->get();
        $data['pmr'] = post::where('type_post', '=', 'article')->where('id_category', '=', '3')->get();

        return view('articlePage', $data);
    }
    // Video Controller (SHOW DATA)

    public function video()
    {

        $data['post'] = post::where('type_post', '=', 'video')->latest()->get();
        $data['obat'] = post::where('type_post', '=', 'video')->where('id_category', '=', '1')->get();
        $data['p3k'] = post::where('type_post', '=', 'video')->where('id_category', '=', '2')->get();
        $data['pmr'] = post::where('type_post', '=', 'video')->where('id_category', '=', '3')->get();

        return view('videoPage', $data);
    }

    // Image Controller (SHOW DATA)

    public function image()
    {

        $data['post'] = post::where('type_post', '=', 'image')->latest()->get();
        $data['obat'] = post::where('type_post', '=', 'image')->where('id_category', '=', '1')->get();
        $data['p3k'] = post::where('type_post', '=', 'image')->where('id_category', '=', '2')->get();
        $data['pmr'] = post::where('type_post', '=', 'image')->where('id_category', '=', '3')->get();

        return view('imagePage', $data);
    }

    // Category Controller (SHOW)

    public function showCategory()
    {

        $data['data'] = Category::all();
        return view('categoryPage', $data);

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
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
