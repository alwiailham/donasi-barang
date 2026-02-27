<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tujuan Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <h4 class="mb-4">Detail Item Donasi</h4>

    <div class="card">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="200">Nama Donatur</th>
                    <td>: {{ $item->donasi->donatur->nama }}</td>
                </tr>
                <tr>
                    <th>Tujuan Donasi</th>
                    <td>: {{ $item->donasi->tujuanDonasi->nama_tujuan }}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>: {{ $item->nama_barang }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td>: {{ $item->jumlah }} {{ $item->satuan }}</td>
                </tr>
                <tr>
                    <th>Kondisi</th>
                    <td>: {{ ucfirst(str_replace('_',' ',$item->kondisi)) }}</td>
                </tr>
                <tr>
                    <th>Tanggal Donasi</th>
                    <td>: {{ $item->donasi->tanggal_donasi }}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/'.$item->gambar) }}"
                                 width="200"
                                 class="img-thumbnail">
                        @else
                            <span class="text-muted">Tidak ada gambar</span>
                        @endif
                    </td>
                </tr>
            </table>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>
</div>

