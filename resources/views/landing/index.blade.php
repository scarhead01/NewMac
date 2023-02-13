@extends('layout.main')
@section('title', 'Home')
@section('content')


<section id="hero">

  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="{{ asset('assets/img/slider/mac1.png') }}" class="img-fluid"
								alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('assets/img/slider/mac2.jpg') }}" class="img-fluid"
								alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('assets/img/slider/mac3.jpg') }}" class="img-fluid"
								alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('assets/img/slider/mac4.jpg') }}" class="img-fluid"
								alt=""></div>
      <div class="swiper-slide"><img src="{{ asset('assets/img/slider/mac5.jpg') }}" class="img-fluid"
								alt=""></div>
    </div>
    <div class="swiper-button-next "></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
	  loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Quality construction and Efficient management</h1>
          <h2>Our track record of major project has 
              earned us a reputation for being creative, technologically advanced and extremely responsive to our customer’s needs.</h2>
          <a href="#about" class="btn-get-started scrollto">About Us</a>
        </div>
      </div>
    </div>



  </section><!-- End Hero -->
	<main id="main">

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">
			<div class="container" data-aos="zoom-in">

				<div class="clients-slider">
					<div class="swiper-wrapper align-items-center">
						<div class="swiper-slide"><img src="{{ asset('assets/img/partners/partners-1.png') }}" class="img-fluid"
								alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/partners/partners-2.png') }}" class="img-fluid"
								alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/partners/partners-3.png') }}" class="img-fluid"
								alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/partners/partners-4.png') }}" class="img-fluid"
								alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/partners/partners-5.png') }}" class="img-fluid"
								alt=""></div>
						<div class="swiper-slide"><img src="{{ asset('assets/img/partners/partners-6.png') }}" class="img-fluid"
								alt=""></div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</section><!-- End Clients Section -->

		<!-- ======= About Section ======= -->
		<section id="about" class="about section-bg">
			<div class="container" data-aos="fade-up">

				<div class="row no-gutters">
					<div class="content col-xl-5 d-flex align-items-stretch">
						<div class="content">
							<h3>Macbuilders</h3>
							<p>
								is an experienced general contractor company dedicated to quality
								construction and efficient management of resources. Our track record of major project has earned us a reputation
								for being creative, technologically advanced and extremely responsive to our customer’s needs.
							</p>
							<a href="{{ url('about-us') }}" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
					<div class="col-xl-7 d-flex align-items-stretch">
						<img class="img-fluid img-responsive" src="{{ asset('assets/img/about/about-us.jpg') }}" alt="">
						{{-- <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div><!-- End .content--> --}}
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Counts Section ======= -->
		<!-- <section id="counts" class="counts">
			<div class="container" data-aos="fade-up">

				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="count-box">
							<i class="bi bi-emoji-smile"></i>
							<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
								class="purecounter"></span>
							<p>Happy Clients</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-5 mt-md-0">
						<div class="count-box">
							<i class="bi bi-journal-richtext"></i>
							<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
								class="purecounter"></span>
							<p>Projects</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
						<div class="count-box">
							<i class="bi bi-headset"></i>
							<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
								class="purecounter"></span>
							<p>Man Hours</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
						<div class="count-box">
							<i class="bi bi-people"></i>
							<span data-purecounter-start="0" data-purecounter-end="1508" data-purecounter-duration="1"
								class="purecounter"></span>
							<p>Hard Workers</p>
						</div>
					</div>

				</div>

			</div>
		</section>End Counts Section -->

		<!-- ======= Tabs Section ======= -->
		<section id="tabs" class="tabs">
			<div class="container" data-aos="fade-up">

				<ul class="nav nav-tabs row d-flex">
					<li class="nav-item col-3">
						<a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
							<i class="ri-service-fill"></i>
							<h4 class="d-none d-lg-block">Affiliate Companies</h4>
						</a>
					</li>
					<li class="nav-item col-3">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
							<i class="ri-bank-fill"></i>
							<h4 class="d-none d-lg-block">Bank and Finance Institutions</h4>
						</a>
					</li>
					<li class="nav-item col-3">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
							<i class="ri-safe-fill"></i>
							<h4 class="d-none d-lg-block">Insurance</h4>
						</a>
					</li>
					<li class="nav-item col-3">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
							<i class="ri-bar-chart-grouped-fill"></i>
							<h4 class="d-none d-lg-block">Membership</h4>
						</a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active show" id="tab-1">
						<div class="affiliate_tab d-flex align-items-stretch">
							<div data-aos="fade-up" data-aos-delay="100">
								<h3>Our Affiliate Companies</h3>
								{{-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> --}}


								<!-- <ul class="affiliate_companies">
									<li><i class="ri-check-double-line"></i> Octagon Concrete Solutions (OCS) <img src="{{ asset('assets/img/affiliates/ocs.jfif') }}" alt=""></li>
									<li><i class="ri-check-double-line"></i> Premium Megastructures Inc. (PMI) <img src="{{ asset('assets/img/affiliates/teresa.jpg') }}" alt=""></li>
									<li><i class="ri-check-double-line"></i> Megaship Builders Inc. <img src="{{ asset('assets/img/affiliates/megaship.png') }}" alt=""></li>
									<li><i class="ri-check-double-line"></i> Ormoc Macmercury Hardware <img src="{{ asset('assets/img/affiliates/omh.jfif') }}" alt=""></li>
									<li><i class="ri-check-double-line"></i> Villa Theresa Subdivision <img src="{{ asset('assets/img/affiliates/teresa.jpg') }}" alt=""></li>
									<li><i class="ri-check-double-line"></i> Badminton City <img src="{{ asset('assets/img/affiliates/bc.png') }}" alt=""></li>
									<li><i class="ri-check-double-line"></i> Tempura House <img src="{{ asset('assets/img/affiliates/ts.jfif') }}" alt=""></li>
								</ul> -->

								<div class="affiliate_companies ">
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/ocs.jfif') }}" alt="" class="logo">
									<h4 >Octagon Concrete Solutions (OCS)</h4>
									</div>
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/pmi.png') }}" alt="" class="logo">
									<h4  >Premium Megastructures Inc. (PMI)</h4>
									</div>
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/megaship.png') }}" alt=""class="logo">
									<h4  >Megaship Builders Inc.</h4>
									</div>
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/omh.jfif') }}" alt=""class="logo">
									<h4  >Ormoc Macmercury Hardware</h4>
									</div>
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/teresa.jpg') }}" alt=""class="logo">
									<h4  >Villa Theresa Subdivision</h4>
									</div>
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/bc.png') }}" alt=""class="logo">
									<h4  >Badminton City</h4>
									</div>
									<div class="affiliates">
									<img src="{{ asset('assets/img/affiliates/ts.jfif') }}" alt=""class="logo">
									<h4  >Tempura House</h4>
									</div>
								</div>
								{{-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p> --}}
							</div>
							<!-- <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
								<img src="{{ asset('assets/img/partners/affiliate.jpg') }}" alt="" class="img-fluid">
							</div> -->
						</div>
					</div>
					<div class="tab-pane" id="tab-2">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
								<h3>Our Partner Banks and Finance Insitutions</h3>
								{{-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> --}}
								<ul>
									<li><i class="ri-check-double-line"></i> Allied Bank </li>
									<li><i class="ri-check-double-line"></i> Metrobank</li>
									<li><i class="ri-check-double-line"></i> Land Bank of the Philippines</li>
									<li><i class="ri-check-double-line"></i> China Bank</li>
									<li><i class="ri-check-double-line"></i> Bank of Commerce</li>
									<li><i class="ri-check-double-line"></i> Banco de Oro</li>
								</ul>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center">
								<img src="{{ asset('assets/img/banks.png') }}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-3">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
								<h3>Our Partner Insurance Companies</h3>
								{{-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p> --}}
								<ul>
									<li><i class="ri-check-double-line"></i> Philippines Insular Life </li>
									<li><i class="ri-check-double-line"></i> Phil-Am Life</li>
									<li><i class="ri-check-double-line"></i> Standard Insurance Co., Inc.</li>
								</ul>
								{{-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> --}}
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center">
								<img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-4">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
								<h3>Our Membership</h3>
								{{-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p> --}}
								{{-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> --}}
								<ul>
									<li><i class="ri-check-double-line"></i> Filipino-Chinese Chamber of Commerce</li>
									<li><i class="ri-check-double-line"></i> Ormoc Chambers of Commerce & Industry</li>
									<li><i class="ri-check-double-line"></i> Ormoc City Host Lion Club</li>
									<li><i class="ri-check-double-line"></i> Ormoc Crystal Lions Club</li>
									<li><i class="ri-check-double-line"></i> Brotherhood of Christian, Businessmen & prof.</li>
								</ul>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 text-center">
								<img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Tabs Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg ">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Services</h2>
					{{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
							<i class="bi bi-briefcase"></i>
							<h4><a href="#">Port Construction</a></h4>
							<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
								provident</p>
						</div>
					</div>
					<div class="col-md-6 mt-4 mt-md-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
							<i class="bi bi-card-checklist"></i>
							<h4><a href="#">Building Construction</a></h4>
							<p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino
								ata</p>
						</div>
					</div>
					<div class="col-md-6 mt-4 mt-md-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
							<i class="bi bi-bar-chart"></i>
							<h4><a href="#">Dam, Reservoir and Tunnels</a></h4>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
						</div>
					</div>
					<div class="col-md-6 mt-4 mt-md-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-binoculars"></i>
							<h4><a href="#">Airport and Horizontal Structures</a></h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
							</p>
						</div>
					</div>
					<div class="col-md-6 mt-4 mt-md-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="500">
							<i class="bi bi-brightness-high"></i>
							<h4><a href="#">Roads and Bridges Construction</a></h4>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
							</p>
						</div>
					</div>
					<div class="col-md-6 mt-4 mt-md-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="600">
							<i class="bi bi-calendar4-week"></i>
							<h4><a href="#">Pile Works</a></h4>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Projects</h2>
					{{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-completed">COMPLETED</li>
							<li data-filter=".filter-ongoing">ONGOING</li>
						</ul>
					</div>
				</div>


				<div class="projCon">
				<div class="sub-category">
				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="sub-portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-port">PORTS</li>
							<li data-filter=".filter-road">ROADS</li>
							<li data-filter=".filter-building">BUILDINGS</li>
							<li data-filter=".filter-bridge">BRIDGES</li>
						</ul>
					</div>
				</div>
				</div>
				

				
				<div class="gallery">
				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-4 col-md-6 portfolio-item filter-ongoing filter-port">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Port/ports1.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>PORT</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Port/ports1.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox"><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 portfolio-item filter-ongoing filter-port">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Port/ports2.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>PORT</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Port/ports2.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-completed filter-port">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Port/ports3.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>PORT</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Port/ports3.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-ongoing filter-road">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Road/road1.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>ROAD</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Road/road1.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 portfolio-item filter-completed filter-road">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Road/road2.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>ROAD</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Road/road2.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-completed filter-road">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Road/road3.jpg') }}" class="img-fluid img-responsive" alt="">
							<div class="portfolio-info">
								<h4>Road</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Road/road3.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox"><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>
			
					<div class="col-lg-4 col-md-6 portfolio-item filter-ongoing filter-bridge">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Bridge/bridges1.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>Bridge</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Bridge/bridges1.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-ongoing filter-bridge">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Bridge/bridge2.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>Bridge</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Bridge/bridge2.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>
        
					<div class="col-lg-4 col-md-6 portfolio-item filter-ongoing filter-bridge">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Bridge/bridge3.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>Bridge</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Bridge/bridge3.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-completed filter-building">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Building/building1.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>Building</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Building/building1.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-completed filter-building">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Building/building2.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>Building</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Building/building2.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-completed filter-building">
						<div class="portfolio-wrap">
							<img src="{{ asset('assets/img/portfolio/Building/building3.jpg') }}" class="img-fluid img-responsive " alt="">
							<div class="portfolio-info">
								<h4>Building</h4>
								<p>Description</p>
								<div class="portfolio-links">
									<a href="{{ asset('assets/img/portfolio/Building/building3.jpg') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox" ><i class="bx bx-show"></i></a>
									<!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
								</div>
							</div>
						</div>
					</div>

				</div>
				</div>
				
				</div>
			</div>
		</section><!-- End Portfolio Section -->

		<!-- ======= Recognitions and Credentials Section ======= -->
		<section id="testimonials" class="testimonials">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
					<h2>RECOGNITIONS AND CREDENTIALS</h2>
					{{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur
						velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
				</div>

				<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/Recognitions/award2.jpg" class="testimonial-img" alt="">
									<!-- <h3>Saul Goodman</h3>
									<h4>Ceo &amp; Founder</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
										ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p> -->
								</div>
							</div>
						</div><!-- End testimonial item -->

						<div class="swiper-slide">
							<div class="testimonial-wrap">
								<div class="testimonial-item">
									<img src="assets/img/Recognitions/cert1.webp" class="testimonial-img" alt="">
									<!-- <h3>Saul Goodman</h3>
									<h4>Ceo &amp; Founder</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
										ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p> -->
								</div>
							</div>
						</div><!-- End testimonial item -->

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</section><!-- End Recognitions and Credentials Section -->

		<!-- ======= Pricing Section ======= -->
		{{-- <section id="pricing" class="pricing section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Pricing</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur
						velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="box" data-aos="fade-up" data-aos-delay="100">
							<h3>Free</h3>
							<h4><sup>$</sup>0<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li class="na">Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
						<div class="box featured" data-aos="fade-up" data-aos-delay="200">
							<h3>Business</h3>
							<h4><sup>$</sup>19<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="300">
							<h3>Developer</h3>
							<h4><sup>$</sup>29<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Pricing Section --> --}}

		<!-- ======= Frequently Asked Questions Section ======= -->
		{{-- <section id="faq" class="faq">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Frequently Asked Questions</h2>
				</div>

				<ul class="faq-list accordion" data-aos="fade-up">

					<li>
						<a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna
							duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
						<div id="faq1" class="collapse" data-bs-parent=".faq-list">
							<p>
								Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida.
								Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
							</p>
						</div>
					</li>

					<li>
						<a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc
							faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
						<div id="faq2" class="collapse" data-bs-parent=".faq-list">
							<p>
								Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
								ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
								dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
							</p>
						</div>
					</li>

					<li>
						<a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
							pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
						<div id="faq3" class="collapse" data-bs-parent=".faq-list">
							<p>
								Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer
								enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
								convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
							</p>
						</div>
					</li>

					<li>
						<a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam
							eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
						<div id="faq4" class="collapse" data-bs-parent=".faq-list">
							<p>
								Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
								ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
								dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
							</p>
						</div>
					</li>

					<li>
						<a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam
							sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
						<div id="faq5" class="collapse" data-bs-parent=".faq-list">
							<p>
								Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus
								commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
								turpis cursus in
							</p>
						</div>
					</li>

					<li>
						<a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius
							vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
								class="bx bx-x icon-close"></i></a>
						<div id="faq6" class="collapse" data-bs-parent=".faq-list">
							<p>
								Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel.
								Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus
								vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
								Nibh tellus molestie nunc non blandit massa enim nec.
							</p>
						</div>
					</li>

				</ul>

			</div>
		</section><!-- End Frequently Asked Questions Section --> --}}

		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Team</h2>
					{{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur
						velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
				</div>

				<div class="row">

					<div class="d-flex">
						<div class="member" data-aos="fade-up" data-aos-delay="100">
							<div class="member-img">
							<img src="{{ asset('assets/img/Hr/banner.png') }}" alt="" class="banner">
							<div class="col-xl-6 member-info">
								<h2>WE ARE HIRING</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque voluptates sit. Atque necessitatibus voluptatibus ducimus quae quos aperiam, nihil inventore, laborum fugiat nostrum suscipit autem id architecto quam voluptatum.</span>
								<h4><a href="{{ url('hiring') }}" class="hiring-btn"><span>Learn More</span> <i class="bx bx-chevron-right"></i></a></h4>
							</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End Team Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					{{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur
						velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">

					<div class="col-lg-6">

						<div class="row">
							<div class="col-md-12">
								<div class="info-box">
									<i class="bx bx-map"></i>
									<h3>Our Address</h3>
									<p>1423 The Mondrian Bldg. P Ocampo St. Ext.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
									<i class="bx bx-envelope"></i>
									<h3>Email Us</h3>
									<p>info@macbuilders.com.ph<br>support@macbuilders.com.ph</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box mt-4">
									<i class="bx bx-phone-call"></i>
									<h3>Call Us</h3>
									<p>+1 5589 55488 55<br>+1 6678 254445 41</p>
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-6">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="col form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
								</div>
								<div class="col form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->
@endsection

