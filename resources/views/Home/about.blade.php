@extends('Layout.layout')
@section('Content')

        <!-- Inner Banner _____________________ -->
 <!-- Inner Banner _____________________ -->
<div class="inner_banner"
     style="background-image:url('{{ asset($bannerImage) }}');
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>About ConsultPress</h2>
      <span class="s_color_bg"></span>
    </div>
  </div>
</div>


        <!-- Page Breadcrumb __________________ -->
        <div class="page-breadcrumb p_color_bg">
        	<div class="container clear_fix">
        		<ul class="text-center">
        			<li><a href="{{ asset("/") }}">Home</a></li>
        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        			<li>About Us</li>
        		</ul>
        	</div>
        </div> <!-- End of .page-breadcrumb -->



        <!-- About Us Page Content _________________ -->

        <section class="about_us_page_wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right about_us_main_content">
        				<div class="img_holder">
        					<img src="{{ asset("assets/images/home/about.png") }}" alt="images" class="img-responsive">
        					<div class="icon"><a href="https://www.youtube.com/embed/eAaP03Qs6cE?autoplay=1" class="fancy_video fancybox.iframe"><span class="ficon flaticon-play-button"></span></a></div>
        				</div> <!-- End of .img_holder -->

        				<div class="text_wrapper">
        					<div class="theme_title">
								<h3>About ConsultPress</h3>
							</div>
							<p style="margin: 32px 0 14px 0;">ConsultPress over 20 years of experience we’ll ensure you always get the best guidance. We serve clients at every level of their organization, in whatever capacity we can be most useful, whether as a trusted advisor to top management or as a hands-on coach for front line employees. For every engagement, we assemble a team with the most appropriate experience and expertise.  Our goal is to optimise your business relationships by tailoring our services to your individual requirements</p>
							<p style="margin-bottom: 35px;">We strive to build a relationship of trust with every client, for the long-term. 70% of our work is for clients that we have served for over 10 years. We are focused on developing a strong Pay for Success field through market education, publications, events, research and analysis. </p>

							<div class="row about_testimonial">
								<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
									<p>Founded in 1956, we today have a global reach with operations in over 10 countries and 10,200 employees from over 300 different nations.  We are focused on developing a strong Consulting field through market education, publications, events, research and analysis. Our business divisions cooperate provide holistic financial innovative products and specially tailored advice.</p>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 testimonial">
									<!-- __________________ testimonial Slider ____________ -->

									<div class="slider_wrapper">
										<div class="testimonial-carousel-content-box owl-carousel owl-theme">
											<!-- SLide  -->
											<div class="item">
												<div class="text p_color_bg">
													<i>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers.</i>
												</div> <!-- End of .text -->
												<div class="author">
													<img src="images/home/1.jpg" alt="Client Image" class="float_left border_round">
													<div class="author_name float_left">
														<h6 class="p_color">Mark Vilton <span>- Villo Steels Ceo</span></h6>
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
													<i>ConsultPress over 20 years of experience we’ll ensure you always get the best guidance. We serve clients at every level of their organization</i>
												</div> <!-- End of .text -->
												<div class="author">
													<img src="images/home/2.jpg" alt="Client Image" class="float_left border_round">
													<div class="author_name float_left">
														<h6 class="p_color">Joseph Joe <span>- Villo Steels Ceo</span></h6>
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
													<i>They have got my project on time with the competition with a highly skilled, well-organized and experienced team of professional Engineers.</i>
												</div> <!-- End of .text -->
												<div class="author">
													<img src="images/home/3.jpg" alt="Client Image" class="float_left border_round">
													<div class="author_name float_left">
														<h6 class="p_color">Anderson Man <span>- Villo Steels Ceo</span></h6>
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
													<i>ConsultPress over 20 years of experience we’ll ensure you always get the best guidance. We serve clients at every level of their organization</i>
												</div> <!-- End of .text -->
												<div class="author">
													<img src="images/home/4.jpg" alt="Client Image" class="float_left border_round">
													<div class="author_name float_left">
														<h6 class="p_color">Joseph Joe <span>- Villo Steels Ceo</span></h6>
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
										<div class="thumbnail_wrapper">
											<div class="testimonial-carousel-thumbnail-box owl-carousel owl-theme">
												<div class="item">
													<img src="images/home/1.jpg" alt="Image"/>
												</div>
												<div class="item">
													<img src="images/home/2.jpg" alt="Image"/>
												</div>
												<div class="item">
													<img src="images/home/3.jpg" alt="Image"/>
												</div>

												<div class="item">
													<img src="images/home/4.jpg" alt="Image"/>
												</div>
											</div> <!-- End of .sidebar-testimonial-carousel-thumbnail-box -->
											<div class="clear_fix"></div>
										</div> <!-- End of .thumbnail_wrapper -->

									</div> <!-- End .slider_wrapper -->
								</div>
							</div> <!-- End of .row -->

							<!-- Our Mission  -->
							<div class="our_mission">
								<div class="theme_title">
									<h3>Our Mission</h3>
								</div>

								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_mission">
										<div class="border_round icon tran3s">
											<span class="ficon flaticon-staticsscreen"></span>
										</div> <!-- End of .border_round -->

										<div class="text">
											<h5>Why WeConsulting?</h5>
											<p class="tran3s">Our goal is to optimise your business relationships by tailoring our services to your requirements.</p>
										</div> <!-- End of .text -->
									</div> <!-- End of .single_mission -->

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_mission">
										<div class="border_round icon tran3s">
											<span class="ficon flaticon-statics"></span>
										</div> <!-- End of .border_round -->

										<div class="text">
											<h5>Pay for Success</h5>
											<p class="tran3s">We are focused on developing a strong Pay for Success field through market  research and analysis.</p>
										</div> <!-- End of .text -->
									</div> <!-- End of .single_mission -->

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_mission">
										<div class="border_round icon tran3s">
											<span class="ficon flaticon-wheel"></span>
										</div> <!-- End of .border_round -->

										<div class="text">
											<h5>Tailor-Made Solutions</h5>
											<p class="tran3s">We providing you with optimal solutions from Wealth Management and Investment Banking.</p>
										</div> <!-- End of .text -->
									</div> <!-- End of .single_mission -->
								</div>
							</div> <!-- End of .our_mission -->
        				</div> <!-- End of .text_wrapper -->
        			</div> <!-- End of .about_us_main_content -->

					<!-- _________________________ SIDE BAR ___________________ -->
        			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-left side_bar">
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
        			</div> <!-- End of .side_bar -->
        		</div> <!-- End of .row -->
        	</div> <!-- End of .container -->
        </section> <!-- End of .about_us_page_wrapper -->




        <!-- Request Quote footer _____________ -->
        <div class="request_quote_footer s_color_bg">
			<div class="container clear_fix">
				<p class="float_left">ConsultPress over 20 years of experience we’ll ensure you always get the best guidance.</p>
				<a href="#" class="theme_button p_color_bg float_right tran3s">Request Quote</a>
			</div> <!-- End of .container -->
		</div> <!-- End of .request_quote -->




@endsection

