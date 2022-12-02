<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // get data from users table using Eloquent ORM
        $data = User::all();
        // pass data to view
        return view('welcome', compact('data'));
    }
}
