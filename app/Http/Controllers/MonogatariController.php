<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonogatariController extends Controller
{
    public function index(Request $request, $game){
      return view('monogatari.index',['gametype'=>$game]);
    }
}
