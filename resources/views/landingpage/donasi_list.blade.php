@extends('landingpage.layouts.app')
@section('content')

  <!-- Breadcrumb Section Starts -->
  <section class="breadcrumb position-relative mb-0">
    <div class="overlay"></div>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
      <div class="breadcrumb-inner">
        <h2 class="white mb-0">Daftar Program Donasi</h2>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section Ends -->

  <!-- Donation Section Start -->
  <section class="donation position-relative z-2">
    <div class="container">
      <div class="donation-inner">
        <div class="donation-title w-md-50 m-auto text-center mb-5">
          <span class="blue h4 fw-bold playfair">Apa yang Kami Lakukan</span>
          <h2 class="mb-0 mt-1">Anda dapat membantu dengan mendonasikan barang layak pakai</h2>
        </div>
        <!-- Alokasi Donasi Start -->
        <section class="donation-list py-5">
          <div class="container">
            <div class="row g-4">

              @forelse ($tujuanDonasi as $item)
                <div class="col-lg-4 col-md-6">
                  <div class="donation-card bg-white shadow rounded h-100">

                    {{-- Gambar --}}
                    <div class="donation-img">
                      <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid w-100 rounded-top"
                        alt="{{ $item->nama_tujuan }}">
                    </div>

                    {{-- Konten --}}
                    <div class="p-4">
                      <h4 class="mb-2">{{ $item->nama_tujuan }}</h4>
                      <p class="text-muted">
                        {{ Str::limit($item->deskripsi, 120) }}
                      </p>

                      <a href="{{ route('donasi.sekarang', $item->id) }}" class="btn btn-primary w-100">
                        Donasi Sekarang
                      </a>
                    </div>

                  </div>
                </div>
              @empty
                <div class="col-12 text-center">
                  <p class="text-muted">Belum ada alokasi donasi tersedia.</p>
                </div>
              @endforelse

            </div>
          </div>
        </section>
        <!-- Alokasi Donasi End -->


      </div>
    </div>
  </section>
  <!-- Donation Section End -->

  Involvement Banner Starts -->

@endsection