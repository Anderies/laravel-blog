<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    //
    public function show(){
        return view('learning', [
            'nama' => 'Anderies',
            'hobby' => 'play the guitar',
            'age' => '23'
        ]);
    }
}
