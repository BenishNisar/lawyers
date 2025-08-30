
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Aziz Ismail & Co</title>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfZ6P35JfYx1pU8tR+6v3vB0s6H5c0vQyB+99lB3cD9Jm0sYF2T3Z0f8Xk3O3QvGvG0B4v8F4YkO5N2wC2RZrA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<!-- Font Awesome 5.15.4 (Free) + v4 shims -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6v0u7yZXs6F8rh7Lo2P7Bpn6k0UJkljvGZqxx5v1rUJk5Sbzf9G7QFGHpX" crossorigin="anonymous"> --}}
{{-- google --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/v4-shims.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="shortcut icon" href="{{ asset("assets/images/logo/azizlogo.png") }}" type="image/x-icon">
		<!-- Favicon -->
		{{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/fav-icon/apple-icon-57x57.png') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/fav-icon/apple-icon-60x60.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/fav-icon/apple-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/fav-icon/apple-icon-76x76.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/fav-icon/apple-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/fav-icon/apple-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/fav-icon/apple-icon-144x144.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/fav-icon/apple-icon-152x152.png') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/fav-icon/apple-icon-180x180.png') }}">
		<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/fav-icon/android-icon-192x192.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/fav-icon/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/fav-icon/favicon-96x96.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/fav-icon/favicon-16x16.png') }}"> --}}



		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive/responsive.css') }}">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault" href="{{ asset('assets/css/custom/color.css') }}">


		<!-- Fixing Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/html5shiv.js"></script>
		<![endif]-->


	</head>
	<body class="home">


        <div id="siteLoader">
    <div class="gavel-wrapper">
      <img src="{{ asset("assets/images/logo/lawhammer.svg") }}" class="hammer" alt="Hammer" />
      <img src="{{ asset("assets/images/logo/lawone.svg") }}" class="plate" alt="Plate" />
    </div>
    </div>
		<div class="page_wrapper">

		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


       <!-- ==================== Style Switcher ==================== -->
		{{-- <div class="switcher">

			<!-- Switcher button -->
			<div class="switch_btn">
				<button><i class="fa fa-cog fa-spin"></i></button>
			</div>

			<!-- switcher body -->
			<div class="switch_menu">
				<h5 class="title">Style Switcher</h5>

					<!-- Theme layout -->
					<div class="switch_body">
						<div class="switcher_container clear_fix">
							<h5>Layout Style</h5>
							<div class="box float_left" id="full_width">
								<div></div>
								<p>Fullwidth</p>
							</div>
							<div class="box float_right" id="boxed">
								<div><span></span></div>
								<p>Boxed</p>
							</div>
						</div>
					</div> <!-- /switch_body -->

					<!-- Switch Navigation menu Sticky/Static -->
					<div class="switch_navigation">
						<div class="switcher_container">
							<h5>Navigation</h5>
							<p>Static</p>
							<div class="onoffswitch" id="sticky_switch">
							    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
							    <label class="onoffswitch-label" for="myonoffswitch"></label>
							</div>
							<p>Sticky</p>
						</div>
					</div> <!-- /switch_navigation -->



					<!-- Theme color changer -->
					<div class="switcher_container">
						<h5 class="fix_space">Color Skins</h5>
						<ul id="styleOptions" title="Switch Color" class="clear_fix">
							<li>
								<a href="" data-theme="color" class="color1">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="" data-theme="color-3" class="color3">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="" data-theme="color-4" class="color4">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
							<li>
								<a href="" data-theme="color-2" class="color2">
									<span class="p_color"></span>
									<span class="s_color"></span>
								</a>
							</li>
						</ul>
					</div>

			</div> <!-- /switch_menu -->
		</div> --}}

		<!-- ==================== Style Switcher ==================== -->



        <!-- Header ___________________________________ -->

        <header class="p_color_bg">
        	<div class="container">
        		<div class="row">
	        		<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 header_left">
	        			<ul>
	        				{{-- <li><i class="fa fa-map-marker s_color" aria-hidden="true"></i><a href="#">Email</a></li>
	        				<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="#">Contact Us! 0092-21-2772944-5, 2721357, 2721359, 2750546-7 </a></li> --}}

{{-- @php
  $contact = cache()->remember('contact_settings.first', 1800, fn () => \App\Models\ContactSetting::first());

  $emails = collect(is_array($contact->emails ?? null) ? $contact->emails : json_decode($contact->emails ?? '[]', true))
            ->map(fn($v)=>trim(trim((string)$v), " ,;"))->filter()->values();



  $telHref = fn(string $p) => preg_replace('/[^0-9+]/','', $p);
@endphp

<li>
  <i class="fas fa-envelope s_color" aria-hidden="true"></i>
  @if($emails->isNotEmpty())
    {!! $emails->map(fn($em)=>'<a href="mailto:'.e($em).'">'.e($em).'</a>')->implode(', ') !!}
  @else
    <a href="#">Email</a>
  @endif
</li> --}}



{{-- ✅ Email item (use envelope icon) --}}
{{-- Static Email item --}}
{{-- <li>
  <i class="fas fa-envelope s_color" aria-hidden="true"></i>
  <a href="mailto:info@azizismail.com">info@azizismail.com</a> <!-- Static email address -->
</li> --}}

<li>
  <i class="fas fa-envelope s_color" aria-hidden="true"></i>
  <a href="mailto:info@azizismail.com">info@azizismail.com</a> <!-- Static email address -->
</li>


{{-- Phone item --}}
{{-- <li>
  <i class="fas fa-phone-alt s_color" aria-hidden="true"></i>
  @if($phones->isNotEmpty())
    @foreach($phones as $i => $ph)
      <a href="tel:{{ $telHref($ph) }}">{{ $ph }}</a>@if($i < $phones->count()-1), @endif
    @endforeach
  @else
    <a href="#">000-0000000</a>
  @endif
</li> --}}

                            {{-- <li><i class="fa fa-clock-o s_color" aria-hidden="true"></i><a href="#"> Mon to Sat : 8.00 - 18.00</a></li> --}}
	        			</ul>
	        		</div> <!-- End of .header_left -->
	        		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 header_right">
	        			<ul class="social_icon">
	        				<li><a href="#" class="tran3s" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	        				<li><a href="#" class="tran3s" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	        				<li><a href="#" class="tran3s" title="Goolge-Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
	        			</ul>
{{--
	        			<div id="polyglotLanguageSwitcher">
							<form action="#">
								<select id="polyglot-language-options">
									<option id="en" value="en" selected>English</option>
									<option id="fr" value="fr">French</option>
									<option id="de" value="de">German</option>
									<option id="it" value="it">Italian</option>
									<option id="es" value="es">Spanish</option>
								</select>
							</form>
						</div>  --}}
	        		</div>

                    <!-- End of .header_right -->
        		</div>  <!-- End of .row -->
        	</div> <!-- End of .container -->
        </header> <!-- End of header -->



        <!-- Menu ___________________________________ -->

<!-- DESKTOP NAVBAR -->
<div class="main_menu only-desktop">
  <div class="container">
<a href="{{ asset('/') }}" class="logo-link" title="Home" aria-label="Home">
      <img class="logo-img" src="{{ asset('assets/images/logo/azizlogo.png') }}"  alt="Aziz Law Logo">
    </a>
    {{-- <a class="navbar-brand logo-link" href="{{ asset('/') }}" aria-label="Home">
  <picture>
    <!-- Mobile: compact logo (tagline ke bina) -->
    <source media="(max-width: 991px)"
            srcset="{{ asset('assets/images/logo/azizlogo-compact@2x.png') }} 2x,
                    {{ asset('assets/images/logo/azizlogo-compact.png') }} 1x">
    <!-- Desktop: full logo -->
    <img class="logo-img"
         src="{{ asset('assets/images/logo/azizlogo.png') }}"
         srcset="{{ asset('assets/images/logo/azizlogo@2x.png') }} 2x,
                 {{ asset('assets/images/logo/azizlogo@3x.png') }} 3x"
         width="100" height="10"
         alt="Aziz Ismail &amp; Co.">
  </picture>
</a> --}}


    <nav class="navbar navbar-default" >
      <div class="navbar-collapse" id="nav-desktop">
        <ul class="nav navbar-nav">
          <li><a href="{{ asset('/') }}">Home</a></li>
          <li class="dropdown">
            <a href="{{ route('Home.services') }}">Services</a>
            <ul class="sub-menu fix">
              @forelse($servicesMenu as $svc)
                <li><a href="{{ route('Home.services.show', $svc->slug) }}">{{ $svc->title }}</a></li>
              @empty
                <li><a href="javascript:void(0)">Coming soon…</a></li>
              @endforelse
            </ul>
          </li>
          <li><a href="{{ route('Home.business-sectors') }}">Business Sectors</a></li>
          {{-- <li><a href="{{ asset('/administration') }}">Administration</a></li> --}}
          {{-- <li><a href="{{ asset('/softwares') }}">Softwares</a></li> --}}
          {{-- <li><a href="{{ asset('/clients') }}">Clients</a></li> --}}
          {{-- <li><a href="{{ route('Home.downloads') }}">Downloads</a></li> --}}
          <li><a href="{{ asset('/careers') }}">Jobs & Career</a></li>
          <li><a href="{{ asset('/blogs') }}">Blogs</a></li>
          <li><a href="{{ asset('/about') }}">About Us</a></li>
          <li><a href="{{ asset('/contact') }}">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>



<!-- MOBILE NAVBAR -->
<!-- MOBILE NAVBAR -->
<div class="main_menu only-mobile">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <!-- mobile bar me outer brand hide karenge; drawer ke andar naya logo hoga -->
        {{-- <a class="navbar-brand logo-link" href="{{ asset('/') }}">
          <img class="logo-img" src="{{ asset('assets/images/logo/aziz_logo.jpg') }}" style="width:100px;height:78px" alt="Aziz Law Logo">
        </a> --}}
<a class="navbar-brand logo-link" href="{{ asset('/') }}">
  <img class="logo-img" src="{{ asset('assets/images/logo/azizlogo.png') }}" alt="Aziz Ismail & Co.">
</a>

        <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#nav-mobile"
                aria-expanded="false" aria-controls="nav-mobile"
                aria-label="Toggle navigation">
          <span  class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Drawer -->
      <div class="collapse navbar-collapse drawer" id="nav-mobile">
        <!-- drawer header (logo + close) -->
        <div class="drawer-head">
          <a class="drawer-logo" href="{{ asset('/') }}">
            <img src="{{ asset('assets/images/logo/azizlogo.png') }}" alt="Aziz Law Logo">
          </a>
          <button class="drawer-close" type="button" data-toggle="collapse" data-target="#nav-mobile" aria-label="Close menu">×</button>
        </div>

        <ul class="nav navbar-nav">
          <li><a href="{{ asset('/') }}">Home</a></li>
          <li class="dropdown">
            <a href="{{ route('Home.services') }}">Services</a>
            <ul class="sub-menu fix">
              @forelse($servicesMenu as $svc)
                <li><a href="{{ route('Home.services.show', $svc->slug) }}">{{ $svc->title }}</a></li>
              @empty
                <li><a href="javascript:void(0)">Coming soon…</a></li>
              @endforelse
            </ul>
          </li>
          <li><a href="{{ route('Home.business-sectors') }}">Business Sectors</a></li>
          <li><a href="{{ asset('/administration') }}">Administration</a></li>
          <li><a href="{{ asset('/softwares') }}">Softwares</a></li>
          <li><a href="{{ asset('/clients') }}">Clients</a></li>
          <li><a href="{{ route('Home.downloads') }}">Downloads</a></li>
          <li><a href="{{ asset('/careers') }}">Jobs & Career</a></li>
          <li><a href="{{ asset('/blogs') }}">Blogs</a></li>
          <li><a href="{{ asset('/about') }}">About Us</a></li>
          <li><a href="{{ asset('/contact') }}">Contact Us</a></li>
        </ul>
      </div>

      <!-- Overlay -->
      <div class="drawer-overlay" id="nav-mobile-overlay"></div>
    </nav>
  </div>
</div>


        <!-- Floating Contact: START -->
<div class="floating-contact-wrapper  only-desktop" id="floatingContact">
  <!-- Vertical Tab Button -->
  <button class="floating-contact-button" id="openContactBtn" aria-expanded="false" aria-controls="contactFloatingForm">
    <i class="fas fa-envelope" aria-hidden="true"></i>
    <span class="fcb-text">Contact Us</span>
  </button>

  <!-- Backdrop / Overlay -->
  <div class="contact-overlay" id="contactOverlay" hidden></div>

  <!-- Slide-in Panel -->
  <aside
    class="floating-contact-form"
    id="contactFloatingForm"
    role="dialog"
    aria-modal="true"
    aria-labelledby="contactTitle"
    aria-hidden="true"
    tabindex="-1"
  >
    <button class="close-contact-form" id="closeContactBtn" aria-label="Close contact form">×</button>

    <header class="contact-head">
      <div class="dot"></div>
      <h3 id="contactTitle">Let’s Talk</h3>
      <p class="contact-sub">We usually reply within a few hours.</p>
    </header>

    <form id="floatingContactForm" method="POST" action="{{ route('Home.welcome.store') }}" novalidate>
      @csrf

      <div class="form-row">
        <div class="field">
          <label>Name*</label>
          <input type="text" name="name" placeholder="Your name" required />
        </div>
        <div class="field">
          <label>Phone</label>
          <input type="text" name="phone" placeholder="Optional" required />
        </div>
      </div>

      <div class="form-row">
        <div class="field">
          <label>Email*</label>
          <input type="email" name="email" placeholder="you@example.com" required />
        </div>
        <div class="field">
          <label>Country</label>
          <input type="text" name="country" placeholder="e.g., Pakistan"  required/>
        </div>
      </div>

      <div class="field">
        <label>Message*</label>
        <textarea name="message" placeholder="How can we help?" rows="3" required></textarea>
      </div>

      <!-- Honeypot (anti-bot) -->
      {{-- <div class="hp" aria-hidden="true">
        <input type="text" name="website" tabindex="-1" autocomplete="off" />
      </div> --}}

      <button type="submit" id="contactSubmitBtn" class="btn-submit" style="background-color:#1d3a7d;">
        <span class="btn-text" >Submit</span>
        <span class="btn-spinner" aria-hidden="true"></span>
      </button>

      <p class="form-note" id="contactFormNote" role="status" aria-live="polite"></p>
    </form>
  </aside>
</div>
<!-- Floating Contact: END -->

  @yield("Content")

  {{-- newsletter --}}
{{-- footer --}}
<!-- Footer ____________________________ -->
<footer>
  <div class="overlay">
    <div class="main_footer">
      <div class="container">
        <div class="row">

          <!-- About -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_logo" itemscope itemtype="https://schema.org/LegalService">
            <a href="{{ url('/') }}"><img style="width:130px;" src="{{ asset('assets/images/logo/footerlogo.png') }}" alt="Aziz Ismail &amp; Co. logo" itemprop="logo"></a>
            <p>
              <strong itemprop="name">Aziz Ismail &amp; Co.</strong> — The Firm of Income Tax &amp; Sales Tax Lawyers (est. 1975).
              We represent businesses and salaried individuals in <em>Income Tax, Sales Tax, Corporate/SECP compliance</em> and <em>Intellectual Property</em>.
              Led by <strong>Mr. Abdul Aziz Ismail</strong>, Senior Advocate, High Court of Sindh.
            </p>
            <ul class="social_icon">
              <li><a href="#" class="tran3s" title="Facebook" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="tran3s" title="Twitter" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="tran3s" title="LinkedIn" aria-label="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#" class="tran3s" title="YouTube" aria-label="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <!-- /About -->

          <!-- Practice Areas -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 quick_links">
            <div class="theme_title"><h4>Practice Areas</h4></div>
            <ul class="float_left">
              <li><a href="{{ route('Home.business-sectors') }}" class="tran3s">Business Sectors</a></li>
              <li><a href="{{ url('/administration') }}" class="tran3s">Administration </a></li>
              <li><a href="{{ url('/softwares') }}" class="tran3s">Softwares</a></li>
              <li><a href="{{ url('/clients') }}" class="tran3s">Clients</a></li>
              <li><a href="{{ route("Home.downloads") }}" class="tran3s">Downloads</a></li>
              <li><a href="{{ url('careers') }}" class="tran3s">Jobs & Careers</a></li>
              <li><a href="{{ url('/blogs') }}" class="tran3s">Blog</a></li>
              {{-- <li><a href="{{ url('/services/advisory') }}" class="tran3s">Advisory &amp; Planning</a></li> --}}
            </ul>
            <div class="clear_fix"></div>
          </div>
          <!-- /Practice Areas -->

          <!-- Quick Links -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 quick_links">
            <div class="theme_title"><h4>Quick Links</h4></div>
            <ul class="float_left">
              <li><a href="{{ url('/') }}" class="tran3s">Home</a></li>
              <li><a href="{{ url('/about') }}" class="tran3s">About the Firm</a></li>
              <li><a href="{{ url('/services') }}" class="tran3s">Services</a></li>
              {{-- <li><a href="{{ url('/clients') }}" class="tran3s">Clients</a></li> --}}
              {{-- <li><a href="{{ route("Home.downloads") }}" class="tran3s">Downloads</a></li> --}}
              {{-- <li><a href="{{ url('/jobs') }}" class="tran3s">Jobs &amp; Career</a></li> --}}
              <li><a href="{{ url('/contact') }}" class="tran3s">Contact</a></li>
            </ul>
            <div class="clear_fix"></div>
          </div>
          <!-- /Quick Links -->

          <!-- Contact -->
          @php
  // pull single settings row
  $contact = \App\Models\ContactSetting::first();

  // be defensive: handle array or raw JSON string
  $phones = collect(is_array($contact->phones ?? null) ? $contact->phones : json_decode($contact->phones ?? '[]', true))
              ->filter()->values();

  $emails = collect(is_array($contact->emails ?? null) ? $contact->emails : json_decode($contact->emails ?? '[]', true))
              ->filter()->values();

  // helper to make tel: safe (keep +, digits only)
  $telHref = function(string $p){
      return preg_replace('/[^0-9+]/', '', $p);
  };
@endphp

<!-- Contact -->
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_contact">
  <div class="theme_title"><h4>Contact</h4></div>

  <p>
    <span class="ficon flaticon-map"></span>
    {{ $contact->address ?? 'Address not set' }}
  </p>

  @if($phones->isNotEmpty())
    <p>
      <span class="ficon flaticon-phone"></span>
      @foreach($phones as $ph)
        <a href="tel:{{ $telHref($ph) }}">{{ $ph }}</a>@if(!$loop->last), @endif
      @endforeach
    </p>
  @endif

  @if($emails->isNotEmpty())
    <p>
      <span class="ficon flaticon-messagetwo"></span>
      @foreach($emails as $em)
        <a href="mailto:{{ $em }}">{{ $em }}</a>@if(!$loop->last), @endif
      @endforeach
    </p>
  @endif


</div>
<!-- /Contact -->

          {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_contact">
            <div class="theme_title"><h4>Contact</h4></div>
            <p><span class="ficon flaticon-map"></span>
              305, Frere Business Centre, Frere Road, Adjacent Akhbar Market, Saddar, Karachi-75350 (Pakistan)
            </p>
            <p><span class="ficon flaticon-phone"></span>
              <a href="tel:+922127729444">0092-21-2772944</a>,
              <a href="tel:+922127729445">2772945</a>,
              <a href="tel:+92212721357">2721357</a>,
              <a href="tel:+92212721359">2721359</a>,
              <a href="tel:+92212750546">2750546</a>,
              <a href="tel:+92212750547">2750547</a>
            </p>
            <p><span class="ficon flaticon-messagetwo"></span>
              <a href="mailto:azizismail@cyber.net.pk">azizismail@cyber.net.pk</a>,
              <a href="mailto:info@azizismail.com">info@azizismail.com</a>
            </p> --}}
            {{-- <p><span class="ficon flaticon-clock"></span>
              Mon–Sat: 07:30–19:00 &nbsp;•&nbsp; Sun: Closed
            </p> --}}
          {{-- </div> --}}
          <!-- /Contact -->

        </div> <!-- End of .row -->
      </div> <!-- End of .container -->
    </div> <!-- End of .main_footer -->

    {{-- <div class="bottom_footer">
      <div class="container">
        <p class="float_left font_fix">
          &copy; {{ date('Y') }} <strong>Aziz Ismail &amp; Co.</strong> All rights reserved.
          <span class="muted">Information on this site is for general guidance only and does not constitute legal advice.</span>
        </p>
        <ul class="float_right">
          <li><a href="#" class="tran3s" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class="tran3s" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class="tran3s" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#" class="tran3s" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        <div class="clear_fix"></div>
      </div>
    </div> --}}
    <div class="bottom_footer">
  <div class="container">
    <p class="float_left font_fix">
      &copy; {{ date('Y') }} <strong>Aziz Ismail &amp; Co.</strong> All rights reserved.
      {{-- <span class="muted">Information on this site is for general guidance only and does not constitute legal advice.</span> --}}
      <!-- Add Powered by Web Octane link -->
      <span>Powered by <a href="https://weboctane.tech/" target="_blank" title="Web Octane">Web Octane</a></span>
    </p>
    <ul class="float_right">
      <li><a href="#" class="tran3s" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#" class="tran3s" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#" class="tran3s" title="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li><a href="#" class="tran3s" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
    </ul>
    <div class="clear_fix"></div>
  </div>
</div>

    <!-- End of .bottom_footer -->

  </div> <!-- End of .overlay -->
</footer>



			<!-- Scroll Top Button -->
			<button class="scroll-top tran3s s_color_bg border_round">
				<span class="ficon flaticon-up-arrow"></span>
			</button>

<!-- WhatsApp Widget -->
<!-- WhatsApp Widget -->
<div id="wa-widget"
     class="wa-widget"
     data-wa-number="0335 3456444"
     data-country-code="92"
     data-text="Hello 👋 I need legal assistance regarding {{ request()->path() }}.">

  <!-- Floating Button (icon only) -->
  <a id="whatsapp-fab" class="whatsapp-fab" href="#" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <!-- Font Awesome icon -->
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
  </a>

  <!-- Hover Card -->
  <div class="wa-card" role="dialog" aria-labelledby="wa-title" aria-describedby="wa-desc" aria-hidden="true">
    <div class="wa-card-header" id="wa-title">Chat with us on WhatsApp</div>
    <div class="wa-card-body">
      <p id="wa-desc">Hi there 👋<br>How can we help you today?</p>
      <!-- Start Chat should also open WhatsApp -->
      <a id="wa-cta" class="wa-cta" href="#" target="_blank" rel="noopener">Start Chat</a>
    </div>
  </div>
</div>

<div id="toaster" aria-live="polite" aria-atomic="true"></div>

		<!-- Js File_________________________________ -->
<!-- Add Bootstrap JS and Popper.js -->
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> --}}

		<!-- j Query -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.js') }}"></script>
		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

		<!-- _________ vendor js __________ -->

		<!-- Google map js -->
		<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
		<script src="{{ asset('assets/js/gmap.js') }}"></script>
		<!-- revolution -->
		<script src="{{ asset('assets/vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.slideanims.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.layeranimation.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.navigation.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.kenburn.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.actions.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.parallax.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/revolution/revolution.extension.migration.min.js") }}"></script>
		<!-- Language Stitcher -->
		<script type="text/javascript" src="{{ asset("assets/vendor/language-switcher/jquery.polyglot.language.switcher.js") }}"></script>
		<!-- Fancybox js -->
		<script type="text/javascript" src="{{ asset("assets/vendor/fancy-box/jquery.fancybox.pack.js") }}"></script>
		<!-- ui js -->
		<script type="text/javascript" src="{{ asset("assets/vendor/jquery-ui/jquery-ui.min.js") }}"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="{{ asset("assets/vendor/owl-carousel/owl.carousel.min.js") }}"></script>
		<!-- js count to -->
		<script type="text/javascript" src="{{ asset("assets/vendor/jquery.appear.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/vendor/jquery.countTo.js") }}"></script>
		<!-- Style-switcher  -->
	<script type="text/javascript" src="{{ asset("assets/vendor/jQuery.style.switcher.min.js") }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>

		<!-- Theme js _________ -->

		<script type="text/javascript" src="{{ asset("assets/js/theme.js") }}"></script>
		<script src="{{ asset("assets/js/map-script.js") }}"></script>
		<script src="{{ asset("assets/js/app.js") }}"></script>

		</div>  <!-- End of .page_wrapper -->

	</body>
    <script>
