@extends("Layout.layout")
@section("Content")
 <!-- Banner ___________________________________ -->

		{{-- <section class="banner">
			<div class="rev_slider_wrapper">
				<div id="main_slider" class="rev_slider"  data-version="5.0">
					<ul>

						<li data-index='rs-355' class="slide_show slide_1" data-transition='boxslide' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Boxes' data-description=''> <!-- Slide_show -->
							<img src="{{asset('assets/images/home/slide-1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" >

							<div class="main_heading tp-caption tp-resizeme"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-169','-169','-139','-80']"
				        		data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
								data-transform_out="y:[100%];s:1000;s:1000;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="2000"
								data-splitin="none"
								data-splitout="none">
								<h1>We works with focus<br>and understanding.</h1>
							</div>
							<div class="tp-caption tp-resizeme"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-16','-16','-06','20']"
								data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;"
								data-transform_out="y:[100%];s:1000;s:1000;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="3000"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.05">
								<p class="p_color">We develop innovative financing solutions to improve <br>the lives of people in need.</p>
							</div>
							<div class="tp-caption"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['87','87','97','107']"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(0, 154, 238, 1.00);bc:rgba(0, 154, 238, 1.00);cursor:pointer;"
								data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
								data-start="4000"
								data-splitin="none"
								data-splitout="none">
								<a href="{{ asset("/contact") }}" class="contact_us_button tran3s s_color_bg theme_button">Contact us</a>
							</div>
							<div class="tp-caption"
								data-x="['left','left','left','left']" data-hoffset="['180','180','210','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['87','87','97','200']"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(114, 168, 0, 1.00);cursor:pointer;"
								data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
								data-start="4000"
								data-splitin="none"
								data-splitout="none">
								<a href="{{ asset("/services") }}" class="service_button tran3s p_color_bg theme_button">Our Services</a>
							</div>
						</li> <!-- /Slide_show -->

						<li data-index='rs-356' class="slide_show slide_2" data-transition='slotslide-vertical' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Slots vertical' data-description=''> <!-- Slide2 -->

							<img src="{{asset('assets/images/home/slide-2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

							<div class="tp-caption tp-resizeme"
								data-x="['center','center','center','center']" data-hoffset="['268','268','100','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-169','-169','-129','-50']"
								data-transform_idle="o:1;"
								data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
								data-start="2000"
								data-splitin="none"
								data-splitout="none">
								<h1>Providing leading<br>Business Solutions</h1>
							</div>
							<div class="main_heading tp-caption tp-resizeme"
								data-x="['center','center','center','center']" data-hoffset="['265','265','97','28']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-16','-16','24','48']"
								data-transform_idle="o:1;"
								data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
								data-start="3000"
								data-splitin="none"
								data-splitout="none">
								<p class="p_color">Our company offers a full range of consulting<br>services in all the countries</p>
							</div>
							<div class="tp-caption"
								data-x="['center','center','center','center']" data-hoffset="['90','90','-78',-88']"
								data-y="['middle','middle','middle','middle']" data-voffset="['87','87','130','140']"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
								data-transform_in="x:[-100%];z:0;rX:25deg;rY:-50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
								data-start="4000"
								data-splitin="none"
								data-splitout="none"
								data-actions=''
								data-responsive_offset="on"  >
								<a href="contact.html" class="contact_us_button tran3s s_color_bg theme_button">Contact us</a>
							</div>
							<div class="tp-caption"
								data-x="['center','center','center','center']" data-hoffset="['270','270','102',-88']"
								data-y="['middle','middle','middle','middle']" data-voffset="['87','87','130','235']"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 133, 214, 1.00);cursor:pointer;"
								data-transform_in="x:[100%];z:0;rX:25deg;rY:50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
								data-start="4000"
								data-splitin="none"
								data-splitout="none"
								data-actions=''
								data-responsive_offset="on">
								<a href="service.html" class="service_button tran3s p_color_bg theme_button">Our Services</a>
							</div>
						</li> <!-- /Slide2 -->

						<li class="slide_show slide_3" data-index='rs-381' data-transition='3dcurtain-vertical' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='3D Curtain Vertical' data-description=''> <!-- Slide_3 -->

							<img src="{{asset('assets/images/home/slide-3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

							<div class="tp-caption tp-resizeme"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-169','-169','-139','-80']"
								data-transform_idle="o:1;"
								data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
								data-start="2000"
								data-splitin="none"
								data-splitout="none">
								<h1>Business Taken<br>to the New Heights</h1>
							</div>
							<div class="tp-caption tp-resizeme"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-16','-16','-06','20']"
								data-transform_idle="o:1;"
								data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
								data-start="3000"
								data-splitin="none"
								data-splitout="none" >
								<p class="p_color">We’re here to offer the best support, to help you<br>troubleshoot any business issues.</p>
							</div>
							<div class="tp-caption"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['87','87','97','107']"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
								data-transform_in="x:[-100%];z:0;rX:25deg;rY:-50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
								data-start="4000"
								data-splitin="none"
								data-splitout="none" >
								<a href="contact.html" class="contact_us_button tran3s s_color_bg theme_button">Contact us</a>
							</div>
							<div class="tp-caption"
								data-x="['left','left','left','left']" data-hoffset="['180','180','210','40']"
								data-y="['middle','middle','middle','middle']" data-voffset="['87','87','97','200']"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 133, 214, 1.00);cursor:pointer;"
								data-transform_in="x:[100%];z:0;rX:25deg;rY:50deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
								data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
								data-start="4000"
								data-splitin="none"
								data-splitout="none" >
								<a href="service.html" class="service_button tran3s p_color_bg theme_button">Our Services</a>
							</div>
						</li> <!-- /Slide_3 -->

					</ul>
				</div> <!-- /main_slider -->
			</div> <!-- /rev_slider_wrapper -->
		</section> --}}
{{-- @php
    $slides = $slides ?? [];
    $b1 = $slides[1] ?? ($slides[0] ?? null);
    $b2 = $slides[2] ?? ($slides[1] ?? null);
    $b3 = $slides[3] ?? ($slides[2] ?? null);
@endphp

<section class="banner">
  <div class="rev_slider_wrapper">
    <div id="main_slider" class="rev_slider" data-version="5.0">
      <ul>

        @if($b1)
        <li data-index='rs-355' class="slide_show slide_1" data-transition='boxslide' data-slotamount='default'
            data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0'
            data-saveperformance='off' data-title='Slide 1' data-description=''>
          <img src="{{ asset($b1->image_path) }}" alt="" data-bgposition="center center"
               data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

          <div class="tp-caption tp-resizeme banner__title"
               data-x="['left','left','left','left']"  data-hoffset="['40','40','28','18']"
               data-y="['middle','middle','middle','middle']"
               data-voffset="['-135','-135','-110','-88']"
               data-fontsize="['44','40','30','22']"
               data-lineheight="['52','46','36','28']"
               data-width="['700','600','520','300']"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="opacity:0;s:1200;e:Power3.easeOut;"
               data-transform_out="y:[100%];s:800;"
               data-start="1200">
            <h3>{!! strip_tags($b1->title, '<br><b><strong><i><em>') !!}</h3>
          </div>

          <div class="tp-caption tp-resizeme banner__text"
               data-x="['left','left','left','left']"  data-hoffset="['40','40','28','18']"
               data-y="['middle','middle','middle','middle']"
               data-voffset="['-86','-86','-70','-56']"
               data-fontsize="['20','18','16','14']"
               data-lineheight="['32','30','26','22']"
               data-width="['700','600','520','300']"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="opacity:0;s:1200;e:Power3.easeOut;"
               data-transform_out="y:[100%];s:800;"
               data-start="1600">
            <p class="p_color">{!! nl2br(e($b1->paragraph)) !!}</p>
          </div>
        </li>
        @endif

        @if($b2)
        <li data-index='rs-356' class="slide_show slide_2" data-transition='slotslide-vertical' data-slotamount='default'
            data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0'
            data-saveperformance='off' data-title='Slide 2' data-description=''>
          <img src="{{ asset($b2->image_path) }}" alt="" data-bgposition="center center"
               data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

          <div class="tp-caption tp-resizeme banner__title"
               data-x="['left','left','left','left']"  data-hoffset="['40','40','28','18']"
               data-y="['middle','middle','middle','middle']"
               data-voffset="['-135','-135','-110','-88']"
               data-fontsize="['44','40','30','22']"
               data-lineheight="['52','46','36','28']"
               data-width="['700','600','520','300']"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="opacity:0;s:1200;e:Power3.easeOut;"
               data-transform_out="y:[100%];s:800;"
               data-start="1200">
            <h3>{!! strip_tags($b2->title, '<br><b><strong><i><em>') !!}</h3>
          </div>

          <div class="tp-caption tp-resizeme banner__text"
               data-x="['left','left','left','left']"  data-hoffset="['40','40','28','18']"
               data-y="['middle','middle','middle','middle']"
               data-voffset="['-86','-86','-70','-56']"
               data-fontsize="['20','18','16','14']"
               data-lineheight="['32','30','26','22']"
               data-width="['700','600','520','300']"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="opacity:0;s:1200;e:Power3.easeOut;"
               data-transform_out="y:[100%];s:800;"
               data-start="1600">
            <p class="p_color">{!! nl2br(e($b2->paragraph)) !!}</p>
          </div>
        </li>
        @endif

        @if($b3)
        <li class="slide_show slide_3" data-index='rs-381' data-transition='3dcurtain-vertical' data-slotamount='default'
            data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0'
            data-saveperformance='off' data-title='Slide 3' data-description=''>
          <img src="{{ asset($b3->image_path) }}" alt="" data-bgposition="center center"
               data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

          <div class="tp-caption tp-resizeme banner__title"
               data-x="['left','left','left','left']"  data-hoffset="['40','40','28','18']"
               data-y="['middle','middle','middle','middle']"
               data-voffset="['-135','-135','-110','-88']"
               data-fontsize="['44','40','30','22']"
               data-lineheight="['52','46','36','28']"
               data-width="['700','600','520','300']"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="opacity:0;s:1200;e:Power3.easeOut;"
               data-transform_out="y:[100%];s:800;"
               data-start="1200">
            <h3>{!! strip_tags($b3->title, '<br><b><strong><i><em>') !!}</h3>
          </div>

          <div class="tp-caption tp-resizeme banner__text"
               data-x="['left','left','left','left']"  data-hoffset="['40','40','28','18']"
               data-y="['middle','middle','middle','middle']"
               data-voffset="['-86','-86','-70','-56']"
               data-fontsize="['20','18','16','14']"
               data-lineheight="['32','30','26','22']"
               data-width="['700','600','520','300']"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="opacity:0;s:1200;e:Power3.easeOut;"
               data-transform_out="y:[100%];s:800;"
               data-start="1600">
            <p class="p_color">{!! nl2br(e($b3->paragraph)) !!}</p>
          </div>
        </li>
        @endif

      </ul>
    </div>
  </div>
</section> --}}

