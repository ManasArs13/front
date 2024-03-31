<?php

namespace App\Http\Controllers;

use App\Models\Res;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResController extends Controller
{
    public function index(Request $request)
    {
        $session_id = $request->session()->getId();
        $responses = Res::where('session_id', '=', $session_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        if (count($responses) == 0) {
            $response = Res::create(['session_id' => $request->session()->getId()]);
            return redirect()->route('response.show', ['response' => $response->id]);
        }

        return view('response.index', ['responses' => $responses]);
    }

    public function store(Request $request)
    {
        $resCount = Res::where('session_id', $request->session()->getId())->count();

        if (!Auth::check() && $resCount > 4) {
            return redirect()->back()->with('warning', 'Зарегистрируйтесь или войдите, чтобы получить полный доступ');
        }

        if ($resCount > 10) {
            return redirect()->back()->with('warning', 'У вас превышен лимит');
        }

        Res::create(['session_id' => $request->session()->getId()]);
        
        return redirect()->back()->with('success', 'API добавлен');
    }

    public function update(Request $request, $response)
    {
        $session_id = $request->session()->getId();
        
        $response = Res::with('headers', 'cookies')
            ->where('session_id', '=', $session_id)
            ->find($response);

        if (!$response) {
            return redirect()->route('response.index')->with('alert', 'API найден');
        }

        $response->body = $request->body;
        $response->update();

        return redirect()->route('response.show', ['response' => $response->id])->with('success', 'body обнавлён');
    }

    public function show(Request $request, $response)
    {
        $session_id = $request->session()->getId();
        $res = Res::where('session_id', '=', $session_id)
            ->find($response);

        if (!$response) {
            return redirect()->route('response.index')->with('alert', 'API не найден');
        }

        $responses = Res::where('session_id', '=', $session_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('response.show', ['res' => $res, 'responses' => $responses]);
    }

    public function destroy(Request $request, $response)
    {
        $session_id = $request->session()->getId();
        $response = Res::where('session_id', '=', $session_id)
            ->find($response);

        if (!$response) {
            return redirect()->route('response.index')->with('alert', 'API не найден');
        }
        
        $response->delete();

        return redirect()->route('response.index')->with('success', 'API добавлен');
    }
}
