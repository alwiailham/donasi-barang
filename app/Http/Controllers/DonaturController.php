<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;
use App\Models\Donasi;

class DonaturController extends Controller
{
    /**
     * ================= ADMIN =================
     */
    public function index()
    {
        $donatur = Donatur::latest()->get();
        return view('admin.donatur', compact('donatur'));
    }

    /**
     * ================= LANDING PAGE =================
     */


public function store(Request $request)
{
    $request->validate([
        'nama'             => 'required|string|max:255',
        'email'            => 'nullable|email',
        'no_hp'            => 'required|string|max:20',
        'tujuan_donasi_id' => 'required|exists:tujuan_donasi,id',
    ]);

    // Simpan donatur
    $donatur = Donatur::create([
        'nama'  => $request->nama,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
    ]);

    // Buat data donasi
    $donasi = Donasi::create([
        'donatur_id'       => $donatur->id,
        'tujuan_donasi_id' => $request->tujuan_donasi_id,
        'tanggal_donasi'   => now(),
        'status'           => 'menunggu',
    ]);

    // Redirect ke halaman berikutnya
    return redirect()
        ->route('donasi.detail', $donasi->id)
        ->with('success', 'Data berhasil disimpan, silakan lanjutkan donasi');
}



    /**
     * ================= ADMIN =================
     */
    public function show($id)
    {
        $donatur = Donatur::findOrFail($id);
        return view('admin.donatur1.show', compact('donatur'));
    }

    /**
     * ================= ADMIN =================
     */
    public function destroy($id)
    {
        Donatur::findOrFail($id)->delete();

        return redirect()
            ->route('donatur.index')
            ->with('success', 'Donatur berhasil dihapus');
    }
}
