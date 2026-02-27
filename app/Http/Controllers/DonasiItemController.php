<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\DonasiItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Donatur;

class DonasiItemController extends Controller
{
    /**
     * Menampilkan list item donasi user
     */
    public function index($donasi_id)
    {
        $donasi = Donasi::with('items')->findOrFail($donasi_id);

        return view('landingpage.detail_items', compact('donasi'));
    }

    /**
     * Menampilkan form tambah item donasi
     */
    public function create($donasi_id)
    {
        $donasi = Donasi::findOrFail($donasi_id);

        return view('landingpage.create', compact('donasi'));
    }

    /**
     * Simpan item donasi yang dibuat user
     */
    public function store(Request $request, $donasi_id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah'      => 'required|integer|min:1',
            'satuan'      => 'required|string|max:50',
            'kondisi'     => 'required|in:baru,layak_pakai',
            'gambar'      => 'nullable|image|max:2048', // max 2MB
        ]);

        $donasi = Donasi::findOrFail($donasi_id);

        $data = $request->only('nama_barang', 'jumlah', 'satuan', 'kondisi');

        // Jika ada gambar, simpan di folder storage/app/public/donasi_items
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('donasi_items', 'public');
        }

        // Simpan item donasi
        $donasi->items()->create($data);

        return redirect()->route('donasi_items.index', $donasi_id)
                         ->with('success', 'Item donasi berhasil ditambahkan.');
    }

     /* ================= ADMIN ================= */

    // Admin: list semua item donasi
public function adminIndex()
{

    
    // ================= STATISTIK =================
    $totalDonasi   = Donasi::count();
    $totalItem     = DonasiItem::count();
    $donasiPending = Donasi::where('status', 'pending')->count();
    $totalDonatur  = Donatur::count();

    // ================= DATA UTAMA DASHBOARD =================
    $items = DonasiItem::with([
        'donasi.donatur',
        'donasi.tujuanDonasi'
    ])
    ->latest()
    ->get();

    return view('admin.dashboard', compact(
        'totalDonasi',
        'totalItem',
        'donasiPending',
        'totalDonatur',
        'items'
    ));
}

    // Admin: detail item
    public function adminShow($id)
    {
        $item = DonasiItem::with(['donasi.tujuanDonasi','donasi.donatur'])
                    ->findOrFail($id);

        return view('admin.dashboard1.show', compact('item'));
    }

    // Admin: hapus item
    public function destroy($id)
    {
        $item = DonasiItem::findOrFail($id);

        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return back()->with('success', 'Item donasi berhasil dihapus');
    }
    public function show($id)
{
    $donasi = Donasi::with(['donatur', 'items', 'tujuanDonasi'])
        ->findOrFail($id);

    return view('admin.donasi.show', compact('donasi'));
}

}
