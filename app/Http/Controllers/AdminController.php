<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view ('admin.dashboard');
    }
    public function donatur(){
        return view ('admin.donatur');
    }
    public function donasi(){
        return view ('admin.donasi');
    }
    public function tujuan(){
        return view ('admin.tujuan');
    }
    public function laporan(){
        return view ('admin.laporan');
    }
    public function login(){
        return view ('admin.login');
    }
}
