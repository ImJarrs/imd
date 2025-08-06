<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<style>

  .promo-banner p{
    font-family: var(--nav-font);
    color: var(--contrast-color);
  }

  @media(max-width: 340px){
    .promo-banner p{
      font-size: 7px;
    }
  }

  @media(min-width: 341px){
    .promo-banner p{
      font-size: 10px;
    }
  }

  @media(min-width: 550px){
    .promo-banner p{
      font-size: 15px;
    }
  }

  @media(min-width: 800px){
    .promo-banner p{
      font-size: 22px;
    }
  }
  
</style>
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="<?php echo e(asset('assets/img/header-logo.webp')); ?>" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown"><a href="<?php echo e(route('product.card')); ?>"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?php echo e(route('product.card')); ?>">RFID Smart Card</a></li>
                  <li><a href="<?php echo e(route('product.wristband')); ?>">RFID Wristband</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="<?php echo e(route('services.fams')); ?>">Fixed Asset Management System</a></li>
                <li><a href="<?php echo e(route('services.slft')); ?>">Smart Linen RFID Tracking</a></li>
                <li><a href="<?php echo e(route('services.apt')); ?>">Approval Process Tracking</a></li>
              </ul>
          </li>
            <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
            
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#contact">Get Quote</a>

  </div>
</header>

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <?php $__currentLoopData = $homeBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('storage/' . $banner)); ?>" alt="" data-aos="fade-in">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="container">

      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>RFID & NFC Technology</h2>
          <p>SIMPLE | PRECISE | SECURE</p>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center">

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/cpu.webp')); ?>" style="width: 64px; margin-bottom: 15px;">
            <h3>Strong<br>Chipset<br>Durability</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/thumb.webp')); ?>" style="width: 64px; margin-bottom: 15px;">
            <h3>Excellent<br>Material<br>Quality</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/warranty.webp')); ?>" style="width: 64px; margin-bottom: 15px;">
            <h3>1 Year<br>Guarantee</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/delivery.webp')); ?>" style="width: 70px; margin-bottom: 15px;">
            <h3>Faster<br>Delivery</h3>
          </div>
        </div>

        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="icon-box">
            <img src="<?php echo e(asset('assets/img/custom.webp')); ?>" style="width: 60px; margin-bottom: 15px;">
            <h3>Custom Fit<br>Solutions</h3>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">

        <div class="image col-lg-5 order-2 order-lg-2">
            <img src="<?php echo e(asset('assets/img/about-us.png')); ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 order-1 order-lg-1 content">
          <p>
              <b>PT Inovasi Masa Depan</b> was created to provide innovative RFID (Radio Frequency Identification)
              and NFC (Near Field Communication) solutionstailored to the evolving needs of modern businesses.
              Our journey began with the distribution of Hotel RFID Cards across Indonesia,
              serving the hospitality sector with high-grade materials to meet the standards of leading hotels.
          </p>
          <p>
              Our RFID Card is available in a variety of materials to suit the diverse
              needs and preferences of our clients. From durable PVC & metal cards to
              stylish and sustainable options such as wooden cards and environmental
              friendly material. Our dedication to quality and innovation has made us a
              trusted partner for businesses seeking reliable RFID solutions.
          </p>
          <p class="end">
              <b>PT Inovasi Masa Depan</b>, will continue to innovate and expand our offerings,
              striving to be a trusted partner for industries seeking smarter, more efficient solutions.
              As we grow, we are committed to expanding our portfolio and delivering cutting-edge products for diverse sectors.
          </p><br>
        </div>

      </div>
    </div>
  </section>

  <section id="vision" class="vision section dark-background">
    <img src="<?php echo e(asset('assets/img/bg-web.png')); ?>" alt="" data-aos="fade-in">
    <div class="container">
      <div class="row justify-content-left text-left" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12">
          <h2>Vision</h2>
          <p>
            To be a leading provider of innovative technology solutions, transforming industries with sustainable, 
            reliable, and cutting-edge products that enhance efficiency, security, and customer experience.
          </p><br><br>
        </div>
        <div class="col-xl-12">
          <h2>Mission</h2>
          <p><b>Adapt and Innovate:</b> Continuously evolve our technology to meet 
                the demands of an ever-changing market.</p>
          <p><b>Client-Centric Approach:</b> Build strong, lasting partnerships by providing customized
                solutions that align with our clients’ goals and values.</p>
          <p><b>Prioritize Quality:</b> Uphold the highest standards of quality and reliability in
                all our products, ensuring long-term client satisfaction.</p>
          <p><b>Sustain Growth:</b> Expand our influence across multiple industries, from hospitality
                to logistics, by addressing unique business needs.</p>
        </div>
      </div>
    </div>
  </section><!-- End Vision Section -->
  
  

  <section class="swiper-banner p-0">
    <div class="swiper init-swiper">
      <div class="swiper-wrapper">
        <?php $__currentLoopData = $promoBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="swiper-slide"><img src="<?php echo e(asset('storage/' . $banner)); ?>" class="img-fluid" alt=""></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </div>
      <!-- Navigasi -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
 

  


  <!-- Call To Action Section -->
  

  

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p><b>Jl. Sawo VIII Blok SV no. 3, Bekasi<br>West Java 17131 - Indonesia</b></p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-whatsapp flex-shrink-0"></i>
            <div>
              <h3>WhatsApp</h3>
              <a href="https://wa.me/+6281806338869"><p>+62 818 0633 8869</p></a>
              <a href="https://wa.me/+6282122787878"><p>+62 821 2278 7878</p></a>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <a href="mailto:sales@inovasimasadepan.com"><p>sales@inovasimasadepan.com</p></a>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
          <form action="<?php echo e(route('send')); ?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <?php echo csrf_field(); ?>
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="number" class="form-control" name="mobile_number" placeholder="Your Mobile Number" required="">
              </div>

              <div class="col-md-12">
                <input type="email" class="form-control" name="email_address" placeholder="Your Email Address" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <!-- Google reCAPTCHA -->
              
                  <div class="g-recaptcha" style="display: flex; justify-content: center;" data-sitekey="<?php echo e(env('RECAPTCHA_SITE_KEY')); ?>"></div>
                
                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\imd_dev\resources\views\index.blade.php ENDPATH**/ ?>