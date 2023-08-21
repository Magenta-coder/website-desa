<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        $jabatan = Jabatan::latest()->paginate(5);

        return view('jabatan.index', compact('jabatan'));
    }

    public function create() { 
        return view('jabatan.create'); 
    }

    public function store(Request $request) { 
        //Validasi Formulir 
        $this->validate($request, [ 
            'nama' => 'required', 
            'jabatan' => 'required', 
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif' 
        ]); 

        $imagePath = $request->file('foto')->store('jabatan_images', 'public');
        
        //Fungsi Simpan Data ke dalam Database 
        Jabatan::create([ 
            'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 
            'foto' => $imagePath 
        ]);

        return redirect()->route('jabatan.index')->with(['success' => 'Profile Berhasil Disimpan']);
    }

    public function edit($id) { 
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit', compact('jabatan')); 
    }

    public function update($id, Request $request) { 
        //Validasi Formulir 
        $this->validate($request, [ 
            'nama' => 'required', 
            'jabatan' => 'required', 
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
        ]); 
        $jabatan = Jabatan::find($id);
        if($request->foto == null){
        $jabatan->update([ 
            'nama' => $request->nama,  
            'jabatan' => $request->jabatan 
        ]);
        }else{
        $imagePath = $request->file('foto')->store('jabatan_images', 'public');
        
        //Fungsi Simpan Data ke dalam Database 
        $jabatan->update([ 
            'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 
            'foto' => $imagePath 
        ]);
        }

        return redirect()->route('jabatan.index')->with(['success' => 'Profile Berhasil Diupdate']);
    }

    public function destroy($id) { 

        $jabatan = Jabatan::find($id);
        if ($jabatan) {
            // Hapus jabatan
            $jabatan->delete();
    
            // Redirect dengan pesan sukses
            return redirect()->route('jabatan.index')->with(['success' =>'Profile berhasil dihapus.']);
        }
    
        // Jika jabatan tidak ditemukan, redirect dengan pesan error
        return redirect()->route('jabatan.index')->with(['error' => 'Profile tidak ditemukan.']);
    }
}