@php
  // Use whatever you already pass as $slides
  $slides = $slides ?? [];
  $slidesArr = collect($slides)->values()->take(5); // 0-based, safe
@endphp

{{-- ===== Bootstrap Banner (Desktop) ===== --}}
<section class="hero hidden-xs only-desktop">
  <div id="heroDesktop" class="carousel slide" data-ride="carousel" data-interval="6500">
    @if($slidesArr->count() > 1)
      <ol class="carousel-indicators">
        @foreach($slidesArr as $i => $s)
          <li data-target="#heroDesktop" data-slide-to="{{ $i }}" class="{{ $i===0 ? 'active' : '' }}"></li>
        @endforeach
      </ol>
    @endif

    <div class="carousel-inner" role="listbox">
      @foreach($slidesArr as $i => $s)
        <div class="item hero-item {{ $i===0 ? 'active' : '' }}"
             style="background-image:url('{{ asset($s->image_path) }}')">
          <div class="hero-overlay"></div>
          <div class="container">
            <div class="hero-copy">
              @if(!empty($s->title))    <h2 class="hero-title">{!! strip_tags($s->title,'<br><b><strong><i><em>') !!}</h2>@endif
              @if(!empty($s->paragraph))<p  class="hero-text">{!! nl2br(e($s->paragraph)) !!}</p>@endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @if($slidesArr->count() > 1)
  <a class="left carousel-control hero-control"
     href="#heroDesktop" role="button" data-slide="prev" aria-label="Previous">
    <i class="fas fa-chevron-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control hero-control"
     href="#heroDesktop" role="button" data-slide="next" aria-label="Next">
    <i class="fas fa-chevron-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
@endif

  </div>
</section>

{{-- ===== Bootstrap Banner (Mobile) ===== --}}
<section class="hero visible-xs-block only-mobile">
  <div id="heroMobile" class="carousel slide" data-ride="carousel" data-interval="6500">
    @if($slidesArr->count() > 1)
      <ol class="carousel-indicators">
        @foreach($slidesArr as $i => $s)
          <li data-target="#heroMobile" data-slide-to="{{ $i }}" class="{{ $i===0 ? 'active' : '' }}"></li>
        @endforeach
      </ol>
    @endif

    <div class="carousel-inner" role="listbox">
      @foreach($slidesArr as $i => $s)
        @php $mobileImg = asset($s->image_mobile ?? $s->image_path); @endphp
        <div class="item hero-item hero-item--mobile {{ $i===0 ? 'active' : '' }}"
             style="background-image:url('{{ $mobileImg }}')">
          <div class="hero-overlay"></div>
          <div class="container">
            <div class="hero-copy">
              @if(!empty($s->title))    <h2 class="hero-title">{!! strip_tags($s->title,'<br><b><strong><i><em>') !!}</h2>@endif
              @if(!empty($s->paragraph))<p  class="hero-text">{!! nl2br(e($s->paragraph)) !!}</p>@endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
 @if($slidesArr->count() > 1)
  <a class="left carousel-control hero-control"
     href="#heroMobile" role="button" data-slide="prev" aria-label="Previous">
    <i class="fas fa-chevron-left" aria-hidden="true"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control hero-control"
     href="#heroMobile" role="button" data-slide="next" aria-label="Next">
    <i class="fas fa-chevron-right" aria-hidden="true"></i>
    <span class="sr-only">Next</span>
  </a>
@endif

  </div>
</section>

