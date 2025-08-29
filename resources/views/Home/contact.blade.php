@extends("Layout.layout")
@section("Content")


<!-- Inner Banner _____________________ -->
<div class="inner_banner"
     style="background-image:url('{{ asset($bannerImage) }}'); background-position:center; background-size:cover; background-repeat:no-repeat;">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Contact</h2>
      <span class="s_color_bg"></span>
    </div>
  </div>
</div>


        <!-- Page Breadcrumb _____________________ -->
        <div class="page-breadcrumb p_color_bg">
        	<div class="container clear_fix">
        		<ul class="text-center">
        			<li><a href="{{ asset("/") }}">Home</a></li>
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
  <div id="cp-card" class="cp-card">
    <div class="cp-head">
      <div class="cp-dot"></div>
      <h4>Send a message</h4>
      <p>We usually reply within a few hours.</p>
    </div>
{{--
    <form id="contactPageForm" method="POST" action="{{ route('Home.welcome.store') }}" novalidate>
      @csrf

      <div class="fgroup">
        <input type="text" name="name" id="cp-name" placeholder=" " autocomplete="name" />
        <label for="cp-name">Your Name*</label>
        <i class="fa fa-user"></i>
      </div>

      <div class="fgroup">
        <input type="text" name="phone" id="cp-phone" placeholder=" " autocomplete="tel" />
        <label for="cp-phone">Phone*</label>
        <i class="fa fa-phone"></i>
      </div>

      <div class="fgroup">
        <input type="email" name="email" id="cp-email" placeholder=" " autocomplete="email" />
        <label for="cp-email">Email*</label>
        <i class="fa fa-envelope"></i>
      </div>

      <div class="fgroup">
        <input type="text" name="country" id="cp-country" placeholder=" " autocomplete="country-name" />
        <label for="cp-country">Country*</label>
        <i class="fa fa-globe"></i>
      </div>

      <div class="fgroup">
        <textarea name="message" id="cp-message" rows="4" placeholder=" "></textarea>
        <label for="cp-message">Message*</label>
        <i class="fa fa-comment"></i>
      </div>

      <button type="submit" id="cp-submit" class="cp-btn">
        <span class="txt">Submit</span>
        <span class="spinner" aria-hidden="true"></span>
      </button>

      <p class="cp-note" id="cp-note" role="status" aria-live="polite"></p>
    </form> --}}
    <form id="contactPageForm" method="POST" action="{{ route('Home.welcome.store') }}" novalidate>
      @csrf

     <div class="form-row">
  <div class="field icon-field">
        <label for="cp-name">    <i class="ico fa fa-user" aria-hidden="true"></i>
Name*</label>

    <input id="cp-name" class="cp-input" type="text" name="name" placeholder=" " required autocomplete="name">
  </div>

  <div class="field icon-field">
        <label for="cp-phone">    <i class="ico fa fa-phone" aria-hidden="true"></i>
Phone*</label>

    <input id="cp-phone" class="cp-input" type="text" name="phone" placeholder=" " required autocomplete="tel">
  </div>
</div>

<div class="form-row">
  <div class="field icon-field">
        <label for="cp-email">    <i class="ico fa fa-envelope" aria-hidden="true"></i>
Email*</label>

    <input id="cp-email" class="cp-input" type="email" name="email" placeholder=" " required autocomplete="email">
  </div>

  <div class="field icon-field">
        <label for="cp-country">    <i class="ico fa fa-globe" aria-hidden="true"></i>
Country*</label>

    <input id="cp-country" class="cp-input" type="text" name="country" placeholder=" " required autocomplete="country-name">
  </div>
</div>

      {{-- <div class="field">
        <label>Message*</label>
        <textarea name="message" placeholder="How can we help?" rows="3" required></textarea>
      </div> --}}
      <div class="field msg-field">
  <i class="ico fa fa-comment" aria-hidden="true"></i>
  <textarea
    id="cp-message"
    class="cp-textarea"
    name="message"
    placeholder=" "
    rows="4"
    maxlength="800"
    required
    aria-describedby="msgHelp"
  ></textarea>
  <label for="cp-message">Message*</label>
  <small id="msgHelp" class="hint"><span id="msgLeft">800</span> characters left</small>
