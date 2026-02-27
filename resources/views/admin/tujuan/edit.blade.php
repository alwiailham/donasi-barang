<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tujuan Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Edit Tujuan Donasi</h2>
    <hr>

    {{-- Pesan validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tujuan.update', $tujuanDonasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_tujuan" class="form-label">Nama Tujuan</label>
            <input type="text" class="form-control" id="nama_tujuan" name="nama_tujuan" value="{{ $tujuanDonasi->nama_tujuan }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $tujuanDonasi->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            @if($tujuanDonasi->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $tujuanDonasi->gambar) }}" alt="Gambar Tujuan" width="150">
                </div>
            @endif
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="aktif" {{ $tujuanDonasi->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ $tujuanDonasi->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('tujuan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