document.addEventListener('DOMContentLoaded', function(){
  const panel   = document.getElementById('contactFloatingForm');
  const overlay = document.getElementById('contactOverlay');
  const openBtn = document.getElementById('openContactBtn');
  const closeBtn= document.getElementById('closeContactBtn');
  if(!panel || !openBtn) return;

  // start CLOSED
  function closeForm(){
    panel.classList.remove('show');
    openBtn.setAttribute('aria-expanded','false');
    if (overlay){
      overlay.classList.remove('show');
      setTimeout(()=>overlay.hidden = true, 180);
    }
  }
  function openForm(){
    panel.classList.add('show');
    openBtn.setAttribute('aria-expanded','true');
    if (overlay){
      overlay.hidden = false;
      overlay.classList.add('show');
    }
  }
  closeForm(); // ensure closed on load

  // click to toggle (mobile & desktop)
  openBtn.addEventListener('click', e => {
    e.preventDefault();
    panel.classList.contains('show') ? closeForm() : openForm();
  });
  if (closeBtn) closeBtn.addEventListener('click', e => { e.preventDefault(); closeForm(); });
  if (overlay)  overlay.addEventListener('click', closeForm);
});
</script>

<script>
(function(){
  const widget = document.getElementById('wa-widget');
  if(!widget) return;

  const btn  = document.getElementById('whatsapp-fab');
  const cta  = document.getElementById('wa-cta');
  const card = widget.querySelector('.wa-card');

  function normalize(num, cc){
    let n = (num||'').replace(/\D/g,'');
    if(!n) return '';
    if(n[0]==='0' && cc){ n = (cc.replace(/\D/g,'')) + n.slice(1); }
    return n;
  }

  const raw  = widget.getAttribute('data-wa-number') || '03177638152';
  const cc   = widget.getAttribute('data-country-code') || '';
  const text = widget.getAttribute('data-text') || 'Hello, I need legal assistance.';
  const normalized = normalize(raw, cc) || raw.replace(/\D/g,'');
  const waUrl = 'https://wa.me/' + normalized + '?text=' + encodeURIComponent(text);

  // ✅ Both open WhatsApp
  [btn, cta].forEach(a => { if(a){ a.href = waUrl; a.target = '_blank'; a.rel = 'noopener'; } });

  // Hover show/hide
  if (window.matchMedia('(hover: hover)').matches){
    widget.addEventListener('mouseenter', () => widget.classList.add('open'));
    widget.addEventListener('mouseleave', () => widget.classList.remove('open'));
  }

  // Basic tracking (optional)
  function track(src){
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({event:'whatsapp_click', source:src, wa_number:normalized, page_path:location.pathname, page_title:document.title});
  }
  if(btn) btn.addEventListener('click', () => track('fab'));
  if(cta) cta.addEventListener('click', () => track('card'));
})();
</script>
{{-- call --}}
<script>
  // Build menu dynamically for every .smart-mail using its data-email
  document.querySelectorAll('.smart-mail').forEach(function(el){
    var email = el.dataset.email;
    var menu = document.createElement('div');
    menu.className = 'smart-menu';
    menu.setAttribute('role','menu');
    menu.setAttribute('aria-label','Email actions for ' + email);

    menu.innerHTML = `
      <div class="smart-item"><a target="_blank" rel="noopener"
        href="https://mail.google.com/mail/?view=cm&fs=1&to=${encodeURIComponent(email)}">
        <i class="fa fa-google" aria-hidden="true"></i> Compose in Gmail</a></div>
      <div class="smart-item"><a target="_blank" rel="noopener"
        href="https://outlook.office.com/mail/deeplink/compose?to=${encodeURIComponent(email)}">
        <i class="fa fa-windows" aria-hidden="true"></i> Outlook (Office 365)</a></div>
      <div class="smart-item"><a target="_blank" rel="noopener"
        href="https://outlook.live.com/mail/0/deeplink/compose?to=${encodeURIComponent(email)}">
        <i class="fa fa-windows" aria-hidden="true"></i> Outlook.com</a></div>
      <div class="smart-item"><a href="mailto:${email}">
        <i class="fa fa-envelope" aria-hidden="true"></i> Default mail app</a></div>
      <div class="smart-item"><a href="#" onclick="copyToClipboard('${email}'); return false;">
        <i class="fa fa-clipboard" aria-hidden="true"></i> Copy email</a></div>
    `;
    el.appendChild(menu);

    // Keep menu inside viewport (flip to right if needed)
    el.addEventListener('mouseenter', function(){
      menu.style.left = '0'; menu.style.right = 'auto';
      var r = menu.getBoundingClientRect();
      if (r.right > window.innerWidth - 8) { menu.style.left = 'auto'; menu.style.right = '0'; }
    });
  });

  // Copy helper
  function copyToClipboard(text){
    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(text);
    } else {
      const ta = document.createElement('textarea');
      ta.value = text; document.body.appendChild(ta);
      ta.select(); document.execCommand('copy'); ta.remove();
    }
  }
