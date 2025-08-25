@extends("Layout.layout")
@section("Content")

<!-- Inner Banner -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Downloads</h2>
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
      <li>Downloads</li>
    </ul>
  </div>
</div>

<!-- Downloads Content -->
<div class="services_innerPage">
  <div class="container">
    <div class="row">

      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right service_page_main_post">
        <div class="wrapper">

          <!-- Toolbar -->
          <div class="dl-toolbar">
            <div class="dl-search">
              <i class="fa fa-search"></i>
              <input type="text" id="dlSearch" placeholder="Search by year or title (e.g., 2007, Sales Tax)...">
            </div>
            <div class="dl-chips">
              <button class="dl-chip is-active" data-filter="all">All</button>
              <button class="dl-chip" data-filter="sales-tax">Sales Tax</button>
              <button class="dl-chip" data-filter="income-tax">Income Tax</button>
              <button class="dl-chip" data-filter="other">Other</button>
            </div>
          </div>

          <!-- Quick Year Nav -->
          <div class="dl-year-nav">
            <a href="#y2007-08">2007–08</a>
            <a href="#y2006-07">2006–07</a>
            <a href="#y2005-06">2005–06</a>
            <a href="#y2004-05">2004–05</a>
            <a href="#y2003-04">2003–04</a>
            <a href="#other">Other</a>
          </div>

          <!-- Accordions -->
          <div class="panel-group dl-accordion" id="dlAcc" role="tablist" aria-multiselectable="true">

            <!-- Year 2007-08 -->
            <div class="panel panel-default dl-panel" id="y2007-08" data-year="2007-08">
              <div class="panel-heading" role="tab" id="h2007">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#dlAcc" href="#c2007" aria-expanded="true" aria-controls="c2007">
                    Year 2007–08
                    <span class="dl-count"><i class="fa fa-file-text-o"></i> 2 files</span>
                  </a>
                </h4>
              </div>
              <div id="c2007" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="h2007">
                <div class="panel-body">
                  <div class="dl-grid">

                    <article class="dl-card" data-tags="sales-tax" data-title="Sales Tax 2007-08">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax (2007–08)</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">2007–08</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2007-08-sales-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>

                    <article class="dl-card" data-tags="income-tax" data-title="Income Tax 2007-08">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Income Tax (2007–08)</h5>
                        <div class="dl-tags"><span class="tag tag-income">Income Tax</span><span class="tag">2007–08</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2007-08-income-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>

                  </div>
                </div>
              </div>
            </div>

            <!-- Year 2006-07 -->
            <div class="panel panel-default dl-panel" id="y2006-07" data-year="2006-07">
              <div class="panel-heading" role="tab" id="h2006">
                <h4 class="panel-title">
                  <a role="button" class="collapsed" data-toggle="collapse" data-parent="#dlAcc" href="#c2006" aria-expanded="false" aria-controls="c2006">
                    Year 2006–07
                    <span class="dl-count"><i class="fa fa-file-text-o"></i> 2 files</span>
                  </a>
                </h4>
              </div>
              <div id="c2006" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h2006">
                <div class="panel-body">
                  <div class="dl-grid">
                    <article class="dl-card" data-tags="sales-tax" data-title="Sales Tax 2006-07">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax (2006–07)</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">2006–07</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2006-07-sales-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                    <article class="dl-card" data-tags="income-tax" data-title="Income Tax 2006-07">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Income Tax (2006–07)</h5>
                        <div class="dl-tags"><span class="tag tag-income">Income Tax</span><span class="tag">2006–07</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2006-07-income-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>

            <!-- Year 2005-06 -->
            <div class="panel panel-default dl-panel" id="y2005-06" data-year="2005-06">
              <div class="panel-heading" role="tab" id="h2005">
                <h4 class="panel-title">
                  <a role="button" class="collapsed" data-toggle="collapse" data-parent="#dlAcc" href="#c2005" aria-expanded="false" aria-controls="c2005">
                    Year 2005–06
                    <span class="dl-count"><i class="fa fa-file-text-o"></i> 2 files</span>
                  </a>
                </h4>
              </div>
              <div id="c2005" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h2005">
                <div class="panel-body">
                  <div class="dl-grid">
                    <article class="dl-card" data-tags="sales-tax" data-title="Sales Tax 2005-06">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax (2005–06)</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">2005–06</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2005-06-sales-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                    <article class="dl-card" data-tags="income-tax" data-title="Income Tax 2005-06">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Income Tax (2005–06)</h5>
                        <div class="dl-tags"><span class="tag tag-income">Income Tax</span><span class="tag">2005–06</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2005-06-income-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>

            <!-- Year 2004-05 -->
            <div class="panel panel-default dl-panel" id="y2004-05" data-year="2004-05">
              <div class="panel-heading" role="tab" id="h2004">
                <h4 class="panel-title">
                  <a role="button" class="collapsed" data-toggle="collapse" data-parent="#dlAcc" href="#c2004" aria-expanded="false" aria-controls="c2004">
                    Year 2004–05
                    <span class="dl-count"><i class="fa fa-file-text-o"></i> 2 files</span>
                  </a>
                </h4>
              </div>
              <div id="c2004" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h2004">
                <div class="panel-body">
                  <div class="dl-grid">
                    <article class="dl-card" data-tags="sales-tax" data-title="Sales Tax 2004-05">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax (2004–05)</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">2004–05</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2004-05-sales-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                    <article class="dl-card" data-tags="income-tax" data-title="Income Tax 2004-05">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Income Tax (2004–05)</h5>
                        <div class="dl-tags"><span class="tag tag-income">Income Tax</span><span class="tag">2004–05</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2004-05-income-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>

            <!-- Year 2003-04 -->
            <div class="panel panel-default dl-panel" id="y2003-04" data-year="2003-04">
              <div class="panel-heading" role="tab" id="h2003">
                <h4 class="panel-title">
                  <a role="button" class="collapsed" data-toggle="collapse" data-parent="#dlAcc" href="#c2003" aria-expanded="false" aria-controls="c2003">
                    Year 2003–04
                    <span class="dl-count"><i class="fa fa-file-text-o"></i> 2 files</span>
                  </a>
                </h4>
              </div>
              <div id="c2003" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h2003">
                <div class="panel-body">
                  <div class="dl-grid">
                    <article class="dl-card" data-tags="sales-tax" data-title="Sales Tax 2003-04">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax (2003–04)</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">2003–04</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2003-04-sales-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                    <article class="dl-card" data-tags="income-tax" data-title="Income Tax 2003-04">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Income Tax (2003–04)</h5>
                        <div class="dl-tags"><span class="tag tag-income">Income Tax</span><span class="tag">2003–04</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/2003-04-income-tax.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>

            <!-- Other Downloads -->
            <div class="panel panel-default dl-panel" id="other" data-year="other">
              <div class="panel-heading" role="tab" id="hOther">
                <h4 class="panel-title">
                  <a role="button" class="collapsed" data-toggle="collapse" data-parent="#dlAcc" href="#cOther" aria-expanded="false" aria-controls="cOther">
                    Other Downloads
                    <span class="dl-count"><i class="fa fa-file-text-o"></i> 3 files</span>
                  </a>
                </h4>
              </div>
              <div id="cOther" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hOther">
                <div class="panel-body">
                  <div class="dl-grid">
                    <article class="dl-card" data-tags="other sales-tax" data-title="Sales Tax Return Form">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax Return Form</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">Form</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/sales-tax-return-form.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>

                    <article class="dl-card" data-tags="other sales-tax" data-title="Sales Tax Summary">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Sales Tax Summary</h5>
                        <div class="dl-tags"><span class="tag tag-sales">Sales Tax</span><span class="tag">Summary</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/sales-tax-summary.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>

                    <article class="dl-card" data-tags="other income-tax" data-title="Income Tax Return Form">
                      <div class="dl-icon"><i class="fa fa-file-pdf-o"></i></div>
                      <div class="dl-meta">
                        <h5>Income Tax Return Form</h5>
                        <div class="dl-tags"><span class="tag tag-income">Income Tax</span><span class="tag">Form</span></div>
                      </div>
                      <div class="dl-actions">
                        <a class="btn btn-xs p_color_bg s_color dl-btn" href="{{ asset('downloads/income-tax-return-form.pdf') }}" download>
                          <i class="fa fa-download"></i> Download
                        </a>
                      </div>
                    </article>

                  </div>
                </div>
              </div>
            </div>

          </div> <!-- /accordion -->

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
    </div>
  </div>
</div>


@endsection
