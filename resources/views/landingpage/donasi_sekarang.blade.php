@extends('landingpage.layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <title>Donasi Sekarang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        body {
            background-color: #f4f6f9;
        }

        /* Breadcrumb */
        .breadcrumb-section {
            height: 220px;
            background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),
                url('{{ asset('images/breadcrumb.jpg') }}') center/cover no-repeat;
        }

        /* Donation Card */
        .donation-wrapper {
            margin: 80px 0;
        }

        .donation-card {
            border-radius: 20px;
            overflow: hidden;
            border: none;
        }

        .donation-header {
            background: linear-gradient(135deg, #0d6efd, #084298);
            color: #fff;
            padding: 35px 30px;
            text-align: center;
        }

        .donation-header h3 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .donation-header p {
            font-size: 14px;
            opacity: .9;
            margin: 0;
        }

        .donation-body {
            padding: 35px 30px;
            background: #fff;
        }

        /* Form */
        .form-floating>.form-control {
            border-radius: 12px;
        }

        .btn-donate {
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
        }

        /* ===== FIX INPUT TEXT TIDAK TERLIHAT ===== */
        .donation-body .form-control {
            background-color: #ffffff !important;
            color: #212529 !important;
            border: 1px solid #ced4da;
        }

        /* Saat fokus */
        .donation-body .form-control:focus {
            background-color: #ffffff !important;
            color: #212529 !important;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, .25);
        }

        /* FIX label floating */
        .form-floating>label {
            color: #6c757d;
        }

        /* FIX Chrome autofill */
        input:-webkit-autofill {
            -webkit-text-fill-color: #212529 !important;
            box-shadow: 0 0 0px 1000px #ffffff inset !important;
        }
    </style>
</head>

<body>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section d-flex align-items-center justify-content-center">
        <h2 class="text-white fw-bold">Donasi Sekarang</h2>
    </section>

    <!-- Donation Form -->
    <section class="donation-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">

                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card shadow donation-card">

                        <!-- Header -->
                        <div class="donation-header">
                            <h3>Data Donatur</h3>
                            <p>Lengkapi data diri sebelum melanjutkan donasi</p>
                        </div>

                        <!-- Body -->
                        <div class="donation-body">
                            <form action="{{ route('donatur.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="tujuan_donasi_id" value="{{ $tujuan->id }}">

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Email (Opsional)</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Nomor HP</label>
                                    <input type="text" name="no_hp" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 btn-donate">
                                    Lanjut Donasi →
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>

@endsection