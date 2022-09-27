<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest = Berita::orderBy('created_at','DESC')
        ->where('tgl_berita', date('Y-m-d'))
        ->take(3)
        ->get();
        return view('home', compact('latest'));
    }
}