{{-- …rest of your page content … --}}



		{{-- <div class="request_quote">
			<div class="container">
				<p class="float_left">Protect and enforce your IP worldwide with Aziz & Ismail.
</p>
				<a href="{{ url("/contact") }}" class="theme_button s_color_bg float_right tran3s">Contact Now</a>
				<div class="clear_fix"></div>
			</div>
		</div> --}}



		<!-- Company Excellence _________________________________ -->

		{{-- <div class="company_excellance">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
						<div class="hexagon tran3s">
							<span class="ficon flaticon-staticsscreen"></span>
						</div> <!-- End of .hexagon -->

						<div class="text">
							<h5>Why WeConsulting?</h5>
							<span class="s_color_bg tran3s"></span>
							<p class="tran3s">Our goal is to optimise your business relationships by tailoring our services to your individual requirements.</p>
						</div> <!-- End of .text -->
					</div> <!-- End of .single_excellance -->

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
						<div class="hexagon tran3s">
							<span class="ficon flaticon-statics"></span>
						</div> <!-- End of .hexagon -->

						<div class="text">
							<h5>Pay for Success</h5>
							<span class="s_color_bg tran3s"></span>
							<p class="tran3s">We are focused on developing a strong Pay for Success field through market bonds, traders, mutual funds, research and analysis.</p>
						</div> <!-- End of .text -->
					</div> <!-- End of .single_excellance -->

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
						<div class="hexagon tran3s">
							<span class="ficon flaticon-wheel"></span>
						</div> <!-- End of .hexagon -->

						<div class="text">
							<h5>Tailor-Made Solutions</h5>
							<span class="s_color_bg tran3s"></span>
							<p class="tran3s">Holistic set-up, providing you sucess with optimal solutions from Wealth Management and Investment Banking.</p>
						</div> <!-- End of .text -->
					</div> <!-- End of .single_excellance -->

				</div> <!-- End of .row -->
			</div> <!-- End of .container -->
		</div> --}}
{{-- <div class="company_excellance">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
        <div class="hexagon tran3s">
          <span class="ficon flaticon-staticsscreen"></span>
        </div>
        <div class="text">
          <h5>Income Tax Advisory</h5>
          <span class="s_color_bg tran3s"></span>
          <p class="tran3s">NTN/FBR registrations • Returns &amp; statements • Withholding compliance • Tax planning • Notices &amp; appeals.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
        <div class="hexagon tran3s">
          <span class="ficon flaticon-statics"></span>
        </div>
        <div class="text">
          <h5>Sales Tax (FBR &amp; SRB)</h5>
          <span class="s_color_bg tran3s"></span>
          <p class="tran3s">Registration &amp; e-invoicing • Monthly filing • Audits/assessments • Refunds • Input/output reconciliations.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
        <div class="hexagon tran3s">
          <span class="ficon flaticon-wheel"></span>
        </div>
        <div class="text">
          <h5>Legal &amp; Compliance Support</h5>
          <span class="s_color_bg tran3s"></span>
          <p class="tran3s">Business setup &amp; SECP • Bookkeeping &amp; payroll • Corporate &amp; tax advisory • Representation before authorities.</p>
        </div>
      </div>

    </div>
  </div>
</div> --}}
<div class="company_excellance" id="our-services">
  <div class="container">


    <header class="excellence-intro ex-has-deco">
  <!-- LEFT deco (already OK) -->
  <svg class="ex-deco ex-left" viewBox="0 0 512 512" aria-hidden="true">
    <g fill="currentColor"><g>
      <path d="M228.449,387.406l0.796-6.329h-64.608v23.755h187.249v-23.755h-64.608l0.752,5.978c0.017,0.072,0.016,0.151,0.025,0.226l0.004,0.024c0.002,0.004,0,0.01,0.002,0.014c0.025,0.164,0.057,0.325,0.057,0.496c0,0.817-0.309,1.555-0.803,2.13v0.001c-0.156,0.18-0.326,0.343-0.517,0.484c-0.548,0.41-1.22,0.662-1.957,0.662c-0.006,0-0.012,0-0.019,0h-53.116c-0.237,0-0.472-0.026-0.7-0.076c-0.083-0.019-0.159-0.055-0.24-0.078c-0.142-0.044-0.286-0.081-0.42-0.143c-0.091-0.041-0.171-0.102-0.257-0.15c-0.116-0.066-0.234-0.125-0.342-0.203c-0.086-0.064-0.158-0.146-0.238-0.219c-0.088-0.08-0.183-0.151-0.263-0.241c-0.066-0.078-0.113-0.169-0.171-0.251c-0.072-0.103-0.151-0.2-0.211-0.31c-0.052-0.095-0.084-0.195-0.126-0.294c-0.049-0.116-0.105-0.229-0.141-0.349c-0.03-0.104-0.041-0.21-0.062-0.315c-0.023-0.123-0.053-0.244-0.063-0.369c-0.008-0.109,0.003-0.219,0.006-0.33C228.446,387.621,228.436,387.514,228.449,387.406z"/>
      <polygon points="405.486,411.392 355.166,411.392 161.357,411.392 111.029,411.392 111.029,422.057 405.486,422.057"/>
      <path d="M119.528,352.197c40.676,0,73.967-32.244,75.69-72.528h-26.556H43.838C45.561,319.953,78.853,352.197,119.528,352.197z M63.968,296.487c1.756-0.429,3.527,0.648,3.959,2.403c0.035,0.142,3.689,14.239,18.076,23.031c1.545,0.944,2.033,2.963,1.088,4.509c-0.618,1.012-1.697,1.57-2.802,1.57c-0.583,0-1.173-0.155-1.707-0.482C65.8,317.265,61.72,301.13,61.554,300.448C61.126,298.688,62.208,296.914,63.968,296.487z"/>
      <path d="M234.148,131.306c0,13.31,10.807,24.138,24.09,24.138c13.31,0,24.138-10.828,24.138-24.138c0-13.309-10.828-24.136-24.138-24.136C244.955,107.169,234.148,117.997,234.148,131.306z"/>
      <polygon points="119.511,154.416 74.583,273.109 163.923,273.109"/>
      <path d="M235.541,384.535h19.503v-75.194c0-1.812,1.469-3.279,3.28-3.279c1.813,0,3.28,1.468,3.28,3.279v75.194h19.378l-0.98-6.228c-0.08-0.512-0.029-1.025,0.125-1.507L258.24,203.012l-21.846,173.786c0.155,0.482,0.208,0.997,0.127,1.51L235.541,384.535z"/>
      <path d="M392.472,322.933c40.677,0,73.967-32.201,75.69-72.438h-26.517h-124.85C318.498,290.731,351.793,322.933,392.472,322.933z"/>
      <polygon points="347.564,243.935 436.903,243.935 392.455,125.322"/>
      <path d="M91.611,151.373l118.115-12.638c3.579,23.357,23.807,41.303,48.146,41.303c26.885,0,48.757-21.852,48.757-48.713l85.792-9.134l31.103-3.377c1.801-0.196,3.103-1.814,2.906-3.615s-1.815-3.11-3.614-2.907l-27.777,3.017V77.44c0-1.812-1.467-3.28-3.279-3.28c-1.811,0-3.279,1.469-3.279,3.28v35.611l-83.118,8.849c-3.589-18.254-17.413-32.879-35.236-37.646V62.501c0-6.897-5.651-12.509-12.6-12.509c-6.921,0-12.551,5.611-12.551,12.509v21.743c-20.793,5.551-36.158,24.542-36.158,47.062l-86.743,9.281V105.19c0-1.812-1.468-3.28-3.28-3.28c-1.811,0-3.28,1.468-3.28,3.28v35.543l-24.97,2.672c-1.801,0.192-3.105,1.808-2.912,3.61C88.534,150.124,89.957,151.373,91.611,151.373z"/>
      <path d="M88.889,438.842h244.426c1.812,0,3.279-1.469,3.279-3.28c0-1.811-1.468-3.279-3.279-3.279H88.889c-1.811,0-3.279,1.469-3.279,3.279C85.609,437.374,87.078,438.842,88.889,438.842z"/>
      <path d="M409.239,455.447h-189.24c-1.812,0-3.28,1.469-3.28,3.28s1.468,3.28,3.28,3.28h189.24c1.81,0,3.28-1.469,3.28-3.28S411.049,455.447,409.239,455.447z"/>
      <path d="M452.254,455.447H428.57c-1.811,0-3.279,1.469-3.279,3.28s1.469,3.28,3.279,3.28h23.684c1.811,0,3.279-1.469,3.279-3.28S454.064,455.447,452.254,455.447z"/>
      <path d="M138.802,455.011H49.131c-1.812,0-3.28,1.469-3.28,3.279c0,1.812,1.468,3.28,3.28,3.28h89.671c1.812,0,3.28-1.469,3.28-3.28C142.082,456.479,140.614,455.011,138.802,455.011z"/>
    </g></g>
  </svg>

  <!-- RIGHT deco (FULL paths — paste as-is) -->
  <svg class="ex-deco ex-right" viewBox="0 0 512 512" aria-hidden="true">
    <g fill="currentColor"><g>
      <path d="M228.449,387.406l0.796-6.329h-64.608v23.755h187.249v-23.755h-64.608l0.752,5.978c0.017,0.072,0.016,0.151,0.025,0.226l0.004,0.024c0.002,0.004,0,0.01,0.002,0.014c0.025,0.164,0.057,0.325,0.057,0.496c0,0.817-0.309,1.555-0.803,2.13v0.001c-0.156,0.18-0.326,0.343-0.517,0.484c-0.548,0.41-1.22,0.662-1.957,0.662c-0.006,0-0.012,0-0.019,0h-53.116c-0.237,0-0.472-0.026-0.7-0.076c-0.083-0.019-0.159-0.055-0.24-0.078c-0.142-0.044-0.286-0.081-0.42-0.143c-0.091-0.041-0.171-0.102-0.257-0.15c-0.116-0.066-0.234-0.125-0.342-0.203c-0.086-0.064-0.158-0.146-0.238-0.219c-0.088-0.08-0.183-0.151-0.263-0.241c-0.066-0.078-0.113-0.169-0.171-0.251c-0.072-0.103-0.151-0.2-0.211-0.31c-0.052-0.095-0.084-0.195-0.126-0.294c-0.049-0.116-0.105-0.229-0.141-0.349c-0.03-0.104-0.041-0.21-0.062-0.315c-0.023-0.123-0.053-0.244-0.063-0.369c-0.008-0.109,0.003-0.219,0.006-0.33C228.446,387.621,228.436,387.514,228.449,387.406z"/>
      <polygon points="405.486,411.392 355.166,411.392 161.357,411.392 111.029,411.392 111.029,422.057 405.486,422.057"/>
      <path d="M119.528,352.197c40.676,0,73.967-32.244,75.69-72.528h-26.556H43.838C45.561,319.953,78.853,352.197,119.528,352.197z M63.968,296.487c1.756-0.429,3.527,0.648,3.959,2.403c0.035,0.142,3.689,14.239,18.076,23.031c1.545,0.944,2.033,2.963,1.088,4.509c-0.618,1.012-1.697,1.57-2.802,1.57c-0.583,0-1.173-0.155-1.707-0.482C65.8,317.265,61.72,301.13,61.554,300.448C61.126,298.688,62.208,296.914,63.968,296.487z"/>
      <path d="M234.148,131.306c0,13.31,10.807,24.138,24.09,24.138c13.31,0,24.138-10.828,24.138-24.138c0-13.309-10.828-24.136-24.138-24.136C244.955,107.169,234.148,117.997,234.148,131.306z"/>
      <polygon points="119.511,154.416 74.583,273.109 163.923,273.109"/>
      <path d="M235.541,384.535h19.503v-75.194c0-1.812,1.469-3.279,3.28-3.279c1.813,0,3.28,1.468,3.28,3.279v75.194h19.378l-0.98-6.228c-0.08-0.512-0.029-1.025,0.125-1.507L258.24,203.012l-21.846,173.786c0.155,0.482,0.208,0.997,0.127,1.51L235.541,384.535z"/>
      <path d="M392.472,322.933c40.677,0,73.967-32.201,75.69-72.438h-26.517h-124.85C318.498,290.731,351.793,322.933,392.472,322.933z"/>
      <polygon points="347.564,243.935 436.903,243.935 392.455,125.322"/>
      <path d="M91.611,151.373l118.115-12.638c3.579,23.357,23.807,41.303,48.146,41.303c26.885,0,48.757-21.852,48.757-48.713l85.792-9.134l31.103-3.377c1.801-0.196,3.103-1.814,2.906-3.615s-1.815-3.11-3.614-2.907l-27.777,3.017V77.44c0-1.812-1.467-3.28-3.279-3.28c-1.811,0-3.279,1.469-3.279,3.28v35.611l-83.118,8.849c-3.589-18.254-17.413-32.879-35.236-37.646V62.501c0-6.897-5.651-12.509-12.6-12.509c-6.921,0-12.551,5.611-12.551,12.509v21.743c-20.793,5.551-36.158,24.542-36.158,47.062l-86.743,9.281V105.19c0-1.812-1.468-3.28-3.28-3.28c-1.811,0-3.28,1.468-3.28,3.28v35.543l-24.97,2.672c-1.801,0.192-3.105,1.808-2.912,3.61C88.534,150.124,89.957,151.373,91.611,151.373z"/>
      <path d="M88.889,438.842h244.426c1.812,0,3.279-1.469,3.279-3.28c0-1.811-1.468-3.279-3.279-3.279H88.889c-1.811,0-3.279,1.469-3.279,3.279C85.609,437.374,87.078,438.842,88.889,438.842z"/>
      <path d="M409.239,455.447h-189.24c-1.812,0-3.28,1.469-3.28,3.28s1.468,3.28,3.28,3.28h189.24c1.81,0,3.28-1.469,3.28-3.28S411.049,455.447,409.239,455.447z"/>
      <path d="M452.254,455.447H428.57c-1.811,0-3.279,1.469-3.279,3.28s1.469,3.28,3.279,3.28h23.684c1.811,0,3.279-1.469,3.279-3.28S454.064,455.447,452.254,455.447z"/>
      <path d="M138.802,455.011H49.131c-1.812,0-3.28,1.469-3.28,3.279c0,1.812,1.468,3.28,3.28,3.28h89.671c1.812,0,3.28-1.469,3.28-3.28C142.082,456.479,140.614,455.011,138.802,455.011z"/>
    </g></g>
  </svg>

  <!-- Text content -->

