<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarUkm;

class DaftarController extends Controller
{
    public function guest(){
        return view('pendaftaran');
    }

    public function index(){
        $daftar = DaftarUkm::latest()->get();
        return view('dashboard.pendaftaran.index', compact(
            'daftar',
        ));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required |max :100',
            'nim' => 'required |max :100',
            'jurusan' => 'required |max :100',
            'prodi' => 'required |max :100',
            'jk' => 'required|max :100',
            'nohp' => 'required|max :100',
            'image' => 'image|file|max:1024',
        ]);
        DaftarUkm::create($validatedData);
        return redirect('/info-daftar');
    }
}
