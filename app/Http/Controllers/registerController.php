<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('Login/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'Id' => 'required',
            'Username' => 'required',
            'Email' => 'required|email',
            'Password' => 'required',
            'HakAkses' => 'required'
        ]);

        $user = new User();
        $user->Id= $request->Id;
        $user->Username = $request->Username;
        $user->Email = $request->Email;
        $user->Password = Hash::make($request->Password);
        $user->HakAkses = $request->HakAkses;
        $user->save();

        return redirect()->route('login');
    }
}
