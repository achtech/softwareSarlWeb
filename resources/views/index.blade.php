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
        <i class="icofont-clock-time"></i> Monday - Friday, 8 AM to 6 PM (GMT+1)
      </div>
      <div>
        <a><img src="../assets/img/english.png" alt=""
          /></a>
          <a><img src="../assets/img/frensh.png" alt=""
            /></a>
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +212 6 53 90 36 59
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
          <li class="active"><a href="index.html">{{ __('text.home.lbl')}}</a></li>
          <li><a href="#about">{{ __('text.about.lbl')}}</a></li>
          <li><a href="#services">{{ __('text.service.lbl')}}</a></li>
          <li><a href="#departments">{{ __('text.projects.lbl')}}</a></li>
          <li><a href="#doctors">{{ __('text.team.lbl')}}</a></li>
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
          <li><a href="#contact">Contact</a></li>
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
            <h3>Your agile software partner</h3>
            <p>
              Software SARL, the agile Marrakech software house, devlops and
              modernizes software
            </p>
            <a href="#about" class="btn-get-started scrollto">About us</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div
          class="carousel-item"
          style="background-image: url(../assets/img/slide/slide-2.jpg)"
        >
          <div class="container">
            <h3>Our services</h3>
            <p>Faster, closer and more competitive with the consumer</p>
            <a href="#services" class="btn-get-started scrollto">Discover</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div
          class="carousel-item"
          style="background-image: url(../assets/img/slide/slide-3.jpg)"
        >
          <div class="container">
            <h3>Our Team</h3>
            <p>We offer a resource mix of employees, IT architects, chief ... </p>
            <a href="#doctors" class="btn-get-started scrollto">Who we are</a>
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
                <h4 class="title"><a href="">IT architecture</a></h4>
                <p class="description">
                  A solid IT architecture is the basis for a
                  maintenance-friendly, future-proof and robust system.
                  
                </p>
            </div>
          </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="icofont-ui-settings"></i></div>
                <h4 class="title"><a href="">IT design</a></h4>
                <p class="description">
                  The secret of success lies in preparation. A solid concept is the foundation for high quality software.
                 
                </p>
            </div>
          </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="icofont-deviantart"></i></div>
                <h4 class="title"><a href="">DevOps</a></h4>
                <p class="description">
                  The circle in the agile software world is only closed with continuous delivery.
                  
                </p>
            </div>
          </div>

            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-search"></i></div>
                <h4 class="title"><a href="">Software development</a></h4>
                <p class="description">
                  Software development with state-of-the-art and standard technologies. 
                  
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
                <h4 class="title"><a href="">Database</a></h4>
                <p class="description">
                  We use the most secured databases to handle 
                  the attack launched by internet users like 
                  Oracle,postgreSQL,NoSql.
                  </p>
            </div>
          </div>
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-file-java"></i></div>
                <h4 class="title"><a href="">Backend</a></h4>
                <p class="description">
                  For better back-end web security You  use Java,Spring Boot, Jsf, Laravel frameworks in order to check for vulnerabilities. 
                  
                </p>
            </div>
          </div>
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-file-html5"></i></div>
                <h4 class="title"><a href="">Frontend</a></h4>
                <p class="description">
                    We use  professional technology like Bootstrap, 
                    HTML5, CSS3, JavaScript, Angular in order to build 
                    a good-looking and functioning website.                 
                </p>
            </div>
          </div>
          <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="icofont-ui-settings"></i></div>
                <h4 class="title"><a href="">Agile Methodology</a></h4>
                <p class="description">
                  We use agile development methodology to 
                  achieve efficient results in projects with 
                  vague scope in order to guarantee better user satisfaction and control over the delivery results.
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
            <h3>Why Agile?</h3>
            <p>
              Agile is an iterative approach to project management and software
              development that helps teams deliver value to their customers
              faster and with fewer headaches. Instead of betting everything on
              a "big bang" launch, an agile team delivers work in small, but
              consumable, increments. Requirements, plans, and results are
              evaluated continuously so teams have a natural mechanism for
              responding to change quickly.
            </p>
            <p>We already work with Jira,Bitbucket,Confluence</p>
        </div>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
      <!-- ======= About Us Section ======= -->
      <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="../assets/img/aboutUs.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
             <p class="font-italic">
              An IT digital company, also referred to as an IT managed services provider is comprised of professional IT specialists who make up the companys core team. The team provides you with expert guidance and management on several IT applications ranging from general computer systems and device networking to electronic hardware and software applications.<br/>
              IT teams are highly specialized experts with each member having his or her own unique skills and areas of expertise. A good IT team, therefore, is able to offer a large selection of IT support services covering all your IT demands.<br/>
              IT support companies and offer two main types of services: 
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i>Fixing immediate IT problems.
                <ul><i class="icofont-check-circled"></i>Implementing preventative measures against future IT problems.
               </ul>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->


      <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
            <p>
              We handle complex business challenges building all types of custom and platform-based solutions.
            </p>
        </div>

        <div class="row">
          
          <div
          class="col-lg-4 col-md-6 icon-box"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          <div class="icon"><i class="icofont-responsive"></i></div>
          <h4 class="title"><a href="">Web App</a></h4>
          <p class="description">
            Developing a web application is used to meet a specific need in your business. If you have a real estate business, every piece of information should be listed on the website and generate statistics for executives. Such a service is not possible with a traditional app. With this in mind, a Web App is the only possible choice.
          </p>
        </div>

        <div
          class="col-lg-4 col-md-6 icon-box"
          data-aos="zoom-in"
          data-aos-delay="200"
        >
          <div class="icon"><i class="icofont-oscommerce"></i></div>
          <h4 class="title"><a href="">Mobile applications</a></h4>
            <p class="description">
              Creating a website is an essential step in a company's development strategy. A website with an attractive design and clear content, where you can find what you are looking for quickly is a real communication tool and a powerful marketing tool.
            </p>
        </div>
        <div
        class="col-lg-4 col-md-6 icon-box"
        data-aos="zoom-in"
        data-aos-delay="200"
      >
      <div class="icon"><i class="icofont-laptop-alt"></i></div>
      <h4 class="title"><a href="">Desktop application</a></h4>
        <p class="description">
          At the pre-development stage, our team emphasizes careful planning and architecture design to advise on better technological options with respect to the Customer’s challenge and industry, as well as to suggest how to reduce development costs and improve the solution’s performance              </p>
    </div>
    <div
    class="col-lg-4 col-md-6 icon-box"
    data-aos="zoom-in"
    data-aos-delay="300"
  >
  <div class="icon"><i class="icofont-dashboard-web"></i></div>
  <h4 class="title"><a href="">E-commerce</a></h4>
    <p class="description">
      Un site de vente en ligne permettra d’optimiser votre visibilité et votre notoriété. notre agence vous accompagne dans la conception de la boutique qui vous ressemble.              </p>
