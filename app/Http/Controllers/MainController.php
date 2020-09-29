<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function index()
    {
        return view('index', ['therapists' => User::all()]);
    }

    public function search(Request $request)
    {
        return view('index', ['therapists' => User::where('name', 'like', "$request->name%")->get()]);
    }
}
