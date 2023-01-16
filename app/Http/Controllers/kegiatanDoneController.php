<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatanDone;

class kegiatanDoneController extends Controller
{
    public function index()
    {
        $kegiatanDone = kegiatanDone::all();
        return view('Main/kegiatanDone', ['kegiatanDone'=>$kegiatanDone]);
    }

    public function hapusKegiatanDone($Id)
    {
        kegiatanDone::table('kegiatan_done') -> where('kegiatan_done', $Id) -> delete();
        return redirect("Main/user");
    }

    public function tampilTambahKegiatanDone()
    {
        return view('Tambah/TambahKegiatanDone');
    }

    public function tambahKegiatanDone(Request $request)
    {
        kegiatanDone::table('kegiatan_done') -> insert([
            'Id'=> $request -> Id,
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
        $kegiatanDone = kegiatanDone::table('kegiatan_done') -> where('Id', $Id) -> get();
        return view('Edit/EditKegiatanDone', ['kegiatanDone' => $kegiatanDone]);
    }

    public function updateKegiatanDone(Request $request)
    {
        kegiatanDone::table('kegiatan_done') -> where('Id', $request -> Id) -> update(
            [
                'Id'=> $request -> Id,
                'KegiatanId'=> $request -> KegiatanId,
                'PengevaluasiId'=> $request -> PengevaluasiId,
                'TglMulai'=> $request -> TglMulai,
                'TglSelesai'=> $request -> TglSelesai,
                'BuktiTerlaksana'=> $request -> BuktiTerlaksana
            ]
        );
        return redirect('Main/kegiatanDone');
    }
}
