<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getTerms() {
        return view('pages.terms');
    }
    
}
