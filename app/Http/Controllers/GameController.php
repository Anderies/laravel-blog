<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public $level = 1;

    public function index()
    {
        return view('contoh/game', [
            "Nama" => "Jovi", 
            "level" => $this->level, 
            "gold" => 90000
        ]);
        // return view('contoh/game', [

        // );
    }

    public function add(Request $request){
        return $request;
    }
    
}
