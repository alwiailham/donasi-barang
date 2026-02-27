<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item Donasi - {{ $donasi->tujuanDonasi->nama_tujuan }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            --glass-bg: rgba(255, 255, 255, 0.9);
            --text-main: #1e293b;
            --text-muted: #64748b;
        }

        body {
            background: #f8fafc; /* Latar belakang abu-abu sangat muda agar card lebih pop-out */
            background-image: 
                radial-gradient(at 0% 0%, rgba(79, 70, 229, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(124, 58, 237, 0.15) 0px, transparent 50%);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 550px;
            width: 100%;
        }

        .card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
        }

        .header-section {
            text-align: center;
            margin-bottom: 32px;
        }

        .header-section i {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        h3 {
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: -0.025em;
            color: #0f172a;
        }

        .target-name {
            color: #6366f1;
            display: block;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 5px;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 20px;
        }

        .form-control, .form-select {
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 12px 16px;
            font-size: 0.95rem;
            background-color: #ffffff;
            transition: all 0.2s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            outline: none;
        }

        .btn-submit {
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3);
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.4);
            opacity: 0.9;
        }

        .alert {
            border: none;
            border-radius: 12px;
            font-size: 0.85rem;
            background-color: #fef2f2;
            color: #b91c1c;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .card { padding: 25px; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="header-section">
            <i class="fa-solid fa-box-archive"></i>
            <span class="target-name">{{ $donasi->tujuanDonasi->nama_tujuan }}</span>
            <h3>Tambah Item Donasi</h3>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li><i class="fa-solid fa-circle-exclamation me-2"></i>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('donasi_items.store', $donasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Contoh: Beras Premium" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" placeholder="0" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Pcs/Kg/Dus" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi Barang</label>
                <select class="form-select" id="kondisi" name="kondisi" required>
                    <option value="baru" selected>✨ Baru</option>
                    <option value="layak_pakai">👍 Layak Pakai</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="gambar" class="form-label">Foto Barang <span class="text-muted" style="font-weight: 400">(Opsional)</span></label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                <div class="form-text" style="font-size: 0.75rem">Format: JPG, PNG, Max 2MB</div>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fa-solid fa-plus me-2"></i> Konfirmasi Item
            </button>
            
            <a href="{{ url()->previous() }}" class="btn btn-link w-100 mt-3 text-decoration-none text-muted" style="font-size: 0.85rem">
                Batal
            </a>
        </form>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>