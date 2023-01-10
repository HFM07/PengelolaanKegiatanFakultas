<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatanApproval;

class kegiatanApprovalController extends Controller
{
    public function index()
    {
        $kegiatanApproval = kegiatanApproval::all();
        return view('kegiatanApproval', ['kegiatanApproval'=>$kegiatanApproval]);
    }
}
