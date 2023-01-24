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

    public function hapusUser($Id)
    {
        user::destroy($Id);
        return redirect("Main/user");
    }

    public function tampilTambahUser()
    {
        return view('Tambah/TambahUser');
    }

    public function tambahUser(Request $request)
    {
        user::updateOrCreate([
            'id' => $request -> Id,
        ], [
            'username' => $request -> Username,
            'password' => bcrypt($request -> Password),
            'email' => $request -> Email,
            'hakAkses' => $request -> HakAkses
        ]);
        return redirect('Main/user');
    }

    public function getEditUser($Id)
    {
        $user = user::find($Id);
        return view('/Edit/EditUser', ['user' => $user]);
    }

}