</script>
<script>
  (function(){
    const el = document.getElementById('tel-line');
    el.innerHTML = el.textContent
      .split(',').map(s=>s.trim())
      .map((s,i)=> {
        // simple normalizations; edit as needed
        const full = s.startsWith('0092-21') ? s : ('0092-21-' + s);
        const digits = '+92' + full.replace(/^0092-21-?/,'21-').replace(/[^\d]/g,'');
        return `<span class="phone-chip"><a href="tel:${digits}">${s}</a></span>`;
      }).join(', ');
  })();
</script>

<!-- SEO: Organization structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Aziz Ismail & Co.",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/images/logo/footer-logo2.png') }}",
  "email": "info@azizismail.com",
  "telephone": "+92 21 2772944",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "305, Frere Business Centre, Frere Road, Adjacent Akhbar Market, Saddar",
    "addressLocality": "Karachi",
    "postalCode": "75350",
    "addressCountry": "PK"
  },
  "areaServed": "Pakistan",
  "founder": "Mr. Abdul Aziz Ismail"
}
</script>

<script>
(function(){
  const search   = document.getElementById('clientSearch');
  const chips    = document.querySelectorAll('.cl-chip');
  const cards    = Array.from(document.querySelectorAll('.cl-card'));
  const totalEl  = document.getElementById('clTotal');
  let activeTag  = 'all';

  function applyFilters(){
    const q = (search.value || '').trim().toLowerCase();
    let visible = 0;
    cards.forEach(card=>{
      const name = card.querySelector('.cl-name').textContent.toLowerCase();
      const tags = (card.dataset.tags || '').toLowerCase();
      const matchText = !q || name.includes(q);
      const matchTag  = activeTag === 'all' || tags.includes(activeTag);
      const show = matchText && matchTag;
      card.style.display = show ? '' : 'none';
      if(show) visible++;
    });
    totalEl.textContent = visible;
  }

  chips.forEach(btn=>{
    btn.addEventListener('click',()=>{
      chips.forEach(b=>b.classList.remove('is-active'));
      btn.classList.add('is-active');
      activeTag = btn.dataset.filter;
      applyFilters();
    });
  });

  search.addEventListener('input', applyFilters);
  // initial count
  applyFilters();
})();
</script>
<script>
(() => {
  const wrapper = document.getElementById('floatingContact');
  const panel   = document.getElementById('contactFloatingForm');
  const overlay = document.getElementById('contactOverlay');
  const openBtn = document.getElementById('openContactBtn');
  const closeBtn= document.getElementById('closeContactBtn');
  const form    = document.getElementById('floatingContactForm');
  const submit  = document.getElementById('contactSubmitBtn');
  const note    = document.getElementById('contactFormNote');

  let lastFocus = null;

  function isOpen(){ return panel.classList.contains('show'); }

  function openForm() {
    lastFocus = document.activeElement;
    panel.classList.add('show');
    overlay.hidden = false;
    overlay.classList.add('show');
    panel.setAttribute('aria-hidden','false');
    openBtn.setAttribute('aria-expanded','true');
    // focus first input
    const first = panel.querySelector('input, textarea, button');
    first && first.focus();
    trapFocus(true);
  }

  function closeForm() {
    panel.classList.remove('show');
    overlay.classList.remove('show');
    panel.setAttribute('aria-hidden','true');
    openBtn.setAttribute('aria-expanded','false');
    setTimeout(() => { overlay.hidden = true; }, 180);
    trapFocus(false);
    lastFocus && lastFocus.focus();
  }

  function toggleForm(){ isOpen() ? closeForm() : openForm(); }

  // Events
  openBtn.addEventListener('click', toggleForm);
  closeBtn.addEventListener('click', closeForm);
  overlay.addEventListener('click', closeForm);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && isOpen()) closeForm();
  });

  // Focus trap
  let focusables = [];
  function trapFocus(enable){
    if(!enable){ document.removeEventListener('keydown', handleTrap); return; }
    focusables = panel.querySelectorAll('a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])');
    document.addEventListener('keydown', handleTrap);
  }
  function handleTrap(e){
    if(e.key !== 'Tab' || !isOpen()) return;
    const first = focusables[0], last = focusables[focusables.length - 1];
    if(e.shiftKey && document.activeElement === first){ e.preventDefault(); last.focus(); }
    else if(!e.shiftKey && document.activeElement === last){ e.preventDefault(); first.focus(); }
  }

  // Client-side validation (basic)
  function validate() {
    let ok = true;
    form.querySelectorAll('[required]').forEach(el => {
      if(!el.value.trim()){
        ok = false;
        el.classList.add('invalid');
        el.addEventListener('input', () => el.classList.remove('invalid'), { once: true });
      }
    });
    // simple email check
    const email = form.querySelector('input[type="email"]');
    if(email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())){
      ok = false;
      email.classList.add('invalid');
    }
    return ok;
  }

  // AJAX submit (progressive enhancement). Falls back if fetch fails.
  form.addEventListener('submit', async (e) => {
    if (!window.fetch || !window.FormData) return; // fallback to normal POST
    e.preventDefault();

    note.textContent = '';
    if(!validate()){
      note.textContent = 'Please fill required fields correctly.';
      panel.classList.remove('shake'); // re-trigger animation
      void panel.offsetWidth;
      panel.classList.add('shake');
      return;
    }

    // loading state
    submit.disabled = true;
    wrapper.classList.add('loading');

    try {
      const fd = new FormData(form);
      // Laravel CSRF token from hidden _token
      const csrf = form.querySelector('input[name="_token"]')?.value || '';

      const res = await fetch(form.action, {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': csrf },
        body: fd
      });

      if(!res.ok) throw new Error('Network error');

      // Attempt to parse JSON; if not JSON, still show success
      let data = null;
      try { data = await res.json(); } catch(_) {}

      note.textContent = (data && data.message) ? data.message : 'Thank you! Your message has been sent.';
      note.classList.add('ok');

      form.reset();
      setTimeout(closeForm, 700);
    } catch (err) {
      note.textContent = 'Sorry, failed to send. Please try again.';
      note.classList.remove('ok');
    } finally {
      submit.disabled = false;
      wrapper.classList.remove('loading');
    }
  });
})();
</script>

