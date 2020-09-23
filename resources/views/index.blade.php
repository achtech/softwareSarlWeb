<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Software</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />

  <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

  <!-- Vendor CSS Files -->
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Medicio - v2.0.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> {{__('text.top.menu.horaire')}}
      </div>

      
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> {{__('text.top.menu.call.us')}} +212 6 53 90 36 59
      </div>
      <div class="d-flex align-items-right">
        <a style='color:white' href="{!! url('/') !!}/fr">FR</a> | 
        <a style='color:white' href="{!! url('/') !!}/en">EN</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="index.html" class="logo mr-auto"
          ><img src="../assets/img/logo.png" alt=""
        /></a>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">{{__('text.top.menu.home')}}</a></li>
          <li><a href="#about">{{__('text.top.menu.about')}}</a></li>
          <li><a href="#services">{{__('text.top.menu.services')}}</a></li>
            <li><a href="#departments">{{__('text.top.menu.projects')}}</a></li>
          <li><a href="#doctors">{{__('text.top.menu.team')}}</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
          <li><a href="#contact">{{__('text.top.menu.contact')}}</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <!-- ======= Hero Section ======= -->
    <!-- ======= Hero Section ======= -->
  <section id="hero">
      <div
        id="heroCarousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div
          class="carousel-item active"
          style="background-image: url(../assets/img/slide/slide-1.jpg)"
        >
          <div class="container">
            <h3>{{__('text.slider1.title')}}</h3>
            <p>
            {{__('text.slider1.text')}}
            </p>
            <a href="#about" class="btn-get-started scrollto">{{__('text.about.us.btn')}}</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div
          class="carousel-item"
          style="background-image: url(../assets/img/slide/slide-2.jpg)"
        >
          <div class="container">
            <h3>{{__('text.slider2.title')}}</h3>
            <p>{{__('text.slider2.text')}}</p>
            <a href="#services" class="btn-get-started scrollto">{{__('text.discover.btn')}}</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div
          class="carousel-item"
          style="background-image: url(../assets/img/slide/slide-3.jpg)"
        >
          <div class="container">
            <h3>{{__('text.slider3.title')}}</h3>
            <p>{{__('text.slider3.text')}}</p>
            <a href="#team" class="btn-get-started scrollto">{{__('text.who.we.are.btn')}}</a>
          </div>
        </div>
      </div>

        <a
          class="carousel-control-prev"
          href="#heroCarousel"
          role="button"
          data-slide="prev"
        >
          <span
            class="carousel-control-prev-icon icofont-simple-left"
            aria-hidden="true"
          ></span>
        <span class="sr-only">Previous</span>
      </a>

        <a
          class="carousel-control-next"
          href="#heroCarousel"
          role="button"
          data-slide="next"
        >
          <span
            class="carousel-control-next-icon icofont-simple-right"
            aria-hidden="true"
          ></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section><!-- End Hero -->


  <main id="main">
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="icofont-architecture-alt"></i></div>
                <h4 class="title"><a href="">{{__('text.it.architecture.title.txt')}}</a></h4>
                <p class="description">
                {{__('text.it.architecture.content.txt')}}
                </p>
            </div>
          </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-ui-settings"></i></div>
                <h4 class="title"><a href="">{{__('text.it.design.title.txt')}}</a></h4>
                <p class="description">
                {{__('text.it.design.content.txt')}}
                </p>
            </div>
          </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="icofont-deviantart"></i></div>
                <h4 class="title"><a href="">{{__('text.devops.title.txt')}}</a></h4>
                <p class="description">
                {{__('text.devops.content.txt')}}
                  
                </p>
            </div>
          </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-search"></i></div>
                <h4 class="title"><a href="">{{__('text.software.title.txt')}}</a></h4>
                <p class="description">
                  {{__('text.software.content.txt')}}
                </p>
            </div>
          </div>
          </div></div></section>
          <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
          <div class="row">
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-database"></i></div>
                <h4 class="title"><a href="">{{__('text.database.title.txt')}}</a></h4>
                <p class="description">
                {{__('text.database.content.txt')}}
                  </p>
            </div>
          </div>
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-file-java"></i></div>
                <h4 class="title"><a href="">{{__('text.backend.title.txt')}}</a></h4>
                <p class="description">
                {{__('text.backend.content.txt')}}
                  
                </p>
            </div>
          </div>
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-file-html5"></i></div>
                <h4 class="title"><a href="">{{__('text.frontend.title.txt')}}</a></h4>
                <p class="description">
                {{__('text.frontend.content.txt')}}                 
                </p>
            </div>
          </div>
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-ui-settings"></i></div>
                <h4 class="title"><a href="">{{__('text.agile.title.txt')}} </a></h4>
                <p class="description">
                {{__('text.agile.content.txt')}} 
                </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
      <!-- ======= Cta Section ======= -->
      <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
            <h3>{{__('text.why.agile.txt')}} </h3>
            <p>
            {{__('text.why.agile.content1.txt')}}
            </p>
            <h3>{{__('text.why.agile.content2.txt')}}</h3>
            <div class="row tech-speace" >
              <div class="col-md-2">
                <img src="assets/img/technologies/java.png"  class ="ellipse" title ="J2ee" alt="J2ee">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/confluence-jira.png" title ="Jira" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/jenkis.png" title ="Jenkis" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/sonar.png" title ="Sonar" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/oracle.png"  title ="Oracle" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/postgree.png" title ="Postgree" class ="ellipse" alt="">
              </div>
            </div>
            <div class="row tech-speace">
              <div class="col-md-2">
                <img src="assets/img/technologies/mysql.png"  title ="Mysql" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/angular.png" title ="Angulaire" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/laravel.png"  title ="Laravel" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/git.png"  title ="Git" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/svn.png" title ="Svn" class ="ellipse" alt="">
              </div>
              <div class="col-md-2">
                <img src="assets/img/technologies/boostrap.png" title ="Boostrap" class ="ellipse" alt="">
              </div>
            </div>
          </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
      <!-- ======= About Us Section ======= -->
      <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{__('text.about.us.btn')}}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="../assets/img/aboutUs.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
             <p >
             {{__('text.about.us.content1.txt')}}
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i>{{__('text.about.us.content2.txt')}}
                <ul><i class="icofont-check-circled"></i>{{__('text.about.us.content3.txt')}}
               </ul>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->


      <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{__('text.services.txt')}}</h2>
            <p>
            {{__('text.services.content.txt')}}
            </p>
        </div>

        <div class="row">
          
          <div
          class="col-lg-4 col-md-6 icon-box"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          <div class="icon"><i class="icofont-responsive"></i></div>
          <h4 class="title"><a href="">{{__('text.web.app.txt')}}</a></h4>
          <p class="description">
          {{__('text.web.app.content.txt')}}
          </p>
        </div>

        <div
          class="col-lg-4 col-md-6 icon-box"
          data-aos="zoom-in"
          data-aos-delay="200"
        >
          <div class="icon"><i class="icofont-oscommerce"></i></div>
          <h4 class="title"><a href="">{{__('text.mobile.app.txt')}}</a></h4>
            <p class="description">
            {{__('text.mobile.app.content.txt')}}
            </p>
        </div>
        <div
        class="col-lg-4 col-md-6 icon-box"
        data-aos="zoom-in"
        data-aos-delay="200"
      >
      <div class="icon"><i class="icofont-laptop-alt"></i></div>
      <h4 class="title"><a href="">{{__('text.desktop.app.txt')}}</a></h4>
        <p class="description">
        {{__('text.desktop.app.content.txt')}}</p>
    </div>
    <div
    class="col-lg-4 col-md-6 icon-box"
    data-aos="zoom-in"
    data-aos-delay="300"
  >
  <div class="icon"><i class="icofont-dashboard-web"></i></div>
  <h4 class="title"><a href="">{{__('text.ecommerce.txt')}}</a></h4>
    <p class="description">
    {{__('text.ecommerce.content.txt')}}</p>
