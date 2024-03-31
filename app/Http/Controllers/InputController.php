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
                return redirect()->route('response.index')->with('alert', 'API не найден');
            }

            Input::create([
                'request_id'  => $req->id,
                'key'         => $request->input_key,
                'value'       => $request->input_value,
            ]);

            return redirect()->route('request.show', ['request' => $req->id])->with('success', 'Input сохранён');
        }

        return redirect()->back()->with('alert', 'API не найден');             
    }

    public function destroy(Request $request, $input)
    {
        $session_id = $request->session()->getId();

        if ($request->req_id) {
            $req = Req::where('session_id', '=', $session_id)
                        ->find($request->req_id);

            if (!$req) {
                return redirect()->back()->with('alert', 'API не найден');
            }

            Input::destroy($input);

            return redirect()->back()->with('success', 'Input удалён');
        }

        return redirect()->back()->with('alert', 'API не найден');
    }
}
