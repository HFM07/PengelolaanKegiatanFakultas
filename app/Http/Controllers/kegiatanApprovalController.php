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
        kegiatanApproval::destroy($Id);
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
        kegiatanApproval::updateOrCreate([
            'Id'  => $request -> Id,
        ], [
            'PengevaluasiId' => $request -> PengevaluasiId,
            'KegiatanId'  => $request -> KegiatanId,
            'Status' => $request -> Status
        ]);
        return redirect('Main/kegiatanApproval');
    }

    public function getEditKegiatanApproval($Id)
    {
        $kegiatanApproval = kegiatanApproval::find($Id);
        return view('Edit/EditKegiatanApproval', ['kegiatan_approval'=>$kegiatanApproval]);
    }

}
