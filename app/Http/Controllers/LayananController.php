<?php

namespace App\Http\Controllers;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function kk() {
        $kk = Layanan::orderBy('created_at','DESC')
            ->where('kategori_id',2)
            ->get();
        return view('layanan/kk', compact('kk'));
    }

    public function ktp() {
        $ktp = Layanan::orderBy('created_at','DESC')
            ->where('kategori_id',1)
            ->get();
        return view('layanan/ktp', compact('ktp'));
    }

   
}
