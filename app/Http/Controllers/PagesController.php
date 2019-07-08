<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Products Page
    public function getProducts() {
        return view('pages.products');
    }

    // About Page
    public function getAbout() {
        return view('pages.about');
    }

    // Contact Page
    public function getContact() {
        return view('pages.contact');
    }
}
