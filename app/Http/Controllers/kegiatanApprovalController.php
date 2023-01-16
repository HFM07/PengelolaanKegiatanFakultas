<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatanApproval;
use App\Models\kegiatan;
use App\Models\user;

class kegiatanApprovalController extends Controller
{

    public function index()
    {
        $kegiatanApproval = kegiatanApproval::all();
        return view('Main/kegiatanApproval', ['kegiatanApproval'=>$kegiatanApproval]);
    }

    public function hapusKegiatanApproval($Id)
    {
        kegiatanApproval::table('kegiatan_approval') -> where('kegiatan_approval', $Id) -> delete();
        return redirect("Main/kegiatanApproval");
    }

    public function tampilTambahKegiatanApproval()
    {
        $kegiatan = kegiatan::all();
        $user = user::all();
        return view('Tambah/TambahKegiatanApproval', ['kegiatan'=>$kegiatan, 'user'=>$user]);
    }

    public function tambahKegiatanApproval(Request $request)
    {
        kegiatanApproval::table('kegiatan_approval') -> insert([
            'Id'  => $request -> Id,
            'PengevaluasiId' => $request -> pengevaluasiId,
            'KegiatanId'  => $request -> KegiatanId,
            'Status' => $request -> Status
        ]);
        return redirect('Main/kegiatanApproval');
    }

    public function getEditKegiatanApproval($Id)
    {
        $kegiatanApproval = kegiatanApproval::table('kegiatan_approval') -> where('Id', $Id) -> get();
        return view('Edit/EditKegiatanApproval', ['kegiatan_approval' => $kegiatanApproval]);
    }

    public function updateKegiatanApproval(Request $request)
    {
        kegiatanApproval::table('kegiatan_approval') -> where('Id', $request -> Id) -> update(
            [
                'Id'  => $request -> Id,
                'PengevaluasiId' => $request -> pengevaluasiId,
                'KegiatanId'  => $request -> KegiatanId,
                'Status' => $request -> Status
            ]
        );
        return redirect('Main/kegiatanApproval');
    }
}
