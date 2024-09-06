<?php $__env->startSection('title'); ?>
<div class="page-title" data-aos="fade">
        <div class="container">
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current"><?php echo e($categoryName); ?></li>
            </ol>
          </nav>
        </div>
 </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<section id="portfolio-details" class="portfolio-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
                <?php if($post->image): ?>
                <div class="portfolio-details-slider swiper init-swiper rounded shadow-sm">
                    <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": "auto",
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          }
                        }
                    </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid rounded smaller-image" alt="Post Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('assets/img/portfolio/product-1.jpg')); ?>" class="img-fluid rounded smaller-image" alt="Additional Image">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7 d-flex flex-column justify-content-between">
                <div class="portfolio-info bg-light p-4 rounded shadow-sm mb-4">
                    <h3 class="text-dark"><?php echo e($post->title); ?></h3>
                    <ul class="list-unstyled">
                        <li><strong>Tangal ditulis : </strong> <?php echo e($post->created_at->format('d M Y')); ?></li>
                    </ul>
                </div>
                <div class="portfolio-description p-4 bg-white rounded shadow-sm">
                    <h2 class="text-primary"><?php echo e($post->title); ?></h2>
                    <p class="text-muted">
                        <?php echo nl2br(str_replace("\n", "\n\n", strip_tags($post->body))); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<section id="portfolio-details" class="portfolio-details section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <h2 class="text-center text-muted">No posts available</h2>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<div class="mt-5 mb-5 text-center">
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary btn-lg">
        <i class="bi bi-arrow-left-circle me-2"></i>Back
    </a>
</div>

<style>
    /* Custom CSS to adjust image size and alignment */
    .smaller-image {
        max-width: 80%;
        height: auto;
        margin: 0 auto;
        display: block;
    }

    .portfolio-info, .portfolio-description {
        max-height: 100%; /* Ensure height is equal to the image */
    }

    @media (max-width: 992px) {
        .portfolio-info, .portfolio-description {
            margin-top: 20px; /* Move text below image on smaller screens */
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\segajih-live-in-main\segajih-live-in-main\resources\views/index.blade.php ENDPATH**/ ?>