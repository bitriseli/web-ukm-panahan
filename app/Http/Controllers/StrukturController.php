<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index(){
        return view('dashboard.struktur.struktur');
    }

    public function store(){
        return view('dashboard.struktur.create');
    }
}
