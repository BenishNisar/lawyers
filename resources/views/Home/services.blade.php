@extends('Layout.layout')
@section('Content')

  <!-- Inner Banner -->
  {{-- <div class="inner_banner" style="background: url({{ asset('') }}) no-repeat center; background-size: cover;">
    <div class="overlay">
      <div class="banner_tilte">
        <h2>Services</h2>
        <span class="s_color_bg"></span>
      </div>
    </div>
  </div> --}}
  <div class="inner_banner"
     style="background: url('{{ optional($banner)->image ? asset($banner->image) : asset('assets/images/home/inner-banner.jpg') }}') no-repeat center; background-size: cover;">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Services</h2>
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
        <li>Services</li>
      </ul>
    </div>
  </div>

  <!-- Service Grid -->
  <div class="service_grid">
    <div class="container">
      <!-- Service Title -->
      <div class="row">
        <div class="col-lg-12">
          <div class="svc-toolbar">
            <div class="svc-toolbar__left">
              <h3 class="svc-heading">Our Services</h3>
              <p class="service-intro">
                Explore our premium range of services. Click to get detailed information.
              </p>
            </div>
          </div>
          <hr class="svc-sep">
        </div>
      </div>

      <!-- Cards Grid -->
      <div id="svc-grid" class="row">
        @forelse($services as $service)
          @php
            $img = $service->image ? asset($service->image) : asset('images/service/placeholder.jpg');
            $title = $service->title ?? 'Service';
          @endphp

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 svc-col">
            <a href="{{ route('Home.services.show', $service->slug) }}" class="svc-card-link">
              <div class="single_service_wrapper svc-card">

                <div class="img_wrapper svc-media">
                  <img
                    src="{{ $img }}"
                    alt="{{ $title }}"
                    class="img-responsive"
                    loading="lazy">
                </div>

                <div class="text svc-body">
                  <div class="theme_title">
                    <h5 class="svc-title">{{ $title }}</h5>
                  </div>
                </div>

              </div>
            </a>
          </div>
        @empty
          <div class="col-xs-12">
            <div class="alert alert-info">No services available yet.</div>
          </div>
        @endforelse
      </div>

      <!-- Load More -->
      @if(($services->count() ?? 0) > 9)
        <div class="row">
          <div class="col-lg-12 text-center">
            <button id="svc-load-more" class="svc-load-more">Load more</button>
          </div>
        </div>
      @endif
    </div>
  </div>

  {{-- <!-- Request Quote footer -->
  <div class="request_quote_footer s_color_bg">
    <div class="container clear_fix">
      <p class="float_left">ConsultPress over 20 years of experience we’ll ensure you always get the best guidance.</p>
      <a href="#" class="theme_button p_color_bg s_color float_right tran3s">Request Quote</a>
    </div>
  </div> --}}
<!-- Request Quote footer -->
<div class="request_quote_footer s_color_bg">
  <div class="container clear_fix">
    <p class="float_left">Aziz & Ismail Co. — Income, Sales & Tax advisors helping businesses stay compliant and grow.</p>
    <a href="{{ url("/contact") }}" class="theme_button p_color_bg s_color float_right tran3s">Contact Now</a>
  </div>
</div>

  {{-- Scoped CSS --}}
  <style>
    :root{
      --svc-border: #eee;
      --svc-card-bg: #ffffff;
      --svc-text: #1f1f1f;
      --svc-muted: #6b6b6b;
      --svc-accent: #b10937; /* matches your theme */
      --svc-accent-2: #ff7a59; /* warm gradient partner */
      --svc-shadow: 0 10px 24px rgba(0,0,0,.08);
      --svc-radius: 12px;
    }

    /* Service Header and Count */
    .svc-heading {
      margin: 0 0 6px;
      font-weight: 700;
      letter-spacing: .2px;
    }
    .svc-count {
      font-weight: 600;
      color: var(--svc-accent);
      margin-left: 6px;
    }

    /* Toolbar Design */
    .svc-toolbar {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }
    .svc-toolbar__left {
      min-width: 260px;
    }

    /* Service Cards */
    .svc-card-link {
      display: block;
      text-decoration: none;
      color: inherit;
      height: 100%;
    }

    .svc-card {
      background: var(--svc-card-bg);
      border: 1px solid var(--svc-border);
      border-radius: var(--svc-radius);
      overflow: hidden;
      box-shadow: var(--svc-shadow);
      position: relative;
      transition: transform .25s ease, box-shadow .25s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      animation: svc-fade-in .5s ease both;
    }

    .svc-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 40px rgba(0,0,0,.12);
      border-color: rgba(177,9,55,.18);
    }

    /* Image hover effect */
    .svc-media {
      position: relative;
      aspect-ratio: 16 / 10;
      background: #f3f3f3;
      overflow: hidden;
      transition: all .3s ease-in-out;
    }

    .svc-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: scale(1.02);
      transition: transform .35s ease;
      display: block;
    }

    .svc-card:hover .svc-media img {
      transform: scale(1.08);
    }

    /* Content */
    .svc-body {
      padding: 14px 14px 12px;
      display: flex;
      flex-direction: column;
      gap: 6px;
      flex: 1;
    }

    .svc-title {
      margin: 6px 0 0;
      font-weight: 700;
      line-height: 1.25;
      color: #1e1e1e;
    }

    /* Load More Button */
    .svc-load-more {
      margin: 24px auto 0;
      border: 0;
      padding: 12px 18px;
      font-weight: 600;
      border-radius: 999px;
      color: #fff;
      background: linear-gradient(135deg, var(--svc-accent), var(--svc-accent-2));
      box-shadow: 0 10px 22px rgba(177,9,55,.25);
      transition: transform .2s ease, box-shadow .2s ease, opacity .2s ease;
    }

    .svc-load-more:hover {
      transform: translateY(-2px);
      box-shadow: 0 16px 34px rgba(177,9,55,.32);
    }

    /* Animations */
    @keyframes svc-fade-in {
      from {
        opacity: 0;
        transform: translateY(8px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>

@endsection