</div>
<div
              class="col-lg-4 col-md-6 icon-box"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
            <div class="icon"><i class="icofont-web"></i></div>
            <h4 class="title"><a href="">UI / UX</a></h4>
              <p class="description">
              {{__('text.ui.ux.content.txt')}}   </div>
          
            <div
              class="col-lg-4 col-md-6 icon-box"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
            <div class="icon"><i class="icofont-learn"></i></div>
            <h4 class="title"><a href="">{{__('text.it.digital.txt')}} </a></h4>
              <p class="description">
              {{__('text.it.digital.content.txt')}}              </p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

      <!-- ======= Projects Section ======= -->
      <!-- ======= Projects Section ======= -->
      <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{__('text.projects.txt')}}</h2>
            <p>
            {{__('text.projects.content.txt')}}
            </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                  <a
                    class="nav-link active show"
                    data-toggle="tab"
                    href="#tab-1"
                  >
                    <h4>Abatech</h4>
                    <p>{{__('text.abatech.desc.txt')}}</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                    <h4>LPPNF</h4>
                    <p>
                    {{__('text.lppnf.desc.txt')}}
                    </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                    <h4>SBE</h4>
                    <p>{{__('text.sbe.desc.txt')}}</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                    <h4>Aus4 mach 1</h4>
                    <p>
                    {{__('text.aus.desc.txt')}}
                    </p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                  <h3>Abatech</h3>

                  <img
                    src="../assets/img/projects/abatech.jpg"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                  {{__('text.abatech.content.txt')}}
                  </p>
              </div>
              <div class="tab-pane" id="tab-2">
                  <h3>LPPNF</h3>
                  <img
                    src="../assets/img/projects/lppnf.png"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                  {{__('text.lppnf.content.txt')}}
                  </p>
              </div>
              <div class="tab-pane" id="tab-3">
                  <h3>SBE</h3>
                  <img
                    src="../assets/img/projects/sbe.png"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                  {{__('text.sbe.content.txt')}}
                  </p>
              </div>
              <div class="tab-pane" id="tab-4">
                  <h3>Aus4 Mach 1</h3>
                  <img
                    src="../assets/img/projects/aus.png"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                  {{__('text.aus.content.txt')}}
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Project Section -->


     <div class="section-title">
              <h2>{{__('text.customers.txt')}}</h2>   
            </div>
          <!-- ======= Clients Section ======= -->
          <section id="clients" class="clients">
       
            <div class="container" data-aos="zoom-in">
             
              <div class="row">
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/EXOScreen.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/NTTScreen.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/BMWScreen.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/customer2.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/customer3.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/customer7.png" class="img-fluid" alt="">
                </div>
    
              </div>
    
            </div>
          </section><!-- End Clients Section -->


    <!-- ======= Testimonials Section ======= -->
      <!-- ======= Testimonials Section ======= -->
      <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{__('text.testimonials.txt')}}</h2>
           
        </div>

          <div
            class="owl-carousel testimonials-carousel"
            data-aos="fade-up"
            data-aos-delay="100"
          >
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{__('text.testimonials.wahid.txt')}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img
                src="../assets/img/testimonials/wahid.jpg"
                class="testimonial-img"
                alt=""
              />
            <h3>Wahid khachabi</h3>
            <h4>{{__('text.founder.txt')}}</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{__('text.testimonials.michael.txt')}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img
                src="../assets/img/testimonials/michaelBauer.png"
                class="testimonial-img"
                alt=""
              />
            <h3>Michael Bauer</h3>
            <h4>Scrum Master</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{__('text.testimonials.alfred.txt')}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img
                src="../assets/img/testimonials/oskar-ingemarsson.jpg"
                class="testimonial-img"
                alt=""
              />
            <h3>Oskar-ingemarsson</h3>
            <h4>Freelancer</h4>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= team Section ======= -->
      <!-- ======= team Section ======= -->
      <!-- ======= team Section ======= -->
      <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{__('text.top.menu.team')}}</h2>
            <p>{{__('text.team.desc.txt')}}
            </p>
          </div>
  
          <div class="row">
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="../assets/img/team/achraf2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Achraf SALOUMI</h4>
                  <span>{{__('text.achraf.desc.txt')}}
                  </span>
                  <p> {{__('text.achraf.desc2.txt')}}</p>
                  <div class="social">
                    <a href="https://www.facebook.com/achtech"><i class="ri-facebook-fill"></i></a>
                    <a href="https://www.instagram.com/saloumi_achraf/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/achraf-saloumi-03435551/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="../assets/img/team/brahim2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Brahim BARJALI</h4>
                  <span>{{__('text.project.manager.txt')}}
                  </span>
                  <p> {{__('text.brahim.desc.txt')}}</p>
                  <div class="social">
                    <a href="https://www.facebook.com/brahim.barjali"><i class="ri-facebook-fill"></i></a>
                    <a href="https://www.instagram.com/brahim.barjali/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/brahim-barjali-02507a146/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="../assets/img/team/oumaima2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Oumaima STITINI</h4>
                  <span>{{__('text.oumaima.desc1.txt')}}
                  </span>
                  <p> {{__('text.oumaima.desc2.txt')}}</p>
                  <div class="social">
                    <a href="https://www.facebook.com/oumaima.stitini"><i class="ri-facebook-fill"></i></a>
                    <a href="https://www.instagram.com/stitini_oumaima/?hl=fr"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/oumaima-stitini-4a4558113/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="../assets/img/team/nora2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Noura BOUCHBAAT</h4>
                  <span>{{__('text.noura.desc1.txt')}}
                  </span>
                  <p> {{__('text.brahim.desc.txt')}}</p>
                  <div class="social">
                    <a href="https://www.facebook.com/noura.bouchbaat"><i class="ri-facebook-fill"></i></a>
                    <a href="https://www.instagram.com/nourabouchbaat1/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/noura-bouchbaat-77987a50/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End doctors Section -->
    <!-- ======= Contact Section ======= -->
      <!-- ======= Contact Section ======= -->
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>{{__('text.our.address.txt')}}</h3>
                  <p>{{__('text.our.address.desc.txt')}}</p>
                  <p>Zip code : 40000</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                    <p>contact@software.sarl</p>
                    <p>Support@software.sarl</p>
                    <a href = "mailto: contact@software.sarl">{{__('text.send.txt')}}</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                    <p>+212 6 53 90 36 59<br />+212 5 24 44 93 52</p>
                    <a>&nbsp;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
              <div class="form-row">
                <div class="col form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      data-rule="email"
                      data-msg="Please enter a valid email"
                    />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of subject"
                  />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="6"
                    data-rule="required"
                    data-msg="Please write something for us"
                    placeholder="Message"
                  ></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">{{__('text.loading.txt')}}</div>
                <div class="error-message"></div>
                  <div class="sent-message">
                  {{__('text.message.sent.txt')}}
              </div>
                </div>
                <div class="text-center">
                  <button type="submit">{{__('text.send.message.btn')}}</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Software SARL</h3>
                <p>
                {{__('text.software.desc.txt')}}
                </p>
              </div>
            </div>
            
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Navigation</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="index.html">{{__('text.top.menu.home')}}</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#about">{{__('text.top.menu.about')}}</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#services">{{__('text.top.menu.services')}}</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#doctors">{{__('text.top.menu.team')}}</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>{{__('text.follow.us.txt')}}</h4>
              <div class="social-links mt-3">
                <a
                  href="https://www.facebook.com/Software-SARL-318449085746027"
                  class="facebook"
                  ><i class="bx bxl-facebook"></i
                ></a>

                <a
                  href="https://www.linkedin.com/company/67968932/"
                  class="linkedin"
                  ><i class="bx bxl-linkedin"></i
                ></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>{{__('text.our.newsletter.txt')}}</h4>
              <p>{{__('text.newsletter.desc.txt')}}</p>
              <form action="" method="post">
                <input type="email" name="email" /><input
                  type="submit"
                  value="Subscribe"
                />
              </form>
            </div>
          </div>
        </div>
      </div>

    <div class="container">
      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by Software sarl</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>
