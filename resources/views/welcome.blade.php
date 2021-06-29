@extends('layouts.website')

@section('content')
    
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out" >
            <h1>Experience enjoyment in the <span>water</span> with Swim-Able</h1>
            <h2>We’re on a mission to make participation in swimming, and other watersports, accessible for all</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Find out more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{ asset('assets/img/13.jpg') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    

    

    

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" style="
          background-image: url({{ asset('assets/img/15.jpg') }}); 
          background-size: cover;     
          background-position: center;
          background-repeat: no-repeat;
          border-radius: 100%;
          border-bottom-right-radius: 0%;">
            <img src="" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 p-4" data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>About Swim-Able</p>
            </div>

            <p>
              Here at Swim-Able NZ, we believe that everyone should have the opportunity to experience enjoyment in the water. That’s why we’re on a mission to make participation in swimming, and other watersports, accessible for all.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> one-on-one lessons</li>
              <li><i class="bi bi-check"></i> group coaching sessions</li>
              <li><i class="bi bi-check"></i> Special Needs & Abilities </li>
              <li><i class="bi bi-check"></i> Grow skills and confidence in the water</li>
            </ul>
            <p>
              So, whether you would like to learn how to swim, need some help developing your skills or water safety knowledge, or are keen to enhance your form ahead of a triathlon or other athletic event, Swim-Able is here to help.
            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-get-started scrollto">Our Services</a>
            </div>
          </div>
        </div>

        

      </div>
    </section><!-- End Details Section -->


    <section id="team" class="team">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up">
          <h2>Blog</h2>
          <p>Check our latest news</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/7.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="">Read more</i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Changing Room Makeover at Rotorua Aquatic Centre</h4>
                <div class="pt-1"><i><span><i class="bi bi-calendar"></i> 7th Sep 2020 <i class="bi bi-tags pl-1"></i> Important to know</span></i></div>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="">Read more</i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Swimming block starting 3rd May 2021</h4>
                <div class="pt-1"><i><span><i class="bi bi-calendar"></i> 7th Sep 2020 <i class="bi bi-tags pl-1"></i> Important to know</span></i></div>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/8.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="">Read more</i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Feedback Survey for everyone</h4>
                <div class="pt-1"><i><span><i class="bi bi-calendar"></i> 7th Sep 2020 <i class="bi bi-tags pl-1"></i> Important to know</span></i></div>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/6.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="">Read more</i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>COVID19 update for swim sessions at the Aquatic Centre</h4>
                <div class="pt-1"><i><span><i class="bi bi-calendar"></i> 7th Sep 2020 <i class="bi bi-tags pl-1"></i> Important to know</span></i></div>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

@endsection