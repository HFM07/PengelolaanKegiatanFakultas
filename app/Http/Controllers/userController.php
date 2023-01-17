<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function index()
    {
        $user = user::all();
        return view('Main/user', ['user'=>$user]);
    }

    public function hapusUser($username)
    {
        user::destroy($username);
        return redirect("Main/user");
    }

    public function tampilTambahUser()
    {
        return view('Tambah/TambahUser');
    }

    public function tambahUser(Request $request)
    {
        user::updateOrCreate([
            'Username' => $request -> Username,
        ], [
            'Password' => sha1($request -> Password),
            'Email' => $request -> Email,
            'HakAkses' => $request -> HakAkses
        ]);
        return redirect('Main/user');
    }

    public function getEditUser($username)
    {
        $user = user::find($username);
        return view('/Edit/EditUser', ['user' => $user]);
    }

}
