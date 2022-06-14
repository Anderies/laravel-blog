<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(User $user)
    {
        return view('dashboard/index', [
            'title' => null,
            'hashtag' => null,
            'isi' => null,
            'user' => User::where('id', auth()->user()->id)->get()
            // Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create(Request $request)
    {
        $tulisan_data = $request;
        return $tulisan_data;
        // Tulisan::create($tulisan_data)
        // Tulisan::create($tulisan_data)

        // return redirect('/blog')->with()

        // return view('dashboard/index', [
        //     'title' => $request['title'],
        //     'hashtag' => $request['hashtag'],
        //     'body' => $request['body'],
        //     // 'user' => User::where('id', auth()->user()->id)->get()
        //     // Post::where('user_id', auth()->user()->id)->get()
        // ]);
    }
}