{{-- contact form --}}
{{-- <script>
$(function(){
  var $panel = $('#contactFloatingForm');
  var $overlay = $('#contactOverlay');
  var $open = $('#openContactBtn');
  var $close = $('#closeContactBtn');
  var $form = $('#floatingContactForm');
  var $note = $('#contactFormNote');
  var $btn = $('#contactSubmitBtn');

  function openPanel(){
    $panel.addClass('show').attr('aria-hidden','false');
    $overlay.prop('hidden', false).addClass('show');
    $open.attr('aria-expanded','true');
    $panel.find('input,textarea,button').first().focus();
  }
  function closePanel(){
    $panel.removeClass('show').attr('aria-hidden','true');
    $overlay.removeClass('show');
    setTimeout(function(){ $overlay.prop('hidden', true); }, 180);
    $open.attr('aria-expanded','false');
  }

  $open.on('click', openPanel);
  $close.on('click', closePanel);
  $overlay.on('click', closePanel);
  $(document).on('keydown', function(e){ if(e.key === 'Escape') closePanel(); });

  function setLoading(on){
    $btn.prop('disabled', on);
    $btn.find('.btn-spinner').toggle(on);
    $btn.find('.btn-text').css('opacity', on ? .5 : 1);
  }

  $form.on('submit', function(e){
    e.preventDefault();
    $note.text('').removeClass('ok');

    var formData = new FormData(this); // @csrf included automatically
    setLoading(true);

    $.ajax({
      url: $form.attr('action'),
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(res){
        var msg = (res && res.message) ? res.message : 'Thank you for message submitting.';
        $note.text(msg).css('color', '#198754').addClass('ok');
        $form[0].reset();
        setTimeout(closePanel, 900);
      },
      error: function(xhr){
        if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
          var errors = xhr.responseJSON.errors;
          // show first error line
          var first = Object.values(errors)[0][0] || 'Please check the form.';
          $note.text(first).css('color', '#b10937');
        } else {
          $note.text('Sorry, failed to send. Please try again.').css('color', '#b10937');
        }
      },
      complete: function(){
        setLoading(false);
      }
    });
  });
});
</script> --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
  const panel   = document.getElementById('contactFloatingForm');
  const overlay = document.getElementById('contactOverlay');
  const openBtn = document.getElementById('openContactBtn');
  const closeBtn= document.getElementById('closeContactBtn');

  if (!panel || !overlay || !openBtn) return;

  function openForm(){
    panel.classList.add('show');
    overlay.hidden = false;
    overlay.classList.add('show');
    panel.setAttribute('aria-hidden','false');
    openBtn.setAttribute('aria-expanded','true');
    (panel.querySelector('input,textarea,button')||{}).focus?.();
  }
  function closeForm(){
    panel.classList.remove('show');
    overlay.classList.remove('show');
    panel.setAttribute('aria-hidden','true');
    openBtn.setAttribute('aria-expanded','false');
    setTimeout(()=>{ overlay.hidden = true; },180);
  }

  // one place event delegation (no duplicate listeners)
  document.addEventListener('click', function(e){
    if (e.target.closest('#openContactBtn'))  { e.preventDefault(); openForm(); }
    if (e.target.closest('#closeContactBtn') || e.target.closest('#contactOverlay')) {
      e.preventDefault(); closeForm();
    }
  });

  // keep on top
  openBtn.style.zIndex = '10002';
  panel.style.zIndex   = '10001';
  overlay.style.zIndex = '10000';
});
</script>

