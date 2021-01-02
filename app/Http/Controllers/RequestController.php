<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    public function index(){
        //Http::get("https://api.airtable.com");

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env("AIRTABLE_API_KEY"),
        ])->get('https://api.airtable.com/v0/appsxUWtKODuadN4y/showcase'
        )->json();
//        @dd($response);
        return view("welcome", ['response' => $response['records']]);
    }
}
