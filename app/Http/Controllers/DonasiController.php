<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\TujuanDonasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * ================= LANDING PAGE =================
     * Buat donasi setelah data donatur diisi
     */
    public function store(Request $request)
    {
        $request->validate([
            'donatur_id'       => 'required|exists:donatur,id',
            'tujuan_donasi_id' => 'required|exists:tujuan_donasi,id',
        ]);

        $donasi = Donasi::create([
            'donatur_id'       => $request->donatur_id,
            'tujuan_donasi_id' => $request->tujuan_donasi_id,
            'tanggal_donasi'   => now(),
            'status'           => 'menunggu',
        ]);

        return redirect()
            ->route('donasi.detail', $donasi->id)
            ->with('success', 'Donasi berhasil dibuat, silakan lanjutkan');
    }

    /**
     * ================= LANDING PAGE =================
     * Detail donasi
     */
public function show($id)
{
    $donasi = Donasi::with(['donatur', 'tujuanDonasi'])->findOrFail($id);
    return view('landingpage.donasi_detail', compact('donasi'));
}
    /**
     * ================= ADMIN =================
     * List semua donasi
     */
public function index()
{
    $donasi = Donasi::with(['donatur', 'tujuanDonasi'])
        ->latest()
        ->get();

    return view('admin.donasi', compact('donasi'));
}


    /**
     * ================= ADMIN =================
     * Update status donasi
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:menunggu,diterima,disalurkan',
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status donasi berhasil diperbarui');
    }
}