</header>

    <!-- Section intro (new) -->
    <header class="excellence-intro">
      <p class="ex-eyebrow">What we do</p>
      <h2 class="ex-title">End-to-end Tax &amp; Compliance Services</h2>
      <p class="ex-lead">
        From registrations to audits and representation, we handle the process with clear timelines and fees—
        so you can focus on growth.
      </p>
    </header>

    <div class="row" role="list">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance" role="listitem">
        <a href="{{ url('/services/income-tax') }}" class="ex-card-link" aria-label="Income Tax Advisory – learn more">
          <div class="hexagon tran3s">
            <span class="ficon flaticon-staticsscreen" aria-hidden="true"></span>
          </div>
          <div class="text">
            <h5>Income Tax Advisory</h5>
            <span class="s_color_bg tran3s"></span>
            <p class="tran3s">NTN/FBR registrations • Returns &amp; statements • Withholding compliance • Tax planning • Notices &amp; appeals.</p>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance" role="listitem">
        <a href="{{ url('/services/sales-tax') }}" class="ex-card-link" aria-label="Sales Tax (FBR & SRB) – learn more">
          <div class="hexagon tran3s">
            <span class="ficon flaticon-statics" aria-hidden="true"></span>
          </div>
          <div class="text">
            <h5>Sales Tax (FBR &amp; SRB)</h5>
            <span class="s_color_bg tran3s"></span>
            <p class="tran3s">Registration &amp; e-invoicing • Monthly filing • Audits/assessments • Refunds • Input/output reconciliations.</p>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance" role="listitem">
        <a href="{{ url('/services/corporate') }}" class="ex-card-link" aria-label="Legal and Compliance Support – learn more">
          <div class="hexagon tran3s">
            <span class="ficon flaticon-wheel" aria-hidden="true"></span>
          </div>
          <div class="text">
            <h5>Legal &amp; Compliance Support</h5>
            <span class="s_color_bg tran3s"></span>
            <p class="tran3s">Business setup &amp; SECP • Bookkeeping &amp; payroll • Corporate &amp; tax advisory • Representation before authorities.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


        <!-- End of .company_excellance -->


		<!-- About ConsultPress & Testimonial ____________ -->

		<div class="about_testimonial">
			<div class="container">
				<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about_ConsultPress">
  <div class="theme_title">
    <h3>Testimonials</h3>
  </div>
  <p>
    Our clients’ words are the clearest proof of our work. From Income Tax returns to Sales Tax (FBR/SRB)
    monthly filings, e-invoicing, audits, and appeals, their feedback highlights on-time compliance,
    reduced penalties, faster refunds, and smooth resolution of notices.
  </p>
  <p>
    Every review comes from a real client, shown with their name &amp; role for full transparency—so you can
    evaluate results, not just promises.
  </p>
