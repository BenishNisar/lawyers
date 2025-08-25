@extends("Layout.layout")

@section("Content")

<!-- Menu ___________________________________ -->



        <!-- Inner Banner _____________________ -->
        <div class="inner_banner">
        	<div class="overlay">
        		<div class="banner_tilte">
        			<h2>Careers</h2>
        			<span class="s_color_bg"></span>
        		</div> <!-- End of .banner_title -->
        	</div> <!-- End of .overlay -->
        </div> <!-- End of .inner_banner -->


        <!-- Page Breadcrumb __________________ -->
        <div class="page-breadcrumb p_color_bg">
        	<div class="container clear_fix">
        		<ul class="text-center">
        			<li><a href="index.html">Home</a></li>
        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        			<li><a href="about.html">About Us</a></li>
        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        			<li>Careers</li>
        		</ul>
        	</div>
        </div> <!-- End of .page-breadcrumb -->



        <!-- Career Page Content _________________ -->

        <section class="career_page_wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right career_main_content">
        				<div class="img_holder">
        					<img src="{{ asset("assets/images/home/business.jpg") }}" alt="images" class="img-responsive">
        					<div class="text">
        						<h3 class="p_color">Industries We
<br>Serve</h3>
        						<a href="#" class="theme_button s_color_bg tran3s">Contact Now</a>
        					</div>
        				</div>

        				{{-- <div class="job_opportunities">
        					<div class="theme_title">
								<h3>Job Opportunities</h3>
							</div>

							<p style="margin: 33px 0 43px 0;">ConsultPress over 20 years of experience we’ll ensure you always get the best guidance. We serve clients at every level of their organization, in whatever capacity we can be most useful, whether as a trusted advisor to top management or as a hands-on coach for front line employees. For every engagement, we assemble a team with the most appropriate experience and expertise.  Our goal is to optimise your business relationships by tailoring our services to your individual requirements</p>

							<div class="table-responsive job_table">
								<table class="table">
									<tr>
										<th>Job ID</th>
										<th>Job Position</th>
										<th>Location</th>
										<th>Posted Date</th>
									</tr>

									<tr>
										<td>101</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Programme Engineering Manager</a></td>
										<td>Chicago, IL</td>
										<td>May 01, 2016</td>
									</tr>

									<tr>
										<td>102</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Development Manager</a></td>
										<td>New York +1</td>
										<td>May 04, 2016</td>
									</tr>

									<tr>
										<td>103</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Accounting / Finance Professional Consultant</a></td>
										<td>Chicago, IL </td>
										<td>May 09, 2016</td>
									</tr>

									<tr>
										<td>104</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Director, Operations Manager</a></td>
										<td>Austin +</td>
										<td>May 11, 2016</td>
									</tr>

									<tr>
										<td>105</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Interim Controller</a></td>
										<td>Chicago, IL </td>
										<td>May 20, 2016</td>
									</tr>

									<tr>
										<td>106</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Purchase Accounting Consultant/CPA</a></td>
										<td>Washington, DC +1</td>
										<td>May 29, 2016</td>
									</tr>

									<tr>
										<td>107</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Oracle Database Administrator</a></td>
										<td>Austin +</td>
										<td>June 01, 2016</td>
									</tr>

									<tr>
										<td>108</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Director, Operations Manager</a></td>
										<td>Chicago, IL</td>
										<td>June 21, 2016</td>
									</tr>

									<tr>
										<td>109</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Order Management Application Developer</a></td>
										<td>Austin +</td>
										<td>July 01, 2016</td>
									</tr>

									<tr>
										<td>110</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Deputy Principal Construction Manager</a></td>
										<td>Europe +</td>
										<td>July 10, 2016</td>
									</tr>

									<tr>
										<td>111</td>
										<td><a href="career-single.html" class="tran3s" target="_blank">Solution Architect</a></td>
										<td>Chicago, IL </td>
										<td>July 11, 2016</td>
									</tr>

								</table> <!-- End of .table -->
							</div> <!-- End of .job_table -->
        				</div> --}}
