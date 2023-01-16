<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatanApproval;

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
        return redirect("Main/kegiatan_approval");
    }

    public function tampilTambahKegiatanApproval()
    {
        return view('Tambah/TambahKegiatanApproval');
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
