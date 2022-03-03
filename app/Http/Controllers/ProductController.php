<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGame(){
        return view('product')
                ->with('judul', 'Marbel - Educational Games');
    }

    public function kidsGame(){
        return view('product2')
                ->with('judul', 'Marbel & Friends - Kids Games');
    }
}
