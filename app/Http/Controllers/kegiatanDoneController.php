<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatanDone;
use App\Models\kegiatan;
use App\Models\kegiatanApproval;
use App\Models\user;

class kegiatanDoneController extends Controller
{
    public function index()
    {
        $kegiatanDone = kegiatanDone::all();
        return view('Main/kegiatanDone', ['kegiatanDone'=>$kegiatanDone]);
    }

    public function hapusKegiatanDone($Id)
    {
        kegiatanDone::destroy($Id);
        return redirect("Main/user");
    }

    public function tampilTambahKegiatanDone()
    {
        $kegiatan = kegiatan::all();
        $user = user::all();
        return view('Tambah/TambahKegiatanDone', ['kegiatan'=>$kegiatan, 'user'=>$user]);
    }

    public function tambahKegiatanDone(Request $request)
    {
        kegiatanDone::updateOrCreate([
            'Id'=> $request -> Id,
        ], [
            'KegiatanId'=> $request -> KegiatanId,
            'PengevaluasiId'=> $request -> PengevaluasiId,
            'TglMulai'=> $request -> TglMulai,
            'TglSelesai'=> $request -> TglSelesai,
            'BuktiTerlaksana'=> $request -> BuktiTerlaksana
        ]);
        return redirect('Main/kegiatanDone');
    }

    public function getEditKegiatanDone($Id)
    {
        $kegiatanDone = kegiatanDone::find($Id);
        $user = user::all();
        $kegiatan = kegiatan::all();
        $kegiatanApproval = kegiatanApproval::all();
        return view('Edit/EditKegiatanDone', ['kegiatanDone'=>$kegiatanDone, 'kegiatanApproval'=>$kegiatanApproval, 'user'=>$user, 'kegiatan'=>$kegiatan]);
    }

}
