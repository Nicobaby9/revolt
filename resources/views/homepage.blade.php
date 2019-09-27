@extends('template')

@section('intro-header')

<!-- About Section -->
<section class="page-section about-revolt" id="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="text-white mt-0">Profil Revolt Factory</h2>
        <hr class="divider light my-4">
        <p class="text-white-50 mb-4">Kami telah melayani kebutuhan konsumen Kaos dan Kemeja di Indonesia sejak tahun 2013.
            Produk konveksi yang dipesan akan kami produksi sesuai dengan permintaan dan kebutuhan Anda.
            Pesanan Anda akan dikerjakan secara profesional oleh para tenaga kerja berpengalaman.
            Semoga Bapak/Ibu sekalian berkenan menjalin kerja sama dengan kami.</p>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
      </div>
    </div>
  </div>
</section>

@endsection

@section('main')

<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">At Our Service</h2>
    <hr class="divider my-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-industry text-warning mb-4"></i>
          <h3 class="h4 mb-2">Garment Industry</h3>
          <p class="text-muted mb-0">Our company are always following fashion update and trends.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-tags text-warning mb-4"></i>
          <h3 class="h4 mb-2">Save Your Money</h3>
          <p class="text-muted mb-0">You can make an order with low price but have good quality.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-edit text-warning mb-4"></i>
          <h3 class="h4 mb-2">Easy Design</h3>
          <p class="text-muted mb-0">You can this design as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-heart text-warning mb-4"></i>
          <h3 class="h4 mb-2">Made with Love</h3>
          <p class="text-muted mb-0">we always made the product with love?</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="{{ asset('Front-End/img/portfolio/fullsize/rvlt-full.jpg') }}">
          <img class="img-fluid" src="{{ asset('Front-End/img/portfolio/thumbnails/rvlt-3.jpg') }}" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              T-shirt
            </div>
            <div class="project-name">
              Revolt Factory T-shirt
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="{{ asset('Front-End/img/portfolio/fullsize/rvlt.jpg') }}">
          <img class="img-fluid" src="{{ asset('Front-End/img/portfolio/thumbnails/rvlt.jpg') }}" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              T-shirt
            </div>
            <div class="project-name">
              Revolt Factory T-shirt
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="{{ asset('Front-End/img/portfolio/fullsize/rvlt-spring-full.jpg') }}">
          <img class="img-fluid" src="{{ asset('Front-End/img/portfolio/thumbnails/rvlt-spring.jpg') }}" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Screen Printing
            </div>
            <div class="project-name">
              Screen Printing Example
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="{{ asset('Front-End/img/portfolio/fullsize/rvlt-print-full.jpg') }}">
          <img class="img-fluid" src="{{ asset('Front-End/img/portfolio/thumbnails/rvlt-print-thumb.jpg') }}" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="{{ asset('Front-End/img/portfolio/fullsize/rvlt-wayang-full.jpg') }}">
          <img class="img-fluid" src="{{ asset('Front-End/img/portfolio/thumbnails/rvlt-wayang.jpg') }}" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="{{ asset('Front-End/img/portfolio/fullsize/rvlt-vav-full.jpg') }}">
          <img class="img-fluid" src="{{ asset('Front-End/img/portfolio/thumbnails/rvlt-vav.jpg') }}" alt="">
          <div class="portfolio-box-caption p-3">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="rvlt-print" id="section-bg-order">
    {{--  //<h2 class="mb-4">Check Out the Catalog on Instagram</h2>  --}}
    {{--  //<a class="btn btn-light btn-xl" href="https://www.instagram.com/yudho.alfantyo"  target="_blank">Follow Me on Instagram!</a>  --}}
    {{-- //<img src="{{ asset('Front-End/img/portfolio/fullsize/rvlt-order.png') }}"> --}}
</section>

{{-- FEEDBACK --}}

<section id="feedback">

  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="{{ route('feedback.store') }}" method="POST">
        @csrf
      <span class="contact100-form-title">
      <h1 class="H1-feedback">FEEDBACK</h1>
      </span>
        <div class="wrap-input100 validate-input" data-validate="Please enter your name">
          <input class="input100" type="text" name="fullname" placeholder="Full Name" required>
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
          <input class="input100" type="email" name="email" placeholder="E-mail" required>
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Please enter your message">
          <textarea class="input100" name="message" placeholder="Your Message" required></textarea>
          <span class="focus-input100"></span>
        </div>
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" type="submit" value="Post">
            <span>
              <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
              Send
            </span>
          </button>
        </div>
      </form>
    </div>
    </div>
    
    <div id="dropDownSelect1"></div>
    
    <script src="{{ asset('Front-End/Form/vendor/jquery/jquery-3.2.1.min.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script src="{{ asset('Front-End/Form/vendor/animsition/js/animsition.min.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script src="{{ asset('Front-End/Form/vendor/bootstrap/js/popper.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    <script src="{{ asset('Front-End/Form/vendor/bootstrap/js/bootstrap.min.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script src="{{ asset('Front-End/Form/vendor/select2/select2.min.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script src="{{ asset('Front-End/Form/vendor/daterangepicker/moment.min.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    <script src="{{ asset('Front-End/Form/vendor/daterangepicker/daterangepicker.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script src="{{ asset('Front-End/Form/vendor/countdowntime/countdowntime.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script src="{{ asset('Front-End/Form/js/main.js') }}" type="635466b07daeec02b4a105d5-text/javascript"></script>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="635466b07daeec02b4a105d5-text/javascript"></script>
    <script type="635466b07daeec02b4a105d5-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('Front-End/Form/ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="635466b07daeec02b4a105d5-|49" defer=""></script>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="mt-0">Contact Us Below!</h2>
        <hr class="divider my-4">
        <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
        <div>
          <a href="https://wa.me/+6282136633826/?text=urlencodedtext" target="_blank">+62 8783-7998-122</a>
        </div>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
        <!-- Make sure to change the email address in anchor text AND the link below! -->
        <a class="d-block" href="http://gmail.com" target="_blank">revolthead@gmail.com</a>
      </div>
    </div>
  </div>
</section>

@endsection 