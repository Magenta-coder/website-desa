<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $berita = Berita::latest()->paginate(4);

        return view('berita_user.index', compact('berita'));
    }

    
    public function edit($id) { 
        $berita = Berita::find($id);
        return view('berita_user.detail', compact('berita')); 
    }

    public function profile() { 
        return view('berita_user.profile'); 
    }

}
