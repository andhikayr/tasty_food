<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Support\Facades\DB;

class TastyFoodController extends Controller
{
    public function index()
    {
        $beritaLatest = Berita::latest()->get();
        $galeriLatest = Galeri::latest()->limit(9)->get();
        return view('main_page.index', compact('beritaLatest', 'galeriLatest'));
    }

    public function kontak()
    {
        return view('main_page.kontak');
    }

    public function tentang()
    {
        return view('main_page.tentang');
    }

    public function galeri()
    {
        $galeri = Galeri::limit(16)->get();
        $galeriCarousel = Galeri::limit(5)->get();
        return view('main_page.galeri', compact('galeri', 'galeriCarousel'));
    }

    public function berita()
    {
        $beritaLatest = Berita::latest()->limit(1)->get();
        $beritaAll = DB::table('beritas')->orderBy('created_at', 'desc')->simplePaginate('8');
        return view('main_page.berita', compact('beritaLatest', 'beritaAll'));
    }

    public function berita_show($id)
    {
        $beritaDetail = Berita::findOrFail($id);
        $previous = Berita::where('id', '<', $beritaDetail->id)->orderBy('id', 'desc')->first();
        $next = Berita::where('id', '>', $beritaDetail->id)->orderBy('id')->first();
        return view('main_page.berita_detail', compact('beritaDetail', 'previous', 'next'));
    }
}
