<?php

namespace App\Http\Controllers;

use App\Models\Res;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function v1_0($id)
    {
        $resp = Res::find($id);

        $Headers = [];
 
            foreach ($resp->headers as $header) {
                $Headers[$header->key] = $header->value;
            }

            foreach($resp->cookies as $cookie) {                
                setcookie($cookie->key, $cookie->value, $cookie->time ? $cookie->time : null);
            }

        return response($resp->body)
                ->withHeaders($Headers);
    }
}
