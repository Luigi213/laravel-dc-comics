<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Comic;

class PagesController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view('homepage', compact('comics'));
    }

    public function show(){
        $comics = Comic::all();
        
        return view('comic', compact('comics'));
    }
}
