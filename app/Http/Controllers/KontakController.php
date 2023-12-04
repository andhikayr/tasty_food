<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageContact;
use RealRashid\SweetAlert\Facades\Alert;

class KontakController extends Controller
{
    public function index()
    {
        $listContactRequest = MessageContact::latest()->get();

        $title = 'Hapus Permintaan Kontak';
        $text = 'Yakin ini menghapus permintaan ini ?';
        confirmDelete($title, $text);

        return view('admin.kontak_kami.index', compact('listContactRequest'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        MessageContact::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Alert::success('Sukses', 'Informasi anda telah berhasil dikirim');
        return back();
    }

    public function destroy($id)
    {
        $kontak = MessageContact::findOrFail($id);
        $kontak->delete();
        Alert::success('Sukses', 'Berhasil menghapus permintaan kontak yang dipilih');
        return back();
    }
}
