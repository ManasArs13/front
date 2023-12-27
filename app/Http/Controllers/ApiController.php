<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function v1_0($id)
    {
        $resp = Response::find($id);
        $headers = $resp->headers;
        $cookies = $resp->cookies;
        $body = $resp->body;

        $Headers = [];
 
            foreach ($headers as $header) {
                $Headers[$header->key] = $header->value;
            }

            foreach($cookies as $cookie) {                
                setcookie($cookie->key, $cookie->value, $cookie->time ? $cookie->time : null);
            }

        return response($body)
                ->withHeaders($Headers);
    }
}
