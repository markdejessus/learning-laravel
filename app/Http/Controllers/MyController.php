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


     public function weather(){
        $cities = ['Cebu', 'Manila', 'Davao', 'Dumaguete', 'Dubai', 'Hong Kong', 'New York', 'Baguio', 'Pasay', 'Sasmuan', 'Cotabato City', 'Siargao'];
        sort($cities);
        $weather = [];

        foreach ($cities as $city) {
            $response = Http ::get('http://api.weatherapi.com/v1/current.json?key=227d409c8ac5479094a100347212612&q=' . $city)->json();
            $weather[] = $response;
        }
        // dd($weather);
        return view ('weather', ['weather' => $weather]);
        
     }
}