<script>
(() => {
  const wrapper = document.getElementById('floatingContact');
  const panel   = document.getElementById('contactFloatingForm');
  const overlay = document.getElementById('contactOverlay');
  const openBtn = document.getElementById('openContactBtn');
  const closeBtn= document.getElementById('closeContactBtn');
  const form    = document.getElementById('floatingContactForm');
  const submit  = document.getElementById('contactSubmitBtn');
  const note    = document.getElementById('contactFormNote');

  let lastFocus = null;

  function isOpen(){ return panel.classList.contains('show'); }
  function openForm(){ lastFocus=document.activeElement; panel.classList.add('show'); overlay.hidden=false; overlay.classList.add('show'); panel.setAttribute('aria-hidden','false'); openBtn.setAttribute('aria-expanded','true'); (panel.querySelector('input, textarea, button')||{}).focus?.(); }
  function closeForm(){ panel.classList.remove('show'); overlay.classList.remove('show'); panel.setAttribute('aria-hidden','true'); openBtn.setAttribute('aria-expanded','false'); setTimeout(()=>{overlay.hidden=true;},180); lastFocus&&lastFocus.focus(); }

  openBtn.addEventListener('click', ()=> isOpen()? closeForm(): openForm());
  closeBtn.addEventListener('click', closeForm);
  overlay.addEventListener('click', closeForm);
  document.addEventListener('keydown', e=>{ if(e.key==='Escape'&&isOpen()) closeForm(); });

  // ---------- Inline errors helpers ----------
  function clearErrors() {
    form.querySelectorAll('.error-msg').forEach(e=>e.remove());
    form.querySelectorAll('.invalid').forEach(el=>{
      el.classList.remove('invalid');
      el.removeAttribute('aria-invalid');
    });
  }
  function placeError(field, message) {
    const el = form.querySelector(`[name="${field}"]`);
    if(!el) return;
    el.classList.add('invalid');
    el.setAttribute('aria-invalid','true');

    // if next sibling already error-msg, reuse. else create.
    let hint = el.nextElementSibling;
    if(!hint || !hint.classList.contains('error-msg')) {
      hint = document.createElement('small');
      hint.className = 'error-msg';
      el.parentNode.insertBefore(hint, el.nextSibling);
    }
    hint.textContent = message;
  }
  // remove error of a field while typing
  form.addEventListener('input', (e)=>{
    const el = e.target;
    if(el.matches('input, textarea')) {
      el.classList.remove('invalid');
      el.removeAttribute('aria-invalid');
      const nxt = el.nextElementSibling;
      if(nxt && nxt.classList.contains('error-msg')) nxt.remove();
    }
  });

  // ---------- Client validation (optional quick check) ----------
//   function basicValidate(){
//     let ok = true;
//     clearErrors();
//     const req = ['name','email','message'];
//     req.forEach(n=>{
//       const el = form.querySelector(`[name="${n}"]`);
//       if(el && !el.value.trim()){
//         ok=false; placeError(n, 'This field is required.');
//       }
//     });
//     const email = form.querySelector('[name="email"]');
//     if(email && email.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())){
//       ok=false; placeError('email','Please enter a valid email.');
//     }
//     return ok;
//   }
function basicValidate(){
  let ok = true;
  clearErrors();

  // ✅ ab phone bhi required
  ['name','email','country','message','phone'].forEach(n=>{
    const el = form.querySelector(`[name="${n}"]`);
    if(el && !el.value.trim()){
      ok = false; placeError(n, 'This field is required.');
    }
  });

  // email format
  const email = form.querySelector('[name="email"]');
  if(email && email.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())){
    ok = false; placeError('email','Please enter a valid email.');
  }

  // phone format (jab value ho)
  const phone = form.querySelector('[name="phone"]');
  if (phone && phone.value.trim() && !/^[0-9+\-\s()]{7,20}$/.test(phone.value.trim())) {
    ok = false; placeError('phone','Please enter a valid phone number.');
  }

  return ok;
}

  // ---------- AJAX submit (Fetch) ----------
  form.addEventListener('submit', async (e) => {
    if (!window.fetch || !window.FormData) return; // allow normal POST in very old browsers
    e.preventDefault();

    note.textContent = '';
    note.classList.remove('ok');
    clearErrors();

    if(!basicValidate()){
      panel.classList.remove('shake'); void panel.offsetWidth; panel.classList.add('shake');
      return;
    }

    submit.disabled = true;
    wrapper.classList.add('loading');

    try {
      const fd = new FormData(form);
      const csrf = form.querySelector('input[name="_token"]')?.value || '';

      const res = await fetch(form.action, {
        method: 'POST',
        headers: { 'X-Requested-With':'XMLHttpRequest', 'X-CSRF-TOKEN': csrf },
        body: fd
      });

      if (res.status === 422) {
        const data = await res.json();
        if (data && data.errors) {
          Object.entries(data.errors).forEach(([field, msgs])=>{
            placeError(field, Array.isArray(msgs)? msgs[0] : String(msgs));
          });
          note.textContent = 'Please correct the highlighted fields.';
          return;
        }
      }

      if(!res.ok) throw new Error('Network error');

      // success
      let data=null; try{ data=await res.json(); }catch(_){}
      note.textContent = (data && data.message) ? data.message : 'Thank you! Your message has been sent.';
      note.classList.add('ok');
      form.reset();
      setTimeout(closeForm, 700);
    } catch (err) {
      note.textContent = 'Sorry, failed to send. Please try again.';
    } finally {
      submit.disabled = false;
      wrapper.classList.remove('loading');
    }
  });



})();


