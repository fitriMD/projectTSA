<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home() {
        return view('admin.index');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $data = Berita::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $data = Berita::orderBy('id', 'desc')->paginate(10); // Pagination menampilkan 5 data
        }
        return view('admin.berita.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $org = $file->getClientOriginalName();
        $path = 'gambar';
        $file->move($path,$org);

        $Berita = new Berita;
        $Berita->judul_berita = $request->judul_berita;
        $Berita->tgl_berita = date('Y-m-d');
        $Berita->isi = $request->isi;
        $Berita->gambar = $org;
        $Berita->save();
        if ($Berita) {
            Session::flash('success','Sukses Tambah Data'); 
            return redirect()->route('admin.berita.index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('admin.berita.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Berita::find($id);
        return view('admin.berita.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gambar = $request->file('gambar');
        if ($gambar == "") {
            $Berita = Berita::find($id);
            $Berita->judul_berita = $request->judul_berita;
            $Berita->isi = $request->isi;
            $Berita->save();

           if ($Berita) {
            Session::flash('success','Sukses Update Data');
                return redirect()->route('admin.berita.index');
            } else {
                Session::flash('success','Failed Update Data');
                return redirect()->route('admin.berita.index');
            }
        } else {
            $file = $request->file('gambar');
            $org = $file->getClientOriginalName();
            $path = 'gambar';
            $file->move($path,$org);

            $Berita = Berita::find($id) ;
            $Berita->judul_berita = $request->judul_berita;
            $Berita->isi = $request->isi;
            $Berita->gambar = $org;
            $Berita->save();
            if ($Berita) {
                Session::flash('success','Sukses Update Data');
                return redirect()->route('admin.berita.index');
            } else {
                Session::flash('success','Failed Update Data');
                return redirect()->route('admin.berita.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Berita = Berita::find($id);
        $Berita->delete();
         if ($Berita) {
            Session::flash('success','Sukses Hapus Data'); 
            return redirect()->route('admin.berita.index');
        } else {
            Session::flash('Berita Gagal Dihapus','Gagal');
            return redirect()->route('admin.berita.index');
        }

    }
}