</div> <!-- End of .about_ConsultPress -->

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testimonial">

						 <div class="theme_title">
							{{-- <h3>Testimonials</h3> --}}
						 </div>
						<!-- __________________ testimonial Slider ____________ -->

						<div class="slider_wrapper">
							<div class="testimonial-carousel-content-box owl-carousel owl-theme">
								<!-- SLide  -->
								<div class="item">
									<div class="text p_color_bg">
          <i>Aziz Ismail &amp; Co. ne hamari Income Tax returns, withholding statements aur notices ko bilkul sahi aur waqt par handle kiya. Penalties bachi aur cash-flow improve hua.</i>
									</div> <!-- End of .text -->
									<div class="author">
										<img src="{{asset('assets/images/home/testimonialone.jpg')}}" alt="Client Image" class="float_left border_round">
										<div class="author_name float_left">
            <h6 class="p_color">Muhammad Adeel <span>- CFO</span></h6>
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
          <i>Sales Tax (FBR &amp; SRB) ki monthly filing, e-invoicing setup aur audit support bohot professional thi. Input/output reconciliation se refund claim smoothly process hua.</i>
									</div> <!-- End of .text -->
									<div class="author">
										<img src="{{asset('assets/images/home/test2.jpg')}}" alt="Client Image" class="float_left border_round">
										<div class="author_name float_left">
            <h6 class="p_color">Ahmed Khan <span>- Head of Finance</span></h6>
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
          <i>Company incorporation, SECP compliance, bookkeeping aur payroll — sab kuch ek hi jagah. Unki reminders aur reporting ne hamara time bacha diya.</i>
									</div> <!-- End of .text -->
									<div class="author">
										<img src="{{asset('assets/images/home/test3.jpg')}}" alt="Client Image" class="float_left border_round">
										<div class="author_name float_left">
            <h6 class="p_color">Usman Sheikh <span>- Founder, ByteCraft</span></h6>
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
          <i>FBR ke saamne representation zabardast thi — assessment peacefully resolve ho gaya. Clear, actionable tax planning se decision-making asaan hui.</i>
									</div> <!-- End of .text -->
									<div class="author">
										<img src="{{asset('assets/images/home/test4.jpg')}}" alt="Client Image" class="float_left border_round">
										<div class="author_name float_left">
            <h6 class="p_color">Urhan Ahmed <span>- Finance Lead</span></h6>
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
										<img src="{{asset('assets/images/home/testimonialone.jpg')}}" alt="Image"/>
									</div>
									<div class="item">
										<img src="{{asset('assets/images/home/test2.jpg')}}" alt="Image"/>
									</div>
									<div class="item">
										<img src="{{asset('assets/images/home/test3.jpg')}}" alt="Image"/>
									</div>

									<div class="item">
										<img src="{{asset('assets/images/home/test4.jpg')}}" alt="Image"/>
									</div>
								</div> <!-- End of .sidebar-testimonial-carousel-thumbnail-box -->
								<div class="clear_fix"></div>
							</div> <!-- End of .thumbnail_wrapper -->

						</div> <!-- End .slider_wrapper -->
					</div> <!-- End of .testimonial -->
				</div> <!-- End of .row -->
			</div> <!-- End of .container -->
		</div> <!-- End of .about_testimonial -->






        <!-- Firm Highlights & Quick Consultation (NEW, col-lg-12 layout) -->
<!-- Super UI: Navy bg + 4 left / 4 right yellow hammers (facing center) -->
<section class="azc-section azc-hammer-sky" id="why-us">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-12">
        <div class="azc-hammer-wrap">
          <div class="azc-panel" aria-hidden="true"></div>
<!-- Centered card inside the glass panel -->
<div class="azc-center-grid">
  <article class="azc-intro-card">
    <h3>Introduction</h3>
    <p>
      The Firm of Income Tax and Sales Tax Lawyers was established in 1975, rendering professional
      services to business class as well for Salaried Personals. Since 1975 it is working in the present
      name &amp; style. The Firm is headed by MR. ABDUL AZIZ ISMAIL, Senior Advocate High Court of Sindh.
      The team consists of professional staffs that is highly specialized in their respective fields and
      equipped with professional ethics.
    </p>
  </article>
