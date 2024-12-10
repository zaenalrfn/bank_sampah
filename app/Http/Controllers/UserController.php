<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Menampilkan halaman daftar pengguna
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.kelola_pengguna', compact('users'));
    }

    // Menampilkan halaman untuk edit data pengguna
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Menyimpan perubahan data pengguna
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Menghapus pengguna
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
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
