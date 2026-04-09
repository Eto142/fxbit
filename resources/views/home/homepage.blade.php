@include('home.header')

<style>
.main-banner-content { padding-top: 80px; }
@media (max-width: 767px) {
    .main-banner-content { padding-top: 20px !important; }
}
</style>

<div class="main-banner jarallax" data-jarallax='{"speed": 0.3}'>
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="main-banner-content">
 
   <p style="color:gold; font-size:14px; font-weight:700; letter-spacing:3px; text-transform:uppercase; margin-bottom:15px;"><i class="fas fa-chart-line" style="margin-right:6px;"></i> AUTO FOREX TRADING</p>
    <p style="color:#00e676; font-size:14px; font-weight:700; letter-spacing:3px; text-transform:uppercase; margin-bottom:8px;"><i class="fas fa-globe" style="margin-right:6px;"></i> Global Bank</p>

{{-- <h1>We offer a wide range of bank accounts for your banking needs.</h1> --}}
<h1>Fast and secure for international transactions with 100% security.</h1>
<p>At Fxbitoz Globals, we are constantly thinking about you!</p>
<div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:20px;">
    <a href="{{ route('register') }}" class="btn btn-primary" style="padding:12px 28px; font-weight:600;">Open an Account</a>
    <a href="{{ route('login') }}" class="btn btn-outline-light" style="padding:12px 28px; font-weight:600;">Login</a>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="featured-boxes-area" style="margin-top:30px;">
<div class="container">
<div class="featured-boxes-inner">
<div class="row m-0">
<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon color-fb7756">
<i class="flaticon-piggy-bank"></i>
</div>
 <h3>Online Banking</h3>
<p>The way you want, when you want. With our E- channels, you can bank at your convenience on any device, whenever you choose.</p>

</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon color-facd60">
<i class="flaticon-data-encryption"></i>
</div>
<h3>Current Accounts</h3>
<p>Open a Fxbitoz Globals current account with full account requirements and gain access to the world of convenience that comes with owning a Fxbitoz Globals account.</p>

</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon color-1ac0c6">
<i class="flaticon-wallet"></i>
</div>
<h3>Money Transfers</h3>
<p>Enjoy a smooth and stress-free money transfer experience across all your devices.</p>

</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon">
<i class="flaticon-shield"></i>
</div>
<h3>Mobile Banking</h3>
<p>Get all your transactions done easily from your mobile phone.</p>

</div>
</div>
</div>
</div>
</div>
</section>


<section class="services-area ptb-70">
<div class="container-fluid p-0">
<div class="overview-box">
<div class="overview-content">
<div class="content left-content">
<h2>Who We Are?</h2>
<div class="bar"></div>
<p>Our relationships are built on trust that we build every day through every interaction.

</p>
<ul class="services-list">
<li><span><i class="flaticon-check-mark"></i> Free plan available</span></li>
<li><span><i class="flaticon-check-mark"></i> Full data privacy compliance</span></li>
<li><span><i class="flaticon-check-mark"></i> 100% transparent costs</span></li>
</ul>
</div>
</div>
<div class="overview-image">
<div class="image">
<img src="{{ asset('assets1/img/1.png') }}" alt="image">
<div class="circle-img">
<img src="{{ asset('assets1/img/circle.png') }}" alt="image">
 </div>
</div>
</div>
</div>
</div>
</div>
</section>











<section class="funfacts-area ptb-70 pt-0">
<div class="container">
<div class="section-title">
<h2>We always try to understand customers expectation</h2>
<div class="bar"></div>
<p>Monitor your credit score, debt-to-income ratio, and budget on a regular basis.</p>
</div>
<div class="row">
<div class="col-lg-3 col-sm-3 col-md-3 col-6">
<div class="funfact">
<h3><span class="odometer" data-count="180">00</span>K</h3>
<p>Downloaded</p>
</div>
</div>
<div class="col-lg-3 col-sm-3 col-md-3 col-6">
<div class="funfact">
<h3><span class="odometer" data-count="20">00</span>K</h3>
<p>Feedback</p>
</div>
</div>
<div class="col-lg-3 col-sm-3 col-md-3 col-6">
<div class="funfact">
<h3><span class="odometer" data-count="500">00</span>+</h3>
<p>Workers</p>
</div>
</div>
<div class="col-lg-3 col-sm-3 col-md-3 col-6">
<div class="funfact">
<h3><span class="odometer" data-count="70">00</span>+</h3>
<p>Contrubutors</p>
</div>
</div>
</div>
<div class="contact-cta-box">
<h3>Have any question about us?</h3>
<p>Don't hesitate to contact us support@fxbitozglobals.com</p>

</div>
<div class="map-bg">
<img src="{{ asset('assets1/img/map.png') }}" alt="map">
</div>
</div>
</section>


