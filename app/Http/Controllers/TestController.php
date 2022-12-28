<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function validateUrl(Request $request) {

        $response = rescue(function () use($request) {
            return Http::retry(3, 1000)->get($request->url);
        }, function ($exception) {
            return $exception instanceof ConnectionException;
        });
        dd($response);
    }
}
