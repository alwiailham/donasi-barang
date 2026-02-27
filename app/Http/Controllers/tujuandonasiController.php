<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TujuanDonasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TujuanDonasiController extends Controller
{
    /**
     * Tampilkan semua tujuan donasi
     */
    public function index()
    {
        $tujuanDonasi = TujuanDonasi::latest()->get();

        return view('admin.tujuan.tujuan', compact('tujuanDonasi'));
    }


    public function donasiList()
{
    $tujuanDonasi = TujuanDonasi::where('status', 'aktif')->get();

    return view('landingpage.donasi_list', compact('tujuanDonasi'));
}

    /**
     * Form tambah tujuan donasi
     */
    public function create()
    {
        return view('admin.tujuan.create');
    }

    /**
     * Simpan data tujuan donasi
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tujuan' => 'required|string|max:255',
            'deskripsi'   => 'nullable|string',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status'      => 'required|in:aktif,nonaktif',
        ]);

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')
                ->store('tujuan-donasi', 'public');
        }

        TujuanDonasi::create([
            'nama_tujuan' => $request->nama_tujuan,
            'deskripsi'   => $request->deskripsi,
            'gambar'      => $gambarPath,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('tujuan.index')
            ->with('success', 'Tujuan donasi berhasil ditambahkan');
    }

    /**
     * Form edit tujuan donasi
     */
    public function edit($id)
    {
        $tujuanDonasi = TujuanDonasi::findOrFail($id);

        return view('admin.tujuan.edit', compact('tujuanDonasi'));
    }

    /**
     * Update tujuan donasi
     */
    public function update(Request $request, $id)
    {
        $tujuanDonasi = TujuanDonasi::findOrFail($id);

        $request->validate([
            'nama_tujuan' => 'required|string|max:255',
            'deskripsi'   => 'nullable|string',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status'      => 'required|in:aktif,nonaktif',
        ]);

        $gambarPath = $tujuanDonasi->gambar;

        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            if ($gambarPath && Storage::disk('public')->exists($gambarPath)) {
                Storage::disk('public')->delete($gambarPath);
            }

            $gambarPath = $request->file('gambar')
                ->store('tujuan-donasi', 'public');
        }

        $tujuanDonasi->update([
            'nama_tujuan' => $request->nama_tujuan,
            'deskripsi'   => $request->deskripsi,
            'gambar'      => $gambarPath,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('tujuan.index')
            ->with('success', 'Tujuan donasi berhasil diperbarui');
    }

    /**
     * Hapus tujuan donasi
     */
    public function destroy($id)
    {
        $tujuanDonasi = TujuanDonasi::findOrFail($id);

        if ($tujuanDonasi->gambar && Storage::disk('public')->exists($tujuanDonasi->gambar)) {
            Storage::disk('public')->delete($tujuanDonasi->gambar);
        }

        $tujuanDonasi->delete();

        return redirect()
            ->route('tujuan.index')
            ->with('success', 'Tujuan donasi berhasil dihapus');
    }
}
