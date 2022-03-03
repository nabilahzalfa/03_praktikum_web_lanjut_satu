<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($judul = null){
        if ($judul == null) {
            return view('news')
                -> with('judul', 'Home Berita');
        } else {
            return view('news2')
                -> with('judul', 'Halaman Berita');
        }
    }
}
