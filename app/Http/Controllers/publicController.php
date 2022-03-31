<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function __invoke($page)
    {
        $metaTitle = __('Meta Title: ' . $page);
        if($metaTitle == 'Meta Title: ' . $page) {
            $metaTitle = NULL;
        }
        return view('pages.' . $page, ['metaTitle' => $metaTitle]);
    }

    // public function getAbout() {
    //     return view('pages.about', ['metaTitle' => 'About us']);
    // }

    // public function getContact() {
    //     return view('pages.contact', ['metaTitle' => 'Contact us']);
    // }

    // public function getTerms() {
    //     return view('pages.terms', ['metaTitle' => 'Terms']);
    // }

}
