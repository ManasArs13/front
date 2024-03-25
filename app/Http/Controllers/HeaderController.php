<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Req;
use App\Models\Res;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function store(Request $request)
    {
        $session_id = $request->session()->getId();

        if ($request->res_id) {
            $response = Res::where('session_id', '=', $session_id)
                ->find($request->res_id);

            if (!$response) {
                return redirect()->route('response.index')->with('alert', 'The API not founded');
            }

            if (Header::where('headertable_id', $response->id)->count() < 15) {
                Header::create([
                    'headertable_id' => $response->id,
                    'headertable_type' => 'App\Models\Res',
                    'key'         => $request->header_key,
                    'value'       => $request->header_value,
                ]);

                return redirect()->route('response.show', ['response' => $response->id])->with('success', 'The header saved');
            } else {
                return redirect()->route('response.show', ['response' => $response->id])->with('warning', 'you have raised the limit');
            }
        }

        if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                ->find($request->req_id);

            if (!$req) {
                return redirect()->route('request.index')->with('alert', 'The API not founded');
            }

            if (Header::where('headertable_id', $req->id)->count() < 15) {
                Header::create([
                    'headertable_id' => $req->id,
                    'headertable_type' => 'App\Models\Req',
                    'key'         => $request->header_key,
                    'value'       => $request->header_value,
                ]);

                return redirect()->route('request.show', ['request' => $req->id])->with('success', 'The header saved');
            } else {
                return redirect()->route('request.show', ['request' => $req->id])->with('warning', 'you have raised the limit');
            }
        }

        return redirect()->back()->with('alert', 'The API not founded');
    }

    public function destroy(Request $request, $head)
    {
        $session_id = $request->session()->getId();

        if ($request->res_id) {
            $response = Res::where('session_id', '=', $session_id)
                ->find($request->res_id);

            if (!$response) {
                return redirect()->back()->with('alert', 'The API not founded');
            }

            Header::destroy($head);

            return redirect()->back()->with('success', 'The header deleted');
        }

        if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                ->find($request->req_id);

            if (!$req) {
                return redirect()->back()->with('alert', 'The API not founded');
            }

            Header::destroy($head);

            return redirect()->back()->with('success', 'The header deleted');
        }

        return redirect()->back()->with('alert', 'The API not founded');
    }
}
