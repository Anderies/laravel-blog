<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function store(Request $request)
    {

        // return $request;
        
        // $validatedData = $request
        // $validatedData = $request->validate([
        //     'email' => 'required|unique:users',
        //     'password' => 'required|min:6|max:255',
        //     'name' => 'required|max:255',
        //     'authorName' => ['required', 'min:3', 'max:255', 'unique:users']
        // ]);
        // $validatedData = Hash::make($validatedData['password']);


        $validatedData = $request;
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:255',
            'name' => 'required|max:255',
            'authorName' => ['required', 'min:3', 'max:255', 'unique:users']
        ]);
        // @dd($validatedData);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // MASUKIN
        // return $validatedData;
        User::create($validatedData);

                                        
        return redirect('/blog')->with('successRegis', 'Registration successfull! Please Login');
    }
}
