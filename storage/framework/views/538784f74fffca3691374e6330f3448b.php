<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="<?php echo e(asset('assets/img/header-logo.webp')); ?>" alt="">
          
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?php echo e(route('home')); ?>">Home<br></a></li>
            <li><a href="<?php echo e(route('home')); ?>#about">About</a></li>
            <li class="dropdown"><a href="<?php echo e(route('product.card')); ?>"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="<?php echo e(route('product.card')); ?>" class="active">RFID Smart Card</a></li>
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
            
            <li><a href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Get Quote</a>
  </div>
</header>


<div style="position: relative; text-align: center;">
  <?php $__currentLoopData = $cardBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('storage/' . $banner)); ?>" class="banner" alt="" data-aos="fade-in" style="width: 100%;">
      <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-weight: bold;">
          RFID SMART CARD
      </h1>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<section class="products">
<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3 position-relative" style="border: none; margin: 0;" data-aos="fade-up" data-aos-delay="200">
  
    <div class="product-item row g-0">
      
        

        <div class="product-image col-md-4 d-flex justify-content-center">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php if(!empty($item->image1)): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $item->image1)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid" style="object-fit: cover;">
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($item->image2)): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $item->image2)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid" style="object-fit: cover;">
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($item->image3)): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $item->image3)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid" style="object-fit: cover;">
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($item->image4)): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $item->image4)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid" style="object-fit: cover;">
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($item->image5)): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $item->image5)); ?>" alt="<?php echo e($item->name); ?>" class="img-fluid" style="object-fit: cover;">
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Tambahkan navigasi dan pagination -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title pb-1" style="font-weight: bold; text-align: left;"><?php echo e($item->name); ?></h2>
                <div class="info-list">

                      <?php if(!empty($item->label1)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label1); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc1); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label2)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label2); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc2); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label3)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label3); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc3); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label4)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label4); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc4); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label5)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label5); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc5); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label6)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label6); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc6); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label7)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label7); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc7); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label8)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label8); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc8); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label9)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label9); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc9); ?></div>
                          </div>
                      <?php endif; ?>
    
                      <?php if(!empty($item->label10)): ?>
                          <div class="info-item">
                              <div class="info-key"><?php echo e($item->label10); ?></div>
                              <div class="info-separator">:</div>
                              <div class="info-value"><?php echo e($item->desc10); ?></div>
                          </div>
                      <?php endif; ?>

                </div>
            </div>

            <button id="pay-button">Bayar dengan Midtrans</button>
            <script>
                document.getElementById('pay-button').onclick = function() {
                    snap.pay('<?php echo e($snapToken); ?>', {
                        onSuccess: function(result) {
                            // Tangani jika pembayaran berhasil
                        },
                        onPending: function(result) {
                            // Tangani jika pembayaran pending
                        },
                        onError: function(result) {
                            // Tangani jika pembayaran gagal
                        }
                    });
                };
            </script>
        </div>
      
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>

<?php echo $__env->make('layouts.quote', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\imd_dev\resources\views/products/rfid-card.blade.php ENDPATH**/ ?>