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

    public function hapusUser($id)
    {
        user::destroy($id);
        return redirect("Main/user");
    }

    public function tampilTambahUser()
    {
        return view('Tambah/TambahUser');
    }

    public function tambahUser(Request $request)
    {
        user::updateOrCreate([
            'id' => $request -> id,
        ], [
            'username' => $request -> username,
            'password' => bcrypt($request -> password),
            'email' => $request -> email,
            'hakAkses' => $request -> hakAkses
        ]);
        return redirect('Main/user');
    }

    public function getEditUser($id)
    {
        $user = user::find($id);
        return view('Edit/EditUser', ['user'=>$user]);
    }

}
