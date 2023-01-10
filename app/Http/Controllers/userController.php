<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function index()
    {
        $user = user::all();
        return view('user', ['user'=>$user]);
    }
}
