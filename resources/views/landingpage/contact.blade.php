@extends('landingpage.layouts.app')
@section('content')
  <!-- Breadcrumb Section Starts -->
  <section class="breadcrumb position-relative mb-0">
    <div class="overlay"></div>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
      <div class="breadcrumb-inner">
        <h2 class="white mb-0">Contact Us</h2>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section Ends -->

  <!-- Contact Us Section Starts -->
  <section class="contact-us position-relative bg-light">
    <div class="overlay"></div>
    <div class="container position-relative">
      <div class="contact-us-inner text-center text-lg-start">
        <div class="row gx-lg-5 gy-5 align-items-center">
          <div class="col-lg-5">
            <div class="contact-us-left">
              <span class="h4 fw-bold playfair blue">Contact Us</span>
              <h2 class="mt-1 mb-4">Get In Touch</h2>
              <div class="contact-info">
                <ul class="list-unstyled">
                  <li class="mb-3"><a href="" class="secondary h5 fw-bold playfair blue d-flex align-items-center justify-content-center justify-content-lg-start"><i class="fas fa-location-arrow primary bg-white rounded-circle border border-light text-center me-3"></i> <span>14/A, Kinglo City Hall, NYC</span></a></li>
                  <li class="mb-3"><a href="" class="secondary h5 fw-bold playfair blue d-flex align-items-center justify-content-center justify-content-lg-start"><i class="far fa-envelope-open primary bg-white rounded-circle border border-light text-center me-3"></i> <span>info@charitee.com</span></a></li>
                  <li><a href="" class="secondary h5 fw-bold playfair blue d-flex align-items-center justify-content-center justify-content-lg-start"><i class="fas fa-phone-volume primary bg-white rounded-circle border border-light text-center me-3"></i> <span>+1 (514) 312-5679</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="contact-us-right">
              <span class="fw-bold primary playfair h5">* The following info is required</span>
              <p class="mt-1 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <form class="text-center">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Full Name" class="mb-3 bg-white">
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <input type="tel" placeholder="Phone No." class="mb-3 bg-white">
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <input type="email" placeholder="Email Address" class="mb-3 bg-white" required>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Subject" class="mb-3 bg-white">
                  </div>
                </div>
                <textarea placeholder="Message..." rows="4" class="mb-3 bg-white"></textarea>
                <button class="btn-primary border-0">Send Message</button>
              </form>
            </div>
          </div>
        </div>
        <div class="contact-social-media mt-5 text-center">
          <p class="fw-bold h4 playfair primary text-capitalize mb-3">Follow us on social media</p>
          <ul class="d-flex social-links list-unstyled gap-2 justify-content-center">
            <li><a href=""><i class="fab fa-facebook text-center text-white rounded-circle bg-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-twitter text-center text-white rounded-circle bg-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-instagram text-center text-white rounded-circle bg-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-youtube text-center text-white rounded-circle bg-youtube"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin text-center text-white rounded-circle bg-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us Section Ends -->

  <!-- Map -->
  <div class="contact-map">
    <iframe height="500" class="rounded w-100 d-block"
                src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
  </div>
  <!-- Map -->

  <!-- Donate Section Starts -->
  <section class="donate1 position-relative z-1">
    <div class="overlay bg-light"></div>
    <div class="container position-relative">
      <div class="donate-inner">
        <div class="donate-left text-center">
          <span class="h4 fw-bold playfair blue">Donate Now</span>
          <h2 class="mt-1 mb-3 w-lg-50 w-md-75 m-auto">Give a helping hand for a needy people</h2>
          <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquam doloremque dolorem aut quo in obs!</p>
          <p class="secondary mb-4"><span class="fw-bold">Have any question about donation?</span><span class="d-block">Call us now: +123-4567-9810</span></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Donate Section End -->

  <!-- Involvement Banner Starts -->
  <section class="involvement-banner py-5">
    <div class="container">
      <div class="involvement-banner-inner text-center text-lg-start">
        <div class="row align-items-center gy-4">
          <div class="col-lg-8">
            <div class="involvement-banner-left">
              <ul class="list-unstyled d-flex flex-column flex-lg-row align-items-center gap-4">
                <li>
                  <span class="bg-white rounded-circle d-flex align-items-center justify-content-center"><img src="images/handshake.png" alt="handshake icon" class=""></span>
                </li>
                <li>
                  <h3 class="mb-0 white">Best Way ot Make a Difference in the Lives of Others</h3>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="involvement-banner-right text-lg-end">
              <a href="contact.html" class="btn-primary">Get Involved Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Involvement Banner Starts -->

@endsection