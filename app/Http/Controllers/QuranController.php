<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    public function index(){
        $response = Http::get('https://quran-api.santrikoding.com/api/surah');
        return view('quran.index',[
            'response' => json_decode($response)
        ]);
    }

    public function details($id){
        $response = Http::get("https://quran-api.santrikoding.com/api/surah/$id");
        return view('quran.detail',[
            'response' => json_decode($response)
        ]);
    }
}