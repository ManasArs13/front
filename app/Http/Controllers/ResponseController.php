<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index(Request $request)
    {
        $session_id = $request->session()->getId();
        $responses = Response::with('headers', 'cookies')->where('session_id', '=', $session_id)->get();

        return view('response.index', ['responses' => $responses]);
    }
}