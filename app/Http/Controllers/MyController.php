<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class MyController extends Controller
{
    public function main(){
        return view('main');
    }

    public function menu(){
        return view('menu');
    }

    public function about(){
        return view('about');
    }
}
