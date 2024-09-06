<!-- End Page Title -->
<?php $__env->startSection('title'); ?>
<div class="page-title" data-aos="fade">
    <div class="container">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Artikel</li>
        </ol>
      </nav>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo e($page['title']); ?></h2>
            <h6><?php echo e($page['updated_at']); ?></h6>
        </div>
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
                <a href="<?php echo e(url('/beranda')); ?>">Beranda</a>
              <a href="<?php echo e(url('/tentang/sejarah')); ?>">Sejarah</a>
              <a href="<?php echo e(url('/paket-wisata/live-in')); ?>">Live In</a>
              <a href="<?php echo e(url('/paket-wisata/education')); ?>">Education</a>
              <a href="<?php echo e(url('/prestasi')); ?>">Prestasi</a>
            </div>

          </div>

          <div class="col-lg-8 center" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo e(asset('storage/')); ?>/<?php echo e($page['image']); ?>" class="img-fluid services-img">
            <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
            <h6><span>Aut eum totam accusantium voluptatem.</span></h6>
            <p>
                <?php echo nl2br(str_replace("\n", "\n\n", strip_tags($page->body))); ?>

            </p>

          </div>

        </div>

      </div>
      <div class="mt-5 mb-5 text-center">
        <a href="<?php echo e(url('/articles')); ?>" class="btn btn-primary btn-lg">
            <i class="bi bi-arrow-left-circle me-2"></i>Back
        </a>
    </div>

    </section><!-- /Service Details Section -->

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\segajih-live-in-main\segajih-live-in-main\resources\views/article.blade.php ENDPATH**/ ?>