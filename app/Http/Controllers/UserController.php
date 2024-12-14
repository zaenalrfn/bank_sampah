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
        return view('edit_profil', compact('user'));
    }
    // Menyimpan pengguna baru dengan role admin
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru dengan role admin
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // Asumsi ada kolom 'role' di tabel users
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('users.create')->with('admin_tambah', 'Admin user created successfully.');
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

    // Mengubah password pengguna
    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.create')->with('success', 'Password updated successfully.');
    }

    // Menghapus pengguna
    public function destroy(User $user)
    {
        // Mencegah pengguna menghapus dirinya sendiri
        if (Auth::id() === $user->id) {
            return redirect()->route('users.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        // Menghapus pengguna
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
