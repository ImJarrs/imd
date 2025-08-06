<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<style>
  
  .card {
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    /* margin: 20px 0; */
  }

  .card img {
    width: 100%%;
    height: 100%;
    border-radius: 5px 0 0 5px;
    margin: 10px;
  }
  .btn-read {
    font-weight: 500;
    font-size: 11px; 
    margin-top: 1%;
  }

  .row.g-0 {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .text-clamp {
      display: -webkit-box; /* Membuat container fleksibel */
      -webkit-line-clamp: 2; /* Batasi ke 2 baris */
      -webkit-box-orient: vertical; /* Orientasi vertikal */
      overflow: hidden; /* Sembunyikan teks yang kelebihan */
      text-overflow: ellipsis; /* Tambahkan "..." di akhir */
    }

  @media (max-width: 820px) {

    .card {
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 0;
    }

    .card .card-body .card-title{
      padding: 0;
      font-size: 15px
    }
    .card .card-body{
      font-size: 13px
    }
    
    .text-clamp {
      display: -webkit-box; /* Membuat container fleksibel */
      -webkit-line-clamp: 1; /* Batasi ke 1 baris */
      -webkit-box-orient: vertical; /* Orientasi vertikal */
      overflow: hidden; /* Sembunyikan teks yang kelebihan */
      text-overflow: ellipsis; /* Tambahkan "..." di akhir */
    }

    .btn-read {
      font-size: 8px;
    }

    h5{
      padding-top: 5px
    }

    .row.g-0 {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .card img {
      overflow: hidden; /* Memastikan gambar tidak keluar dari kotak */
      display: flex;
      display: inline;
      object-fit: cover;
      justify-content: center;
      align-items: center;
    }

    .col-md-4,
    .col-md-7 {
      width: 100%;
      height: 100%;
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
          <li><a href="<?php echo e(route('home')); ?>">Home<br></a></li>
          <li><a href="<?php echo e(route('home')); ?>#about">About</a></li>
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
          <li><a href="<?php echo e(route('blog')); ?>" class="active">Blog</a></li>
          
          <li><a href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

      <a class="btn-getstarted" href="index.html#about">Get Quote</a>
        
    </div>
</header>


<div style="position: relative; text-align: center;">
  <?php $__currentLoopData = $blogBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('storage/' . $banner)); ?>" class="banner" alt="" data-aos="fade-in" style="width: 100%;">
      <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-weight: bold;">
          BLOG
      </h1>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

  <!-- Blog Section -->
  <section id="blog" class="blog section">

      <div class="container">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card mb-3">
            <div class="row g-0 pr-0" >
              <div class="col-5 col-md-3">
                <!-- Gambar -->
                <img src="<?php echo e(asset('storage/' . $item->image1)); ?>" style="object-fit: cover;" class="img-fluid flex-shrink-0" alt="RFID">
              </div>
              <div class="col-7 col-md-9">
                <!-- Konten -->
                <div class="card-body">
                  <h5 class="card-title text-clamp"><b><?php echo e($item->title); ?></b></h5>
                  <div class="card-text text-clamp"><?php echo $item->desc1; ?></div>
                  <a href="<?php echo e(route('blog.detail', $item->slug)); ?>" class="btn btn-outline-warning btn-sm btn-read"><i class="bi bi-book"></i> Read More</a>
                </div>
              </div>
            </div>            
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
  </section>
  
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\imd_dev\resources\views\blog\index.blade.php ENDPATH**/ ?>