</div>


      <!-- Honeypot (anti-bot) -->
      {{-- <div class="hp" aria-hidden="true">
        <input type="text" name="website" tabindex="-1" autocomplete="off" />
      </div> --}}

  <!-- ...fields above... -->

<div class="form-actions">
  <button type="submit" id="contactSubmitBtn" class="btn-submit">
    <span class="btn-text">Submit</span>
    <span class="btn-spinner" aria-hidden="true"></span>
  </button>
</div>


      <p class="form-note" id="contactFormNote" role="status" aria-live="polite"></p>
    </form>
  </div>
</div>



				</div> <!-- End of .row -->
			</div> <!-- End of .container -->
		</div> <!-- End of .req_callBack -->




		<!-- Google map _________________________________ -->
		<!-- Google map _________________________________ -->
	<!-- Location / Map -->
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







<script>
  // Global toast
  window.toast = function(msg, type){
    var wrap = document.getElementById('toaster');
    if(!wrap) return;
    var t = document.createElement('div');
    t.className = 'toast ' + (type||'ok');
    t.setAttribute('role','status');
    t.textContent = msg;
    wrap.appendChild(t);
    setTimeout(()=>t.classList.add('show'), 10);
    setTimeout(()=>{ t.classList.remove('show'); setTimeout(()=>t.remove(),220); }, 4200);
  };
//   message
(function(){
  const ta   = document.getElementById('cp-message');
  if(!ta) return;
  const left = document.getElementById('msgLeft');
  const max  = ta.maxLength > 0 ? ta.maxLength : null;

  function refresh(){
    ta.style.height = 'auto';
    ta.style.height = Math.min(ta.scrollHeight, 280) + 'px';
    if (left && max) left.textContent = Math.max(0, max - ta.value.length);
  }
  ['input','change'].forEach(ev => ta.addEventListener(ev, refresh));
  window.addEventListener('load', refresh);
})();


// contact form
(function(){
  const form = document.getElementById('contactPageForm');
  if(!form) return;

  function removeError(el){
    el.classList.remove('invalid');
    el.removeAttribute('aria-invalid');
    const em = el.parentElement.querySelector('.error-msg');
    if(em) em.remove();
  }

  function showError(el, msg){
    removeError(el);
    el.classList.add('invalid');
    el.setAttribute('aria-invalid','true');
    const small = document.createElement('small');
    small.className = 'error-msg';
    small.textContent = msg;
    // field wrapper ke end me chipka do (label/hint ke neeche)
    el.parentElement.appendChild(small);
  }

  function validateField(el){
    const v = (el.value || '').trim();
    const name = el.name;

    // Required fields
    if(['name','phone','email','country','message'].includes(name) && !v){
      showError(el, 'This field is required.');
      return false;
    }

    // Specific rules
    if(name === 'email' && v && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)){
      showError(el, 'Please enter a valid email address.');
      return false;
    }

    if(name === 'phone' && v && !/^[0-9+\-\s()]{7,20}$/.test(v)){
      showError(el, 'Please enter a valid phone number.');
      return false;
    }

    if(name === 'message' && v && v.length < 10){
      showError(el, 'Please add at least 10 characters.');
      return false;
    }

    removeError(el);
    return true;
  }

  // Blur par validate + typing par clear
  form.querySelectorAll('input, textarea').forEach(el=>{
    el.addEventListener('blur', () => validateField(el));
    el.addEventListener('input', () => removeError(el));
  });

  // Submit par sab fields check (AJAX ho ya normal, dono se pehle)
  form.addEventListener('submit', function(e){
    let ok = true;
    form.querySelectorAll('input, textarea').forEach(el=>{
      if(!validateField(el)) ok = false;
    });
    if(!ok){
      e.preventDefault(); // agar aap AJAX use kar rahe ho to wahan bhi false return ho jayega
      // optional: pehli error par scroll/focus
      const first = form.querySelector('.invalid');
      if(first){ first.focus({preventScroll:false}); }
    }
  });
})();
</script>

@if(session('toast.ok'))
  <script>document.addEventListener('DOMContentLoaded',()=>toast(@json(session('toast.ok')), 'ok'));</script>
@endif
@if(session('toast.err'))
  <script>document.addEventListener('DOMContentLoaded',()=>toast(@json(session('toast.err')), 'error'));</script>
@endif

{{-- message --}}

@endsection