</script>

<script>
    (function($){
  $(function(){
    $('.news_slider_ai').owlCarousel({
      loop:true,
      margin:20,
      nav:true,
      dots:false,
      autoplay:true,
      autoplayTimeout:5200,
      autoplayHoverPause:true,
      smartSpeed:650,
      navText:[
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      responsive:{
        0:{ items:1 },
        576:{ items:1 },
        768:{ items:2 },
        992:{ items:3 },
        1200:{ items:3 }
      }
    });
  });
})(jQuery);
</script>
<script>
$(function(){
  var $drawer  = $('#nav-mobile');
  var $overlay = $('#nav-mobile-overlay');

  // open/close => overlay + lock scroll
  $drawer.on('shown.bs.collapse', function(){
    $('body').addClass('no-scroll'); $overlay.addClass('show');
  });
  $drawer.on('hidden.bs.collapse', function(){
    $('body').removeClass('no-scroll'); $overlay.removeClass('show');
  });

  // overlay tap closes
  $overlay.on('click', function(){ $drawer.collapse('hide'); });

  // Mobile "Services" submenu toggle
  $(document).on('click', '.only-mobile .navbar-nav > li.dropdown > a', function(e){
    var $menu = $(this).siblings('.sub-menu');
    if ($menu.length){ e.preventDefault(); $menu.slideToggle(180); }
  });
});
</script>
<script>
$(function(){
  var $drawer  = $('#nav-mobile');
  var $overlay = $('#nav-mobile-overlay');

  $drawer.on('shown.bs.collapse', function(){
    $('body').addClass('no-scroll'); $overlay.addClass('show');
  });
  $drawer.on('hidden.bs.collapse', function(){
    $('body').removeClass('no-scroll'); $overlay.removeClass('show');
  });

  // overlay / close button se band
  $overlay.on('click', function(){ $drawer.collapse('hide'); });
  $(document).on('click', '.drawer-close', function(){ $drawer.collapse('hide'); });

  // drawer ke andar Services submenu toggle (anchor pe click)
  $(document).on('click', '.only-mobile .navbar-nav > li.dropdown > a', function(e){
    var $m = $(this).siblings('.sub-menu');
    if($m.length){ e.preventDefault(); $m.slideToggle(180); }
  });

  // normal link click => drawer close
  $(document).on('click', '.only-mobile .navbar-nav > li:not(.dropdown) > a', function(){
    $drawer.collapse('hide');
  });
});


</script>

<script>
$(function(){
  var $drawer  = $('#nav-mobile');
  var $overlay = $('#nav-mobile-overlay');

  $drawer.on('shown.bs.collapse', function(){
    $('body').addClass('no-scroll'); $overlay.addClass('show');
  });
  $drawer.on('hidden.bs.collapse', function(){
    $('body').removeClass('no-scroll'); $overlay.removeClass('show');
  });

  $overlay.on('click', function(){ $drawer.collapse('hide'); });
  $(document).on('click', '.drawer-close', function(){ $drawer.collapse('hide'); });

  // submenu toggle + arrow rotation
  $(document).on('click', '.only-mobile .navbar-nav > li.dropdown > a', function(e){
    var $li = $(this).parent();
    var $m  = $(this).siblings('.sub-menu');
    if($m.length){ e.preventDefault(); $m.slideToggle(180); $li.toggleClass('open'); }
  });

  // normal link click => close
  $(document).on('click', '.only-mobile .navbar-nav > li:not(.dropdown) > a', function(){
    $drawer.collapse('hide');
  });
});

</script>

{{-- HAMMER --}}
<script>
(function () {
  const wrap = document.querySelector('#why-us .azc-hammer-wrap');
  if (!wrap) return;

  function hitOnce() {
    // restart trick: remove -> reflow -> add
    wrap.classList.remove('hit-now');
    // force reflow so animation restarts every time
    void wrap.offsetWidth;
    wrap.classList.add('hit-now');
    // cleanup after hit so next trigger works
    setTimeout(()=>wrap.classList.remove('hit-now'), 1100);
  }

  // Expose manual trigger (console ya click se):
  window.azcHammerHit = hitOnce;

  // Repeat while visible
  let timer = null;
  function startLoop(){ if (timer) return; hitOnce(); timer = setInterval(hitOnce, 5000); }
  function stopLoop(){ if (!timer) return; clearInterval(timer); timer = null; }

  // Run without reload requirement: if already visible OR jab viewport me aaye
  const inViewNow = () => {
    const r = wrap.getBoundingClientRect();
    return r.top < innerHeight * 0.8 && r.bottom > innerHeight * 0.2;
  };

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => e.isIntersecting ? startLoop() : stopLoop());
    }, { threshold: 0.25 });
    io.observe(wrap);
  } else {
    // Fallback
    startLoop();
  }

  // agar abhi screen par hai to turant chalao (no reload needed)
  if (inViewNow()) startLoop();

  // Optional: debug click to replay instantly on the card/panel
  // document.querySelector('.azc-intro-card')?.addEventListener('click', hitOnce);
})();
</script>
 <script>
        // Counter animation
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.stat-number');
            const speed = 2000; // The lower the slower

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;

                    // Lower value to make counting faster
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                // Start counting when element is in viewport
                const observer = new IntersectionObserver(entries => {
                    if (entries[0].isIntersecting) {
                        updateCount();
                    }
                }, { threshold: 0.5 });

                observer.observe(counter);
            });
        });




    </script>

{{-- script --}}
<script>
        window.addEventListener("load", function () {
      const loader = document.getElementById("siteLoader");

      setTimeout(() => {
        loader.style.transition = "opacity 0.2s ease, visibility 0.2s ease";
        loader.style.opacity = "0";
        loader.style.visibility = "hidden";

        setTimeout(() => {
          loader.remove();
        }, 800);
      }, 900);
    });

</script>
</html>

