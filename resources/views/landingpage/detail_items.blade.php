<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Donasi - {{ $donasi->tujuanDonasi->nama_tujuan }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #4f46e5;
            --secondary-color: #64748b;
            --bg-body: #f8fafc;
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        body { 
            background-color: var(--bg-body); 
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #1e293b;
        }

        /* Hero Header */
        .hero-detail {
            height: 300px;
            background: linear-gradient(rgba(15, 23, 42, 0.6), rgba(15, 23, 42, 0.8)),
                        url('{{ asset('images/breadcrumb.jpg') }}') center/cover no-repeat;
            display: flex;
            align-items: center;
            color: #fff;
            margin-bottom: -100px; /* Pulling content up */
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            background: #fff;
        }

        .card-title-premium {
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.02em;
        }

        /* Image Styling */
        .main-donation-img {
            height: 350px;
            object-fit: cover;
            border-radius: 16px;
        }

        /* Table Design */
        .table-modern {
            border-collapse: separate;
            border-spacing: 0 8px;
        }
        .table-modern thead th {
            border: none;
            color: var(--secondary-color);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            padding: 15px;
        }
        .table-modern tbody tr {
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            border-radius: 10px;
            background: #fff;
            transition: transform 0.2s;
        }
        .table-modern tbody td {
            padding: 15px;
            background: #fff;
            border: none;
            font-size: 0.9rem;
        }
        .table-modern tbody tr td:first-child { border-radius: 10px 0 0 10px; }
        .table-modern tbody tr td:last-child { border-radius: 0 10px 10px 0; }

        .item-thumb {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }

        /* Status Badges */
        .badge-status {
            padding: 6px 14px;
            border-radius: 100px;
            font-weight: 600;
            font-size: 0.75rem;
        }
        .badge-aktif { background: #dcfce7; color: #15803d; }
        .badge-nonaktif { background: #fee2e2; color: #b91c1c; }

        /* Info List */
        .info-label {
            display: block;
            color: var(--secondary-color);
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 2px;
        }
        .info-value {
            display: block;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .category-tag {
            background: #eff6ff;
            color: #2563eb;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

<section class="hero-detail">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: transparent;">
                <li class="breadcrumb-item">
    <a href="{{ route('donasi_list') }}" class="text-white-50">Donasi</a>
</li>

                <li class="breadcrumb-item active text-white" aria-current="page">Detail</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold">{{ $donasi->tujuanDonasi->nama_tujuan }}</h1>
    </div>
</section>

<main class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="card p-4 mb-4 border-0">
                    <img src="{{ $donasi->tujuanDonasi->gambar ? asset('storage/'.$donasi->tujuanDonasi->gambar) : asset('images/default.jpg') }}" 
                         alt="Main Image" class="main-donation-img mb-4">
                    
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="category-tag mb-2 d-inline-block">{{ $donasi->tujuanDonasi->kategori ?? 'Umum' }}</span>
                            <h2 class="card-title-premium">{{ $donasi->tujuanDonasi->nama_tujuan }}</h2>
                        </div>
                        <div class="text-end">
                            <span class="badge-status badge-{{ $donasi->status == 'aktif' ? 'aktif' : 'nonaktif' }}">
                                <i class="fa-solid fa-circle fa-2xs me-1"></i> {{ ucfirst($donasi->status) }}
                            </span>
                        </div>
                    </div>
                    
                    <p class="text-muted leading-relaxed" style="line-height: 1.8;">
                        {{ $donasi->tujuanDonasi->deskripsi ?? 'Tidak ada deskripsi tambahan untuk tujuan donasi ini.' }}
                    </p>
                </div>

                <div class="card p-4 border-0">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title-premium mb-0">Rincian Barang</h4>
                        <span class="text-muted small fw-medium">{{ $donasi->items->count() }} Item Terdaftar</span>
                    </div>

                    @if($donasi->items->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-modern align-middle">
                                <thead>
                                    <tr>
                                        <th>Barang</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($donasi->items as $item)
                                        <tr>
                                            <td>
                                                <div class="fw-bold text-dark">{{ $item->nama_barang }}</div>
                                            </td>
                                            <td>
                                                <span class="fw-medium">{{ $item->jumlah }}</span> 
                                                <small class="text-muted">{{ $item->satuan }}</small>
                                            </td>
                                            <td>
                                                <span class="badge bg-light text-dark border fw-normal">{{ ucfirst($item->kondisi) }}</span>
                                            </td>
                                            <td>
                                                @if($item->gambar)
                                                    <img src="{{ asset('storage/'.$item->gambar) }}" class="item-thumb" alt="Item">
                                                @else
                                                    <div class="item-thumb bg-light d-flex align-items-center justify-content-center text-muted">
                                                        <i class="fa-solid fa-image fa-sm"></i>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png" width="80" class="mb-3 opacity-25">
                            <p class="text-muted">Belum ada item yang ditambahkan.</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 mb-4 sticky-top" style="top: 20px; z-index: 10;">
                    <h5 class="card-title-premium mb-4">Ringkasan Donasi</h5>
                    
                    <div class="mb-4 d-flex align-items-center p-3 bg-light rounded-4">
                        <div class="avatar me-3">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 48px; height: 48px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>
                        <div>
                            <span class="info-label">Donatur</span>
                            <span class="info-value mb-0">{{ $donasi->donatur->nama }}</span>
                        </div>
                    </div>

                    <div class="px-2">
                        <span class="info-label"><i class="fa-regular fa-calendar me-2"></i>Tanggal Diterima</span>
                        <span class="info-value">{{ \Carbon\Carbon::parse($donasi->tanggal_donasi)->format('d F Y') }}</span>

                        <span class="info-label"><i class="fa-solid fa-hashtag me-2"></i>ID Transaksi</span>
                        <span class="info-value">#DON-{{ str_pad($donasi->id, 5, '0', STR_PAD_LEFT) }}</span>
                    </div>

                    <hr class="my-4 opacity-50">

                </div>
            </div>

        </div>
    </div>
</main>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>