<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tujuan Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <h4 class="mb-4">Detail Donatur</h4>

    <div class="card">
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th width="200">Nama</th>
                    <td>: {{ $donatur->nama }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>: {{ $donatur->email ?? '-' }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>: {{ $donatur->no_hp }}</td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>: {{ $donatur->created_at->format('d M Y') }}</td>
                </tr>
            </table>

            <a href="{{ route('donatur.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>
</div>

