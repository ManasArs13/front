<?php

namespace App\Http\Controllers;

use App\Models\Cookie;
use App\Models\Req;
use App\Models\Res;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function store(Request $request)
    {
        $session_id = $request->session()->getId();

        if ($request->res_id) {
            $response = Res::where('session_id', '=', $session_id)
                ->find($request->res_id);

            if (!$response) {
                return redirect()->route('response.index')->with('alert', 'The api not founded');
            }

            if (Cookie::where('cookietable_id', $response->id)->count() < 15) {
                Cookie::create([
                    'cookietable_id' => $response->id,
                    'cookietable_type' => 'App\Models\Res',
                    'key'         => $request->cookie_key,
                    'value'       => $request->cookie_value,
                ]);

                return redirect()->route('response.show', ['response' => $response->id])->with('success', 'The cookie saved');
            } else {
                return redirect()->route('response.show', ['response' => $response->id])->with('warning', 'you have raised the limit');
            }
        }

        if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                ->find($request->req_id);

            if (!$req) {
                return redirect()->route('response.index')->with('alert', 'The api not founded');
            }

            if (Cookie::where('cookietable_id', $req->id)->count() < 15) {
                Cookie::create([
                    'cookietable_id' => $req->id,
                    'cookietable_type' => 'App\Models\Req',
                    'key'         => $request->cookie_key,
                    'value'       => $request->cookie_value,
                ]);

                return redirect()->route('request.show', ['request' => $req->id])->with('success', 'The cookie saved');
            } else {
                return redirect()->route('response.show', ['response' => $req->id])->with('warning', 'you have raised the limit');
            }
        }

        return redirect()->back()->with('alert', 'The API not founded');
    }

    public function destroy(Request $request, $cookie)
    {
        $session_id = $request->session()->getId();

        if ($request->res_id) {
            $response = Res::where('session_id', '=', $session_id)
                ->find($request->res_id);

            if (!$response) {
                return redirect()->back()->with('alert', 'The API not founded');
            }

            Cookie::destroy($cookie);

            return redirect()->back()->with('success', 'The header deleted');
        }

        if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                ->find($request->req_id);

            if (!$req) {
                return redirect()->back()->with('alert', 'The API not founded');
            }

            Cookie::destroy($cookie);

            return redirect()->back()->with('success', 'The header deleted');
        }

        return redirect()->back()->with('alert', 'The API not founded');
    }
}
