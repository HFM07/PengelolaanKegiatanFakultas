<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatan;
use App\Models\user;

class kegiatanController extends Controller
{

    public function index()
    {
        $kegiatan = kegiatan::all();
        return view('Main/kegiatan', ['kegiatan'=>$kegiatan]);
    }


    public function hapusKegiatan($Id)
    {
        kegiatan::destroy($Id);
        return redirect("Main/kegiatan");
    }

    public function tampilTambahKegiatan()
    {
        $user = user::all();
        return view('Tambah/TambahKegiatan', ['user'=>$user]);
    }

    public function tambahKegiatan(Request $request)
    {
        kegiatan::updateOrCreate([
            'Id' => $request -> Id,
        ], [
            'PembuatId' => $request -> PembuatId,
            'NamaKegiatan' => $request -> NamaKegiatan,
            'BidangKegiatan' => $request -> BidangKegiatan,
            'TglMulai' => $request -> TglMulai,
            'TglSelesai' => $request -> TglSelesai,
            'Status' => $request -> Status
        ]);
        return redirect('Main/kegiatan');
    }

    public function getEditKegiatan($Id)
    {
        $kegiatan = kegiatan::find($Id);
        return view('Edit/EditKegiatan', ['kegiatan'=>$kegiatan]);
    }

}
