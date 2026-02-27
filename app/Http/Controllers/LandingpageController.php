<?php

namespace App\Http\Controllers;
use App\Models\TujuanDonasi;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{

    public function donasi_list()
       // LIST TUJUAN DONASI
    {
        $tujuanDonasi = TujuanDonasi::where('status', 'aktif')->get();
        return view('landingpage.donasi_list', compact('tujuanDonasi'));
    }

    // FORM DONASI BERDASARKAN TUJUAN
public function donasi_sekarang($id)
{
    $tujuan = TujuanDonasi::findOrFail($id);
    return view('landingpage.donasi_sekarang', compact('tujuan'));
}


    public function home(){
        return view ('landingpage.home');
    }
    public function about(){
        return view ('landingpage.about');
    }
    public function donasi_detail(){
        return view ('landingpage.donasi_detail');
    }

    public function event_list(){
        return view ('landingpage.event_list');
    }
    public function event_detail(){
        return view ('landingpage.event_detail');
    }
    public function galery(){
        return view ('landingpage.galery');
    }
    public function contact(){
        return view ('landingpage.contact');
    }
}
