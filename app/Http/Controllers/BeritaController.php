<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::latest()->paginate(5);

        return view('berita.index', compact('berita'));
    }

    public function create() { 
        return view('berita.create'); 
    }

    public function store(Request $request) { 
        //Validasi Formulir 
        $this->validate($request, [ 
            'judul_berita' => 'required', 
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'deskripsi_berita' => 'required' 
        ]); 

        $imagePath = $request->file('foto_berita')->store('berita_images', 'public');
        
        //Fungsi Simpan Data ke dalam Database 
        Berita::create([ 
            'judul' => $request->judul_berita, 
            'image' => $imagePath, 
            'deskripsi' => $request->deskripsi_berita 
        ]);

        return redirect()->route('berita.index')->with(['success' => 'Berita Berhasil Disimpan']);
    }

    public function edit($id) { 
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita')); 
    }

    public function update($id, Request $request) { 
        //Validasi Formulir 
        $this->validate($request, [ 
            'judul_berita' => 'required', 
            'foto_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'deskripsi_berita' => 'required' 
        ]); 
        $berita = Berita::find($id);
        if($request->foto_berita == null){
        $berita->update([ 
            'judul' => $request->judul_berita,  
            'deskripsi' => $request->deskripsi_berita 
        ]);
        }else{
        $imagePath = $request->file('foto_berita')->store('berita_images', 'public');
        
        //Fungsi Simpan Data ke dalam Database 
        $berita->update([ 
            'judul' => $request->judul_berita, 
            'image' => $imagePath, 
            'deskripsi' => $request->deskripsi_berita 
        ]);
        }

        return redirect()->route('berita.index')->with(['success' => 'Berita Berhasil Diupdate']);
    }

    public function destroy($id) { 

        $berita = Berita::find($id);
        if ($berita) {
            // Hapus berita
            $berita->delete();
    
            // Redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' =>'Berita berhasil dihapus.']);
        }
    
        // Jika berita tidak ditemukan, redirect dengan pesan error
        return redirect()->route('berita.index')->with(['error' => 'Berita tidak ditemukan.']);
    }

}
