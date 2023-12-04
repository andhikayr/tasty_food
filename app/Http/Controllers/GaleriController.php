<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        confirmDelete('Hapus Gambar', "Yakin ingin menghapus gambar galeri ini ?");
        return view('admin.galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar_galeri.*' => 'required|max:2048',
        ]);

        foreach ($request->file('gambar_galeri') as $image) {
            $filename = date('YmdHis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Store the image in the storage directory (public or other storage)
            Image::make($image)->save(public_path('/uploads/galeri_image/') . $filename);

            Galeri::create([
                'gambar_galeri' => $filename,
            ]);
        }

        Alert::success('Sukses', 'Gambar telah berhasil disimpan');
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'gambar_galeri' => 'required|max:2048',
        ]);

        if ($request->hasFile('gambar_galeri')) {
            $path = public_path('/uploads/galeri_image/').$galeri->gambar_galeri;
            if (file_exists($path)) {
                unlink($path);
                $gambar = date('YmdHis').  '_' . uniqid() . '.' . $request->file('gambar_galeri')->getClientOriginalExtension();
                Image::make($request->file('gambar_galeri'))->save(public_path('/uploads/galeri_image/').$gambar);
                $galeri['gambar_galeri'] = $gambar;
            }
        }

        $galeri->save();

        Alert::success('Sukses', 'Gambar telah berhasil diubah');
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $path = public_path('/uploads/galeri_image/') . $galeri->gambar_galeri;
        if (file_exists($path)) {
            unlink($path);
        }
        $galeri->delete();
        Alert::success('Sukses', 'Gambar telah berhasil dihapus');
        return back();
    }
}
