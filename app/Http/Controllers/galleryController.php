<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class galleryController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index( $id)
    {
        //get posts
        $posts = Post::where('id_user', $id)->latest()->paginate(5);

        //render view with posts
        return view('pages.gallery', compact('posts'));
    }

    public function show(string $id)
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('pages.show', compact('post'));
    }

    public function showedit($id)
    {
        //get post by ID
        $posts = Post::where('id',$id)->get();

        //render view with post
        return view('pages.edit', compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_foto' => 'required',
            'deskripsi' => 'required'
        ]);

        $post = post::find($id);
        $post->judul_foto = $request->input('judul_foto');
        $post->deskripsi = $request->input('deskripsi');
        $post->save();

        //render view with post
        return redirect()->route('dashboard')->with('success', 'Post has been edited!');
    }

    public function destroy(string $id)
    {
        //get post by ID
        $file_path = post::find($id);
        $foto = $file_path->foto;
        Storage::disk('public')->delete($foto);

        //delete post
        $file_path->delete();

        //redirect to index
        return redirect()->back();
    }
}


