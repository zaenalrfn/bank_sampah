<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Menampilkan halaman daftar pengguna
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.kelola_pengguna', compact('users'));
    }
    public function create()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = Auth::user();
        return view('users.edit_user', compact('user'));
    }

    // Menyimpan perubahan data pengguna
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user->update([
            'name' => $request->name,
        ]);

        return redirect()->route('users.create')->with('success', 'User updated successfully.');
    }

    // Menampilkan modal ganti password
    public function editPassword(User $user)
    {
        return view('admin.users.edit-password', compact('user'));
    }

    // Mengubah password pengguna
    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index')->with('success', 'Password updated successfully.');
    }
}
