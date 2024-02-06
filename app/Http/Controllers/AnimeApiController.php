<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeApiController extends Controller
{
    public function home(){


        return view('homepage');
    }

    function index(){

        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json()['data'];

        return view('anime',['response'=>$response]);

    }
    
    function show($id){

        $response = Http::get('https://api.jikan.moe/v4/anime/'.$id)->json()['data'];



        return view('show',['response'=>$response]);

    }
    

}
