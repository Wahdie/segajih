@extends('posts.index')
@section('hero')
<section id="hero" class="hero section dark-background">
    <div class="container">
    <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h3>"Pulang Ke Rumah Simbah"</h3>
        <h1>Segajih Live In & Cultural Education</h1>
        <h6>Desa Wisata Hargotirto</h6>
        <p>Vocational Culture In The Tourist Village</p>
        <div class="d-flex">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
        </div>
        {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img" > data-aos="zoom-out" data-aos-delay="200"> --}}
        <div class="col-lg-6 order-1 order-lg-2 hero-img" >
        <img src="assets/img/adwi.jpg" class="img-fluid animated" alt="">
        </div>
    </div>
    </div>

</section>
@endsection
@section('content')
<section id="about" class="skills section">
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row">

        <div class="col-lg-6 d-flex align-items-center">
          <img src="assets/img/adwi.jpg" class="img-fluid rounded" alt="">
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0 content">

          <h3>Nikmatnya Pulang ke Rumah Simbah di Segajih Live In</h3>
          <p>
              Segajih Live in yang terletak di Kabupaten Kulon Progo, Jogja dengan lokasi yang sangat strategis 30 menit perjalanan bandara Yogyakarta International Airport. Dengan predikat desa wisata terbaik, sagajih menyajikan atraksi seni budaya, sego tiplek, kopi batik sundul langit, dan oleh-oleh khas. Berkunjung dan tinggal di sini merupakan pengalaman yang tak terlupakan seumur hidup. Anda akan menemukan keramahtamahan, kehangatan, dan kedamaian.
          </p>


        </div>
      </div>

    </div>

  </section>

@endsection