</div>

          <!-- Reusable hammer symbol -->
          <svg class="azc-defs" aria-hidden="true">
            <symbol id="azc-hammer-icon" viewBox="0 0 17 17">
              <path fill="currentColor"
                d="M14.44,7.389 L9.662,2.61 L10.232,2.041 L9.315,1.122 L5.068,5.367 L5.988,6.285 L6.518,5.755 L8.473,7.709 L-0.062,16.244 L0.768,17.073 L9.301,8.539 L11.295,10.532 L10.766,11.063 L11.684,11.98 L15.938,7.727 L15.021,6.809 L14.44,7.389 Z"/>
            </symbol>
          </svg>

          <!-- LEFT cluster (4) — facing RIGHT (towards center) -->
          <svg class="azc-hammer-sm L1 face-right"><use href="#azc-hammer-icon"/></svg>
          <svg class="azc-hammer-sm L2 face-right"><use href="#azc-hammer-icon"/></svg>
          <svg class="azc-hammer-sm L3 face-right"><use href="#azc-hammer-icon"/></svg>
          <svg class="azc-hammer-sm L4 face-right"><use href="#azc-hammer-icon"/></svg>

          <!-- RIGHT cluster (4) — facing LEFT (towards center) -->
          <svg class="azc-hammer-sm R1 face-left"><use href="#azc-hammer-icon"/></svg>
          <svg class="azc-hammer-sm R2 face-left"><use href="#azc-hammer-icon"/></svg>
          <svg class="azc-hammer-sm R3 face-left"><use href="#azc-hammer-icon"/></svg>
          <svg class="azc-hammer-sm R4 face-left"><use href="#azc-hammer-icon"/></svg>

          <!-- yahan apna content rakhna ho to add kar sakte ho -->
        </div>
      </div>
    </div>
  </div>
</section>



		<!-- What Makes us Special _________________________ -->

		{{-- <div class="makesUs_special" style="background:#0F2742 url('{{ asset('assets/images/home/lawone.jpg') }}') center/cover no-repeat;">
			<div class="overlay">
				<div class="container">
					<div class="theme_title">
						<h2>What Makes us Special?</h2>
					</div>
					<div class="row">
						<!-- _____________ Item ____________ -->
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-peopletwo"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="1" data-to="100" data-speed="5000" data-refresh-interval="50">100</span>
									<p>Projects Completed</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->

						<!-- _____________ Item ____________ -->
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-screen"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="100" data-to="230" data-speed="5000" data-refresh-interval="50">230</span>
									<p>Consultants</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->

						<!-- _____________ Item ____________ -->
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-badge"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="10" data-to="90" data-speed="4500" data-refresh-interval="50">90</span>
									<p>Awwards winning</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->


						<!-- _____________ Item ____________ -->
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-smile"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="1" data-to="100" data-speed="5000" data-refresh-interval="50">100</span><span>%</span>
									<p>Satisfied clients</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->

					</div> <!-- End of .row -->
				</div> <!-- End of .container -->
			</div> <!-- End of .overlay -->
		</div> --}}

         <section class="stats-section">
        <div class="stats-overlay">
            <div class="container">
                <div class="section-title">
                    <h2>What Makes Us Special?</h2>
                </div>

                <div class="stats-grid">
                    <div class="stat-item">
                        <i class="fas fa-tasks stat-icon"></i>
                        <span class="stat-number" data-count="100">0</span>
                        <div class="stat-text">Projects Completed</div>
                    </div>

                    <div class="stat-item">
                        <i class="fas fa-users stat-icon"></i>
                        <span class="stat-number" data-count="230">0</span>
                        <div class="stat-text">Consultants</div>
                    </div>

                    <div class="stat-item">
                        <i class="fas fa-trophy stat-icon"></i>
                        <span class="stat-number" data-count="90">0</span>
                        <div class="stat-text">Awards Winning</div>
                    </div>

                    <div class="stat-item">
                        <i class="fas fa-smile stat-icon"></i>
                        <span class="stat-number" data-count="100">0</span>
                        <div class="stat-text">Satisfied Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- End of .makesUs_special -->




		<!-- Why Choose Us ________________________ -->

		<section class="why_choose_us">
			<div class="container">
				<div class="theme_title_center">
					<h2>Why Choose ConsultPress?</h2>
					<span></span>
				</div> <!-- End of .theme_title_center -->

				<div class="row">

					<!-- ______________ Item _____________ -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="choose_us_item tran3s">
							<div class="icon p_color_bg border_round float_left"><span class="ficon flaticon-hexagon"></span></div> <!-- End of .icon -->
							<div class="text float_left">
								{{-- <h5 class="tran3s">Income Sales Tax Experts</h5>
            <p class="tran3s">FBR Income Tax FBR/SRB Sales Tax registrations, returns, planning.</p> --}}
            <h5 class="tran3s">Income Sales Tax </h5>
