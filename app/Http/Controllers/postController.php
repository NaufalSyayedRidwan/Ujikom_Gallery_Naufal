<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\foto;
use App\Models\post;
use Illuminate\View\View;

class postController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'post';
        return view('pages.post', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $validatedData = $request->validate([
            'foto' => 'image|file|max:2024',
            'judul_foto' => 'required|max:255',
            'deskripsi' => 'required|max:255'
        ]);


        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('posts','public');
        }

        $validatedData['id_user'] = auth()->user()->id;
        post::create($validatedData);

        return redirect('/post')->with('success', 'New post has been added!');
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
        //
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
        //
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