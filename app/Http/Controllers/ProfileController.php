<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $jabatan = Jabatan::orderBy('created_at', 'asc')->get();

        return view('profile.index', compact('jabatan'));
    }
}
