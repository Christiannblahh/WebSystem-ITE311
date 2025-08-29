<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Homepage
    public function index()
    {
        return view('index'); // looks for app/Views/home.php
    }

    // About page
    public function about()
    {
        return view('about'); // looks for app/Views/about.php
    }

    // Contact page
    public function contact()
    {
        return view('contact'); // looks for app/Views/contact.php
    }
}
