@extends('layouts.master')

@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-5 col-md-6">
        <div class="about-img" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/unnamed (1).png" alt="">
        </div>
      </div>

      <div class="col-lg-7 col-md-6">
        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
          <h2>@lang('messages.FooterAbout')</h2>
          <h3>@lang('messages.AboutQuestion')</h3>
          <p>@lang('messages.AboutTextOne')</p>
          <p>@lang('messages.AboutTextTwo')</p>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i>@lang('messages.AboutListOne')</li>
            <li><i class="ion-android-checkmark-circle"></i>@lang('messages.AboutListTwo')</li>
            <li><i class="ion-android-checkmark-circle"></i>@lang('messages.AboutListThree')</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>@lang('messages.SectionTitle')</h3>
      <p>@lang('messages.SectionSubtitle')</p>
    </header>

    <div class="row">

      <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href="">@lang('messages.SectionTopicOne')</a></h4>
          <p class="description">@lang('messages.SectionTopicOneText')</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="box">
          <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
          <h4 class="title"><a href="">@lang('messages.SectionTopicTwo')</a></h4>
          <p class="description">@lang('messages.SectionTopicTwoText')</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="box">
          <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
          <h4 class="title"><a href="">@lang('messages.SectionTopicThree')</a></h4>
          <p class="description">@lang('messages.SectionTopicThreeText')</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
          <h4 class="title"><a href="">@lang('messages.SectionTopicFour')</a></h4>
          <p class="description">@lang('messages.SectionTopicFourText')</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
    <div class=" box">
        <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
        <h4 class="title"><a href="">@lang('messages.SectionTopicFive')</a></h4>
        <p class="description">@lang('messages.SectionTopicFiveText')</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
      <div class="box">
        <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
        <h4 class="title"><a href="">@lang('messages.SectionTopicSix')</a></h4>
        <p class="description">@lang('messages.SectionTopicSixText')</p>
      </div>
    </div>
  </div>
  </div>
</section><!-- End Services Section -->
<!-- ======= Why Us Section ======= -->
<!-- End Why Us Section -->
@guest
<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
  <div class="container" data-aos="zoom-out">
    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3 class="cta-title">@lang('messages.CreateTitle')</h3>
        <p class="cta-text">@lang('messages.CreateText')</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="{{ route('register') }}">@lang('messages.CreateButton')</a>
      </div>
    </div>

  </div>
</section><!--  End Call To Action Section -->
@else

@endguest
<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <div class="row feature-item">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
        <h4>@lang('messages.FeaturesTitleOne')</h4>
        <p>@lang('messages.FeaturesTextOne')</p>
        <p>@lang('messages.FeaturesTextTwo')</p>
      </div>
    </div>

    <div class="row feature-item mt-5 pt-5">
      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
        <h4>@lang('messages.FeaturesTitleTwo')</h4>
        <p>@lang('messages.FeaturesTextThree')</p>
        <p>@lang('messages.FeaturesTextFour')</p>
      </div>

    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3 class="section-title">@lang('messages.PortofolioTitle')</h3>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">App 1</a></h4>
            <p>App</p>
            <div>
              <a href="assets/img/portfolio/app1.jpg" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Web 3</a></h4>
            <p>Web</p>
            <div>
              <a href="assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">App 2</a></h4>
            <p>App</p>
            <div>
              <a href="assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Card 2</a></h4>
            <p>Card</p>
            <div>
              <a href="assets/img/portfolio/card2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Web 2</a></h4>
            <p>Web</p>
            <div>
              <a href="assets/img/portfolio/web2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">App 3</a></h4>
            <p>App</p>
            <div>
              <a href="assets/img/portfolio/app3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Card 1</a></h4>
            <p>Card</p>
            <div>
              <a href="assets/img/portfolio/card1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Card 3</a></h4>
            <p>Card</p>
            <div>
              <a href="assets/img/portfolio/card3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Web 1</a></h4>
            <p>Web</p>
            <div>
              <a href="assets/img/portfolio/web1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>@lang('messages.TeamTitle')</h3>
      <p>@lang('messages.TeamSubtitle')</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="assets/img/team-1.jpeg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>@lang('messages.TeamMemberOne')</h4>
              <span>@lang('messages.TeamMemberRoleOne')</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/team-2.jpeg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>@lang('messages.TeamMemberTwo')</h4>
              <span>@lang('messages.TeamMemberRoleTwo')</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="zoom-in">

    <header class="section-header">
      <h3>@lang('messages.BrandTitle')</h3>
    </header>

    <div class="owl-carousel clients-carousel">
      <img src="assets/img/clients/client-1.png" alt="">
      <img src="assets/img/clients/client-2.png" alt="">
      <img src="assets/img/clients/client-3.png" alt="">
      <img src="assets/img/clients/client-4.png" alt="">
      <img src="assets/img/clients/client-5.png" alt="">
      <img src="assets/img/clients/client-6.png" alt="">
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Pricing Section ======= -->
<!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3>@lang('messages.FAQTitle')</h3>
      <p>@lang('messages.FAQSubtitle')</p>
    </header>

    <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
      <li>
        <a data-toggle="collapse" class="collapsed" href="#faq1">@lang('messages.FAQOne')<i class="ion-android-remove"></i></a>
        <div id="faq1" class="collapse" data-parent="#faq-list">
          <p>@lang('messages.FAQAnswerOne')</p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq2" class="collapsed">@lang('messages.FAQTwo')<i class="ion-android-remove"></i></a>
        <div id="faq2" class="collapse" data-parent="#faq-list">
          <p>@lang('messages.FAQAnswerTwo')</p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq3" class="collapsed">@lang('messages.FAQThree')<i class="ion-android-remove"></i></a>
        <div id="faq3" class="collapse" data-parent="#faq-list">
          <p>@lang('messages.FAQAnswerThree')</p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq4" class="collapsed">@lang('messages.FAQFour')<i class="ion-android-remove"></i></a>
        <div id="faq4" class="collapse" data-parent="#faq-list">
          <p>@lang('messages.FAQAnswerFour')</p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq5" class="collapsed">@lang('messages.FAQFive')<i class="ion-android-remove"></i></a>
        <div id="faq5" class="collapse" data-parent="#faq-list">
          <p>@lang('messages.FAQAnswerFive')</p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq6" class="collapsed">@lang('messages.FAQSix')<i class="ion-android-remove"></i></a>
        <div id="faq6" class="collapse" data-parent="#faq-list">
          <p>@lang('messages.FAQAnswerSix')</p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End F.A.Q Section -->

@endsection