<p class="tran3s">FBR Income Tax FBR/SRB Sales Tax registrations, returns, planning.</p>

							</div> <!-- End of .text -->
							<div class="clear_fix"></div>
						</div> <!-- End of .choose_us_item -->
					</div> <!-- End of .col -->

					<!-- ______________ Item _____________ -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="choose_us_item tran3s">
							<div class="icon p_color_bg border_round float_left"><span class="ficon flaticon-web"></span></div> <!-- End of .icon -->
							<div class="text float_left">
							 <h5 class="tran3s">Seamless e-Filing  Portals</h5>
            <p class="tran3s">IRIS  e-portal filings, e-invoicing setup, withholding statements reconciliations.</p>
							</div> <!-- End of .text -->
							<div class="clear_fix"></div>
						</div> <!-- End of .choose_us_item -->
					</div> <!-- End of .col -->

					<!-- ______________ Item _____________ -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="choose_us_item tran3s">
							<div class="icon p_color_bg border_round float_left"><span class="ficon flaticon-user"></span></div> <!-- End of .icon -->
							<div class="text float_left">
							            <h5 class="tran3s">Tailored Advisory</h5>
            <p class="tran3s">Individuals, SMEs  corporates—clear, practical advice aligned to your goals.</p>
							</div> <!-- End of .text -->
							<div class="clear_fix"></div>
						</div> <!-- End of .choose_us_item -->
					</div> <!-- End of .col -->

					<!-- ______________ Item _____________ -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="choose_us_item tran3s">
							<div class="icon p_color_bg border_round float_left"><span class="ficon flaticon-twopeople"></span></div> <!-- End of .icon -->
							<div class="text float_left">
								            <h5 class="tran3s">Business Compliance</h5>
            <p class="tran3s">NTN/STRN, SECP registration, bookkeeping payroll regulations.</p>
							</div> <!-- End of .text -->
							<div class="clear_fix"></div>
						</div> <!-- End of .choose_us_item -->
					</div> <!-- End of .col -->

					<!-- ______________ Item _____________ -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="choose_us_item tran3s">
							<div class="icon p_color_bg border_round float_left"><span class="ficon flaticon-people"></span></div> <!-- End of .icon -->
							<div class="text float_left">
							<h5 class="tran3s">Responsive Support</h5>
            <p class="tran3s">Quick updates  guidance via call, email  WhatsApp when you need us.</p>
							</div> <!-- End of .text -->
							<div class="clear_fix"></div>
						</div> <!-- End of .choose_us_item -->
					</div> <!-- End of .col -->

					<!-- ______________ Item _____________ -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="choose_us_item tran3s">
							<div class="icon p_color_bg border_round float_left"><span class="ficon flaticon-telephone"></span></div> <!-- End of .icon -->
							<div class="text float_left">
								<h5 class="tran3s">24/7 Online Support</h5>
								<p class="tran3s">Assured of our support 24 hours a day, 7 days a week. </p>
							</div> <!-- End of .text -->
							<div class="clear_fix"></div>
						</div> <!-- End of .choose_us_item -->
					</div> <!-- End of .col -->
				</div>
			</div> <!-- End of .container -->
		</section>

        <!-- End of .why_choose_us -->



		<!-- Our Team ________________________________ -->

		<section class="ourWP_team"  style="background:#0F2742 url('{{ asset('assets/images/home/missionbanner.jpg') }}') center/cover no-repeat;">
			<div class="overlay">
				<div class="container">
					<div class="theme_title_center">
						<h2>Our ConsultPress Team</h2>
						<span></span>
					</div> <!-- End of .theme_title_center -->

					<div class="row">
						<!-- ________________ Member ______________ -->
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="team_member">
								<div class="img_holder">
									<img src="{{asset('assets/images/team/teamone.jpg')}}" alt="Team Member" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="#" class="border_round p_color_bg"><i class="fa fa-plus s_color" aria-hidden="true"></i></a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->

								<div class="text">
									<h5>Sarah Khan</h5>
									<i>Founder Principal Tax Advisor</i>
									<p>The MD of ConsultPress, he has been the captain of his team.. </p>
									{{-- <a href="tel:800-700-6200">Tel: 800-700-6200</a>
									<a href="mailto:Ceo@Consulting.com">Mail: Ceo@Consulting.com</a> --}}
								</div> <!-- End of .text -->
							</div> <!-- End of .team_member -->
						</div> <!-- End of .col -->

						<!-- ________________ Member ______________ -->
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="team_member">
								<div class="img_holder">
									<img src="{{asset('assets/images/team/team2.jpg')}}" alt="Team Member" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="#" class="border_round p_color_bg"><i class="fa fa-plus s_color" aria-hidden="true"></i></a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->

								<div class="text">
									<h5>Rebecca Garza</h5>
									<i>Chief Finance Office</i>
									<p>Oversees firm finance and compliance—cash-flow, budgeting.</p>
									{{-- <a href="tel:800-700-6200">Tel: 800-700-6200</a>
									<a href="mailto:admin@Consulting.com">Mail: Admin@Consulting.com</a> --}}
								</div> <!-- End of .text -->
							</div> <!-- End of .team_member -->
						</div> <!-- End of .col -->

						<!-- ________________ Member ______________ -->
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="team_member">
								<div class="img_holder">
									<img src="{{asset('assets/images/team/team3.jpg')}}" alt="Team Member" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="#" class="border_round p_color_bg"><i class="fa fa-plus s_color" aria-hidden="true"></i></a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->

								<div class="text">
									<h5>Sara Hussain</h5>
									<i>Chief Finance Officer</i>
									<p>Leads outreach and client education tax seminars, FBR/SRB updates.</p>
									{{-- <a href="tel:800-700-6200">Tel: 800-700-6200</a>
									<a href="mailto:finance@Consulting.com">Mail: Admin@Consulting.com</a> --}}
								</div> <!-- End of .text -->
							</div> <!-- End of .team_member -->
						</div> <!-- End of .col -->

						<!-- ________________ Member ______________ -->
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="team_member">
								<div class="img_holder">
									<img src="{{asset('assets/images/team/team4.jpg')}}" alt="Team Member" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="#" class="border_round p_color_bg"><i class="fa fa-plus s_color" aria-hidden="true"></i></a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->

								<div class="text">
									<h5>Ben Johnson</h5>
									<i>Chief Marketing Officer</i>
									<p>Community Head and has worked tirelessly to help the needy. </p>
									{{-- <a href="tel:800-700-6200">Tel: 800-700-6200</a>
									<a href="mailto:Marketing@Consulting.com">Mail: Admin@Consulting.com</a> --}}
								</div>
                                 <!-- End of .text -->
							</div>
                            <!-- End of .team_member -->
						</div>
                        <!-- End of .col -->
					</div>
                     <!-- End of .row -->
				</div>
                <!-- End of .overlay -->
			</div>
            <!-- End of .container -->
		</section>

        <!-- End of .ourWP_team -->


		<!-- FAQ and Latest News _________________________ -->

