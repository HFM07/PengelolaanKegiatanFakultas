<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatanDone;

class kegiatanDoneController extends Controller
{
    public function index()
    {
        $kegiatanDone = kegiatanDone::all();
        return view('kegiatanDone', ['kegiatanDone'=>$kegiatanDone]);
    }
}
