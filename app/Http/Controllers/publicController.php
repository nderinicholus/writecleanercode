<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function getAbout() {
        return view('pages.about', ['metaTitle' => 'About us']);
    }

    public function getContact() {
        return view('pages.contact', ['metaTitle' => 'Contact us']);
    }

    public function getTerms() {
        return view('pages.terms', ['metaTitle' => 'Terms']);
    }

}
