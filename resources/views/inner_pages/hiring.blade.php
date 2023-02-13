@extends('layout.main')
@section('title', 'hiring')
@section('content')

	<main id="hiring">

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<ol>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Hiring</li>
				</ol>
				<h2>Hiring</h2>

			</div>
		</section><!-- End Breadcrumbs -->

		<section class="inner-page">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-6 filter" >
					<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">SALES</li>
							<li data-filter=".filter-completed">ADMIN</li>
							<li data-filter=".filter-ongoing">FINANCE</li>
							<li data-filter=".filter-ongoing">OPERATIONS</li>
						</ul>
					</div>
				</div>
					</div>
					<div class="col-lg-6 list">
					
						<div class="container">
						<a href="{{url('job-info')}}">
							<div class="wrapper">
								<h1>Cashier Assistant - Finance</h1>
								
								<div class="info">
								<i class="bx bx-briefcase">Legal and Finance</i>
								</div>
							</div>
							</a>
						</div>
						
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

	</main><!-- End #main -->
@endsection
