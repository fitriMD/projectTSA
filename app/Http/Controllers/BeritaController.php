<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        $semua = Berita::orderBy('created_at','DESC')
                ->take(3)
                ->get();
        return view('berita', compact('semua'));
    }
}
