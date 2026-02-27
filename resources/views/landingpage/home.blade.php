@extends('landingpage.layouts.app')
@section('content')

  <!-- Banner Section End -->
  <section class="banner position-relative">
    <div class="container">
      <div class="banner-inner pt-xl-4 position-relative pb-8">
        <div class="banner-title text-center w-lg-50 m-auto white mb-5 mb-xl-0">
          <h1 class="mb-3 white">Bersama, Kita Bisa <span class="primary">Mengubah</span> Kehidupan.</h1>
          <p class="mb-4">Kedermawanan Anda lebih dari sekadar sumbangan — itu adalah harapan, rasa aman, dan kesempatan
            bagi mereka yang paling membutuhkan. Bersama, kita dapat memutus siklus kesulitan.</p>
          <a href="{{ route('donasi_list') }}" class="btn1 mt-2 me-2">Donasi Sekarang</a>
          <a href="{{ route('about') }}" class="btn2">Pelajari Lebih Lanjut</a>
          <div class="banner-spin position-absolute">
            <div class="rounded-circle">
              <div class="spin-demo-main position-relative">
                <i class="fas fa-arrow-right" style="rotate: -45deg;"></i>
                <svg id="rotatingText" viewBox="0 0 200 200" width="105" height="105">
                  <defs>
                    <path id="circle" d="M 100, 100
                                                  m -75, 0
                                                  a 75, 75 0 1, 0 150, 0
                                                  a 75, 75 0 1, 0 -150, 0">
                    </path>
                  </defs>
                  <text>
                    <textPath alignment-baseline="hanging" xlink:href="#circle" class="text fw-bold playfair">
                      Selamatkan Nyawa Donasi Sekarang...
                    </textPath>
                  </text>
                </svg>
              </div>
            </div>
          </div>
          <div class="banner-volunteers position-absolute">
            <ul class="list-unstyled d-flex">
              <li style="margin-right: -10px;">
                <img src="images/smiling-volunteer-organization-member-2021-08-31-07-03-46-utc.jpg" alt="foto relawan"
                  class="object-fit-cover rounded-circle" style="height: 50px; width: 50px;">
              </li>
              <li style="margin-right: -10px;">
                <img src="images/teen-volunteer-girl-2021-08-27-09-31-01-utc.jpg" alt="foto relawan"
                  class="object-fit-cover rounded-circle" style="height: 50px; width: 50px;">
              </li>
              <li style="margin-right: -10px;">
                <img src="images/man-joining-volunteer-organization-2021-08-31-07-03-461-utc.jpg" alt="foto relawan"
                  class="object-fit-cover rounded-circle" style="height: 50px; width: 50px;">
              </li>
              <li>
                <img src="images/volunteers-filling-cardboard-boxes-2021-08-30-02-11-37-utc.jpg" alt="foto relawan"
                  class="object-fit-cover rounded-circle" style="height: 50px; width: 50px;">
              </li>
            </ul>
            <div class="playfair text-center">
              <span class="primary h4 fw-bold">50+</span> <span class="d-block h5">Relawan</span>
            </div>
          </div>
        </div>
        <br>

        <div class="banner-body">
          <div class="row align-items-end gy-4">
            <div class="banner-body-box rounded-4 overflow-hidden position-relative">
              <div class="charity-img position-relative">
                <img src="{{ asset('images/banjir2.jpeg') }}" alt="gambar donasi" class="w-100 h-100 object-fit-cover">
                <div class="overlay opacity-50"></div>
              </div>

              <div class="charity-info position-absolute bottom-0 p-3 white">
                <h4 class="white mb-2">Dana Bantuan Cepat</h4>
                <p>Salurkan donasi barang layak pakai untuk membantu masyarakat yang sedang membutuhkan. Setiap barang
                  yang Anda donasikan akan dikelola secara transparan dan disalurkan tepat sasaran.</p>
              </div>
            </div>

            <div class="banner-body-box rounded-4 overflow-hidden position-relative">
              <div class="charity-img position-relative">
                <img src="{{ asset('images/anak.jpeg') }}" alt="gambar donasi" class="w-100 h-100 object-fit-cover">
                <div class="overlay opacity-50"></div>
              </div>

              <div class="charity-info position-absolute bottom-0 p-3 white">
                <h4 class="white mb-2">Dana Masa Depan Cerah</h4>
                <p>Salurkan donasi barang untuk mendukung tumbuh kembang dan pendidikan anak-anak yang membutuhkan. Setiap bantuan yang anda berikan, anda berkontribusi pada masa depan yang lebih baik.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <!-- Feature Section Starts -->
  <section class="feature p-0 position-relative">
    <div class="container">
      <div class="feature-inner">
        <div class="row gy-4 gy-lg-0 gx-lg-5">
          <div class="col-lg-4">
            <div class="feature-box p-4 bg-secondary rounded-4 shadow">
              <div class="feature-img mb-3">
                <img src="images/handshake.png" alt="ikon fitur" style="width: 40px; height: 40px;">
              </div>
              <div class="feature-info white">
                <h4 class="mb-2 secondary white">Pemberian yang Transparan</h4>
                <p class="mb-0">Setiap donasi dilacak dan dilaporkan. Kami memastikan kebaikan Anda tersalurkan langsung.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box p-4 bg-secondary rounded-4 shadow">
              <div class="feature-img mb-3">
                <img src="images/heart-rate.png" alt="ikon fitur" style="width: 40px; height: 40px;">
              </div>
              <div class="feature-info white">
                <h4 class="mb-2 secondary white">Dampak Berbasis Komunitas</h4>
                <p class="mb-0">Kami bermitra dengan komunitas lokal untuk menciptakan solusi yang bertahan lama.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="feature-box p-4 bg-secondary rounded-4 shadow">
              <div class="feature-img mb-3">
                <img src="images/medicine.png" alt="ikon fitur" style="width: 40px; height: 40px;">
              </div>
              <div class="feature-info white">
                <h4 class="mb-2 secondary white">Respon Darurat, Cepat</h4>
                <p class="mb-0">Saat bencana terjadi, tim kami cepat hadir di lapangan memberikan bantuan mendesak.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature Section Ends -->

  <!-- About Section Starts -->
  <section class="about">
    <div class="container">
      <div class="about-inner">
        <div class="about-body">
          <div class="row gx-lg-5 gy-5 align-items-center">

            <!-- Text Content -->
            <div class="col-lg-7">
              <div class="about-body-right text-center text-lg-start">

                <h2 class="mb-3">Memberdayakan Komunitas, Menginspirasi Perubahan!</h2>
                <p class="mb-4">
                  Di balik setiap angka ada sebuah kisah — seorang anak yang bisa kembali bersekolah,
                  keluarga yang mendapatkan kembali rasa aman, dan komunitas yang mulai membangun lebih kuat.
                  Dengan dukungan Anda, kita dapat mengubah belas kasih menjadi perubahan nyata dan terukur.
                </p>


                <!-- Mission -->
                <div class="mission p-4 bg-secondary-light rounded-4 mb-4">
                  <h4 class="mb-2">Misi Kami</h4>
                  <p class="mb-0">
                    Misi kami adalah menciptakan perubahan berkelanjutan dengan memberikan bantuan segera kepada
                    keluarga yang krisis sambil membangun program yang memberdayakan individu agar dapat maju.
                    Baik itu menyediakan pakaian, perlengkapan, maupun bantuan lainnya.
                  </p>
                </div>

                <a href="about" class="btn1">Selengkapnya</a>

              </div>
            </div>

            <!-- Image Content -->
            <div class="col-lg-5">
              <div class="about-body-left position-relative">

                <div class="about-image-bg rounded-4">
                  <div class="overlay rounded-4"></div>
                </div>


                <div class="about-body-info p-4 position-absolute bottom-0 white">
                  <h4 class="mb-2 white">Kisah Kami</h4>
                  <p class="mb-0">
                    Kami adalah organisasi nirlaba yang berkomitmen membawa harapan dan martabat kepada komunitas rentan.
                    Semua orang berhak mendapat akses pada kebutuhan dasar.
                  </p>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section Ends -->


  <!-- Ad Banner Section Starts -->
  <section class="ad-banner p-0 position-relative z-1" style="margin-bottom: -6rem;">
    <div class="container">
      <div class="ad-banner-inner text-center text-lg-start">
        <div class="ad-banner-box p-5 bg-white rounded-4 position-relative border border-5 border-white">
          <div class="overlay rounded-4"></div>
          <div class="row gx-lg-5 gy-5 align-items-center position-relative">
            <div class="col-lg-5">
              <div class="ad-banner-left">
                <ul class="list-unstyled d-flex">
                  <li style="rotate: 10deg;">
                    <img src="{{ asset('images/anaktersenyum.jpeg') }}" alt="gambar ad"
                      class="border-4 border-white border rounded-3 shadow img-fluid">
                  </li>

                  <li class="mt-8" style="rotate: -10deg; margin-left: -20px;">
                    <img src="{{ asset('images/orang_senyum1.jpg') }}" alt="gambar ad"
                      class="border-4 shadow border-white border rounded-3 img-fluid">
                  </li>
                </ul>

              </div>
            </div>
            <div class="col-lg-7">
              <div class="ad-banner-right white">
                <h1 class="mb-3 white">Jadilah <span class="primary">Alasan</span> Seseorang Tersenyum</h1>
                <p class="mb-4">Setiap tindakan kebaikan kecil menumpuk menjadi perubahan besar. Dengan dukungan Anda,
                  kami dapat menyediakan pakaian, perlengkapan, dan bantuan untuk mereka yang membutuhkan.</p>
                <a href="donasi_list" class="btn1 mt-1">Donasi Sekarang</a>
                <ul
                  class="list-unstyled mt-5 d-flex flex-wrap gap-3 j align-items-center justify-content-center justify-content-lg-between">
                  <li>
                    <ul class="d-flex social-links list-unstyled gap-3 justify-content-center">
                      <li><a href=""><i class="fab fa-facebook text-center secondary rounded-circle bg-light"></i></a>
                      </li>
                      <li><a href=""><i class="fab fa-twitter text-center secondary rounded-circle bg-light"></i></a></li>
                      <li><a href=""><i class="fab fa-youtube text-center secondary rounded-circle bg-light"></i></a></li>
                      <li><a href=""><i class="fab fa-instagram text-center secondary rounded-circle bg-light"></i></a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="">www.chariteeforall.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Ad Banner Section Ends -->

  <!-- Testimonial Section Starts -->
  <section class="testimonials position-relative">
    <div class="overlay"></div>
    <div class="container position-relative pt-8">
      <div class="testimonials-inner">
        <div class="row align-items-center gx-lg-5 gy-5">
          <div class="col-xl-5">
            <div class="tesimonials-left white text-center text-lg-start">
              <h2 class="mb-3">Suara Nyata, Dampak Nyata</h2>
              <p class="mb-4">Dampak dukungan Anda paling baik diceritakan melalui suara mereka yang merasakannya. Temui
                anak-anak, keluarga, dan relawan yang hidupnya telah berubah.</p>
            </div>
          </div>
          <div class="col-xl-7">
            <div class="testimonials-right">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div
                      class="testimonial-box white p-3 bg-white bg-opacity-10 w-75 border-start border-3 border-primary rounded-3">
                      <ul class="list-unstyled d-flex flex-column flex-md-row align-items-center gap-4 ">
                        <li>
                          <img src="images/review4.JPG" alt="testimoni" class="rounded-circle object-fit-cover"
                            style="width: 75px; height: 75px;">
                        </li>
                        <li>
                          <h4 class="mb-3 white">Kisah Anak</h4>
                          <p class="mb-2">"Saya tidak menyangka bisa kembali bersekolah. Dengan beasiswa yang saya terima,
                            sekarang saya bermimpi menjadi dokter dan membantu orang lain."</p>
                          <span>
                            — <span class="fw-semibold">Sita</span>, Usia 13
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="testimonial-box white p-3 bg-white bg-opacity-10 w-75 border-start border-3 border-primary rounded-3">
                      <ul class="list-unstyled d-flex flex-column flex-md-row align-items-center gap-4 ">
                        <li>
                          <img src="images/review5.JPG" alt="testimoni" class="rounded-circle object-fit-cover"
                            style="width: 75px; height: 75px;">
                        </li>
                        <li>
                          <h4 class="mb-3 white">Kisah Orang Tua</h4>
                          <p class="mb-2">“Seringkali kami tidur dalam keadaan lapar. Berkat program distribusi bantuan,
                            anak-anak saya sehat dan penuh harapan untuk masa depan.”</p>
                          <span>
                            — <span class="fw-semibold">Ashika</span>, Ibu dari 2 anak
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="testimonial-box white p-3 bg-white bg-opacity-10 w-75 border-start border-3 border-primary rounded-3">
                      <ul class="list-unstyled d-flex flex-column flex-md-row align-items-center gap-4 ">
                        <li>
                          <img src="images/review3.jpg" alt="testimoni" class="rounded-circle"
                            style="width: 75px; height: 75px;">
                        </li>
                        <li>
                          <h4 class="mb-3 white">Pemberdayaan Perempuan</h4>
                          <p class="mb-2">“Pelatihan menjahit memberi saya keterampilan untuk mendapatkan penghasilan.
                            Sekarang saya bisa mendukung keluarga dan melatih orang lain.”</p>
                          <span>
                            — <span class="fw-semibold">Anjali</span>, Wirausaha
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="testimonial-box white p-3 bg-white bg-opacity-10 w-75 border-start border-3 border-primary rounded-3">
                      <ul class="list-unstyled d-flex flex-column flex-md-row align-items-center gap-4 ">
                        <li>
                          <img src="images/review6.JPG" alt="testimoni" class="rounded-circle object-fit-cover"
                            style="width: 75px; height: 75px;">
                        </li>
                        <li>
                          <h4 class="mb-3 white">Perspektif Relawan</h4>
                          <p class="mb-1">“Menjadi relawan di sini menunjukkan arti kasih sayang yang sebenarnya. Saya
                            datang untuk memberi waktu, namun saya menerima cinta dan rasa syukur yang besar.”</p>
                          <span>
                            — <span class="fw-semibold">Arjun</span>, Relawan
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="testimonial-box white p-3 bg-white bg-opacity-10 w-75 border-start border-3 border-primary rounded-3">
                      <ul class="list-unstyled d-flex flex-column flex-md-row align-items-center gap-4 ">
                        <li>
                          <img src="images/review7.JPG" alt="testimoni" class="rounded-circle object-fit-cover"
                            style="width: 75px; height: 75px;">
                        </li>
                        <li>
                          <h4 class="mb-3 white">Dukungan Komunitas</h4>
                          <p class="mb-2">“Sebelum program komunitas, saya merasa sendirian dan putus asa. Sekarang,
                            dengan bimbingan dan dukungan, saya dapat berkontribusi pada perkembangan desa.”</p>
                          <span>
                            — <span class="fw-semibold">Hari</span>, Anggota Komunitas
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Section Ends -->


@endsection