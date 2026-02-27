@extends('landingpage.layouts.app')
@section('content')
  <!-- Breadcrumb Section Starts -->
  <section class="breadcrumb position-relative mb-0">
    <div class="overlay"></div>
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
      <div class="breadcrumb-inner">
        <h2 class="white mb-0">Gallery</h2>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section Ends -->

  <!-- Gallery Section Starts -->
  <section class="gallery-masonary">
    <div class="container">
      <div class="gallery-masonary-title text-center">
        <span class="h4 fw-bold blue playfair">Our Gallery</span>
        <h2 class="mt-1 mb-5 w-md-75 w-lg-50 m-auto">Images of recent work are highlighted</h2>
      </div>
      <div class="gallery-masonary-body">
        <div id="animated-thumbnails" class="gallery-container">
          <div class="row g-2" data-masonry='{"percentPosition": true }'>
              <div class="col-sm-6 col-lg-4">
                <a href="images/asian-beautiful-boy-charity-cheerful-child-childhood-children-color-cute-dress-education-emotion_t20_b6GeGV.jpg" data-lightbox="gallery" class="image-wrapper position-relative">
                  <img src="images/asian-beautiful-boy-charity-cheerful-child-childhood-children-color-cute-dress-education-emotion_t20_b6GeGV.jpg" class="img-fluid" alt="gallery img">
                </a>
              </div>
              <div class="col-sm-6 col-lg-4">
                <a href="images/man-joining-volunteer-organization-2021-08-31-07-03-461-utc.jpg" data-lightbox="gallery" class="image-wrapper position-relative">
                  <img src="images/man-joining-volunteer-organization-2021-08-31-07-03-461-utc.jpg" class="img-fluid" alt="gallery img">
                </a>
              </div>
              <div class="col-sm-6 col-lg-4">
                <a href="images/cute-little-boy-and-girl-having-fun-together-and-playing-with-hurdled-basket-on-the-backyard-of-old_t20_B8gmZx.jpg" data-lightbox="gallery" class="image-wrapper position-relative">
                  <img src="images/cute-little-boy-and-girl-having-fun-together-and-playing-with-hurdled-basket-on-the-backyard-of-old_t20_B8gmZx.jpg" class="img-fluid" alt="gallery img">
                </a>
              </div>
              <div class="col-sm-6 col-lg-4">
                <a href="images/diverse-team-of-volunteers-2021-09-24-04-19-01-utc.jpg" data-lightbox="gallery" class="image-wrapper position-relative">
                  <img src="images/diverse-team-of-volunteers-2021-09-24-04-19-01-utc.jpg" class="img-fluid"  alt="gallery img">
                </a>  
              </div>
              <div class="col-sm-6 col-lg-4">
                <a href="images/group-of-indian-children-in-a-small-village-near-gwalior-in-the-madhya-pradesh-region-of-india_t20_bzPEbV.jpg" data-lightbox="gallery" class="image-wrapper position-relative">
                  <img src="images/group-of-indian-children-in-a-small-village-near-gwalior-in-the-madhya-pradesh-region-of-india_t20_bzPEbV.jpg" class="img-fluid" alt="gallery img">
                </a>  
              </div>
              <div class="col-sm-6 col-lg-4">
                <a href="images/indian-child-2021-09-03-12-46-58-utc.jpg" data-lightbox="gallery" class="image-wrapper position-relative">               
                  <img src="images/indian-child-2021-09-03-12-46-58-utc.jpg" class="img-fluid" alt="gallery img">
                </a>
              </div>
              <div class="col-sm-6 col-lg-4">
                <a href="images/people-donating-clothing-to-charity-collection-in-2021-08-26-16-13-29-utc.jpg" data-lightbox="gallery" class="image-wrapper position-relative">               
                  <img src="images/people-donating-clothing-to-charity-collection-in-2021-08-26-16-13-29-utc.jpg" class="img-fluid" alt="gallery img">
                </a>  
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>


  <div class="gallery p-0 pb-3">
      <div class="gallery-inner">
        <div class="gallery-slider">
          <div class="slide">
            <img src="images/asian-beautiful-boy-charity-cheerful-child-childhood-children-color-cute-dress-education-emotion_t20_b6GeGV.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/diverse-team-of-volunteers-2021-09-24-04-19-01-utc.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/people-donating-clothing-to-charity-collection-in-2021-08-26-16-13-29-utc.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/poor-village-childrens_t20_O0NOYO.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/serednie-ukraine-march-09-2011-portrat-of-romani-schoolgirl-looking-at-the-camera-younger-siblings_t20_JJYomO.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/serednie-ukraine-march-09-2011-romani-boy-and-little-girl-in-orange-pumpkin-style-dress-over-clothes_t20_dzoxaJ.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/women-breast-cancer-support-charity-concept-2021-08-27-00-01-12-utc.jpg" alt="gallery img">
          </div>
          <div class="slide">
            <img src="images/volunteer-with-garbage-outdoors-2021-08-28-11-56-56-utc.jpg" alt="gallery img">
          </div>
        </div>
      </div>
    </div>
  <!-- Gallery Slider Section End -->

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