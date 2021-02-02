<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function GuzzleHttp\Promise\all;

class RequestController extends Controller
{
    public function index()
    {
        //Http::get("https://api.airtable.com");

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env("AIRTABLE_API_KEY"),
        ])->get('https://api.airtable.com/v0/appsxUWtKODuadN4y/showcase'
        )->json();

        return view("welcome", ['response' => $response['records']]);
    }

    public function show($id) {

        //Http::get("https://api.airtable.com");

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env("AIRTABLE_API_KEY"),
        ])->get('https://api.airtable.com/v0/appsxUWtKODuadN4y/showcase/' . $id
        )->json();


        return view("details", ['response' => $response]);

        }

    // Dump & Die function, this way you can check the pathing.

//    public function dd()
//    {
//        //Http::get("https://api.airtable.com");
//
//        $response = Http::withHeaders([
//            'Authorization' => 'Bearer ' . env("AIRTABLE_API_KEY"),
//        ])->get('https://api.airtable.com/v0/appsxUWtKODuadN4y/showcase'
//        )->json();
//        @dd($response);
//    }

}
