<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
       <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('assets/img/logo/mac-logo.png') }}" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/' . '#about') }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/' . '#services') }}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/' . '#portfolio') }}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/' . '#team') }}">Join Us</a></li>
          {{-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">About Us</a>
    </div>
  </header><!-- End Header -->