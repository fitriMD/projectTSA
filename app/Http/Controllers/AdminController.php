<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Layanan;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home() {
        $jumlah_user = DB::table('users')->count();
        $jumlah_berita = DB::table('berita')->count();
        $jumlah_layanan = DB::table('layanan')->count();
        $kategori_layanan = DB::table('kategori')->count();
        return view('admin.index', compact('jumlah_user', 'jumlah_berita', 'jumlah_layanan', 'kategori_layanan'));
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

    public function indexLayanan(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $data = Layanan::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $data = Layanan::orderBy('id', 'desc')->paginate(10); // Pagination menampilkan 5 data
        }
        return view('admin.layanan.index', compact('data'));
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

    public function createLayanan()
    {
        return view('admin.layanan.create');
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

    public function storeLayanan(Request $request)
    {
        $file = $request->file('gambar');
        $org = $file->getClientOriginalName();
        $path = 'gambar';
        $file->move($path,$org);

        $Layanan = new Layanan;
        $Layanan->judul = $request->judul;
        $Layanan->isi = $request->isi;
        $Layanan->foto = $org;
        //$Layanan->kategori = date('Y-m-d');
        $Layanan->save();
        if ($Layanan) {
            Session::flash('success','Sukses Tambah Data'); 
            return redirect()->route('admin.layanan.index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('admin.layanan.index');
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

    public function showLayanan($id)
    {
        $data = Layanan::find($id);
        return view('admin.layanan.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Berita = Berita::find($id);
        return view('admin.berita.edit',compact('berita'));
    }

    public function editLayanan($id)
    {
        $layanan = Layanan::find($id);
        return view('admin.layanan.edit',compact('layanan'));
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

    public function updateLayanan(Request $request, $id)
    {
        $foto = $request->file('gambar');
        if ($foto == "") {
            $Layanan = Layanan::find($id);
            $Layanan->judul = $request->judul;
            $Layanan->isi = $request->isi;
            $Layanan->save();

           if ($Layanan) {
            Session::flash('success','Sukses Update Data');
                return redirect()->route('admin.layanan.index');
            } else {
                Session::flash('success','Failed Update Data');
                return redirect()->route('admin.layanan.index');
            }
        } else {
            $file = $request->file('gambar');
            $org = $file->getClientOriginalName();
            $path = 'gambar';
            $file->move($path,$org);

            $Layanan = Layanan::find($id) ;
            $Layanan->judul = $request->judul;
            $Layanan->isi = $request->isi;
            $Layanan->foto = $org;
            $Layanan->save();
            if ($Layanan) {
                Session::flash('success','Sukses Update Data');
                return redirect()->route('admin.layanan.index');
            } else {
                Session::flash('success','Failed Update Data');
                return redirect()->route('admin.layanan.index');
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

    public function destroyLayanan($id)
    {
        $Layanan = Layanan::find($id);
        $Layanan->delete();
         if ($Layanan) {
            Session::flash('success','Sukses Hapus Data'); 
            return redirect()->route('admin.layanan.index');
        } else {
            Session::flash('Berita Gagal Dihapus','Gagal');
            return redirect()->route('admin.layanan.index');
        }

    }
}
