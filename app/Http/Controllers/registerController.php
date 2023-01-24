<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

class registerController extends Controller
{
    public function index()
    {
        return view('Login/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'hakAkses' => 'required'
        ]);

        $user = new user();
        $user->id= $request->id;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->hakAkses = $request->hakAkses;
        $user->save();

        return redirect()->route('login');
    }
}
