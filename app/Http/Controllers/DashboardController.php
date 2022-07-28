<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $countpendaftar = DB::table('daftar_ukms')->count();
        $countuser = DB::table('users')->count();
        return view('dashboard.index', compact(
            'countpendaftar',
            'countuser',
        ));
    }
}