<section class="feedback-area ptb-70 bg-f7fafd" style="background:#f9f9f9; padding:60px 0;">
<div class="container">

  <!-- Trustpilot Header -->
  <div style="text-align:center; margin-bottom:40px;">
    <div style="display:inline-flex; align-items:center; gap:10px; margin-bottom:12px;">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="#00b67a" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
      </svg>
      <span style="font-size:1.5rem; font-weight:800; color:#191919; letter-spacing:-0.5px;">Trustpilot</span>
    </div>
    <div style="display:flex; align-items:center; justify-content:center; gap:8px; margin-bottom:6px;">
      <div style="display:flex; gap:3px;">
        @for($i=0;$i<5;$i++)
        <div style="width:36px; height:36px; background:#00b67a; display:flex; align-items:center; justify-content:center; border-radius:3px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
        @endfor
      </div>
      <span style="font-size:1.1rem; font-weight:700; color:#191919;">4.8 out of 5</span>
    </div>
    <p style="color:#555; font-size:0.95rem; margin:0;">Based on <strong>2,847 reviews</strong> &nbsp;|&nbsp; <span style="color:#00b67a; font-weight:600;">Excellent</span></p>
  </div>

  <!-- Review Cards -->
  <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(280px,1fr)); gap:20px;">

    <!-- Card 1 -->
    <div style="background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 12px rgba(0,0,0,0.07);">
      <div style="display:flex; gap:3px; margin-bottom:14px;">
        @for($i=0;$i<5;$i++)<div style="width:26px;height:26px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
      <h4 style="font-size:1rem; font-weight:700; color:#191919; margin:0 0 10px;">Transfers are instant and seamless</h4>
      <p style="font-size:0.88rem; color:#444; line-height:1.6; margin:0 0 16px;">I've been using Fxbitoz Globals for over a year now. International transfers complete within minutes and the support team is always responsive. Highly recommended!</p>
      <div style="display:flex; align-items:center; gap:10px; border-top:1px solid #f0f0f0; padding-top:14px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0056b3;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:0.9rem;">JM</div>
        <div>
          <div style="font-size:0.85rem;font-weight:700;color:#191919;">James Mitchell</div>
          <div style="font-size:0.78rem;color:#888;">Verified customer &nbsp;·&nbsp; 2 days ago</div>
        </div>
        <div style="margin-left:auto;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div style="background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 12px rgba(0,0,0,0.07);">
      <div style="display:flex; gap:3px; margin-bottom:14px;">
        @for($i=0;$i<5;$i++)<div style="width:26px;height:26px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
      <h4 style="font-size:1rem; font-weight:700; color:#191919; margin:0 0 10px;">My profits doubled in 3 months</h4>
      <p style="font-size:0.88rem; color:#444; line-height:1.6; margin:0 0 16px;">The trading plans offered here are phenomenal. The returns are transparent and my account manager keeps me informed every step of the way. Real and trustworthy platform.</p>
      <div style="display:flex; align-items:center; gap:10px; border-top:1px solid #f0f0f0; padding-top:14px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#28a745;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:0.9rem;">SA</div>
        <div>
          <div style="font-size:0.85rem;font-weight:700;color:#191919;">Sarah Anderson</div>
          <div style="font-size:0.78rem;color:#888;">Verified customer &nbsp;·&nbsp; 5 days ago</div>
        </div>
        <div style="margin-left:auto;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div style="background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 12px rgba(0,0,0,0.07);">
      <div style="display:flex; gap:3px; margin-bottom:14px;">
        @for($i=0;$i<5;$i++)<div style="width:26px;height:26px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
      <h4 style="font-size:1rem; font-weight:700; color:#191919; margin:0 0 10px;">Withdrawal processed same day</h4>
      <p style="font-size:0.88rem; color:#444; line-height:1.6; margin:0 0 16px;">I was skeptical at first but my withdrawal was processed within hours. The customer support team answered all my questions quickly. This is a legitimate banking platform.</p>
      <div style="display:flex; align-items:center; gap:10px; border-top:1px solid #f0f0f0; padding-top:14px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#e74c3c;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:0.9rem;">RK</div>
        <div>
          <div style="font-size:0.85rem;font-weight:700;color:#191919;">Robert Kim</div>
          <div style="font-size:0.78rem;color:#888;">Verified customer &nbsp;·&nbsp; 1 week ago</div>
        </div>
        <div style="margin-left:auto;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div style="background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 12px rgba(0,0,0,0.07);">
      <div style="display:flex; gap:3px; margin-bottom:14px;">
        @for($i=0;$i<5;$i++)<div style="width:26px;height:26px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
      <h4 style="font-size:1rem; font-weight:700; color:#191919; margin:0 0 10px;">Best online banking experience ever</h4>
      <p style="font-size:0.88rem; color:#444; line-height:1.6; margin:0 0 16px;">Opening my account was simple and took less than 5 minutes. The dashboard is clean, easy to navigate, and all my transactions are recorded perfectly. 10/10 experience.</p>
      <div style="display:flex; align-items:center; gap:10px; border-top:1px solid #f0f0f0; padding-top:14px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#9b59b6;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:0.9rem;">OL</div>
        <div>
          <div style="font-size:0.85rem;font-weight:700;color:#191919;">Olivia Laurent</div>
          <div style="font-size:0.78rem;color:#888;">Verified customer &nbsp;·&nbsp; 2 weeks ago</div>
        </div>
        <div style="margin-left:auto;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div style="background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 12px rgba(0,0,0,0.07);">
      <div style="display:flex; gap:3px; margin-bottom:14px;">
        @for($i=0;$i<5;$i++)<div style="width:26px;height:26px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
      <h4 style="font-size:1rem; font-weight:700; color:#191919; margin:0 0 10px;">Secure, reliable and professional</h4>
      <p style="font-size:0.88rem; color:#444; line-height:1.6; margin:0 0 16px;">I've tried several online banks and Fxbitoz Globals stands above them all. The security features are top-notch and I feel my funds are completely safe. Excellent team behind this.</p>
      <div style="display:flex; align-items:center; gap:10px; border-top:1px solid #f0f0f0; padding-top:14px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#e67e22;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:0.9rem;">DT</div>
        <div>
          <div style="font-size:0.85rem;font-weight:700;color:#191919;">David Thompson</div>
          <div style="font-size:0.78rem;color:#888;">Verified customer &nbsp;·&nbsp; 3 weeks ago</div>
        </div>
        <div style="margin-left:auto;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div style="background:#fff; border-radius:8px; padding:24px; box-shadow:0 2px 12px rgba(0,0,0,0.07);">
      <div style="display:flex; gap:3px; margin-bottom:14px;">
        @for($i=0;$i<5;$i++)<div style="width:26px;height:26px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
      <h4 style="font-size:1rem; font-weight:700; color:#191919; margin:0 0 10px;">Amazing returns on investment plans</h4>
      <p style="font-size:0.88rem; color:#444; line-height:1.6; margin:0 0 16px;">Started with a modest investment and the ROI exceeded my expectations. The profit tracking on the dashboard is very clear and I get email updates on every transaction. Love it!</p>
      <div style="display:flex; align-items:center; gap:10px; border-top:1px solid #f0f0f0; padding-top:14px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#1abc9c;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:0.9rem;">AN</div>
        <div>
          <div style="font-size:0.85rem;font-weight:700;color:#191919;">Jane Maddison</div>
          <div style="font-size:0.78rem;color:#888;">Verified customer &nbsp;·&nbsp; 1 month ago</div>
        </div>
        <div style="margin-left:auto;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
        </div>
      </div>
    </div>

  </div>

  <!-- Bottom Trustpilot badge -->
  <div style="text-align:center; margin-top:36px;">
    <div style="display:inline-flex; align-items:center; gap:10px; background:#fff; border-radius:8px; padding:14px 28px; box-shadow:0 2px 10px rgba(0,0,0,0.08);">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="#00b67a"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
      <span style="font-size:0.95rem; color:#555;">Rated <strong style="color:#191919;">Excellent</strong> on</span>
      <span style="font-size:1rem; font-weight:800; color:#191919; letter-spacing:-0.5px;">Trustpilot</span>
      <div style="display:flex; gap:2px;">
        @for($i=0;$i<5;$i++)<div style="width:20px;height:20px;background:#00b67a;border-radius:2px;display:flex;align-items:center;justify-content:center;"><svg width="12" height="12" viewBox="0 0 24 24" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>@endfor
      </div>
    </div>
  </div>

