@extends("Layout.layout")
@section("Content")


<!-- Inner Banner _____________________ -->
        <div class="inner_banner">
        	<div class="overlay">
        		<div class="banner_tilte">
        			<h2>Contact</h2>
        			<span class="s_color_bg"></span>
        		</div> <!-- End of .banner_title -->
        	</div> <!-- End of .overlay -->
        </div> <!-- End of .inner_banner -->


        <!-- Page Breadcrumb _____________________ -->
        <div class="page-breadcrumb p_color_bg">
        	<div class="container clear_fix">
        		<ul class="text-center">
        			<li><a href="index.html">Home</a></li>
        			<li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        			<li>Contact</li>
        		</ul>
        	</div>
        </div> <!-- End of .page-breadcrumb -->

        <!-- Contact Us Page _____________________ -->

		<div class="req_callBack mTop_fix">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 callBack_text">
						<div class="theme_title">
							<h2>Contact Us</h2>
						</div>

						<h5>If you would like to contact someone by phone, fax or post and you don't know the address, please consult our world wide branch <a href="#" class="p_color">directory.</a></h5>

						<p><span>For Business: </span> For Business inquiry fill our short feedback form or you can also send us an <a href="#" class="s_color" title="E-mail us">email</a> and we’ll get in touch shortly, or Troll Free Number <a href="#" class="p_color" title="Call us">- (+91) 00-700-6202.</a></p>

						<p><span>For Customer Support :</span> If you have any doubt about ConsultPress WordPress or how we can support your business, Send us an <a href="#" class="s_color" title="E-mail us">email</a> and we’ll get in touch shortly, or Contact via <a href="#" class="s_color" title="Contact via Support Forum">Support Forum</a></p>

						<p><span>Office Hours :</span> 07:30 and 19:00 Monday to Saturday,Sunday - Holiday</p>
					</div> <!-- End of .callBack_text -->

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 req_callBackForm">
						<form action="inc/sendemail.php" class="form-validation" autocomplete="off">
							<div class="input_group">
								<label>Your Name (required)</label>
								<input type="text" name="name">
							</div> <!-- End of .input_group -->

							<div class="input_group">
								<label>Your Email (required)</label>
								<input type="email" name="email">
							</div> <!-- End of .input_group -->

							<div class="input_group">
								<label>Phone Number (required)</label>
								<input type="text" name="phone">
							</div> <!-- End of .input_group -->

							<div class="input_group">
								<label>I would like to discuss:</label>
								<select class="selectmenu">
									<option selected="selected">&emsp;</option>
									<option value="#">Restructuring & Turnaround</option>
					       			<option value="#">Business Plannning</option>
					       			<option value="#">Exit & Succession Planning</option>
					       			<option value="#">Strategic Planning</option>
					       			<option value="#">Global Risk & Investigations </option>
					       			<option value="#">Audit & Assurance</option>
					       			<option value="#">Trades & Stocks</option>
					       			<option value="#">Information Technology</option>
								</select>
							</div> <!-- End of .input_group -->

							<button class="s_color_bg tran3s font_fix">Submit</button>
						</form>

						<div class="alert_wrapper" id="alert_success">
							<div id="success">
								<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
								<div class="wrapper">
						            <p>Your message was sent successfully!</p>
						        </div>
						    </div>
						</div> <!-- End of .alert_wrapper -->
						<div class="alert_wrapper" id="alert_error">
						    <div id="error">
						       <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						        <div class="wrapper">
						         <p>Something went wrong, try refreshing and submitting the form again.</p>
						        </div>
						    </div>
						</div> <!-- End of .alert_wrapper -->
					</div> <!-- End of .req_callBackForm -->
				</div> <!-- End of .row -->
			</div> <!-- End of .container -->
		</div> <!-- End of .req_callBack -->




		<!-- Google map _________________________________ -->
		<section id="google-map-area">
			<div class="google-map-home skin-2" id="contact-google-map" data-map-lat="40.925372" data-map-lng="-74.276544" data-icon-path="images/logo/1.png" data-map-title="Awesome Place" data-map-zoom="12"></div>

			<div class="address_wrapper">
				<div class="container">
					<div class="map_address">
						<div class="item">
							<h5 class="s_color">Head Quator - United States</h5>

							<ul>
								<li><i class="fa fa-map-marker s_color" aria-hidden="true"></i>001 Columbus Road, Floor 4, San Francisco CA 9100</li>
								<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:00-700-6202">(+91) 00-700-6202.</a></li>
								<li><i class="fa fa-envelope s_color" aria-hidden="true"></i><a href="#">Support&ConsultPress.com</a></li>
							</ul>
						</div> <!-- End of .item -->

						<div class="item">
							<h5 class="s_color">London - Slaes Office</h5>

							<ul>
								<li><i class="fa fa-map-marker s_color" aria-hidden="true"></i>789 Park Road, Foresthill London</li>
								<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:00-700-6202">(+91) 00-700-6202.</a></li>
								<li><i class="fa fa-envelope s_color" aria-hidden="true"></i><a href="#">Support&ConsultPress.com</a></li>
							</ul>
						</div> <!-- End of .item -->

						<div class="item">
							<h5 class="s_color">Spain - Support Center</h5>

							<ul>
								<li><i class="fa fa-map-marker s_color" aria-hidden="true"></i>Bilbao Street, Barcelona</li>
								<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:00-700-6202">(+91) 00-700-6202.</a></li>
								<li><i class="fa fa-envelope s_color" aria-hidden="true"></i><a href="#">Support&ConsultPress.com</a></li>
							</ul>
						</div> <!-- End of .item -->

					</div> <!-- End of .map_address -->
				</div>
			</div> <!-- End of .address_wrapper -->
   		</section>






@endsection
