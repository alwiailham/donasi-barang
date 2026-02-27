@extends('admin.layouts_admin.app')
@section('content')

<main class="page-content">

{{-- ================= CARD STATISTIK ================= --}}
<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">

    <div class="col">
        <div class="card radius-10 border-start border-primary border-4">
            <div class="card-body d-flex align-items-center">
                <div>
                    <p class="mb-1">Total Donasi</p>
                    <h4 class="mb-0 text-primary">{{ $totalDonasi }}</h4>
                </div>
                <div class="ms-auto widget-icon bg-primary text-white">
                    <i class="bi bi-box-seam"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10 border-start border-success border-4">
            <div class="card-body d-flex align-items-center">
                <div>
                    <p class="mb-1">Total Item Donasi</p>
                    <h4 class="mb-0 text-success">{{ $totalItem }}</h4>
                </div>
                <div class="ms-auto widget-icon bg-success text-white">
                    <i class="bi bi-bag-check"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10 border-start border-warning border-4">
            <div class="card-body d-flex align-items-center">
                <div>
                    <p class="mb-1">Donasi Pending</p>
                    <h4 class="mb-0 text-warning">{{ $donasiPending }}</h4>
                </div>
                <div class="ms-auto widget-icon bg-warning text-dark">
                    <i class="bi bi-clock-history"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10 border-start border-info border-4">
            <div class="card-body d-flex align-items-center">
                <div>
                    <p class="mb-1">Total Donatur</p>
                    <h4 class="mb-0 text-info">{{ $totalDonatur }}</h4>
                </div>
                <div class="ms-auto widget-icon bg-info text-white">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- ================= TABEL DONASI TERBARU ================= --}}
<div class="card mt-4">
    <div class="card-header bg-transparent">
        <h6 class="mb-0 fw-bold">Daftar Item Donasi</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle table-striped">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Donatur</th>
                        <th>Tujuan Donasi</th>
                        <th>Status Donasi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah }} {{ $item->satuan }}</td>
                        <td>
                            <span class="badge bg-info">
                                {{ ucfirst(str_replace('_', ' ', $item->kondisi)) }}
                            </span>
                        </td>
                        <td>{{ $item->donasi->donatur->nama ?? '-' }}</td>
                        <td>{{ optional($item->donasi->tujuanDonasi)->nama_tujuan ?? '-' }}</td>

                        <td>
                            <span class="badge 
                                {{ $item->donasi->status == 'pending' ? 'bg-warning' : 'bg-success' }}">
                                {{ ucfirst($item->donasi->status) }}
                            </span>
                        </td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('admin.dashboard.show', $item->id) }}"
                               class="btn btn-sm btn-primary">
                                Detail
                            </a>

                            <form action="{{ route('admin.dashboard.destroy', $item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus item ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted">
                            Belum ada item donasi
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>


</main>
@endsection
