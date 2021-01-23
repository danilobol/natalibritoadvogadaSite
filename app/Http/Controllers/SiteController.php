<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function aboult(){
        return view('pages.aboult');
    }

    public function associados(){
        return view('pages.associados');
    }

    public function contact(){
        return view('pages.contact');
    }
}
