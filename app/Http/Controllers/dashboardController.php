<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $posts = post::all();
        return view('pages.dashboard', compact('posts'),[
            'title' => 'dashboard',
        ]);
    }
    
}