<!-- ======================= INDUSTRIES WE SERVE ========================== -->
<!-- ======================= INDUSTRIES WE SERVE ========================== -->
<div class="industries_served" style="margin-bottom: 60px; font-family: 'Roboto', sans-serif;">
    <div class="theme_title">
        <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 20px;">
            <i class="fa fa-industry p_color" style="margin-right: 8px;"></i>Industries We Serve
        </h3>
    </div>

    <p style="margin-bottom: 30px; font-size: 16px; line-height: 1.7;">
        Our company proudly collaborates with clients from a diverse range of sectors. Each industry we serve is handled with care, professionalism, and customized attention to meet specific business goals.
    </p>

    <div class="row">
        <div class="col-md-6">
            <ul class="fa-ul" style="font-size: 15px; line-height: 1.8;">
                <li><span class="fa-li"><i class="fa fa-cogs"></i></span>Auto Parts & Engineering Industries (Domestic And Imports)</li>
                <li><span class="fa-li"><i class="fa fa-industry"></i></span>Iron And Steel Products (Domestic And Imports)</li>
                <li><span class="fa-li"><i class="fa fa-tv"></i></span>Electronic Goods</li>
<li><span class="fa-li"><i class="fa fa-industry"></i></span>Textile Sector</li>
<li><span class="fa-li"><i class="fa fa-money"></i></span>Yarn</li>
<li><span class="fa-li"><i class="fa fa-fire"></i></span>Cigarettes Distribution</li>

                <li><span class="fa-li"><i class="fa fa-eye"></i></span>Optical Lenses</li>
                <li><span class="fa-li"><i class="fa fa-car"></i></span>Tires And Tubes</li>
                <li><span class="fa-li"><i class="fa fa-th"></i></span>Tiles And Sanitary Fittings Etc</li>
               <li><span class="fa-li"><i class="fa fa-file-text"></i></span>Papers And Board</li>
<li><span class="fa-li"><i class="fa fa-file-text"></i></span>Stabilizers And UPS System</li>

   <li><span class="fa-li"><i class="fa fa-flask"></i></span>Chemical</li>
<li><span class="fa-li"><i class="fa fa-coffee"></i></span>Tea</li>

                <li><span class="fa-li"><i class="fa fa-cube"></i></span>Plastic Molding Compound (P.M.C)</li>
                <li><span class="fa-li"><i class="fa fa-recycle"></i></span>Scrap</li>
  <li><span class="fa-li"><i class="fa fa-industry"></i></span>Oil & Lubricants</li>
  <li><span class="fa-li"><i class="fa fa-car"></i></span>Petrol Pumps</li>
  <li><span class="fa-li"><i class="fa fa-fire"></i></span>CNG Stations</li>
  <li><span class="fa-li"><i class="fa fa-wrench"></i></span>CNG Kits & Accessories</li>
                <li><span class="fa-li"><i class="fa fa-bicycle"></i></span>Cycle And Parts Etc</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="fa-ul" style="font-size: 15px; line-height: 1.8;">
                  <li><span class="fa-li"><i class="fa fa-cutlery"></i></span>Food Stuff</li>
  <li><span class="fa-li"><i class="fa fa-glass"></i></span>Glass Wares And Accessories</li>
                <li><span class="fa-li"><i class="fa fa-tint"></i></span>Dyeing And Finishing Works</li>
             <li><span class="fa-li"><i class="fa fa-pencil"></i></span>Stationery</li>
  <li><span class="fa-li"><i class="fa fa-tag"></i></span>Second Hand Clothing</li>
  <li><span class="fa-li"><i class="fa fa-archive"></i></span>General Order Suppliers</li>
                <li><span class="fa-li"><i class="fa fa-print"></i></span>Printing Services</li>
                <li><span class="fa-li"><i class="fa fa-shopping-bag"></i></span>Poly-Bags</li>
                <li><span class="fa-li"><i class="fa fa-building"></i></span>Builders</li>
               <li><span class="fa-li"><i class="fa fa-building"></i></span>Estate Agents</li>
  <li><span class="fa-li"><i class="fa fa-pencil"></i></span>Architects</li>
                <li><span class="fa-li"><i class="fa fa-user-md"></i></span>Doctors</li>
                <li><span class="fa-li"><i class="fa fa-gavel"></i></span>Advocates</li>
  <li><span class="fa-li"><i class="fa fa-users"></i></span>Commission Agents</li>
                <li><span class="fa-li"><i class="fa fa-users"></i></span>Dealers</li>
                <li><span class="fa-li"><i class="fa fa-birthday-cake"></i></span>Sweets And Bakers</li>
                <li><span class="fa-li"><i class="fa fa-hotel"></i></span>Hotels And Restaurants</li>
                <li><span class="fa-li"><i class="fa fa-desktop"></i></span>Computer Parts And Accessories</li>
                <li><span class="fa-li"><i class="fa fa-motorcycle"></i></span>Motorcycles</li>
                <li><span class="fa-li"><i class="fa fa-tree"></i></span>Wood</li>
