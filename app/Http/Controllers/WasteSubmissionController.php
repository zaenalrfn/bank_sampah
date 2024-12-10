<?php

namespace App\Http\Controllers;

use App\Models\WasteSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WasteSubmissionController extends Controller
{
    // Menampilkan daftar waste submissions
    public function index()
    {
        $wasteSubmissions = WasteSubmission::paginate(10);
        return view('admin.setoran_sampah', compact('wasteSubmissions'));
    }

    // Menampilkan form untuk membuat setoran sampah
    public function create()
    {
        return view('users.setor');
    }

    // Menyimpan setoran sampah baru
    public function store(Request $request)
    {
        $request->validate([
            'waste_type' => 'required|string|max:255',
            'weight' => 'required|numeric|min:0.1',
            'deposit_time' => 'required|date|after_or_equal:today',
        ]);

        WasteSubmission::create([
            'user_id' => Auth::id(), // Ambil ID pengguna yang sedang login
            'waste_type' => $request->waste_type,
            'weight' => $request->weight,
            'deposit_time' => $request->deposit_time,
            'status' => 'pending', // Default status adalah pending
        ]);

        return redirect()->route('waste-submission.setor')->with('success', 'Setoran berhasil dibuat dan sedang diproses.');
    }

    // Menghapus setoran sampah
    public function destroy(WasteSubmission $wasteSubmission)
    {
        $wasteSubmission->delete();

        return redirect()->route('waste-submission.index')->with('success', 'Waste submission deleted successfully.');
    }

    // Mengupdate status setoran sampah (complete/pending)
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,completed',
        ]);

        $submission = WasteSubmission::findOrFail($id);
        $submission->status = $request->status;
        $submission->save();

        return redirect()->route('waste-submission.index')->with('success', 'Status waste submission updated successfully.');
    }
    public function riwayat()
    {
        // Ambil setoran sampah yang sudah dilakukan oleh pengguna yang sedang login
        $wasteSubmissions = WasteSubmission::where('user_id', Auth::id())->get();

        // Kirim data setoran ke view
        return view('users.riwayat_setoran', compact('wasteSubmissions'));
    }
}
