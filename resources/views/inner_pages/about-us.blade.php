@extends('layout.main')
@section('title', 'About Us')
@section('content')
	<main id="main">

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<ol>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>About Us</li>
				</ol>
				<h2>About Us</h2>

			</div>
		</section><!-- End Breadcrumbs -->

		<section class="inner-page">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{ asset('assets/img/about/about-us.jpg') }}" class="img-fluid" alt="">

					</div>
					<div class="col-lg-6">
						<p class="text-justify" style="text-indent: 30px; text-align:justify;">
							<strong>MAC BUILDERS</strong> is an experienced general contractor company dedicated to quality
							construction and efficient management of resources. Our track record of major project has
							earned us a reputation for being creative, technologically advanced and extremely
							responsive to our customer’s needs.
						</p>
						<p class="text-justify" style="text-indent: 30px; text-align:justify;">
							Our competitive advantages stem from the atmosphere of mutual trust and respect that
							permeates our company. The care and concern that we have for our employees, suppliers
							and subcontractors greatly enhance our ability to deliver quality projects on time and
							within budget.
						</p>
						<p class="text-justify" style="text-indent: 30px; text-align:justify;">
							Founded in 1983, MAC Builders is today one of the nation’s most experienced and
							respected provider of construction and architectural landmarks through- out the
							Philippines. <a href="" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
								aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">Read More</a>
						</p>
						<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
							aria-labelledby="panelsStayOpen-headingOne">
							<div class="accordion-body">
								<p class="text-justify" style="text-indent: 30px; text-align:justify;">
									Our success in construction field is testament of technical skill, reconstruction know-how
									and self-performance capability. We anticipated project challenge, develop solutions that
									meet clients objective and ultimately deliver award winning project. In this way, our work
									today continues to meet the stringent standards of quality and integrity.
								</p>
								<p class="text-justify" style="text-indent: 30px; text-align:justify;">
									We approach each project with a cooperative mindset, working with clients, architects
									and subcontractors towards the common goal-successful project delivery. Our diverse
									construction portfolio and specialized departments ensure that each project is matched
									with appropriate resources and expertise.
								</p>
								<p class="text-justify" style="text-indent: 30px; text-align:justify;">
									Coupled with solid relationships with public private clients who have the confidence to rely,
									time and again, on our experience, financial strength and in-house expertise, we make this
									vision a reality.
								</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

	</main><!-- End #main -->
@endsection
