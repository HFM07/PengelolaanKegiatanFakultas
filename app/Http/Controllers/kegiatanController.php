<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatan;

class kegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = kegiatan::all();
        return view('kegiatan', ['kegiatan'=>$kegiatan]);
    }
}
