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

    public function hapusUser($username)
    {
        user::table('user') -> where('username', $username) -> delete();
        return redirect("Main/user");
    }

    public function tampilTambahUser()
    {
        return view('Tambah/TambahUser');
    }

    public function tambahUser(Request $request)
    {
        user::table('user') -> insert([
            'Username' => $request -> Username,
            'Password' => sha1($request -> Password),
            'Email' => $request -> Email,
            'HakAkses' => $request -> HakAkses
        ]);
        return redirect('Main/user');
    }

    public function getEditUser($username)
    {
        $user = user::table('user') -> where('username', $username) -> get();
        return view('/Edit/EditUser', ['user' => $user]);
    }

    public function updateUser(Request $request)
    {
        user::table('user') -> where('username', $request -> username) -> update(
            [
                'Username' => $request -> Username,
                'Password' => sha1($request -> Password),
                'Email' => $request -> Email,
                'HakAkses' => $request -> HakAkses
            ]
        );
        return redirect('Main/user');
    }
}
