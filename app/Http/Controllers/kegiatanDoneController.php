<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
    }

    public function tampilTambahKegiatanDone()
    {
        $kegiatan = kegiatan::all();
        $user = user::all();
        return view('Tambah/TambahKegiatanDone', ['kegiatan'=>$kegiatan, 'user'=>$user]);
    }

    public function tambahKegiatanDone(Request $request)
    {
        $image = $request -> BuktiTerlaksana;
        $images = $request -> input('BuktiTerlaksana');
        kegiatanDone::updateOrCreate([
            'Id'=> $request -> Id,
        ], [
            'KegiatanId'=> $request -> KegiatanId,
            'PengevaluasiId'=> $request -> PengevaluasiId,
            'TglMulai'=> $request -> TglMulai,
            'TglSelesai'=> $request -> TglSelesai,
            'BuktiTerlaksana'=> $image
        ]);
        Storage::disk('public') -> put('bukti/'.$image, $images);
        return redirect('Main/kegiatanDone');
    }

    public function getEditKegiatanDone($Id)
    {
        $kegiatanDone = kegiatanDone::find($Id);
        $user = user::all();
        $kegiatan = kegiatan::all();
        return view('Edit/EditKegiatanDone', ['kegiatanDone'=>$kegiatanDone, 'user'=>$user, 'kegiatan'=>$kegiatan]);
    }

}
