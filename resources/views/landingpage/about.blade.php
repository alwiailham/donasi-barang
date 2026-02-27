@extends('landingpage.layouts.app')
@section('content')
<!-- Breadcrumb Section Starts -->
  <section class="breadcrumb position-relative mb-0">
    <div class="overlay"></div>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
      <div class="breadcrumb-inner">
        <h2 class="white mb-0">Tentang Kami</h2>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section Ends -->

  <!-- About Section Start -->
  <section class="about">
    <div class="container">
      <div class="about-inner mb-5">
        <div class="row align-items-center gx-lg-5 gy-5">
          <div class="col-lg-6">
            <div class="about-left position-relative">
              <img src="images/orang_donasi.jpg" alt="gambar tentang kami" class="w-100">
              <div class="exp-box playfair border border-5 border-white bg-secondary white h3 mb-0 fw-bold position-absolute text-center text-md-start">
                <span>20 Tahun <span class="d-block">Pengalaman</span></span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-right ms-lg-2 text-center text-lg-start">
              <h4 class="blue mb-1">Melayani Sekarang</h4>
              <h2 class="mb-3">Tujuan Kami: Mengelola Donasi Barang dengan Efektif</h2>
              <p class="mb-2">Kami menghubungkan donatur, relawan, dan lembaga penyalur untuk memastikan barang donasi tercatat, tersortir, dan tersalurkan ke penerima yang membutuhkan.</p>
              <p class="mb-4">Sistem manajemen donasi barang kami membantu memudahkan proses pencatatan, pemantauan stok, penjadwalan penyaluran, dan pelaporan — sehingga setiap sumbangan memiliki jejak yang jelas dan dampak yang terukur.</p>
            </div>
          </div>
        </div>
      </div>
     <div class="about-features">
  <div class="row gy-4">

   <div class="about-features">
  <div class="row gy-4 align-items-stretch">

    <div class="col-lg-3 col-md-6">
      <div class="feature-box p-4 border border-1 border-light transition text-center rounded h-100">
        <div class="feature-icon mb-4">
          <img src="images/handshake.png" alt="ikon kerjasama">
        </div>
        <div class="feature-info">
          <h4 class="mb-2"><a href="" class="blue">Terima & Klasifikasi</a></h4>
          <p class="mb-0">Menerima barang donasi, memeriksa kondisi, dan mengkategorikan agar mudah disalurkan.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="feature-box p-4 border border-1 border-light transition text-center rounded h-100">
        <div class="feature-icon mb-4">
          <img src="images/water-drop.png" alt="ikon distribusi">
        </div>
        <div class="feature-info">
          <h4 class="mb-2"><a href="" class="blue">Pendistribusian Tepat Sasaran</a></h4>
          <p class="mb-0">Menyalurkan barang ke penerima berdasarkan kebutuhan dan prioritas wilayah.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="feature-box p-4 border border-1 border-light transition text-center rounded h-100">
        <div class="feature-icon mb-4">
          <img src="images/heart-rate.png" alt="ikon kepedulian">
        </div>
        <div class="feature-info">
          <h4 class="mb-2"><a href="" class="blue">Pantauan & Pelaporan</a></h4>
          <p class="mb-0">Fitur pelacakan stok, riwayat donasi, dan laporan penyaluran untuk transparansi.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="feature-box p-4 border border-1 border-light transition text-center rounded">
        <div class="feature-icon mb-4">
          <img src="images/education.png" alt="ikon edukasi">
        </div>
        <div class="feature-info">
          <h4 class="mb-2">
            <a href="" class="blue">Kolaborasi Komunitas</a>
          </h4>
          <p class="mb-0">Bekerja sama dengan relawan dan organisasi lokal untuk memperluas jangkauan bantuan.</p>
        </div>
      </div>
    </div>

  </div>
