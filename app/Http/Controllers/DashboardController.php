<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\MessageContact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $newsCount = Berita::all()->count();
        $galleryCount = Galeri::all()->count();
        $messageCountToday = MessageContact::wheredate('created_at', Carbon::today())->count();
        return view('admin.dashboard', compact('newsCount', 'galleryCount', 'messageCountToday'));
    }

    public function settings()
    {
        return view('admin.settings', [
            'user' => Auth::user(),
        ]);
    }

    public function updateUsername(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'image' => 'max:2048',
        ]);

        $user->name = $request->name;

        if ($request->hasFile('image')) {
            $path = public_path('/uploads/profile_image/').$user->image;
            if (file_exists($path)) {
                unlink($path);
                // Store the new image
                $image = date('YmdHis'). '.' . $request->file('image')->extension();
                Image::make($request->file('image'))->save(public_path('/uploads/profile_image/').$image);
                $user['image'] = $image;
            }
        }

        $user->save();

        Alert::success('Sukses', 'Berhasil mengubah data profil');
        return back();
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required'
        ]);

        if (!Hash::check($request->current_password, auth::user()->password)) {
            Alert::toast('Password sebelumnya tidak cocok','error')->autoClose(5000);
            return back();
        } else if (Hash::check($request->new_password, Auth::user()->password)) {
            Alert::toast('Password baru anda sama dengan password lama anda','error')->autoClose(5000);
            return back();
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Alert::success('Sukses', 'Password anda telah berhasil diperbarui');
        return back();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
