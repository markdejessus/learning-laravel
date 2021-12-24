<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
        return view ('welcome');
    }

 
    public function table(){

        $people = [];
        for ($i=0; $i < 5; $i++) {
            $response = Http::get('https://randomuser.me/api/')->json();
            $people[] = $response['results'][0]; 
        };

        return view('table', ['people' => $people]);

     }
}
