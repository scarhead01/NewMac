<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="MAC, Macbuilders, Mac Builders" name="keywords">
	<meta content="Macbuilders" property="og:title">
	<meta content="Holdings, Construction Company, Quadruple AAAA, Building Construction, Road Construction" property="og:description">
	<meta content="{{ asset('assets/img/logo/white-logos-mac-100x70.png') }}" property="og:image">
	<meta content="https://macbuilders.com.ph/" property="og:url">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo/white-logos-mac-100x70.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/hiring.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/job-info.css') }}" rel="stylesheet">

  
</head>

<body>
  @include('layout.header')
  
	<!-- Preloader Start -->
	@yield('content')
<footer id="footer">

    <div class="footer-top">
      <div class="container ">
        <div class="row d-flex align-items-center justify-content-center">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Macbuilders</h3>
            <p>
              1423 The Mondrian Bldg.  <br>
              P Ocampo St. Ext.<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@macbuilder.com.ph<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/'  ) }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#portfolio') }}">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#team') }}">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Privacy Policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Terms and Conditions</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Port Construction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Building Construction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Dam, Reservoir and Tunnels</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Airport and Horizontal Structures</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Roads and Bridges Construction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/' . '#services') }}">Pile Works</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Please subscribe to receive updates on our website</p>
            <form onsubmit=" return false;">
              <input type="email" name="email" id="email">
              <input type="submit" onclick="subscribe()" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Obanana Corp</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://obananadigitalsolutions.com/">Obanana System Development Team</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>
    function subscribe() {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Subscribed Successfully',
        showConfirmButton: false,
        timer: 1500
      })
      
    }
  </script>

</body>

</html>
