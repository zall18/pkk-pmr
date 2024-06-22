<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $data['userCount'] = User::count();
        $data['postCount'] = Post::count();

        return view('admin.index', $data);

    }
}
