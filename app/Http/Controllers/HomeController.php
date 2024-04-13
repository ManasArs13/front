<?php

namespace App\Http\Controllers;

use App\Mail\SupportSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $urlTo = 'support';

        return view('pages.support', ['urlTo' => $urlTo]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'mes' => 'required',
        ]);

        $content = [
            'email' => $request->email,
            'name' => $request->name,
            'mes' => $request->mes
        ];

        Mail::to('manasyan.a.s@ya.ru')->send(new SupportSend($content));
        
        return redirect()->route('support')->with('success', trans('pages.The message has been sent. Thank you!'));
    }
}
