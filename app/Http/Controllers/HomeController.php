<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function docs()
    {
        return view('pages.docs');
    }

    public function support()
    {
        return view('pages.support');
    }
}