</div>

    </div>
  </section>
  <!-- About Section End -->

  <!-- Donation Banner Section Start -->
  <section class="dono-banner">
    <div class="container">
      <div class="dono-banner-inner text-center  bg-primary">
        <div class="row gx-0 align-items-center">
          <div class="col-lg-5">
            <div class="dono-banner-left px-5 py-7 white position-relative" style="background-image: url(images/children-left-alone-after-hostilities-2021-09-24-02-51-49-utc.jpg);">
              <div class="overlay"></div>
              <div class="position-relative">
                <span>Donasi Barang</span>
                <h2 class="mb-4 white mt-1">Platform Manajemen Donasi Barang</h2>
                <p class="mb-4">Hubungkan barang donasi Anda dengan keluarga dan lembaga yang membutuhkan — cepat, aman, dan tercatat.</p>
                <ul class="d-flex justify-content-center list-unstyled gap-3 flex-wrap">
                  <li>Target: <span class="fw-bold">50.000 Barang</span></li>
                  <li>Tanggal: <span class="fw-bold">23 Jan 2025</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="dono-banner-right white px-5 py-7">
              <span>Program Penyaluran</span>
              <h2 class="mb-4 white m-auto mt-1">Menyalurkan Bantuan Dengan Tepat</h2>
              <p class="mb-4">Kami menyusun jadwal penyaluran, memprioritaskan penerima, dan membuat laporan sehingga proses distribusi dapat dipantau dan dipertanggungjawabkan.</p>
              <ul class="d-flex flex-wrap justify-content-center list-unstyled gap-3">
                <li>Target: <span class="fw-bold">50.000 Barang</span></li>
                <li>Tanggal: <span class="fw-bold">23 Jan 2025</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Donation Banner Section End -->

  <!-- Volunteer Section Starts -->
  <section class="volunteer bg-light">
    <div class="container">
      <div class="volunteer-inner">
        <div class="row align-items-center gx-lg-5 gy-5">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="volunteer-left">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="volunteer-box position-relative overflow-hidden">
                    <div class="volunteer-img">
                      <img src="images/review3.jpg" alt="relawan menyiapkan donasi" class="w-100">
                    </div>
                    <div class="overlay"></div>
                    <div class="volunteer-info text-center position-absolute start-50 translate-middle">
                      <h4 class="mb-2">Relawan Lapangan</h4>
                      <span class="white">Koordinator Distribusi</span>
                      <ul class="social-link mt-3">
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="volunteer-box position-relative overflow-hidden">
                    <div class="volunteer-img">
                      <img src="images/review6.jpg" alt="relawan" class="w-100">
                    </div>
                    <div class="overlay"></div>
                    <div class="volunteer-info text-center position-absolute start-50 translate-middle">
                      <h4 class="mb-2">Relawan Gudang</h4>
                      <span class="white">Pengecekan & Inventaris</span>
                      <ul class="social-link mt-3">
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="volunteer-box position-relative overflow-hidden">
                    <div class="volunteer-img">
                      <img src="images/review8.jpg" alt="relawan tersenyum" class="w-100">
                    </div>
                    <div class="overlay"></div>
                    <div class="volunteer-info text-center position-absolute start-50 translate-middle">
                      <h4 class="mb-2">Relawan Komunitas</h4>
                      <span class="white">Pengumpul Donasi</span>
                      <ul class="social-link mt-3">
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="volunteer-box position-relative overflow-hidden">
                    <div class="volunteer-img">
                      <img src="images/review9.jpg" alt="relawan muda" class="w-100">
                    </div>
                    <div class="overlay"></div>
                    <div class="volunteer-info text-center position-absolute start-50 translate-middle">
                      <h4 class="mb-2">Relawan Muda</h4>
                      <span class="white">Pendata & Pendamping</span>
                      <ul class="social-link mt-3">
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block"><a href="#" class="rounded-circle d-block me-1 text-center"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="volunteer-right text-center text-lg-start">
              <span class="h4 fw-bold playfair blue">Relawan</span>
              <h2 class="mt-1 mb-3">Temui mereka yang membantu menyalurkan donasi</h2>
              <p class="mb-4">Tim relawan kami berperan penting dalam memastikan setiap barang donasi diperiksa, dikemas, dan dikirimkan sesuai kebutuhan komunitas penerima.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Volunteer Section Ends -->

    <!-- Volunteer Banner Section Start -->
  <section class="volunteer-banner position-relative">
    <div class="overlay"></div>
    <div class="container position-relative">
      <div class="volunteer-banner-inner white pb-8 text-center text-lg-start">
        <div class="row align-items-center gy-5">
          <div class="col-lg-8">
            <div class="volunteer-banner-left">
              <span class="h4 fw-bold playfair">Jadi Relawan</span>
              <h2 class="mt-1 mb-3">Kegiatan penyaluran bantuan berlangsung di berbagai wilayah</h2>
              <p class="mb-0">Bergabunglah membantu pengumpulan, pengecekan, dan distribusi barang supaya lebih banyak keluarga terbantu.</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Volunteer Banner Section End -->

  <!-- Faq Section Start -->
  <section class="faq pt-0 position-relative">
    <div class="container">
      <div class="faq-inner" style="margin-top: -100px;">
        <div class="row gx-lg-5 gy-5 gy-lg-0">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="faq-left">
              <img src="images/orang_donasi.jpg" alt="relawan" class="w-100">
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 m-0">
            <div class="faq-right text-center text-lg-start">
              <span class="h4 fw-bold playfair white">Pertanyaan Umum</span>
              <h2 class="mt-1 mb-5">Kami Siap Membantu</h2>
              <div class="faq-accordion text-start">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item rounded-0 mb-3 border-0 ">
                    <h2 class="accordion-header">
                      <button class="accordion-button rounded-0 bg-grey fw-bold shadow-none p-4 mb-0 h5 text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        01. Apa yang dilakukan platform ini?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body text">
                        Platform ini mengelola alur penerimaan, penyimpanan, dan penyaluran barang donasi agar lebih cepat, tepat sasaran, dan tercatat rapi.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed bg-grey fw-bold shadow-none p-4 mb-0 h5 text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        02. Bagaimana donasi saya digunakan?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body text">
                        Donasi barang akan diperiksa, dikategorikan, dan disalurkan untuk kebutuhan yang paling mendesak. Semua proses tercatat dalam sistem sehingga dapat dilaporkan.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-0 mb-3">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed bg-grey fw-bold shadow-none p-4 mb-0 h5 text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        03. Apakah ada bukti penyaluran?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body text">
                        Ya — setiap penyaluran didokumentasikan dan dapat dilihat dalam laporan distribusi yang tersedia untuk donatur dan mitra.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-0 mb-3">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed bg-grey fw-bold shadow-none p-4 mb-0 h5 text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        04. Bisakah saya menjadi relawan rutin?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body text">
                        Tentu. Kami membuka pendaftaran relawan untuk berbagai peran: pengumpulan, pengecekan, pengemasan, dan distribusi.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-0 rounded-0">
                    <h2 class="accordion-header">
                      <button class="accordion-button rounded-0 collapsed bg-grey fw-bold shadow-none p-4 mb-0 h5 text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        05. Bagaimana cara bergabung atau menghubungi?
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body text">
                        Kunjungi halaman kontak atau pendaftaran relawan di situs untuk informasi lebih lanjut dan formulir pendaftaran.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </section>
  <!-- Faq Section End -->


  <!-- Involvement Banner Starts -->
  <section class="involvement-banner py-5">
    <div class="container">
      <div class="involvement-banner-inner text-center text-lg-start">
        <div class="row align-items-center gy-4">
          <div class="col-lg-8">
            <div class="involvement-banner-left">
              <ul class="list-unstyled d-flex flex-column flex-lg-row align-items-center gap-4">
                <li>
                  <span class="bg-white rounded-circle d-flex align-items-center justify-content-center"><img src="images/handshake.png" alt="ikon kerjasama" class=""></span>
                </li>
                <li>
                  <h3 class="mb-0 white">Cara Terbaik untuk Membantu Sesama melalui Donasi Barang</h3>
                </li>
              </ul>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Involvement Banner Starts -->


@endsection