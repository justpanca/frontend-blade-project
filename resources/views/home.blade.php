@extends('layout.app')

@section ('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">Learning Today,<br>Leading Tomorrow</h2>
        <p data-aos="fade-up" data-aos-delay="200">we are a visionary company that drives progress.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="courses.html" class="btn-get-started">Get Started</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>several benefits of taking part in events with us</h3>
            <p class="fst-italic">
                several events that we have carried out.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Increase relationships with professional workers.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Expand knowledge.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>There is the possibility of getting some advice to improve your abilities.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->

    <x-counts></x-counts>

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
                <h3>Why Choose Our Products?</h3>
                <p>
                  When you choose to study on our courses and take part in our events, 
                  you will experience many benefits such as increasing your hard skills and soft skills. 
                  And we are the first institution to carry out this innovation so our credibility cannot be questioned anymore.
                </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>We are connected with various human resources and various other large companies</h4>
                  <p>there by increasing your chances of being accepted by our partner company</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>improve digital skills such as programming and other digital skills</h4>
                  <p>Companies will increasingly need digital workers in the future</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Many of our alumni have gotten jobs less than 1 month after completing the courses we provide</h4>
                  <p>Our internal survey stated that 60% of our alumni were hired in less than 1 month</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Courses Section -->
    <x-courses></x-courses>

    <!-- Trainers Section -->
   <x-trainers> </x-trainers>

  @endsection