<li><span class="fa-li"><i class="fa fa-cutlery"></i></span>Catering Services And Many More</li>
            </ul>
        </div>
    </div>
</div>
<!-- ======================= END INDUSTRIES SECTION ========================== -->

        			</div>
                    <!-- End of .career_main_content -->

					<!-- _________________________ SIDE BAR ___________________ -->
        			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-left side_bar">
        				<div class="wrapper">
        					<!-- Page List -->
        					<ul class="page_list">
        						<li><a href="about.html" class="tran3s">About Company</a></li>
        						<li><a href="company-history.html" class="tran3s">Company History</a></li>
        						<li><a href="our-team.html" class="tran3s">Our Team</a></li>
        						<li><a href="our-partners.html" class="tran3s">Our Partners</a></li>
        						<li><a href="faq.html" class="tran3s">FAQ</a></li>
        						<li><a href="#" class="tran3s active">Careers</a></li>
        						<li><a href="client-feedback.html" class="tran3s">Client Feedback</a></li>
        					</ul> <!-- End of .page_list -->

							<!-- Fun Facts -->
        					<div class="fun_facts_wrapper">
        						<!-- Single Fun Facts -->
        						<div class="fun_facts_single_item clear_fix">
									<div class="icon float_left"><span class="ficon flaticon-peopletwo"></span></div> <!-- End of .icon -->
									<div class="text float_left">
										<span class="timer" data-from="10" data-to="100" data-speed="5000" data-refresh-interval="50">0</span>
										<p>Projects Completed</p>
									</div> <!-- End of .text -->
								</div> <!-- End of .fun_facts_single_item -->

								<!-- Single Fun Facts -->
								<div class="fun_facts_single_item clear_fix">
									<div class="icon float_left"><span class="ficon flaticon-screen"></span></div> <!-- End of .icon -->
									<div class="text float_left">
										<span class="timer" data-from="10" data-to="230" data-speed="5000" data-refresh-interval="50">0</span>
										<p>Consultants</p>
									</div> <!-- End of .text -->
								</div> <!-- End of .fun_facts_single_item -->

								<!-- Single Fun Facts -->
								<div class="fun_facts_single_item clear_fix">
									<div class="icon float_left"><span class="ficon flaticon-badge"></span></div> <!-- End of .icon -->
									<div class="text float_left">
										<span class="timer" data-from="10" data-to="90" data-speed="4500" data-refresh-interval="50">0</span>
										<p>Awwards winning</p>
									</div> <!-- End of .text -->
								</div> <!-- End of .fun_facts_single_item -->


								<!-- Single Fun Facts -->
								<div class="fun_facts_single_item clear_fix">
									<div class="icon float_left"><span class="ficon flaticon-smile"></span></div> <!-- End of .icon -->
									<div class="text float_left">
										<span class="timer" data-from="1" data-to="100" data-speed="5000" data-refresh-interval="50">0</span><span>%</span>
										<p>Satisfied clients</p>
									</div> <!-- End of .text -->
								</div> <!-- End of .fun_facts_single_item -->

        					</div> <!-- End of .fun_facts_wrapper -->

        					<!-- Business Enquiry -->
        					<div class="business_enquiry">
        						<h6>For Business Enquiry</h6>
        						<p>You can also send us an <a href="#" class="s_color">email</a> and we’ll get in touch shortly, or Troll Free Number <a href="#" class="p_color"> -(+91) <br> 00-700-6202.</a></p>
        						<span class="ficon flaticon-message"></span>
        					</div> <!-- End of .business_enquiry -->

        				</div> <!-- End of .wrapper -->
        			</div> <!-- End of .side_bar -->
        		</div> <!-- End of .row -->
        	</div> <!-- End of .container -->
        </section> <!-- End of .career_page_wrapper -->




        <!-- Request Quote footer _____________ -->
        <div class="request_quote_footer s_color_bg">
			<div class="container clear_fix">
				<p class="float_left">ConsultPress over 20 years of experience we’ll ensure you always get the best guidance.</p>
				<a href="#" class="theme_button p_color_bg float_right tran3s">Request Quote</a>
			</div> <!-- End of .container -->
		</div> <!-- End of .request_quote -->




@endsection
