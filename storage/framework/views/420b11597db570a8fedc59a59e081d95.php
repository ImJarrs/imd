<?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    /*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header-blog {
  --heading-color: #ffffff;
  --contrast-color: #ffffff;
  color: var(--default-color);
  background-color: rgba(0, 0, 0, 0.8);
  padding: 10px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header-blog .logo {
  line-height: 1;
}

.header-blog .logo img {
  max-height: 50px;
  margin-right: 5px;
}

.header-blog .logo h1 {
  font-size: 32px;
  margin: 0;
  font-weight: 700;
  color: var(--heading-color);
}

.header-blog .logo span {
  color: var(--accent-color);
  font-size: 32px;
}

.header-blog .btn-getstarted,
.header-blog .btn-getstarted:focus {
  color: var(--contrast-color);
  font-size: 14px;
  padding: 8px 30px;
  margin: 0 0 0 30px;
  border-radius: 4px;
  transition: 0.3s;
  border: 2px solid var(--accent-color);
}

.header-blog .btn-getstarted:hover,
.header-blog .btn-getstarted:focus:hover {
  color: var(--default-color);
  background: var(--accent-color);
}

@media (max-width: 1200px) {
  .header-blog .logo {
    order: 1;
  }

  .header-blog .btn-getstarted {
    order: 2;
    margin: 0 15px 0 0;
    padding: 6px 15px;
  }

  .header-blog .navmenu {
    order: 3;
  }
}

.scrolled .header-blog {
  box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
}

/* Index Page Header
------------------------------*/
.index-page .header-blog {
  --background-color: rgba(0, 0, 0, 0);
}

/* Index Page Header on Scroll
------------------------------*/
.index-page.scrolled .header-blog {
  --background-color: rgba(0, 0, 0, 0.8);
}
</style>
<header id="header" class="header-blog d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
  
      <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-lg-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="<?php echo e(asset('assets/img/header-logo.webp')); ?>" alt="">
          
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?php echo e(route('home')); ?>">Home<br></a></li>
          <li><a href="<?php echo e(route('home')); ?>#about">About</a></li>
          <li class="dropdown"><a href="#products"><span>Products</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
          <li><a href="<?php echo e(route('home')); ?>#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?php echo e(route('home')); ?>#contact">Get Quote</a>
        
    </div>
</header>

<div style="position: relative; padding: 100px 0px 30px; text-align: center;">
    <h1 style="color: black; font-weight: bold; text-align: center; ">
        OUR SERVICES
    </h1>
</div>

<section id="services" class="services section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      
      <div class="col-lg-7 order-1 order-lg-1 content">
        
        <img src="<?php echo e(asset('assets/img/logo-recom.png')); ?>" class="img-fluid mb-4" alt="" width="140px">
        <h3>SMART LINEN RFID TRACKING</h3>
      </div>

      <div class="col-lg-12 order-3 card-list">
        <h5>FEATURES</h5>
        <div class="row">

          <div class="col col-md-3">
            <div class="card">
              <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fluentui-cloud-flow-24-o'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Cloud Based System with Offline Capability</p>
              </div>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabler-wash-press'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Washable RFID Tag</p>
              </div>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
             <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mdi-timer-sync-outline'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Automation for Counting</p>
              </div>
            </div>
          </div>

          <div class="col col-md-3">
            <div class="card">
              <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabler-timezone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Real Time Physical Tracking</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('simpleline-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Theft Prevention</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fluentui-apps-list-detail-20'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Detail Information per Unit</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <i><?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fluentui-book-pulse-24'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height: 50px; width: 50px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?></i>
              <div class="card-body">
                <p class="card-text">Value with Loss & Breakage Information</p>
              </div>
            </div>
          </div>

        </div>
        
      </div>
    </div>

  </div>
</section>

<?php echo $__env->make('layouts.quote', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\imd_dev\resources\views\services\slft.blade.php ENDPATH**/ ?>