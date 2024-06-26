<?php

namespace App\Http\Controllers;

use App\Models\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReqController extends Controller
{
    public function index(Request $request)
    {
        $session_id = $request->session()->getId();

        $req = Req::with('headers')
            ->where('session_id', '=', $session_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('request.index', ['requests' => $req]);
    }

    public function store(Request $request)
    {
        $reqCount = Req::where('session_id', $request->session()->getId())->count();

        if (!Auth::check() && $reqCount > 4) {
            return redirect()->back()->with('warning', 'Зарегистрируйтесь или войдите, чтобы получить полный доступ');
        }

        if ($reqCount > 10) {
            return redirect()->back()->with('warning', 'У вас превышен лимит');
        }

        $reg = Req::create([
            'session_id'    => $request->session()->getId(),
            'url'           => $request->url,
            'meth'          => $request->meth
        ]);

        return redirect()->back()->with('success', 'API добавлен');
    }

    public function show(Request $request, $req)
    {
        $session_id = $request->session()->getId();
        $req = Req::where('session_id', '=', $session_id)
            ->find($req);

        if (!$req) {
            return redirect()->route('response.index')->with('alert', 'API не найден');
        }

        $requests = Req::where('session_id', '=', $session_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('request.show', ['req' => $req, 'requests' => $requests]);
    }

    public function update(Request $request, $req)
    {
        $session_id = $request->session()->getId();
        $req = Req::where('session_id', '=', $session_id)
            ->find($req);

        if (!$req) {
            return redirect()->route('response.index')->with('alert', 'API не найден');
        }

        $req->url = $request->url;
        $req->meth = $request->meth;
        $req->save();

        $requests = Req::where('session_id', '=', $session_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('request.show', ['req' => $req, 'requests' => $requests]);
    }

    public function destroy(Request $request, $req)
    {
        $session_id = $request->session()->getId();
        $req = Req::where('session_id', '=', $session_id)
            ->find($req);

        if (!$req) {
            return redirect()->route('request.index')->with('alert', 'API не найден');
        }

        $req->delete();

        return redirect()->route('request.index')->with('success', 'API удалён');
    }
}
