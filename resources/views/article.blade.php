@extends('layouts.page')<!-- End Page Title -->
@section('title')
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
@endsection
@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $page['title'] }}</h2>
            <h6>{{ $page['updated_at'] }}</h6>
        </div>
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
                <a href="{{ url('/beranda') }}">Beranda</a>
              <a href="{{ url('/tentang/sejarah') }}">Sejarah</a>
              <a href="{{ url('/paket-wisata/live-in') }}">Live In</a>
              <a href="{{ url('/paket-wisata/education') }}">Education</a>
              <a href="{{ url('/prestasi') }}">Prestasi</a>
            </div>
{{--
            <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p> --}}
          </div>

          <div class="col-lg-8 center" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('storage/') }}/{{ $page['image'] }}" class="img-fluid services-img">
            <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
            <h6><span>Aut eum totam accusantium voluptatem.</span></h6>
            <p>
                {!! nl2br(str_replace("\n", "\n\n", strip_tags($page->body))) !!}
            </p>

          </div>

        </div>

      </div>
      <div class="mt-5 mb-5 text-center">
        <a href="{{ url('/articles')}}" class="btn btn-primary btn-lg">
            <i class="bi bi-arrow-left-circle me-2"></i>Back
        </a>
    </div>

    </section><!-- /Service Details Section -->

 @endsection
