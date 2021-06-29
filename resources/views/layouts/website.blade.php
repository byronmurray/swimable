<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Swim-Able New Zealand</title>
  <meta content="skills to enjoy water safely, all ages, all abilities" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/favicon.png" rel="apple-touch-icon') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

 </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1>
          <a href="index.html"><img src="{{ asset('assets/img/logo.jpg') }}" alt="" class="img-fluid"></a>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#">Home</a></li>
          <li><a class="nav-link" href="#">About</a></li>
          <li><a class="nav-link" href="#">Latest News</a></li>
          <li><a class="nav-link" href="#">Services</a></li>
          <li><a class="nav-link" href="#">Events</a></li>
          <li><a class="nav-link" href="#">Contact</a></li>
          <li><a class="nav-link" href="#">Book Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    @yield('content')

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-1') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-2') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-3') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-4') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-5') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    {{-- <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>


        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{ asset('assets/img/gallery/gallery-1.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="{{ asset('assets/img/gallery/gallery-5') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-5') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="{{ asset('assets/img/gallery/gallery-6') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-6') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="{{ asset('assets/img/gallery/gallery-7') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-7') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('assets/img/gallery/gallery-8') }}" class="gallery-lightbox">
                <img src="{{ asset('assets/img/gallery/gallery-8') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
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
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section --> --}}

  </main><!-- End #main -->


  {{-- <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Clients Section --> --}}



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-6 footer-links">
            
            <h4>Accreditation</h4>
            <div class="footer-accreditations" style="display: flex">
              <a style="width: 50%;" href="index.html"><img style="    max-width: 150px;" src="{{ asset('assets/img/accreditations/inclusion-leisure.png') }}" alt="" class="img-fluid"></a>
              <a style="width: 50%;" href="index.html"><img style="    max-width: 150px;" src="{{ asset('assets/img/accreditations/swim-angelfish.png') }}" alt="" class="img-fluid"></a>
            </div>
           
          </div>


          <div class="col-lg-2 col-6 footer-links">
            <h4>Swim Able</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About Swim Able</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Get in touch</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Our Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Latest News</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Book now</a></li>
            </ul>

            
          </div>

          

          <div class="col-lg-3 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Swim gear</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Coaching & Consultant</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Swimspiration supplies quality swim wear</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Swimming instructions online</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Swimmers with special neeeds</a></li>
            </ul>
          </div>

          

          <div class="col-lg-3 col-6 footer-links">
            <h4>Local Swim Clubs</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Te Arawa Swimming on Facebook</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Te Arawa Swimming Website</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Swim Rotorua</a></li>
            </ul>

            
            
          </div>


          

          

        </div>

        <div>
          <div class="logo text-center">
 
              <a href="index.html"><img style="    max-width: 250px;"  src="{{ asset('assets/img/logo.jpg') }}" alt="" class="img-fluid"></a>

          </div>
          <div class="social-links mt-3 text-center">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>


      </div>


        


    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>