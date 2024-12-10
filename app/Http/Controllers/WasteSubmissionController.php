<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WasteSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WasteSubmissionController extends Controller
{
    /**
     * Tampilkan form setor sampah.
     */
    public function create()
    {
        return view('waste_submission.create');
    }

    /**
     * Simpan data setoran sampah.
     */
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

        return redirect()->route('waste_submission.index')->with('success', 'Setoran berhasil dibuat dan sedang diproses.');
    }
}
