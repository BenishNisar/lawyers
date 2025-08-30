@extends('Layout.layout')
@section('Content')

<!-- Inner Banner -->
{{-- <div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Downloads</h2>
      <span class="s_color_bg"></span>
    </div>
  </div>
</div> --}}
<!-- Inner Banner -->
<div class="inner_banner"
     style="background-image:url('{{ asset($bannerImage) }}');
            background-position:center;
            background-size:cover;
            background-repeat:no-repeat;">
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
            {{-- <div class="dl-chips">
              <button class="dl-chip is-active" data-filter="all">All</button>
              @foreach($categories as $c)
                <button class="dl-chip" data-filter="{{ \Illuminate\Support\Str::slug($c->name) }}">{{ $c->name }}</button>
              @endforeach
            </div> --}}
            <div class="dl-chips">
  <button class="dl-chip is-active" data-filter="all">All</button>
  @foreach($categories as $c)
    {{-- yahan $categories me already id 2 exclude hai, par safety ke liye --}}
    @continue($c->id == 2)
    <button class="dl-chip" data-filter="{{ \Illuminate\Support\Str::slug($c->name) }}">
      {{ $c->name }}
    </button>
  @endforeach
</div>
          </div>

          <!-- Quick Year Nav -->
          <div class="dl-year-nav">
            @foreach($years as $year)
              <a href="#{{ 'y'.\Illuminate\Support\Str::slug($year) }}">{{ $year }}</a>
            @endforeach
          </div>

          <!-- Accordions -->
          <div class="panel-group dl-accordion" id="dlAcc" role="tablist" aria-multiselectable="true">

            @foreach($years as $i => $year)
              @php
                $panelId = 'c'.$i;
                $headId  = 'h'.$i;
                $anchor  = 'y'.\Illuminate\Support\Str::slug($year);
                $items   = $byYear[$year] ?? collect();
              @endphp

              <div class="panel panel-default dl-panel" id="{{ $anchor }}" data-year="{{ $year }}">
                <div class="panel-heading" role="tab" id="{{ $headId }}">
                  <h4 class="panel-title">
                    <a role="button"
                       data-toggle="collapse"
                       data-parent="#dlAcc"
                       href="#{{ $panelId }}"
                       aria-expanded="{{ $i===0 ? 'true' : 'false' }}"
                       class="{{ $i===0 ? '' : 'collapsed' }}"
                       aria-controls="{{ $panelId }}">
                      Year {{ $year }}
                      <span class="dl-count"><i class="fa fa-file-text-o"></i> {{ $items->count() }} files</span>
                    </a>
                  </h4>
                </div>

                <div id="{{ $panelId }}" class="panel-collapse collapse {{ $i===0 ? 'in' : '' }}" role="tabpanel" aria-labelledby="{{ $headId }}">
                  <div class="panel-body">
                    <div class="dl-grid">


@foreach($items as $doc)
  @php
    $cats = $doc->categories->where('id','!=',2);

    $ext = strtolower(pathinfo($doc->file_path, PATHINFO_EXTENSION));
    $size = (int)($doc->size_bytes ?? 0);
    // human size
    $units = ['B','KB','MB','GB','TB'];
    $i = $size > 0 ? floor(log($size,1024)) : 0;
    $human = $size > 0 ? round($size / pow(1024,$i), 1) . ' ' . $units[$i] : '—';

    // icon + chip classes
    switch ($ext) {
      case 'pdf':  $ico='ico--pdf';  $chip='chip--pdf'; $fa='fa-file-pdf-o'; break;
      case 'doc': case 'docx': $ico='ico--doc';  $chip='chip--doc'; $fa='fa-file-word-o'; break;
      case 'xls': case 'xlsx': $ico='ico--xls';  $chip='chip--xls'; $fa='fa-file-excel-o'; break;
      case 'ppt': case 'pptx': $ico='ico--ppt';  $chip='chip--ppt'; $fa='fa-file-powerpoint-o'; break;
      case 'csv':  $ico='ico--csv';  $chip='chip--csv'; $fa='fa-table'; break;
      case 'txt':  $ico='ico--txt';  $chip='chip--txt'; $fa='fa-file-text-o'; break;
      default:     $ico='ico--other';$chip='chip--other';$fa='fa-file-o'; break;
    }

    $tags = $cats->map(fn($c)=>\Illuminate\Support\Str::slug($c->name))->implode(' ');
    $fileName = $doc->original_name ?: basename($doc->file_path);
  @endphp

  <article class="dl-card"
           data-tags="{{ $tags }}"
           data-title="{{ strtolower($doc->title.' '.$doc->year_label) }}">
    <div class="dl-head">
      <span class="dl-filechip {{ $chip }}">{{ strtoupper($ext ?: 'FILE') }}</span>
      <span class="dl-size">{{ $human }}</span>
    </div>

    <div class="dl-icon {{ $ico }}"><i class="fa {{ $fa }}"></i></div>

    <div class="dl-meta">
      <h5 title="{{ $fileName }}">{{ $doc->title }}</h5>
      <div class="dl-tags">
        @foreach($cats as $c)
          <span class="tag">{{ $c->name }}</span>
        @endforeach
        <span class="tag">{{ $doc->year_label }}</span>
      </div>
    </div>

    <div class="dl-actions">

      <a class="dl-btn dl-btn-download" href="{{ asset($doc->file_path) }}" download="{{ $fileName }}" aria-label="Download {{ $fileName }}">
        <i class="fa fa-download"></i> Download
      </a>
    </div>
  </article>
@endforeach


                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div> <!-- /accordion -->

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


      </div>


    </div>
  </div>
</div>



    <div class="request_quote_footer s_color_bg">
  <div class="container clear_fix">
    <p class="float_left">Aziz & Ismail Co. — Income, Sales & Tax advisors helping businesses stay compliant and grow.</p>
    <a href="{{ url("contact") }}" class="theme_button p_color_bg s_color float_right tran3s">Contact Now</a>
  </div>
</div>
{{-- Tiny filter script (search + chips), UI untouched --}}
<script>
(function(){
  var search = document.getElementById('dlSearch');
  var chips  = document.querySelectorAll('.dl-chip');
  var active = 'all';

  function apply(){
    var term = (search && search.value || '').trim().toLowerCase();
    document.querySelectorAll('.dl-card').forEach(function(card){
      var tags  = (card.getAttribute('data-tags')||'').split(' ');
      var title = (card.getAttribute('data-title')||'');
      var okTag = active==='all' || tags.indexOf(active) !== -1;
      var okTxt = !term || title.indexOf(term) !== -1;
      card.style.display = (okTag && okTxt) ? '' : 'none';
    });
    document.querySelectorAll('.dl-panel').forEach(function(p){
      var visible = p.querySelectorAll('.dl-card:not([style*="display: none"])').length;
      var el = p.querySelector('.dl-count');
      if(el){ el.innerHTML = '<i class="fa fa-file-text-o"></i> ' + visible + ' files'; }
    });
  }

  chips.forEach(function(chip){
    chip.addEventListener('click', function(e){
      e.preventDefault();
      chips.forEach(function(c){ c.classList.remove('is-active'); });
      chip.classList.add('is-active');
      active = chip.getAttribute('data-filter');
      apply();
    });
  });

  if (search) search.addEventListener('input', apply);
  apply();
})();
</script>

@endsection
