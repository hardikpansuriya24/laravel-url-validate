<?php

namespace App\Http\Controllers;

/* use Illuminate\Support\Facades\Http; */
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Hardik\Challenge\Http;

class TestController extends Controller
{

    public function validateUrl(Request $request) {

        $validated = $request->validate([
            'url' => 'required|url',
        ]);
        try {
            $response = Http::retry($request->url, 10);
            dd($response);
        } catch (Error $e) {
            echo "Error caught: " . $e->getMessage();
        }
       /*  $response = rescue(function () use($request) {
            return Http::retry(110, 500)->get($request->url);
        }, function ($exception) {
            return $exception instanceof ConnectionException;
        }); */

    }
}
