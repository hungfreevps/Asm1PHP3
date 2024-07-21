<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>


  <!-- Vendor CSS Files -->
  <link href="/client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/client/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="/client/assets/css/variables.css" rel="stylesheet">
  <link href="/client/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">

    @include('client.layouts.partials.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <img src="/client/assets/img/post-slide-3.jpg" alt="" height="500px" width="100%">
    </section><!-- End Hero Slider Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Sản Phẩm</h2>
        </div>

        <div class="row g-5">


          <div class="col-lg-12">
            <div class="row g-5">
              @yield('content')
              {{-- @include('client.layouts.partials.slidebar') --}}
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section><!-- End Lifestyle Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
        @include('client.layouts.partials.footer')
  </footer>
  <!-- Vendor JS Files -->
  <script src="/client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/client/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/client/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/client/assets/vendor/aos/aos.js"></script>
  <script src="/client/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/client/assets/js/main.js"></script>

</body>

</html>
