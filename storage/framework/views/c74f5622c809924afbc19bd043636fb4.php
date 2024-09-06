<?php $__env->startSection('content'); ?>
<!-- Page content-->
<section id="starter-section" class="starter-section section">
<div class="container section-title" data-aos="fade-up">
        <h2>Artikel</h2>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4" >
                    <a href="https://www.detik.com/jateng/wisata/d-6744366/kulon-progo-hattrick-desa-wisata-terbaik-di-indonesia-sandiaga-luar-biasa" target="_blank"><img class="card-img-top" src="<?php echo e(asset('assets/img/sandi.JPEG')); ?>" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">Senin 29 Mei 2023</div>
                        <h2 class="card-title">Kulon Progo Hattrick Desa Wisata Terbaik di Indonesia, Sandiaga: Luar Biasa!</h2>
                        <p class="card-text">Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta (DIY), meraih penghargaan Anugerah Desa Wisata Indonesia (ADWI) untuk ketiga kalinya selama tiga tahun berturut-turut. Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Salahuddin Uno menyebut raihan ini menjadi yang pertama di Indonesia.</p>
                        <a class="btn btn-primary" href="https://www.detik.com/jateng/wisata/d-6744366/kulon-progo-hattrick-desa-wisata-terbaik-di-indonesia-sandiaga-luar-biasa" target="_blank">Read more →</a>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top w-25" src="<?php echo e(asset('storage/')); ?>/<?php echo e($page['image']); ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo e($page['created_at']); ?></div>
                                <h2 class="card-title h4"><?php echo e($page['title']); ?></h2>
                                <p class="card-text"><?php echo e(Str::limit(strip_tags($page['body']), 100)); ?></p>
                                <a class="btn btn-primary" href="articles/<?php echo e($page['slug']); ?>">Read more →</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- Pagination-->

                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item"> <?php echo e($pages->links('partials.paginate')); ?></li>
                        
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Sejarah</a></li>
                                    <li><a href="#!">Pariwisata</a></li>
                                    <li><a href="#!">Live In</a></li>
                                    <li><a href="#!">Education</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Outbond</a></li>
                                    <li><a href="#!">Fashoion</a></li>
                                    <li><a href="#!">Kerajinan</a></li>
                                    <li><a href="#!">Kuliner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Segajih Live In</div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\segajih-live-in-main\segajih-live-in-main\resources\views/articles.blade.php ENDPATH**/ ?>