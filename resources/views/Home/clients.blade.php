@extends("Layout.layout")
@section("Content")

<!-- Inner Banner -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Clients</h2>
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
      <li>Clients</li>
    </ul>
  </div>
</div>

<!-- Clients Content -->
<div class="services_innerPage">
  <div class="container">
    <div class="row">

      <!-- MAIN -->
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right service_page_main_post">
        <div class="wrapper">

          <div class="main_img_holder">
            <img src="{{ asset('assets/images/home/awarbanner.jpg') }}" alt="Clients" class="img-responsive">
            <h4 class="p_color_bg s_color">Our Clients</h4>
          </div>

          <div class="theme_title pFix">
            <h4>Trusted by businesses across industries</h4>
          </div>
          <p class="mFix">
            We advise a diverse portfolio of organizations—from logistics and healthcare to
            manufacturing, retail and services. Browse a selection of our clients below.
          </p>

          <!-- Toolbar -->
          <div class="cl-toolbar">
            <div class="cl-left">
              <div class="cl-search">
                <i class="fa fa-search"></i>
                <input id="clientSearch" type="text" placeholder="Search client name…">
              </div>
              <div class="cl-chips">
                <button class="cl-chip is-active" data-filter="all">All</button>
                <button class="cl-chip" data-filter="private">Private Limited</button>
                <button class="cl-chip" data-filter="logistics">Logistics</button>
                <button class="cl-chip" data-filter="healthcare">Healthcare</button>
                <button class="cl-chip" data-filter="travel">Travel & Tours</button>
                <button class="cl-chip" data-filter="manufacturing">Manufacturing</button>
                <button class="cl-chip" data-filter="retail">Retail</button>
              </div>
            </div>
            <div class="cl-right">
              <span class="cl-count"><strong id="clTotal">0</strong> clients</span>
            </div>
          </div>

          <!-- Grid -->
          <div id="clientGrid" class="cl-grid">

            <!-- Each card: put tags in data-tags -->
            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">A</div>
              <h5 class="cl-name">M/S AUTOMATE INDUSTRY (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Manufacturing</span></div>
            </article>

            <article class="cl-card" data-tags="private healthcare">
              <div class="cl-avatar">K</div>
              <h5 class="cl-name">M/S KARACHI X-RAY &amp; ULTRASOUND HOSPITAL (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Healthcare</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">N</div>
              <h5 class="cl-name">M/S NATIONAL INDUSTRIAL ENGINEERING (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Manufacturing</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">L</div>
              <h5 class="cl-name">M/S LUCKY STAR STEEL INDUSTRIES (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Manufacturing</span></div>
            </article>

            <article class="cl-card" data-tags="private retail">
              <div class="cl-avatar">F</div>
              <h5 class="cl-name">M/S FASHION CHANNEL (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Retail</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">S</div>
              <h5 class="cl-name">M/S STAR COTTON CORPORATION (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Manufacturing</span></div>
            </article>

            <article class="cl-card" data-tags="private retail">
              <div class="cl-avatar">D</div>
              <h5 class="cl-name">M/S DADA SONS (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Retail</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">C</div>
              <h5 class="cl-name">M/S CAIFCO (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">K</div>
              <h5 class="cl-name">M/S KHAIR-UL-BADR (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span></div>
            </article>

            <article class="cl-card" data-tags="private travel">
              <div class="cl-avatar">A</div>
              <h5 class="cl-name">M/S AJWA HAJJ SERVICES (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Travel &amp; Tours</span></div>
            </article>

            <article class="cl-card" data-tags="private travel">
              <div class="cl-avatar">L</div>
              <h5 class="cl-name">M/S LARKANA HAJJ SERVICES (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Travel &amp; Tours</span></div>
            </article>

            <article class="cl-card" data-tags="private travel">
              <div class="cl-avatar">L</div>
              <h5 class="cl-name">M/S LABBAIK TOURS AND TRAVELS (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Travel &amp; Tours</span></div>
            </article>

            <article class="cl-card" data-tags="private healthcare">
              <div class="cl-avatar">I</div>
              <h5 class="cl-name">M/S INTERNATIONAL LABOTRAY AND STUDIO (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Healthcare</span></div>
            </article>

            <article class="cl-card" data-tags="private logistics">
              <div class="cl-avatar">S</div>
              <h5 class="cl-name">M/S SEAGATE LOGISTICS PAKISTAN (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Logistics</span></div>
            </article>

            <article class="cl-card" data-tags="private logistics">
              <div class="cl-avatar">O</div>
              <h5 class="cl-name">M/S OCEANEA LOGISTICS PAKISTAN (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Logistics</span></div>
            </article>

            <article class="cl-card" data-tags="private travel">
              <div class="cl-avatar">M</div>
              <h5 class="cl-name">M/S MEMON TRAVEL &amp; TOURS (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Travel &amp; Tours</span></div>
            </article>

            <article class="cl-card" data-tags="private it">
              <div class="cl-avatar">B</div>
              <h5 class="cl-name">M/S BUSINESS SYSTEM INTERNATION (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>IT/Systems</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">G</div>
              <h5 class="cl-name">M/S GLOBAL SEEDS (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Agri</span></div>
            </article>

            <article class="cl-card" data-tags="private it">
              <div class="cl-avatar">T</div>
              <h5 class="cl-name">M/S TELECOM SOLUTION (PRVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Telecom</span></div>
            </article>

            <article class="cl-card" data-tags="private it">
              <div class="cl-avatar">P</div>
              <h5 class="cl-name">M/S PROGRESSIVE (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span></div>
            </article>

            <article class="cl-card" data-tags="private travel">
              <div class="cl-avatar">F</div>
              <h5 class="cl-name">M/S FAHAD HAJJ AND UMRAH SERVICES (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Travel &amp; Tours</span></div>
            </article>

            <article class="cl-card" data-tags="private textile manufacturing">
              <div class="cl-avatar">A</div>
              <h5 class="cl-name">M/s AL MUQEET TEXTILE (PRIVATE) LIMITED</h5>
              <div class="cl-tags"><span>Private Ltd.</span><span>Textile</span></div>
            </article>

            <article class="cl-card" data-tags="private manufacturing">
              <div class="cl-avatar">V</div>
              <h5 class="cl-name">M/S VALIKA PROJECTS (PVT.) LTD</h5>
              <div class="cl-tags"><span>Private Ltd.</span></div>
            </article>

            <article class="cl-card" data-tags="other">
              <div class="cl-avatar">M</div>
              <h5 class="cl-name">M/s M. HUSSAIN &amp; CO</h5>
              <div class="cl-tags"><span>Firm</span></div>
            </article>

            <article class="cl-card" data-tags="other manufacturing">
              <div class="cl-avatar">T</div>
              <h5 class="cl-name">M/s TRANSFIGURE AUTO ENGG SERVICES</h5>
              <div class="cl-tags"><span>Auto</span></div>
            </article>

            <article class="cl-card" data-tags="retail other">
              <div class="cl-avatar">S</div>
              <h5 class="cl-name">M/S SURMAWALA HOUSE</h5>
              <div class="cl-tags"><span>Retail</span></div>
            </article>

            <article class="cl-card" data-tags="it other">
              <div class="cl-avatar">B</div>
              <h5 class="cl-name">M/S BUSINESS SYSTEM INTERNATIONAL</h5>
              <div class="cl-tags"><span>IT/Systems</span></div>
            </article>

            <article class="cl-card" data-tags="retail other">
              <div class="cl-avatar">P</div>
              <h5 class="cl-name">M/S PAKISTAN OFFICE PRODUCTS</h5>
              <div class="cl-tags"><span>Office Supplies</span></div>
            </article>

            <article class="cl-card" data-tags="retail other">
              <div class="cl-avatar">Z</div>
              <h5 class="cl-name">M/S ZUBAIR ELECTRONICS</h5>
              <div class="cl-tags"><span>Electronics</span></div>
            </article>

            <article class="cl-card" data-tags="other">
              <div class="cl-avatar">R</div>
              <h5 class="cl-name">M/S RAFI &amp; SONS</h5>
              <div class="cl-tags"><span>Firm</span></div>
            </article>

            <article class="cl-card" data-tags="other">
              <div class="cl-avatar">A</div>
              <h5 class="cl-name">M/S AHMED BROS</h5>
              <div class="cl-tags"><span>Firm</span></div>
            </article>

            <article class="cl-card" data-tags="retail other">
              <div class="cl-avatar">H</div>
              <h5 class="cl-name">M/S HAJI ABDUL HAMEED TRADER</h5>
              <div class="cl-tags"><span>Trading</span></div>
            </article>

            <article class="cl-card" data-tags="other">
              <div class="cl-avatar">S</div>
              <h5 class="cl-name">M/S S.M YOUSUF &amp; BROTHERS</h5>
              <div class="cl-tags"><span>Firm</span></div>
            </article>

            <article class="cl-card" data-tags="other">
              <div class="cl-avatar">K</div>
              <h5 class="cl-name">M/S KADER &amp; SONS</h5>
              <div class="cl-tags"><span>Firm</span></div>
            </article>

          </div><!-- /grid -->

        </div>
      </div>

    <!-- _________________________ SIDE BAR ___________________ -->
        			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        				<div class="wrapper">
        					<!-- Page List -->
        					<ul class="page_list service_page_list">
        						<li><a href="restructuring-turnaround.html" class="tran3s">Restructuring & Turnaround</a></li>
        						<li><a href="business-planning.html" class="tran3s">Business Plannning</a></li>
        						<li><a href="exit-succession.html" class="tran3s active">Exit & Succession Planning</a></li>
        						<li><a href="strategic-planning.html" class="tran3s">Strategic Planning</a></li>
        						<li><a href="global-risk.html" class="tran3s">Global Risk & Investigations </a></li>
        						<li><a href="audit-assurance.html" class="tran3s">Audit & Assurance</a></li>
        						<li><a href="trades-stocks.html" class="tran3s">Trades & Stocks</a></li>
        						<li><a href="information-technology.html" class="tran3s">Information Technology</a></li>
        					</ul> <!-- End of .page_list -->

        					<!-- Our Brochures -->
        					<div class="our_brochures">
        						<div class="theme_title">
									<h5>Our Brochures</h5>
								</div>
								<a href="#" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>Download .PDF</a>
								<a href="#" class="tran3s s_color_bg"><span class="p_color_bg tran3s"><i class="fa fa-file-word-o" aria-hidden="true"></i></span>Download .DOC</a>
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
												<img src="images/home/1.jpg" alt="Client Image" class="float_left border_round">
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
												<img src="images/home/2.jpg" alt="Client Image" class="float_left border_round">
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
												<img src="images/home/3.jpg" alt="Client Image" class="float_left border_round">
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
        					<div class="business_enquiry">
        						<h6>For Business Enquiry</h6>
        						<p>You can also send us an <a href="#" class="s_color">email</a> and we’ll get in touch shortly, or Troll Free Number <a href="#" class="p_color"> -(+91) <br> 00-700-6202.</a></p>
        						<span class="ficon flaticon-message"></span>
        					</div> <!-- End of .business_enquiry -->

        				</div> <!-- End of .wrapper -->
        			</div> <!-- End of .side_bar -->

    </div><!-- /.row -->
  </div>
</div>





@endsection
