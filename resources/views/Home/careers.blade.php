@extends("Layout.layout")
@section("Content")

<!-- Inner Banner -->
<div class="inner_banner"
     style="background-image:url('{{ asset($bannerImage) }}');
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Careers</h2>
      <span class="s_color_bg"></span>
    </div>
  </div>
</div>


<!-- Breadcrumb -->
<div class="page-breadcrumb p_color_bg">
  <div class="container clear_fix">
    <ul class="text-center">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
      <li>Careers</li>
    </ul>
  </div>
</div>

<!-- Careers Content -->
<div class="services_innerPage">
  <div class="container">
    <div class="row">

      <!-- MAIN -->
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right service_page_main_post">
        <div class="wrapper">

          <div class="main_img_holder">
            <img src="{{ asset('assets/images/home/careers.png') }}" alt="Careers" class="img-responsive">
            <h4 class="p_color_bg s_color">Job Opportunities</h4>
          </div>

          <!-- Jobs header -->
          <div class="theme_title pFix">
            <h4>Available in Aziz Ismail &amp; Co.</h4>
          </div>

          <!-- JOBS TABLE -->
          <div class="careers-card">
            <div class="jobs-table-wrap">
              <table class="jobs-table">
                <thead>
                  <tr>
                    <th style="width:70px">S.No.</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><strong>Tax Trainee</strong></td>
                    <td>I.Com or B.Com <em>(computer knowledge essential)</em></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><strong>Advocate</strong></td>
                    <td>B.Com, LL.B with knowledge of Taxation in Pakistan &amp; Computers</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="apply-bar">
              <div class="apply-text">
                Please email your resume to:
                <a href="mailto:azizismail@cyber.net.pk" class="p_color">azizismail@cyber.net.pk</a> /
                <a href="mailto:info@azizismail.com" class="p_color">info@azizismail.com</a>
              </div>
              {{-- <a href="mailto:info@azizismail.com?subject=Career%20Application" class="theme_button p_color_bg s_color tran3s">Apply Now</a> --}}
            </div>
          </div>

          <!-- Career Path -->
          <div class="theme_title pFix" style="margin-top:18px">
            <h4>Why a Career in Tax Law?</h4>
          </div>
          <p class="mFix">
           The Tax Advisor & Attorney is a white collar career not only in Pakistan but even in all over the world and specially in taxation it will become more beneficial scope. To join the tax field as a profession or as a career you must required minimum 7 years after completion of metric.
          </p>

          <div class="row cards-eq">
            <div class="col-sm-6">
        <!-- ===== Glass Testimonial (dark) ===== -->
<div class="fx-glass">
  <!-- background burst -->
  <span class="fx-burst"></span>

  <!-- decorative chrome stars (optional images) -->
  <img class="fx-decor d-left"  src="{{ asset('assets/images/decor/star-left.png') }}"  alt="">
  <img class="fx-decor d-right" src="{{ asset('assets/images/decor/star-right.png') }}" alt="">

  <!-- glass panel -->
  <div class="fx-panel">
    <!-- avatar on top -->
    <div class="fx-avatar">
      <img src="{{ asset('assets/images/team/teamone.jpg') }}" alt="avatar">
    </div>

    <!-- inner white card -->
    <div class="fx-card">
      <h4 class="fx-title">Amazing Work!</h4>


 <ul class="fx-list">
    <li><span class="fx-left">I.Com</span>        <span class="fx-right">2 Years</span></li>
    <li><span class="fx-left">B.Com &amp; B.A</span><span class="fx-right">2 Years</span></li>
    <li><span class="fx-left">L.L.B</span>        <span class="fx-right">3 Years</span></li>
  </ul>

      <!-- star pill -->
      <div class="fx-rate" aria-label="5 stars">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <i class="fa fa-star"></i><i class="fa fa-star"></i>
      </div>
    </div>
  </div>
</div>
<!-- ===== /Glass Testimonial ===== -->

            </div>
            {{-- <div class="col-sm-6">
              <h6 class="mFix">Eligibility &amp; training</h6>
             <p>In Pakistan you must have L.L.B degree to appear in the Courts & other Tribunals. During the studies you can join any law firm as a tax trainee on apprenticeship. This will help you to improve your practical knowledge & after completion of three years as tax trainee you can apply to any LIMITED COMPANY as a legal tax advisor.  The grate benefit of the completion of tax training on apprenticeship is that

</p>
            </div> --}}
            <div class="col-sm-6">
  <div class="eligX-card">
    <span class="eligX-corner"></span>

    <div class="eligX-badge"><i class="fa fa-gavel" aria-hidden="true"></i></div>

    <h4 class="eligX-title">Eligibility &amp; training</h4>

    <p class="eligX-lead">
      In Pakistan you must have an <strong>LL.B</strong> to appear in Courts &amp; Tribunals.
      During studies you can join a law firm as a tax trainee (apprenticeship) to build
      hands-on experience. After <strong>3 years</strong> as a tax trainee, you can apply as a
      <strong>Legal Tax Advisor</strong> in a limited company.
    </p>

    {{-- <ul class="eligX-list">
      <li><i class="fa fa-check"></i> LL.B required for court appearance</li>
      <li><i class="fa fa-check"></i> Join a law firm as tax trainee during studies</li>
      <li><i class="fa fa-check"></i> Apprenticeship of <strong>3 years</strong> builds practice</li>
      <li><i class="fa fa-check"></i> Eligible for Legal Tax Advisor roles</li>
    </ul> --}}

    {{-- <div class="eligX-chips">
      <span class="chip">LL.B</span>
      <span class="chip">Apprenticeship: 3 yrs</span>
      <span class="chip">Court Practice</span>
    </div> --}}
  </div>
