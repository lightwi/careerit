<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function pages()
    {
        return view('pages.pages');
    }

    public function roadmap()
    {
        return view('pages.roadmap');
    }

    public function meetrohit()
    {
        return view('pages.profilepage');
    }

    public function aboutpage()
    {
        return view('pages.aboutpage');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
