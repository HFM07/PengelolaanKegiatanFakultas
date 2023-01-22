<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('Main/user', ['user'=>$user]);
    }

    public function hapusUser($Id)
    {
        User::destroy($Id);
        return redirect("Main/user");
    }

    public function tampilTambahUser()
    {
        return view('Tambah/TambahUser');
    }

    public function tambahUser(Request $request)
    {
        User::updateOrCreate([
            'Id' => $request -> Id,
        ], [
            'Username' => $request -> Username,
            'Password' => bcrypt($request -> Password),
            'Email' => $request -> Email,
            'HakAkses' => $request -> HakAkses
        ]);
        return redirect('Main/user');
    }

    public function getEditUser($Id)
    {
        $user = User::find($Id);
        return view('/Edit/EditUser', ['user' => $user]);
    }

}
