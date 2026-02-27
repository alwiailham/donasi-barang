
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Donasi - {{ $donasi->tujuanDonasi->nama_tujuan }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary:#4f46e5;
            --secondary:#10b981;
            --accent:#f59e0b;
            --dark:#1f2937;
            --light:#f9fafb;
            --radius:16px;
            --shadow:0 10px 25px rgba(0,0,0,.08);
        }

        body {
            font-family: 'Inter', sans-serif;
            background:#f8fafc;
            color:var(--dark);
        }

        h1,h2,h3,h4,h5 {
            font-family:'Poppins',sans-serif;
        }

        /* HERO */
        .hero {
            height:320px;
            background:
                linear-gradient(135deg,rgba(79,70,229,.9),rgba(16,185,129,.85)),
                url('{{ asset('images/breadcrumb.jpg') }}') center/cover no-repeat;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
        }

        /* CARD */
        .card {
            border:none;
            border-radius:var(--radius);
            box-shadow:var(--shadow);
            margin-bottom:1.5rem;
        }

        .card-header {
            background:linear-gradient(135deg,var(--primary),#6366f1);
            color:white;
            font-weight:600;
        }

        /* IMAGE */
        .cause-img {
            height:420px;
            object-fit:cover;
            border-radius:var(--radius);
        }

        /* PROGRESS */
        .progress {
            height:14px;
            border-radius:10px;
        }

        .progress-bar {
            background:linear-gradient(90deg,var(--primary),var(--secondary));
        }

        .stat-box {
            text-align:center;
            background:white;
            border-radius:12px;
            padding:1rem;
            box-shadow:var(--shadow);
        }

        .stat-box h4 {
            color:var(--primary);
            margin-bottom:0;
        }

        /* BUTTON */
        .btn-donasi {
            background:linear-gradient(135deg,var(--primary),#6366f1);
            color:white;
            border:none;
            border-radius:12px;
            padding:14px;
            font-weight:600;
        }

        .btn-donasi:hover {
            opacity:.9;
            color:white;
        }

        /* SIDEBAR */
        .sticky {
            position:sticky;
            top:110px;
        }
    </style>
</head>
<body>

{{-- ================= HERO ================= --}}
<section class="hero">
    <div>
        <h1>{{ $donasi->tujuanDonasi->nama_tujuan }}</h1>
        <p class="mt-2">Mari bersama membantu melalui donasi barang</p>
    </div>
</section>

{{-- ================= CONTENT ================= --}}
<div class="container my-5">
    <div class="row g-4">

        {{-- ===== LEFT ===== --}}
        <div class="col-lg-8">

            {{-- IMAGE --}}
            <div class="card">
                <img src="{{ $donasi->tujuanDonasi->gambar 
                    ? asset('storage/'.$donasi->tujuanDonasi->gambar) 
                    : asset('images/default.jpg') }}"
                     class="cause-img w-100">
            </div>

            {{-- DESKRIPSI --}}
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Tentang Program Donasi</h4>
                    <p class="lead">
                        {{ $donasi->tujuanDonasi->deskripsi ?? 'Deskripsi belum tersedia.' }}
                    </p>
                </div>
            </div>

            {{-- PROGRESS --}}
            @php
                $terkumpul = $donasi->items->sum('nominal') ?? 0;
                $target = $donasi->tujuanDonasi->target ?? 10000;
                $persen = $target > 0 ? min(100, ($terkumpul/$target)*100) : 0;
            @endphp



            {{-- DONATUR --}}
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-person-circle me-2"></i> Informasi Donatur
                </div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $donasi->donatur->nama }}</p>
                    <p><strong>Tanggal:</strong>
                        {{ \Carbon\Carbon::parse($donasi->tanggal_donasi)->format('d M Y H:i') }}
                    </p>
                    <p><strong>Status:</strong>
                        <span class="badge bg-success">{{ ucfirst($donasi->status) }}</span>
                    </p>
                </div>
            </div>

        </div>

        {{-- ===== RIGHT ===== --}}
        <div class="col-lg-4">
            <div class="card sticky">
                <div class="card-body text-center">
                    <h5 class="mb-3">
                        <i class="bi bi-heart-fill text-danger"></i> Aksi Donasi
                    </h5>

                    <p class="text-muted small">
                        Klik tombol di bawah untuk menambahkan item donasi
                    </p>

                    <a href="{{ route('donasi_items.create',$donasi->id) }}"
                       class="btn btn-donasi w-100 mt-3">
                        <i class="bi bi-plus-circle me-1"></i>
                        Tambah Item Donasi
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
