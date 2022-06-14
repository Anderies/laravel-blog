<?php

namespace App\Http\Controllers;

use App\Models\Tulisan;
use Illuminate\Http\Request;

class TulisanController extends Controller
{
    //

    function index()
    {
        return view('test/index', ['tulisan' => Tulisan::all()]);
    }
}