</div>
</section>



<section class="app-download-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="app-image">
<div class="main-image">
<img src="{{ asset('assets1/img/mobile-app1.png') }}" class="wow fadeInLeft" data-wow-delay="0.6s" alt="image">
<img src="{{ asset('assets1/img/mobile-app2.png') }}" class="wow fadeInUp" data-wow-delay="0.9s" alt="image">
</div>
<div class="main-mobile-image">
<img src="{{ asset('assets1/img/main-mobile.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="image">
</div>
<div class="circle-img">
<img src="{{ asset('assets1/img/circle.png') }}" alt="image">
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="app-download-content">
<h2>You can find all the thing you need to payout</h2>
<div class="bar"></div>
<p>Find a card that suits your needs
We have different credit cards for different needs. Explore a category to learn more.</p>
<div class="btn-box">
<a href="#" class="app-store-btn">
<i class="flaticon-apple"></i>
Download on
<span>App Store</span>
</a>
<a href="#" class="play-store-btn">
<i class="flaticon-play-store"></i>
Download on
 <span>Google play</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="account-create-area">
<div class="container">
<div class="account-create-content">
<h2>Apply for an account in minutes</h2>
<p>Contact us</p>
<p>support@fxbitozglobals.com</p>
</div>
</div>
</section>

@include('home.footer')