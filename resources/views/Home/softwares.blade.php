@extends("Layout.layout")
@section("Content")


<!-- Inner Banner _____________________ -->
<div class="inner_banner"
     style="background: url('{{ asset($bannerImage) }}') no-repeat center; background-size: cover;">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Softwares</h2>
      <span class="s_color_bg"></span>
    </div> <!-- End of .banner_title -->
  </div> <!-- End of .overlay -->
</div> <!-- End of .inner_banner -->



        <!-- Page Breadcrumb _____________________ -->
        <div class="page-breadcrumb p_color_bg">
        	<div class="container clear_fix">
        		<ul class="text-center">
        			<li><a href="{{ asset("/") }}">Home</a></li>
        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        			<li><a href="{{ asset("/services") }}">Services</a></li>
        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        			<li>Softwares</li>
        		</ul>
        	</div>
        </div> <!-- End of .page-breadcrumb -->


        <!-- Service Inner Page Content ______________________ -->
		<div class="services_innerPage">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right service_page_main_post ">
						<div class="wrapper">

							<div class="main_img_holder">
								<img src="{{ asset("assets/images/home/software.png") }}" alt="image" class="img-responsive">
								<h4 class="p_color_bg s_color">Softwares</h4>
							</div> <!-- End of .main_img_holder -->

						<div class="theme_title pFix">
  <h4>How our team helps</h4>
</div>
<p class="mFix">
  Our tax & corporate law specialists prepare a smooth, value-maximising exit—whether family succession, MBO, or third-party sale—so you stay focused on running the business.
</p>
<ul class="requirement_list">
  <li>Clear roadmap with simple milestones</li>
  <li>Tax-efficient structure & airtight documentation</li>
  <li>Valuation support, buyer-ready data room & clean handover</li>
</ul>

<!-- ===== Business Software (Compliance & Accounts) ===== -->
<div class="theme_title pFix">
  <h4>Business Software for Compliance & Accounts</h4>
</div>
<p class="mFix">

These days it is not possible for a businessman to spare time for fulfillment of formalities laid down by the Government. Therefore, it is essential for a businessman to keep update information regarding tax laws and other business related matters. Therefore, M/s Aziz Ismail & Company is offering tailor made software to the clients and all other business community in nominal price through a reputable software company M/s Progressive Technologies. In which the clients can easily maintain following books of Accounts.</p>

<div class="row">
  <div class="col-sm-6">
    <h6 class="mFix">Inventory Control System</h6>
    <ul class="requirement_list">
      <li>Purchase &amp; Sales Registers</li>
      <li>Auto-generated Sales Tax Invoices</li>
      <li>Product-wise Stock Register</li>
      <li>Buyer/Supplier Master</li>
      <li>Integration with Financial Accounts</li>
    </ul>
  </div>
  <div class="col-sm-6">
    <h6 class="mFix">Complete Accounting</h6>
    <ul class="requirement_list">
      <li>Vouchers, General Journal &amp; Ledger</li>
      <li>Debtors/Creditors separate reporting</li>
      <li>Trial Balance &amp; Income Summary</li>
      <li>Balance Sheet — ready for filings</li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <h6 class="mFix">Manufacturing Module</h6>
    <ul class="requirement_list">
      <li>Own production formulas (BOM)</li>
      <li>Production &amp; Consumption forms/reports</li>
    </ul>
  </div>
  <div class="col-sm-6">
    <h6 class="mFix">Import Shipment Module</h6>
    <ul class="requirement_list">
      <li>Shipment information &amp; inventory</li>
      <li>Landed cost tracking</li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <h6 class="mFix">Aging Modules</h6>
    <ul class="requirement_list">
      <li>Aging Receivables</li>
      <li>Aging Payables</li>
    </ul>
  </div>
  <div class="col-sm-6">
    <h6 class="mFix">Branch Setup</h6>
    <ul class="requirement_list">
      <li>Inter-branch stock transfers</li>
      <li>Multi-branch stock reports</li>
    </ul>
  </div>
</div>


<!-- ===== /Business Software ===== -->