</div>
<div
              class="col-lg-4 col-md-6 icon-box"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
            <div class="icon"><i class="icofont-web"></i></div>
            <h4 class="title"><a href="">UI / UX</a></h4>
              <p class="description">
                Soigner votre image est primordial sur la toile, et cela commence dès votre page d’accueil. C’est pour cela que notre agence accorde une importance toute particulière à la conception graphique de chacune de vos pages          </div>
          
            <div
              class="col-lg-4 col-md-6 icon-box"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
            <div class="icon"><i class="icofont-learn"></i></div>
            <h4 class="title"><a href="">IT/Digital consulting</a></h4>
              <p class="description">
                We can present a formation of different software languages to give you a push to develop your skills              </p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
     <div class="section-title">
              <h2>Customers</h2>   
            </div>
          <!-- ======= Clients Section ======= -->
          <section id="clients" class="clients">
       
            <div class="container" data-aos="zoom-in">
             
              <div class="row">
    
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/customer5.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/customer6.png" class="img-fluid" alt="">
                </div>
    
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="assets/img/clients/customer1.png" class="img-fluid" alt="">
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
      <!-- ======= Projects Section ======= -->
      <!-- ======= Projects Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Projects</h2>
            <p>
              The biggest projects we created are industrials and internal systems, 
              and her we show you some ideas about them.
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
                    <p>ABATech (or SERA with a new name)</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                    <h4>LPPNF</h4>
                    <p>
                      LPPNF is a project designed for the accounting control
                      logistics service
                    </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                    <h4>SBE</h4>
                    <p>SBE is a project developed by the laravel framework</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                    <h4>Aus4 mach 1</h4>
                    <p>
                      Aus4 mach 1 is a vehicle processing project developed by
                      J2ee and Angular 7.
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
                    src="../assets/img/abatech.jpg"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                    One of those big web applications, we have ABATech (or SERA
                    with a new name) is the standard tool at BMW AG for the
                    ergonomics and risk assessment of workplaces in accordance
                    with legal requirements, BMW factory want to make an
                    internal system for their employees, developed by J2ee and
                    AngularJs, working on it from 2015 to 2019 (BMW project
                    outsourcing NTT)
                  </p>
              </div>
              <div class="tab-pane" id="tab-2">
                  <h3>LPPNF</h3>
                  <img
                    src="../assets/img/lppnf.png"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                    LPPNF is a project designed for the accounting control
                    logistics service developed by JEE and jsf working on it from
                    2014 to 2015 (BMW project outsourcing NTT)
                  </p>
              </div>
              <div class="tab-pane" id="tab-3">
                  <h3>SBE</h3>
                  <img
                    src="../assets/img/sbe.png"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                    SBE is a project developed by the laravel framework, it aims
                    to unite all immigrants in associations around the world.
                  </p>
              </div>
              <div class="tab-pane" id="tab-4">
                  <h3>Aus4 Mach 1</h3>
                  <img
                    src="../assets/img/aus.png"
                    alt=""
                    class="img-fluid"
                  />
                  <p>
                    Aus4 mach 1 is a vehicle processing project developed by
                    J2ee and Angular 7. Its goal is to facilitate users request
                    for other configuration on vehicles working on it from 2019
                    to until today (BMW project outsourcing NTT).
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
      <!-- ======= Testimonials Section ======= -->
      <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
           
        </div>

          <div
            class="owl-carousel testimonials-carousel"
            data-aos="fade-up"
            data-aos-delay="100"
          >
          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              We would like to express our satisfaction on the cooperation regarding the development of our web application. 
              Software  did a very professional job. 
              We are satisfied with the solution given to us and with the communication flow through the project.
              We would like to recommend Software . 
              We look forward to working with them in future projects.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img
                src="../assets/img/testimonials/wahid.jpg"
                class="testimonial-img"
                alt=""
              />
            <h3>Wahid khachabi</h3>
            <h4>Exo-it Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I wanted to take a moment to thank you for the services your team has provided. 
              Your team has been a pleasure to work with, professional and timely. 
              The only delay in work that we have experienced has been due to our own lack of organization managing our projects, not yours. 
              Job well done and I hope we can continue to grow together.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img
                src="../assets/img/testimonials/michaelBauer.png"
                class="testimonial-img"
                alt=""
              />
            <h3>Michael Bauer</h3>
            <h4>Scrum Master in XXX</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Under tight deadlines and with high expectations, Flatworld Solutions was a pleasure to partner with, on a high profile political campaign website.
              Professional, conscientious and thoroughly competent - I wouldn't hesitate in recommending them to other agencies..
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
              <img
                src="../assets/img/testimonials/alfred.jpg"
                class="testimonial-img"
                alt=""
              />
            <h3>Alfred Zeitner</h3>
            <h4>Freelancer</h4>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
      <!-- ======= Doctors Section ======= -->
      <!-- ======= Doctors Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Team</h2>
            <p>Our team of passionate people composed of various profiles: software developper, data engineers, front & back developers, devops, product owner.
            </p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-6">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="../assets/img/team/achraf2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Achraf SALOUMI</h4>
                  <span>Managing Director | Team Leader
                  </span>
                  <p>development engineer with seven years of experience in the IT field and business manager.</p>
                  <div class="social">
                    <a href="https://www.facebook.com/achtech"><i class="ri-facebook-fill"></i></a>
                    <a href="https://www.instagram.com/saloumi_achraf/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/achraf-saloumi-03435551/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="../assets/img/team/brahim2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Brahim BARJALI</h4>
                  <span>Project manager
                  </span>
                  <p> development engineer with seven years of experience in the IT field.</p>
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
                  <span>Digital communication & software devlopper
                  </span>
                  <p> development engineer with two years of experience in the IT field.</p>
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
                  <span>Software developer
                  </span>
                  <p> development engineer with seven years of experience in the IT field.</p>
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
      </section><!-- End Team Section -->
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
                  <h3>Our Address</h3>
                  <p>Num 6 2nd floor subdivision al mustapha m'hita semlalia Marrakech</p>
                  <p>Zip code : 40000</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                    <p>info@software.sarl<br />contact@software.sarl</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                    <p>+212 6 53 90 36 59<br />+212 5 24 44 93 52</p>
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
                    rows="7"
                    data-rule="required"
                    data-msg="Please write something for us"
                    placeholder="Message"
                  ></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
              </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
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
                  une agence de communication basée sur Marrakech, nous sommes
                  dans l'industrie informatique depuis 2010 et nous proposons un
                  développement de niveau entreprise pour divers clients à
                  travers le monde. <br /><br />
                </p>
              </div>
            </div>
            
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Navigation</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="index.html">Home</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#about">About us</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#services">Services</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#doctors">Our team</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Follow us</h4>
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
              <h4>Our Newsletter</h4>
              <p>Newsletter : Join our mailing list</p>
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
      <div class="copyright">
          &copy; Copyright <strong><span>Medicio</span></strong
          >. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
