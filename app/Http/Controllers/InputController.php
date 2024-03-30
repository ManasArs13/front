<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Req;
use Illuminate\Http\Request;

class InputController extends Controller
{
    public function store(Request $request)
    {
        $session_id = $request->session()->getId();

         if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                ->find($request->req_id);

            if (!$req) {
                return redirect()->route('response.index')->with('alert', 'The api not founded');
            }

            Input::create([
                'request_id'  => $req->id,
                'key'         => $request->input_key,
                'value'       => $request->input_value,
            ]);

            return redirect()->route('request.show', ['request' => $req->id])->with('success', 'The input saved');
        }

        return redirect()->back()->with('alert', 'The API not founded');             
    }

    public function destroy(Request $request, $input)
    {
        $session_id = $request->session()->getId();

        if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                        ->find($request->req_id);

            if (!$req) {
                return redirect()->back()->with('alert', 'The API not founded');
            }

            Input::destroy($input);

            return redirect()->back()->with('success', 'The input deleted');
        }

        return redirect()->back()->with('alert', 'The API not founded');
    }
}