<!-- ==================== END ADVOCATE PROFILES SECTION ==================== -->


								{{-- <div class="include_servises m-top-fix">
								<div class="theme_title pFix">
									<h4>How to build a succession plan?</h4>
								</div>
								<p class="mFix">Planning for the succession of your business can be very complicated. This is why we have developed this succession planning guide to assist business owners how to successfully accomplish the transition process.</p>
								<p>Although succession plans will be different for different businesses, there are many steps that are common to any succession plan. The common steps outlined in this guide are:</p>
								<div class="row">
									<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">

										<ul>
											<li>Exploring your options</li>
											<li>Keeping the business in the family</li>
											<li>Selecting and preparing a successor</li>
											<li>Planning a management buy-out</li>
											<li>Determining the value of the business</li>
											<li>Selling the business</li>
											<li>Financing the succession plan</li>
											<li>Understanding the tax and legal issues</li>
											<li>Managing wealth to secure your future</li>
										</ul> <!-- End of .requirement_list -->
									</div>

									<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
										<div class="video_img">
											<img src="{{ asset("assets/images/home/awarbanner.jpg") }}" alt="img" class="img-responsive">
											<div class="icon"><a href="https://www.youtube.com/embed/eAaP03Qs6cE?autoplay=1" class="fancy_video fancybox.iframe"><i class="fa fa-play-circle-o tran3s" aria-hidden="true"></i></a></div>
										</div> <!-- End of .video_img -->
									</div>
								</div>
							</div> --}}




							<!-- __________________ SERVICE TAB ___________________ -->
						<!-- __________________ SERVICE TAB (LAW FIRM CONTENT) ___________________ -->
<div class="service-tab mtop_fix">
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#tab1">Valuation</a></li>
    <li><a data-toggle="pill" href="#tab2">Investment</a></li>
    <li><a data-toggle="pill" href="#tab3">Advisory</a></li>
  </ul>

  <div class="tab-content">
    <!-- TAB 1: Valuation -->
    <div id="tab1" class="tab-pane fade in active">
      <p>
        We deliver independent, defensible valuations for exit, succession and disputes—aligning legal, tax and financial angles so your decisions hold up.
      </p>
      <h6>We cover:</h6>
      <ul>
        <li>Business &amp; share valuation for sale, buy-out or family transfer</li>
        <li>Partner exit &amp; buy–sell clauses (fair value / formula drafting)</li>
        <li>Tax &amp; capital-gains implications with documentation support</li>
        <li>ESOP / management incentive valuation</li>
        <li>Due-diligence packs &amp; buyer-ready data room</li>
        <li>Expert reports for litigation / arbitration</li>
      </ul>
    </div> <!-- End of #tab1 -->

    <!-- TAB 2: Investment -->
    <div id="tab2" class="tab-pane fade">
      <p>
        We structure safe, compliant investments that protect founders and investors from day one—clear rights, clean paperwork, smooth closings.
      </p>
      <h6>We cover:</h6>
      <ul>
        <li>Term sheets &amp; shareholders’ agreements (governance, rights, exits)</li>
        <li>Equity, preference shares &amp; convertible notes structuring</li>
        <li>Regulatory &amp; tax compliance (filings, consents, registrations)</li>
        <li>Foreign investment &amp; remittance documentation (where applicable)</li>
        <li>Cap table, vesting &amp; founder protection</li>
        <li>Negotiations, closing checklists &amp; post-closing actions</li>
      </ul>
    </div> <!-- End of #tab2 -->

    <!-- TAB 3: Advisory -->
    <div id="tab3" class="tab-pane fade">
      <p>
        End-to-end corporate &amp; tax advisory for exits, successions and M&amp;A—so continuity is smooth and value is maximised.
      </p>
      <h6>We cover:</h6>
      <ul>
        <li>Exit &amp; succession roadmap with timelines and roles</li>
        <li>M&amp;A buy/sell support: LOIs, SPAs/SSAs, warranties &amp; indemnities</li>
        <li>Tax-efficient restructuring &amp; asset / IP transfers</li>
        <li>Employment, retention &amp; non-compete/confidentiality agreements</li>
        <li>Licences, contracts &amp; change-of-control consents</li>
        <li>Post-deal governance &amp; ongoing compliance</li>
      </ul>
    </div> <!-- End of #tab3 -->
  </div> <!-- End of .tab-content -->
</div> <!-- End of .service-tab -->


						</div> <!-- End of .wrapper -->
					</div> <!-- End of .service_page_main_post -->



					<!-- _________________________ SIDE BAR ___________________ -->

					<!-- _________________________ SIDE BAR ___________________ -->
        			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        				<div class="wrapper">
        					<!-- Page List -->
        					<ul class="page_list service_page_list">
        					<li><a href="{{ asset("/business-sectors") }}" class="tran3s">Business Sectors</a></li>
        						<li><a href="{{ asset("/administration") }}" class="tran3s">Administration</a></li>
        						<li><a href="{{ asset("/softwares") }}" class="tran3s">Softwares</a></li>
        						<li><a href="{{ asset("/clients") }}" class="tran3s">Clients</a></li>
        						<li><a href="{{ asset("/downloads") }}" class="tran3s">Downloads</a></li>
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
		</div> <!-- End of .services_innerPage -->




        <div class="request_quote_footer s_color_bg">
  <div class="container clear_fix">
    <p class="float_left">Aziz & Ismail Co. — Income, Sales & Tax advisors helping businesses stay compliant and grow.</p>
    <a href="{{ url("contact") }}" class="theme_button p_color_bg s_color float_right tran3s">Contact Now</a>
  </div>
</div>




@endsection
