<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rapid Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Rapid
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">SunTech</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <!--<li><a class="nav-link scrollto" href="#about">About</a></li>-->
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            @if(Auth::check() && Auth::user()->name !== null)  
            <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('profile.edit')}}">Profile</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </ul>
            @else 
              <li><a class="nav-link scrollto " href="{{ route('login') }}">Entrar</a></li>
              <li><a class="nav-link scrollto " href="{{ route('register') }}">Registrar-se</a></li>
            @endif
            </li>
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
      <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center" data-aos="fade-up">
          <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
            <h2>Transformando o Sol <br>em Energia para o Seu <span>Lar!</span></h2>
            <div>
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>

          <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/intro-img.png" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section>
  <!-- End Hero -->

  <main id="main">

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
                <h2>Quem Somos Nois?</h2>
                <h3>Somos a SunTech, uma empresa apaixonada por tornar a energia solar acessível a todos. Acreditamos que a sustentabilidade e a independência energética não são luxos, mas direitos de todos os lares.</h3>
                <p>Nossa jornada começou com a visão de um futuro mais limpo e econômico, onde cada casa pudesse gerar sua própria eletricidade a partir do sol. Desde então, dedicamos nossos esforços a criar soluções personalizadas de energia solar que se encaixam nas necessidades de nossos clientes.</p>
                <p>Nossa equipe é composta por especialistas em energia solar altamente qualificados, comprometidos em fornecer os sistemas mais eficientes e confiáveis. Cada projeto que empreendemos é tratado com cuidado e atenção aos detalhes, garantindo que sua transição para a energia solar seja tranquila e econômica.</p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Especialistas altamente qualificados em energia solar</li>
                  <li><i class="bi bi-check-circle"></i> Sistemas de energia solar adaptados às necessidades específicas de cada cliente.</li>
                  <li><i class="bi bi-check-circle"></i> Dedicados a promover um futuro mais limpo e sustentável por meio da energia solar</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </section>
    <!-- End About Section -->

    <!--
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row g-5">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
        <div class=" box">
            <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>

      </div>
    </section> -->

    <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">

          <header class="section-header">
            <h3>Porque nos escolher?</h3>
            <p>Na SolarTech, oferecemos muito mais do que apenas sistemas de energia solar. Oferecemos a você a oportunidade de fazer parte de um futuro mais sustentável e econômico.</p>
          </header>

          <div class="row">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="why-us-img">
                <img src="assets/img/why-us.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="why-us-content">
                <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
                <p>
                  Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                  et temporibus. Labore est odio.

                  Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
                </p>

                <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                  <h4>Experiência e Conhecimento</h4>
                  <p>Nossa equipe é composta por especialistas em energia solar altamente experientes, prontos para criar a solução perfeita para suas necessidades específicas.</p>
                </div>

                <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                  <h4>Parceria de Longo Prazo</h4>
                  <p>Quando você escolhe a SolarEnergia, está escolhendo uma parceria duradoura. Estamos comprometidos em acompanhá-lo em sua jornada de energia solar e a contribuir para seu sucesso contínuo.</p>
                </div>

                <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                  <h4>Transparência e Educação</h4>
                  <p>Queremos que você compreenda completamente o funcionamento de seu sistema solar e os benefícios que ele oferece. Estamos aqui para responder a todas as suas perguntas e ajudá-lo a tomar decisões informadas.</p>
                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="container">
          <div class="row counters" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>

          </div>

        </div>
      </section>
    <!-- End Why Us Section -->

    <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3 class="cta-title">Call To Action</h3>
              <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>
      </section>
    <!--  End Call To Action Section -->

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
      </section>
    <!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3 class="section-title">Our Portfolio</h3>
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
                    <a href="assets/img/portfolio/app1.jpg" data-gallery="portfolioGallery" title="App 1" class="link-preview portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/web3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/app2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/card2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/web2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/card1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
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
                    <a href="assets/img/portfolio/web1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>
    <!-- ======= End Portfolio Section ======= -->

    <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

          <header class="section-header">
            <h3>Testimonials</h3>
          </header>

          <div class="row justify-content-center">
            <div class="col-lg-8">

              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <p>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <p>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <p>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      </p>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>

        </div>
      </section>
    <!-- ======= End Testimonials Section ======= -->

    <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3>Team</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

          <header class="section-header">
            <h3>Our Clients</h3>
          </header>

          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section>
    <!-- ======= End Clients Section=======  -->

    <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing section-bg wow fadeInUp">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h3>Preços</h3>
            <p>aqui fica os precinhos</p>
          </header>
          <div class="row flex-items-xs-middle flex-items-xs-center">
            
            <!-- Basic Plan  -->
              <div class="col-xs-12 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>5.000<span class="period"></span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Pacote Comum 
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item" id="cudeburra">3 Painéis Solares (Módulos Fotovoltaicos)</li>
                      <!-- <li class="list-group-item">3 Painéis Solares (Módulos Fotovoltaicos)</li>
                      <li class="list-group-item">Inversor Solar de Qualidade</li>
                      <li class="list-group-item">Estrutura de Montagem para Telhado</li>
                      <li class="list-group-item">Caixa de Conexão DC</li>
                      <li class="list-group-item">Medidor de Energia Bidirecional</li>
                      <li class="list-group-item">Disjuntores e Fusíveis Adequados</li>
                      <li class="list-group-item">Cabos e Condutores</li>
                      <li class="list-group-item">Monitoramento Básico do Sistema</li>
                      <li class="list-group-item">Instalação Profissional</li> -->
                    </ul>
                    @if(auth()->check() && auth()->user()->cep == null)
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cepModal" class="btn">Escolher Plano</a>
                    @else
                    <a href="#" data-bs-toggle="modal" data-bs-target="#basicPlanModal" class="btn">Escolher Plano</a>
                    @endif
                  </div>
                </div>
              </div>
            <!-- End Basic Plan  -->

            <!-- Regular Plan  -->
              <div class="col-xs-12 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>8.500<span class="period"></span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Pacote Pro
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item">6 Painéis Solares (Módulos Fotovoltaicos)</li>
                    </ul>
                    @if(auth()->check() && auth()->user()->cep == null)
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cepModal" class="btn">Escolher Plano</a>
                    @else
                    <a href="#" data-bs-toggle="modal" data-bs-target="#regularPlanModal" class="btn">Escolher Plano</a>
                    @endif
                  </div>
                </div>
              </div>
            <!-- End Regular Plan  -->

            <!-- Premium Plan  -->   
              <div class="col-xs-12 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>12.000<span class="period"></span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Pacote Premium
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item">9 Painéis Solares (Módulos Fotovoltaicos)</li>
                    </ul>
                    @if(auth()->check() && auth()->user()->cep == null)
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cepModal" class="btn">Escolher Plano</a>
                    @else
                    <a href="#" data-bs-toggle="modal" data-bs-target="#premiunPlanModal" class="btn">Escolher Plano</a>
                    @endif
                  </div>
                </div>
              </div>
            <!-- end Premium Plan  -->

            <!-- custom Plan  -->
              <div class="col-xs-12 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>12.000<span class="period"></span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Pacote Personalizado
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item">X Painéis Solares (Módulos Fotovoltaicos)</li>
                    </ul>
                    @if(auth()->check() && auth()->user()->cep == null)
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cepModal" class="btn">Escolher Plano</a>
                    @else
                    <a  href="#" data-bs-toggle="modal" data-bs-target="#customPlanModal" class="btn">Escolher Plano</a>
                    @endif
                  </div>
                </div>
              </div>
            <!-- end custom Plan  -->

        <!------------------- MODALS ------------------->
            <!-- verificar de tem cep -->
              @if(auth()->check() && auth()->user()->cep == null)
                <div class="modal fade" id="cepModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Conteúdo do modal vai aqui -->
                        <section id="economy" >
                          <h1>Nos Informe Seu Cep</h1>
                          <form id="cepModalForm" method="post" action="{{ route('saveCep') }}">
                            @csrf
                              <label for="cepUsuario"> Cep: </label>
                              <input type="text" id="cepUsuario" name="cepUsuario" required>
                              <button type="submit">Confirmar Cep</button>
                          </form>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            <!-- verificar de tem cep -->

            <!-- basic Modal -->
              <div class="modal fade" id="basicPlanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Conteúdo do modal vai aqui -->
                      <section id="economy" >
                        <h1>Plano Basico</h1>
                        <h2>Confirme Seus Dados e Finalize Sua Compra</h2>
                  
                        <form id="basicModalForm" method="post" action="{{ route('finalizarCompra') }}">
                          @csrf
                            <label for="planoEscolhido"> Plano Escolhido: </label>
                            <input type="text" id="planoEscolhido" name="planoEscolhido" value="{{ $pacotes[0]->nome }}" readonly>
                            @if(auth()->check() && isset(Auth::user()->id))
                            <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                            @endif
                            <br>
                          
                            <label for="quantidade"> Quantidade de placas: </label>
                            <input type="number" id="quantidade" name="quantidade" value="{{ $pacotes[0]->quantidadePlacas }}" readonly>
                            
                            <br>

                            <label for="valorFinal"> Valor Final: </label>
                            <input type="number" id="valorFinal" name="valorFinal" value="{{ $pacotes[0]->valorFinal }}" readonly>
                            
                            <br>
                            
                            <label for="numero_casa"> numero da casa </label>
                              @if(Auth::check() && Auth::user()->name !== null) 
                                <input type="number" id="numero_casa" name="numero_casa" value="{{ Auth::user()->numero_casa }}" required>
                              @else
                                <input type="number" id="numero_casa" name="numero_casa" value="" required>
                              @endif

                            <br>
                            
                            <label for="logradouro"> logradouro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="logradouro" name="logradouro" value="{{ Auth::user()->logradouro }}" required>
                              @else
                                <input type="text" id="logradouro" name="logradouro" value="" required>
                              @endif

                            <br>

                            <label for="bairro"> bairro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="bairro" name="bairro" value = "{{ Auth::user()->bairro }}" required>
                              @else
                                <input type="text" id="bairro" name="bairro" value = "" required>
                              @endif

                            <br>

                            <label for="cidade"> cidade </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="cidade" name="cidade" value="{{ Auth::user()->cidade }}" required>
                              @else
                                <input type="text" id="cidade" name="cidade" value="" required>
                              @endif

                            <br>

                            <label for="estado"> estado </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="estado" name="estado" value="{{ Auth::user()->estado }}" required>
                              @else
                                <input type="text" id="estado" name="estado" value="" required>
                              @endif

                            <br>

                            <button type="submit">Finalizar Compra</button>
                        </form>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end basic Modal -->

            <!-- regular Modal -->
              <div class="modal fade" id="regularPlanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Conteúdo do modal vai aqui -->
                      <section id="economy" >
                        <h1>Plano Regular</h1>
                        <h2>Confirme Seus Dados e Finalize Sua Compra</h2>
                  
                        <form id="regularModalForm" method="post" action="{{ route('finalizarCompra') }}">
                          @csrf
                          <label for="planoEscolhido"> Plano Escolhido: </label>
                            <input type="text" id="planoEscolhido" name="planoEscolhido" value="{{ $pacotes[1]->nome }}" readonly>
                            @if(auth()->check() && isset(Auth::user()->id))
                            <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                            @endif
                            <br>
                          
                            <label for="quantidade"> Quantidade de placas: </label>
                            <input type="number" id="quantidade" name="quantidade" value="{{ $pacotes[1]->quantidadePlacas }}" readonly>
                            
                            <br>

                            <label for="valorFinal"> Valor Final: </label>
                            <input type="number" id="valorFinal" name="valorFinal" value="{{ $pacotes[1]->valorFinal }}" readonly>
                            
                            <br>
                            
                            <label for="numero_casa"> numero da casa </label>
                              @if(Auth::check() && Auth::user()->name !== null) 
                                <input type="number" id="numero_casa" name="numero_casa" value="{{ Auth::user()->numero_casa }}" required>
                              @else
                                <input type="number" id="numero_casa" name="numero_casa" value="" required>
                              @endif

                            <br>
                            
                            <label for="logradouro"> logradouro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="logradouro" name="logradouro" value="{{ Auth::user()->logradouro }}" required>
                              @else
                                <input type="text" id="logradouro" name="logradouro" value="" required>
                              @endif

                            <br>

                            <label for="bairro"> bairro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="bairro" name="bairro" value = "{{ Auth::user()->bairro }}" required>
                              @else
                                <input type="text" id="bairro" name="bairro" value = "" required>
                              @endif

                            <br>

                            <label for="cidade"> cidade </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="cidade" name="cidade" value="{{ Auth::user()->cidade }}" required>
                              @else
                                <input type="text" id="cidade" name="cidade" value="" required>
                              @endif

                            <br>

                            <label for="estado"> estado </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="estado" name="estado" value="{{ Auth::user()->estado }}" required>
                              @else
                                <input type="text" id="estado" name="estado" value="" required>
                              @endif

                            <br>

                            
                            <button type="submit"  data-bs-dismiss="modal" aria-label="Close">Comprar</button>
                        </form>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end regular Modal -->

            <!-- premiun Modal -->
              <div class="modal fade" id="premiunPlanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Conteúdo do modal vai aqui -->
                      <section id="economy" >
                        <h1>Plano Premiun</h1>
                        <h2>Confirme Seus Dados e Finalize Sua Compra</h2>
                  
                        <form id="premiunModalForm" method="post" action="{{ route('finalizarCompra') }}">
                          @csrf
                          <label for="planoEscolhido"> Plano Escolhido: </label>
                            <input type="text" id="planoEscolhido" name="planoEscolhido" value="{{ $pacotes[2]->nome }}" readonly>
                            @if(auth()->check() && isset(Auth::user()->id))
                            <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                            @endif
                            <br>
                          
                            <label for="quantidade"> Quantidade de placas: </label>
                            <input type="number" id="quantidade" name="quantidade" value="{{ $pacotes[2]->quantidadePlacas }}" readonly>
                            
                            <br>

                            <label for="valorFinal"> Valor Final: </label>
                            <input type="number" id="valorFinal" name="valorFinal" value="{{ $pacotes[2]->valorFinal }}" readonly>
                            
                            <br>
                            
                            <label for="numero_casa"> numero da casa </label>
                              @if(Auth::check() && Auth::user()->name !== null) 
                                <input type="number" id="numero_casa" name="numero_casa" value="{{ Auth::user()->numero_casa }}" required>
                              @else
                                <input type="number" id="numero_casa" name="numero_casa" value="" required>
                              @endif

                            <br>
                            
                            <label for="logradouro"> logradouro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="logradouro" name="logradouro" value="{{ Auth::user()->logradouro }}" required>
                              @else
                                <input type="text" id="logradouro" name="logradouro" value="" required>
                              @endif

                            <br>

                            <label for="bairro"> bairro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="bairro" name="bairro" value = "{{ Auth::user()->bairro }}" required>
                              @else
                                <input type="text" id="bairro" name="bairro" value = "" required>
                              @endif

                            <br>

                            <label for="cidade"> cidade </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="cidade" name="cidade" value="{{ Auth::user()->cidade }}" required>
                              @else
                                <input type="text" id="cidade" name="cidade" value="" required>
                              @endif

                            <br>

                            <label for="estado"> estado </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="estado" name="estado" value="{{ Auth::user()->estado }}" required>
                              @else
                                <input type="text" id="estado" name="estado" value="" required>
                              @endif

                            <br>

                            
                            <button type="submit"  data-bs-dismiss="modal" aria-label="Close">Comprar</button>
                        </form>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end premiun Modal -->

            <!-- custom Plam Modal -->
              <div class="modal fade" id="customPlanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Conteúdo do modal vai aqui -->
                      <section id="economy" >
                        <h1>Plano Personalizado</h1>
                        <h2>Monte Seu Plano Personalizado</h2>
                  
                        <form id="customPlanModalForm">

                            <label for="pacotesCustom">
                              Escolha seu Pacote Base
                              <br>
                              <span class="subtitulo">(a base do pacote ira definir a qualidade dos demais itens)</span>
                            </label>
                            <select id="pacotesCustom" name="pacotesCustom">
                              @foreach($pacotes as $pacote)
                                <option value="{{ $pacote->valor }}">{{ $pacote->nome }}</option>
                              @endforeach
                            </select>

                            <br>

                            <label for="quantidadeCustom">
                              Quantidade de placas:
                              <br>
                              <span class="subtitulo">(Informe o Numero de Placas Desejadas Para o Pacote)</span>
                            </label>
                            <input type="number" id="quantidadeCustom" name="quantidadeCustom" required>
                            
                            <br>

                            <button type="submit">Montar Pacote Custom</button>
                        </form>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end custom Plam Modal -->

            <!-- finalizar compra custom plan modal -->
              <div class="modal fade" id="finalCustomPlanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Conteúdo do modal vai aqui -->
                        <section id="economy" >
                          <h1>Plano Personalizado</h1>
                          <h2>Confirme Seus Dados e Finalize Sua Compra</h2>
                    
                          <form id="customPlanModalForm">
                              <label for="pacoteEscohido">
                                Pacote Base Escolhido :
                                <br>
                                <span class="subtitulo">(a base do pacote ira definir a qualidade dos demais itens)</span>
                              </label>
                              <input type="text" id="pacoteEscohido" name="pacoteEscohido" readonly>
                              
                              @if(auth()->check() && isset(Auth::user()->id))
                              <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                              @endif
                              <br>

                              <label for="quantidadeEscolhida">
                                Quantidade de placas Escolhida :
                                <br>
                                <span class="subtitulo">(Informe o Numero de Placas Desejadas Para o Pacote)</span>
                              </label>
                              <input type="number" id="quantidadeEscolhida" name="quantidadeEscolhida" readonly>

                              <br>

                              <label for="numero_casa"> numero da casa </label>
                              @if(Auth::check() && Auth::user()->name !== null) 
                                <input type="number" id="numero_casa" name="numero_casa" value="{{ Auth::user()->numero_casa }}" required>
                              @else
                                <input type="number" id="numero_casa" name="numero_casa" value="" required>
                              @endif

                            <br>
                            
                            <label for="logradouro"> logradouro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="logradouro" name="logradouro" value="{{ Auth::user()->logradouro }}" required>
                              @else
                                <input type="text" id="logradouro" name="logradouro" value="" required>
                              @endif

                            <br>

                            <label for="bairro"> bairro </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="bairro" name="bairro" value = "{{ Auth::user()->bairro }}" required>
                              @else
                                <input type="text" id="bairro" name="bairro" value = "" required>
                              @endif

                            <br>

                            <label for="cidade"> cidade </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="cidade" name="cidade" value="{{ Auth::user()->cidade }}" required>
                              @else
                                <input type="text" id="cidade" name="cidade" value="" required>
                              @endif

                            <br>

                            <label for="estado"> estado </label>
                              @if(Auth::check() && Auth::user()->name !== null)
                                <input type="text" id="estado" name="estado" value="{{ Auth::user()->estado }}" required>
                              @else
                                <input type="text" id="estado" name="estado" value="" required>
                              @endif

                              <br>

                              <button type="submit">Enviar</button>
                          </form>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- end finalizar compra custom plan modal -->

        <!------------------- END MODALS ------------------->

          </div>
        </div>

      </section>
    <!-- ======= End Pricing Section ======= -->

    <!-- ======= Budget Section ======= -->
      <section id="budget" >
        <h1>Orçamento</h1>
        <h2>Faça aqui seu orçamento</h2>

        <form id="budget-form" method="POST" >
          @csrf
            <label for="valorPacote">Escolha Seu Pacote:</label>
            <select id="valorPacote" name="valorPacote">
              @foreach($pacotes as $pacote)
                <option value="{{ $pacote->valorFinal }}">{{ $pacote->nome }}</option>
              @endforeach
            </select>
            <br>
            <label for="quantidadeAdicionalPlaca">
              Quantidade de placas adicionais:
              <br>
              <span class="subtitulo">(Informe o Numero de Placas Adicionais Desejadas)</span>
            </label>
            <input type="number" id="quantidadeAdicionalPlaca" name="quantidadeAdicionalPlaca" required>
            <br>
            <label for="resultado">Resultado:</label>
            <input type="number" id="resultado" name="resultado" readonly>
            <button type="submit">Enviar</button>
        </form>
      </section> 
    <!-- ======= End Budget Section ======= -->

    <!-- ======= economy Section ======= -->
      <section id="economy" >
        <h1>Economia</h1>
        <h2>Calcule aqui a economia que voce tera ao comprar nosso produto</h2>

        <form id="economy-form">
            <label for="quantidadePlacas">Escolha o pacote:</label>
            <select id="quantidadePlacas" name="quantidadePlacas"> 
              @foreach($pacotes as $pacote)
                <option value="{{ $pacote->valor }}">{{ $pacote->nome }}</option>
              @endforeach
            </select>

            <br>
            <label for="quantidadeAdicional">
              Quantidade de placas adicionais:
              <br>
              <span class="subtitulo">(Caso adquira mais placas além das que vêm no pacote)</span>
            </label>
            <input type="number" id="quantidadeAdicional" name="quantidadeAdicional" required>
            
            <br>
            <label for="consumoMedio">
              Consumo Medio(kWh):
              <br>
              <span class="subtitulo">(Informe o consumo médio da sua residência.)</span>
            </label>
            <input type="number" id="consumoMedio" name="consumoMedio" required>

            <br>
            <span id="economyOutput"></span>
            <br>
            <button type="submit">Enviar</button>
        </form>
      </section> 
    <!-- ======= End economy Section ======= -->

    <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h3>Perguntas Frequentes</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </header>

          <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">

            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1"> Como funciona a instalação de energia solar em minha residência?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Nossa equipe de especialistas em energia solar fará uma avaliação completa de sua residência para determinar o melhor local para a instalação dos painéis solares. Em seguida, instalaremos os painéis, o inversor e todos os componentes necessários para garantir um sistema eficiente. Após a instalação, você estará gerando sua própria eletricidade limpa a partir da luz do sol.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Quais são os benefícios de adotar energia solar? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  A energia solar oferece diversos benefícios, incluindo a redução significativa nas contas de eletricidade, a redução da pegada de carbono, o aumento do valor da propriedade e a independência em relação às oscilações nas tarifas de energia elétrica.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Quanto tempo dura a vida útil dos painéis solares? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Os painéis solares têm uma vida útil média de 25 a 30 anos. Ao longo desse período, eles geralmente mantêm uma alta eficiência na geração de energia.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Os painéis solares requerem manutenção regular?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  A manutenção de sistemas solares é mínima. Recomendamos a limpeza ocasional dos painéis para remover poeira e sujeira, bem como inspeções regulares para garantir que todos os componentes estejam funcionando corretamente. Oferecemos serviços de manutenção para garantir o desempenho ideal do seu sistema.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq5" class="collapsed question"> É possível armazenar energia solar para uso noturno ou em dias nublados? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sim, é possível adicionar um sistema de armazenamento de bateria ao seu sistema solar para armazenar o excesso de energia gerada durante o dia para uso à noite ou em momentos de pouca luz solar.
                </p>
              </div>
            </li>

            <li>
              <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Qual é o prazo típico de retorno do investimento (ROI) ao adotar energia solar?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  O prazo de ROI varia dependendo do tamanho do sistema, das tarifas de energia elétrica locais e dos incentivos fiscais disponíveis. Em média, muitos clientes veem um retorno de investimento em 5 a 7 anos, mas isso pode ser mais curto com incentivos fiscais e subsídios locais. 
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>
    <!-- ======= End F.A.Q Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">
      <div class="footer-top">
        <div class="container">

          <div class="row">

            <div class="col-lg-6">

              <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Rapid</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#about">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      A108 Adam Street <br>
                      New York, NY 535022<br>
                      United States <br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>

                </div>

              </div>

            </div>

            <div class="col-lg-6">

              <div class="form">

                <h4>Send us a message</h4>
                <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>

                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>

              </div>

            </div>

          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/home.js"></script>

</body>

</html>