</div>

          </div>

          <blockquote class="career-quote">
            “You already have sufficient practical knowledge about current laws implemented,
            therefore you can join any limited firm just after completion of your studies.”
          </blockquote>

        </div>
      </div>


<!-- _________________________ SIDE BAR ___________________ -->
        			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">

                         		<div class="wrapper">
        					<!-- Page List -->
        					<ul class="page_list service_page_list">
        					<li><a href="{{ asset("/business-sectors") }}" class="tran3s">Business Sectors</a></li>
        						<li><a href="{{ asset("/administration") }}" class="tran3s">Administration</a></li>
        						<li><a href="{{ asset("/softwares") }}" class="tran3s">Softwares</a></li>
        						<li><a href="{{ asset("/clients") }}" class="tran3s">Clients</a></li>
        						<li><a href="{{ route("Home.downloads") }}" class="tran3s">Downloads</a></li>
        						<li><a href="{{ asset("/careers") }}" class="tran3s active">Jobs & Careers</a></li>
        						<li><a href="{{ asset("/blogs") }}" class="tran3s">Blogs</a></li>
        					</ul> <!-- End of .page_list -->

        					<!-- Our Brochures -->
        					<div class="our_brochures">
        						<div class="theme_title">
									<h5>Our Brochures</h5>
								</div>
								<a href="{{ url("/download-center") }}" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>Download .PDF</a>
								<a href="{{ url("/download-center") }}" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-word-o" aria-hidden="true"></i></span>Download .DOC</a>
        					</div> <!-- End of .our_brochures -->

        					<div class="sidebar_testimonial testimonial sidebar_testimonial_style_two">
   								<div class="theme_title">
									<h5>Testimonials</h5>
								</div>
   								<div class="slider_wrapper">
									<div class="owl-carousel owl-theme" id="testimonial-sidebar">
										<!-- SLide  -->
										<div class="item">
											<div class="text p_color_bg">
												<i>They have got my project on time with the competition with a highly skilled, well-organized and experienced</i>
											</div> <!-- End of .text -->
											<div class="author clear_fix">
												<img src="{{asset('assets/images/home/testimonialone.jpg')}}" alt="Client Image" class="float_left border_round">
												<div class="author_name float_left">
													<h6 class="p_color">Mark Vilton <span>- Villo Ceo</span></h6>
													<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
													</ul>
												</div> <!-- End of .author_name -->
											</div> <!-- End of .author -->
										</div>


										<!-- SLide  -->
										<div class="item">
											<div class="text p_color_bg">
												<i>ConsultPress over 20 years of experience we’ll ensure you always get the best guidance. We serve clients at every</i>
											</div> <!-- End of .text -->
											<div class="author clear_fix">
												<img src="{{asset('assets/images/home/test2.jpg')}}" alt="Client Image" class="float_left border_round">
												<div class="author_name float_left">
													<h6 class="p_color">Joseph<span>- Villo Ceo</span></h6>
													<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
													</ul>
												</div> <!-- End of .author_name -->
											</div> <!-- End of .author -->
										</div>


										<!-- SLide  -->
										<div class="item">
											<div class="text p_color_bg">
												<i>They have got my project on time with the competition with a highly skilled, well-organized and experienced team</i>
											</div> <!-- End of .text -->
											<div class="author clear_fix">
												<img src="{{asset('assets/images/home/test3.jpg')}}" alt="Client Image" class="float_left border_round">
												<div class="author_name float_left">
													<h6 class="p_color">Anderson<span>- Villo Ceo</span></h6>
													<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
													</ul>
												</div> <!-- End of .author_name -->
											</div> <!-- End of .author -->
										</div>

									</div> <!-- End of .testimonial-carousel-content-box -->
								</div> <!-- End of .slider_wrapper -->
   							</div> <!-- End of .sidebar_testimonial -->


        					<!-- Business Enquiry -->
        					{{-- <div class="business_enquiry">
        						<h6>For Business Enquiry</h6>
        						<p>You can also send us an <a href="#" class="s_color">email</a> and we’ll get in touch shortly, or Troll Free Number <a href="#" class="p_color"> -(+91) <br> 00-700-6202.</a></p>
        						<span class="ficon flaticon-message"></span>
        					</div> --}}
                                                   <div class="business_enquiry">
  <h6>For Business Enquiry</h6>
  <p>
    You can also send us an
    <a
      href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@azizismail.com&su=Business%20Enquiry%20from%20Website"
      target="_blank"
      rel="noopener"
      class="s_color"
    >email</a>
    and we’ll get in touch shortly, or call
    <a href="tel:+92212772944" class="p_color">+92 21 277 2944</a>.
  </p>
  <span class="ficon flaticon-message"></span>
</div>

                            <!-- End of .business_enquiry -->

        				</div> <!-- End of .wrapper -->

                        <!-- End of .wrapper -->
        			</div> <!-- End of .side_bar -->

    </div><!-- /.row -->
  </div>
</div>

<!-- Careers minimal styles (non-intrusive) -->


@endsection