<div class="faqAndNews">
  <div class="container">
       <div class="latest_news latest_news--grid">
          <div class="theme_title_center mb-4">
            <h3>Latest News</h3>
          </div>
    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


          <div class="row news-grid">
            @foreach(($newsBlogs ?? collect()) as $blog)
              <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a class="news-card" href="{{ url('blogs/'.$blog->slug) }}">
                  <div class="news-thumb">
                    <img
                      src="{{ ($blog->featured_image && file_exists(public_path($blog->featured_image)))
                              ? asset($blog->featured_image)
                              : asset('assets/images/home/7.jpg') }}"
                      alt="{{ $blog->title }}">
                    <span class="news-date">
                      {{ $blog->date ? \Illuminate\Support\Carbon::parse($blog->date)->format('M d, Y')
                                      : optional($blog->created_at)->format('M d, Y') }}
                    </span>
                  </div>
                  <div class="news-body">
                    <h5>{{ \Illuminate\Support\Str::limit($blog->title, 90) }}</h5>
                    <p>{{ \Illuminate\Support\Str::limit($blog->short_description, 120) }}</p>
                    <span class="readmore">Read more</span>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



		<!-- Request Call Back _____________________ -->
{{--
		<div class="req_callBack">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 callBack_text">
						<div class="theme_title">
							<h2>Request a Call Back</h2>
						</div>

						<h5>If you would like to contact someone by phone, fax or post and you don't know the address, please consult our world wide branch <a href="#" class="p_color">directory.</a></h5> --}}
<!-- Office Address + smart email menu -->
{{-- <p>
  <span>Office Address: </span>
  305, Frere Business Centre, Frere Road adjacent Akhbar Market Saddar Karachi-75350 (Pakistan)
  &nbsp; --}}

<!-- Tel ... -->
{{-- <p class="tel-line">
  <span>Tel :</span>
  <span class="phone-chip">
    <a href="tel:+922127729444" aria-label="Call +92 21 2772944">0092-21-2772944</a>
  </span>, --}}
  {{-- <span class="phone-chip">
    <a href="tel:+922127729445" aria-label="Call +92 21 2772945">2772945</a>
  </span>, --}}
  {{-- <span class="phone-chip">
    <a href="tel:+92212721357" aria-label="Call +92 21 2721357">2721357</a>
  </span>,
  <span class="phone-chip">
    <a href="tel:+92212721359" aria-label="Call +92 21 2721359">2721359</a>
  </span>,
  <span class="phone-chip">
    <a href="tel:+92212750546" aria-label="Call +92 21 2750546-7">2750546-7</a>
  </span>, --}}
  {{-- <span class="phone-chip">
    <a href="tel:+92212750547" aria-label="Call +92 21 2750547">2750547</a>
  </span> --}}
{{-- </p>

<br> --}}

<!-- Email #1 -->
{{-- <span class="smart-mail" data-email="azizismail@cyber.net.pk">
  <a href="mailto:azizismail@cyber.net.pk" class="s_color smart-trigger">
    azizismail@cyber.net.pk
  </a>
</span>, --}}
<!-- Email #2 -->
{{-- <span class="smart-mail" data-email="info@azizismail.com">
  <a href="mailto:info@azizismail.com" class="s_color smart-trigger">
    info@azizismail.com
  </a>
</span>

&nbsp;and we’ll get in touch shortly, or Contact via
<a href="#" class="s_color" title="Contact via Support Forum">Support Forum</a>




</p> --}}


						{{-- <p><span>Office Hours :</span> 07:30 and 19:00 Monday to Saturday,Sunday - Holiday</p> --}}
					{{-- </div> <!-- End of .callBack_text --> --}}
{{--
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 req_callBackForm">
						<form action="#">
							<div class="input_group">
								<label>Your Name (required)</label>
								<input type="text">
							</div> --}}
                            <!-- End of .input_group -->

							{{-- <div class="input_group">
								<label>Your Email (required)</label>
								<input type="email">
							</div> --}}
                             <!-- End of .input_group -->

							{{-- <div class="input_group">
								<label>Phone Number (required)</label>
								<input type="text">
							</div> --}}
                            <!-- End of .input_group -->
{{--
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
							</div> --}}
                             <!-- End of .input_group -->

							{{-- <button class="s_color_bg tran3s font_fix">Submit</button>
						</form> --}}
					{{-- </div> <!-- End of .req_callBackForm --> --}}
				{{-- </div> <!-- End of .row --> --}}
			{{-- </div> <!-- End of .container --> --}}
		{{-- </div> <!-- End of .req_callBack --> --}}


		<!-- Partner Logo _________________________ -->
{{--
        <div class="container partners">
			<div id="partner_logo" class="owl-carousel owl-theme">
				<div class="item"><img src="{{asset('assets/images/partner-logo/1.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/2.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/3.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/4.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/1.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/2.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/3.jpg')}}" alt="logo"></div>
				<div class="item"><img src="{{asset('assets/images/partner-logo/4.jpg')}}" alt="logo"></div>
			</div>
		</div> --}}





		<!-- Google map _________________________________ -->
	<!-- Location / Map -->
{{-- <section id="google-map-area" class="location-section">
  <div class="container">
    <div class="row">
      <!-- Map -->
      <div class="col-lg-7 col-md-12">
        <div class="map-frame">
          <iframe
            title="Office Location Map — Aziz Ismail & Co."
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=305,+Frere+Business+Centre,+Frere+Road,+Adjacent+Akhbar+Market,+Saddar,+Karachi-75350+(Pakistan)&output=embed">
          </iframe>
        </div>
        <div class="map-actions">
          <a class="s_color" target="_blank"
             href="https://www.google.com/maps?q=305,+Frere+Business+Centre,+Frere+Road,+Adjacent+Akhbar+Market,+Saddar,+Karachi-75350+(Pakistan)">
            View on Google Maps
          </a>
        </div>
      </div>

      <!-- Address / About -->
      <div class="col-lg-5 col-md-12">
        <div class="address_card">
          <h4 class="s_color">Head Office — Karachi</h4>
          <ul class="contact-list">
            <li>
              <i class="fa fa-map-marker s_color" aria-hidden="true"></i>
              305, Frere Business Centre, Frere Road, Adjacent Akhbar Market, Saddar, Karachi-75350 (Pakistan)
            </li>
            <li>
              <i class="fa fa-phone s_color" aria-hidden="true"></i>
              <a href="tel:+922127729444">0092-21-2772944</a>,
              <a href="tel:+92212721357">2721357</a>,
              <a href="tel:+92212721359">2721359</a>,
              <a href="tel:+92212750546">2750546-7</a>
            </li>
            <li>
              <i class="fa fa-envelope s_color" aria-hidden="true"></i>
              <a href="mailto:azizismail@cyber.net.pk">azizismail@cyber.net.pk</a>,
              <a href="mailto:info@azizismail.com">info@azizismail.com</a>
            </li>
          </ul>

         <p class="location-copy">
  Our head office is in the central commercial hub of <strong>Saddar, Karachi</strong>—on Frere Road, right next to <strong>Akhbar Market</strong>. It is easily accessible from both M.A. Jinnah Road and Shahrah-e-Liaquat. Public transport, banks, and legal/record offices are nearby. Client access is straightforward; parking is available on the street and in nearby plazas.
</p>

        </div>
      </div>
    </div>
  </div>
</section> --}}


		<!-- Google map _________________________________ -->
		<section id="google-map-area">
			{{-- <div class="google-map-home skin-3" id="contact-google-map" data-map-lat="40.925372" data-map-lng="-74.276544" data-icon-path="images/logo/1.png" data-map-title="Awesome Place" data-map-zoom="12"></div> --}}
  <div class="google-map-home skin-3">
    <iframe
      title="Aziz Ismail &amp; Co. — Head Office (Karachi)"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      allowfullscreen
      src="https://www.google.com/maps?q=305,+Frere+Business+Centre,+Frere+Road,+Adjacent+Akhbar+Market,+Saddar,+Karachi-75350+(Pakistan)&hl=en&z=16&output=embed">
    </iframe>
  </div>

  <!-- optional: button -->
  <div class="map-actions">
    <a class="s_color" target="_blank"
       href="https://www.google.com/maps?q=305,+Frere+Business+Centre,+Frere+Road,+Adjacent+Akhbar+Market,+Saddar,+Karachi-75350+(Pakistan)">
      View on Google Maps
    </a>
  </div>
			<div class="address_wrapper">
				<div class="container">
					<div class="map_address">
						<div class="item">
							<h5 class="s_color">Pakistan-Frere Business Centre</h5>

							<ul>
								{{-- <li><i class="fa fa-map-marker s_color" aria-hidden="true"></i>001 Columbus Road, Floor 4, San Francisco CA 9100</li> --}}
								<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:00-700-6202">0092-21-2772944</a></li>
								<li><i class="fa fa-envelope s_color" aria-hidden="true"></i><a href="#">info@azizismail.com</a></li>
							</ul>
						</div> <!-- End of .item -->

						<div class="item">
							<h5 class="s_color">Pakistan-Frere Business Centre</h5>

							<ul>
								{{-- <li><i class="fa fa-map-marker s_color" aria-hidden="true"></i>789 Park Road, Foresthill London</li> --}}
								<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:00-700-6202">0092-21-2772944</a></li>
								<li><i class="fa fa-envelope s_color" aria-hidden="true"></i><a href="#">info@azizismail.com</a></li>
							</ul>
						</div> <!-- End of .item -->

						<div class="item">
							<h5 class="s_color">Pakistan-Frere Business Centre</h5>

							<ul>
								{{-- <li><i class="fa fa-map-marker s_color" aria-hidden="true"></i>Bilbao Street, Barcelona</li> --}}
								<li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:00-700-6202">0092-21-2772944</a></li>
								<li><i class="fa fa-envelope s_color" aria-hidden="true"></i><a href="#">info@azizismail.com</a></li>
							</ul>
						</div> <!-- End of .item -->

					</div> <!-- End of .map_address -->
				</div>
			</div> <!-- End of .address_wrapper -->
   		</section>

	<!-- SignUp For Newsletter _____________________ -->



	<div class="signup_newsletter">
			<div class="container">
				<div>
					<div>
						<h3>Sign up for our Newsletter and Follow us</h3>
					</div>

					<form action="#" class="signUp_form row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<label>Your Email *</label>
							<input type="email">
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<label>Your Name*</label>
							<input type="text">
						</div>

						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<button class="s_color_bg tran3s font_fix">Sign up</button>
						</div>

						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 fix-width">
							<ul class="social_icon_newsletter">
								<li><a href="#" class="tran3s" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		        				<li><a href="#" class="tran3s" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		        				<li><a href="#" class="tran3s" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		        				<li><a href="#" class="tran3s" title="Goolge-Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>

@endsection
