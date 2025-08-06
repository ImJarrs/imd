</main>

<footer id="footer" class="footer dark-background">
    <div class="footer-top">
      <div class="container">
          <div class="row gy-4 align-items-start">
            <!-- Logo -->
            <div class="col-lg-4 col-md-6 footer-about">
                
                <div class="logo d-flex align-items-center">
                  <img src="<?php echo e(asset('assets/img/header-logo.png')); ?>" alt="">
                </div>
            </div>

            <!-- Address and Contact Wrapper -->
            <div class="col-lg-8 col-md-12 d-flex flex-wrap footer-info">
                <!-- Address -->
                <div class="footer-address">
                  <h4>Address</h4>
                  <p>Jl. Sawo VIII Blok SV no. 3, Bekasi<br>West Java 17131 - Indonesia</p>
                </div>

                <!-- Contact -->
                <div class="footer-contact">
                  <h4>Contact</h4>
                  <p>
                    <style> 
                      .info-list {
                          display: flex;
                          flex-direction: column;
                          gap: 5px;
                          margin-top: 30px;
                      }

                      .info-item-footer {
                          display: flex;
                          align-items: center; /* Pastikan elemen sejajar di tengah */
                          gap: 10px; /* Beri jarak antar elemen */
                      }

                      .info-key {
                          width: 70px; /* Berikan lebar tetap agar sejajar */
                          font-weight: bold;
                      }

                      .info-separator {
                          width: 10px; /* Pastikan separator memiliki ruang */
                      }

                      .info-value {
                          flex: 1; /* Biarkan nilai melebar sesuai kontennya */
                          overflow: hidden;
                      }

                      @media(max-width: 400px){
                        .info-key{
                          width: 40px;
                        }
                      }
                    </style>
                    <div class="info-list">
                      <div class="info-item-footer">
                          <div class="info-key">Phone</div>
                          <div class="info-separator">:</div>
                          <div class="info-value">+62 8180 6338 869</div>
                      </div>
                      <div class="info-item-footer">
                          <div class="info-key"></div>
                          <div class="info-separator">:</div>
                          <div class="info-value">+62 8212 2787 878</div>
                      </div>
                      <div class="info-item-footer">
                          <div class="info-key">Email</div>
                          <div class="info-separator">:</div>
                          <div class="info-value">sales@inovasimasadepan.com</div>
                      </div>
                    </div>
                      
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
    
    <div class="copyright">
      <div class="container text-center">
          <p>© 2025<span> INOVASI MASA DEPAN, PT</span></p>
          
      </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Scroll Bottom -->
<a href="#footer" id="scroll-down" class="scroll-down d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-down-short"></i>
</a>


<!-- WhatsApp Button -->
<a href="https://wa.me/+6281806338869" target="_blank" id="whatsapp-btn" class="whatsapp-btn d-flex align-items-center justify-content-center">
  <i class="bi bi-whatsapp"></i>
</a>


<!-- Preloader -->
<div id="preloader"></div>


<!-- Vendor JS Files -->
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>

<!-- Main JS File -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const scrollDownButton = document.getElementById("scroll-down");
    const scrollTopButton = document.getElementById("scroll-top");
    const targetElement = document.getElementById("footer");
  
    // Tampilkan tombol Scroll Down saat di atas halaman
    window.addEventListener("scroll", () => {
      if (window.scrollY < 100) {
        scrollDownButton.classList.add("active");
      } else {
        scrollDownButton.classList.remove("active");
      }
    });
  
    // Event untuk tombol Scroll Down
    scrollDownButton.addEventListener("click", (e) => {
      e.preventDefault(); // Mencegah perilaku default
      targetElement.scrollIntoView({
        behavior: "smooth", // Animasi scroll yang halus
        block: "start",
      });
    });
  
    // Event untuk tombol Scroll Top (opsional jika ingin keduanya aktif)
    scrollTopButton.addEventListener("click", (e) => {
      e.preventDefault(); // Mencegah perilaku default
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".init-swiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 7000, // Slide akan berpindah setiap 7 detik
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
      var swiper = new Swiper(".mySwiper", {
          loop: true,
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          autoplay: {
              delay: 5000,
              disableOnInteraction: false,
          },
      });
  });
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y52F4RQ1WL"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'G-Y52F4RQ1WL');
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("trix-toolbar [data-trix-button-group='file-tools']").remove();
    });
</script>

</body>
</html><?php /**PATH C:\laragon\www\imd_dev\resources\views\layouts\footer.blade.php ENDPATH**/ ?>