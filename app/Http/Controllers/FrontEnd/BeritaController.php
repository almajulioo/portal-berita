<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

use App\Models\Article;

class BeritaController extends Controller
{
    public function index()
    {

        $berita = Article::all();
        return view('berita')->with('berita', $berita);
    }

    public function show($id)
    {
        $berita = Article::findOrFail($id);
        return view('detail')->with('berita', $berita);
    }

    // public function like($id)
    // {
    //     $berita = Article::findOrFail($id);
    //     $berita->is_liked = !$berita->is_liked; 
    //     $berita->liked_by_user_id = auth()->id(); 
    //     $berita->save();

    //     return redirect()->back()->with('success', 'Berita updated successfully!');
    // }
}
