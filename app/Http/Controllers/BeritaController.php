<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBerita = Berita::all();

        confirmDelete('Hapus Berita', "Yakin ingin menghapus berita ini ?");

        return view('admin.berita.index', compact('listBerita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg,jfif|max:2048',
            'konten' => 'required',
        ]);

        $image = date('YmdHis') . '.' . $request->file('gambar')->extension();
        Image::make($request->file('gambar'))->save(public_path('/uploads/berita_image/') . $image);

        Berita::create([
            'judul' => $request->judul,
            'gambar' => $image,
            'konten' => $request->konten,
        ]);

        Alert::success('Sukses', 'Berita telah berhasil disimpan');
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;

        $request->validate([
            'judul' => 'required',
            'gambar' => 'max:2048',
            'konten' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $path = public_path('/uploads/berita_image/').$berita->gambar;
            if (file_exists($path)) {
                unlink($path);
                $gambar = date('YmdHis'). '.' . $request->file('gambar')->extension();
                Image::make($request->file('gambar'))->save(public_path('/uploads/berita_image/').$gambar);
                $berita['gambar'] = $gambar;
            }
        }

        $berita->save();

        Alert::success('Sukses', 'Berita telah berhasil diubah');
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $path = public_path('/uploads/berita_image/') . $berita->gambar;
        if (file_exists($path)) {
            unlink($path);
        }
        $berita->delete();
        Alert::success('Sukses', 'Berita telah berhasil dihapus');
        return back();
    }
}
