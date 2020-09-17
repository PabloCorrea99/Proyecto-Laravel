@extends('layouts.master')

@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-5 col-md-6">
        <div class="about-img" data-aos="fade-right" data-aos-delay="100">
          <img src="assets/img/about-img.jpg" alt="">
        </div>
      </div>

      <div class="col-lg-7 col-md-6">
        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
          <h2>Sobre Nosotros</h2>
          <h3>¿De donde sale?</h3>
          <p>El Foro Techsolver es un foro hispanohablante enfocado totalmente a la tecnología (programación, videojuegos, hardware…), en donde las personas podrán compartir dudas, noticias, conocimiento u opinión, sobre todo lo relacionado a tecnología. </p>
          <p>Con el foro se pretende aportar al crecimiento de la cultura tecnológica en toda Latinoamérica, puesto que se considera que aun es bastante pobre a comparación con el resto del mundo.</p>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i> Iniciativa Colombiana.</li>
            <li><i class="ion-android-checkmark-circle"></i> Queremos que cada día crezca mas la cultura tecnologica.</li>
            <li><i class="ion-android-checkmark-circle"></i> Vamos a ser un referente en el mundo tecnologico hispanohablante.</li>
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
      <h3>Temas Que Puedes Encontrar</h3>
      <p>En este foro puedes hablar de cualquier tema relacionado con tecnología, pero estos son los principales.</p>
    </header>

    <div class="row">

      <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href="">Videojuegos</a></h4>
          <p class="description">Todo lo relacionado con esto que tanto nos gusta, ultimas noticias de lo que pasa día a día.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="box">
          <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
          <h4 class="title"><a href="">Programación</a></h4>
          <p class="description">Noticias sobre lo nuevo que va pasando en este mundo o también publicaciones para mostar código o resolver dudas.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="box">
          <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
        <div class="box">
          <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
    <div class=" box">
        <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
        <h4 class="title"><a href="">Nemo Enim</a></h4>
        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
      <div class="box">
        <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
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
        <h3 class="cta-title">Crea Tu Cuenta Hoy!</h3>
        <p class="cta-text"> Para disfrutar al maximo de nuestra página, es vital que tengas una cuenta. Por eso, te invitamos a crearla hoy mismo, ES MUY FACIL!</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">Call To Action</a>
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
        <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
        <p>
          Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
        </p>
        <p>
          Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
        </p>
      </div>
    </div>

    <div class="row feature-item mt-5 pt-5">
      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
        <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
        <p>
          Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
        </p>
        <p>
          Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
        </p>
        <p>
          Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
        </p>
      </div>

    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3 class="section-title">Productos Recomendados</h3>
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
      <h3>Nuestro Equipo</h3>
      <p>Te queremos presentar al equipo que hizo realidad esta página.</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Pablo Correa</h4>
              <span>Aquitecto</span>
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
          <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Miguel Restrepo</h4>
              <span>Desarrollador</span>
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

      <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Santiago Rodriguez</h4>
              <span>Desarrollador</span>
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
      <h3>Marcas que recomendamos</h3>
    </header>

    <div class="owl-carousel clients-carousel">
      <img src="assets/img/clients/client-1.png" alt="">
      <img src="assets/img/clients/client-2.png" alt="">
      <img src="assets/img/clients/client-3.png" alt="">
      <img src="assets/img/clients/client-4.png" alt="">
      <img src="assets/img/clients/client-5.png" alt="">
      <img src="assets/img/clients/client-6.png" alt="">
      <img src="assets/img/clients/client-7.png" alt="">
      <img src="assets/img/clients/client-8.png" alt="">
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Pricing Section ======= -->
<!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3>Preguntas Frecuentes</h3>
      <p>Un poquito de las preguntas que mas se ven en el foro</p>
    </header>

    <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
      <li>
        <a data-toggle="collapse" class="collapsed" href="#faq1">Necesito un super computador para ser programador? <i class="ion-android-remove"></i></a>
        <div id="faq1" class="collapse" data-parent="#faq-list">
          <p>
            En realidad no, es mas, si vas a hacer programas básicos (aplicaciones web sencillas o algoritmos de baja complejidad), puedes tener cualquier clase de PC y estarás bien.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq2" class="collapsed">Una Placa Madre Intel me sirve para un procesador AMD? <i class="ion-android-remove"></i></a>
        <div id="faq2" class="collapse" data-parent="#faq-list">
          <p>
            NO! Cada marca de procesadores tiene sus propias lineas de placas madre y en algunos casos dentro de la misma marca hay diferente Placa Madre para algunos procesadores (Ej: Ryzen Threadripper).
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq3" class="collapsed">Necesito ser un genio o genia para saber programar? <i class="ion-android-remove"></i></a>
        <div id="faq3" class="collapse" data-parent="#faq-list">
          <p>
            No, para nada.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq4" class="collapsed">Cúal consola es mejor PlayStation o Xbox? <i class="ion-android-remove"></i></a>
        <div id="faq4" class="collapse" data-parent="#faq-list">
          <p>
            Cualquiera de Nintendo por los exclusivos :)
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq5" class="collapsed">Necesito tener una tarjeta gráfica para poder jugar videojuegos? <i class="ion-android-remove"></i></a>
        <div id="faq5" class="collapse" data-parent="#faq-list">
          <p>
            No necesariamente, desde que tengas un procesador con gráficos integrados ya podes tener un PC, lo que si es que las tarjetas gráficas dedicadas van a brindarte un mejor randimiento que los gráficos integrados.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq6" class="collapsed">Cúal es el mejor lenguaje de programación? <i class="ion-android-remove"></i></a>
        <div id="faq6" class="collapse" data-parent="#faq-list">
          <p>
            Todo depende de las necesidades de tu sistema y de las habilidades de los integrantes del equipo de desarrollo.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End F.A.Q Section -->

@endsection
