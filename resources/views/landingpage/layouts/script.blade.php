<script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/plugin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      direction: "vertical",  
      slidesPerView: 3,
      spaceBetween: 10,
      mousewheel: true,     
      centeredSlides: true,
      initialSlide: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5000,   
        disableOnInteraction: false,
      },
    });
  </script>
</body>
</html>