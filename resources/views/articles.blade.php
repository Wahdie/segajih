@extends('layouts.page')

@section('content')
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
                    <a href="https://www.detik.com/jateng/wisata/d-6744366/kulon-progo-hattrick-desa-wisata-terbaik-di-indonesia-sandiaga-luar-biasa" target="_blank"><img class="card-img-top" src="{{ asset('assets/img/sandi.JPEG') }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">Senin 29 Mei 2023</div>
                        <h2 class="card-title">Kulon Progo Hattrick Desa Wisata Terbaik di Indonesia, Sandiaga: Luar Biasa!</h2>
                        <p class="card-text">Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta (DIY), meraih penghargaan Anugerah Desa Wisata Indonesia (ADWI) untuk ketiga kalinya selama tiga tahun berturut-turut. Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Salahuddin Uno menyebut raihan ini menjadi yang pertama di Indonesia.</p>
                        <a class="btn btn-primary" href="https://www.detik.com/jateng/wisata/d-6744366/kulon-progo-hattrick-desa-wisata-terbaik-di-indonesia-sandiaga-luar-biasa" target="_blank">Read more →</a>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @foreach ($pages as $page )
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top w-25" src="{{ asset('storage/') }}/{{ $page['image'] }}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $page['created_at'] }}</div>
                                <h2 class="card-title h4">{{ $page['title'] }}</h2>
                                <p class="card-text">{{ Str::limit(strip_tags($page['body']), 100)}}</p>
                                <a class="btn btn-primary" href="articles/{{ $page['slug'] }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination-->

                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item"> {{ $pages->links('partials.paginate') }}</li>
                        {{-- <li class="page-item"><a class="page-link" href="{{ url('/articles?page=1') }}"> {{ $pages->links() }}</a></li> --}}
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
                                    <li><a href="{{ url('/tentang/sejarah') }}">Sejarah</a></li>
                                    <li><a href="{{ url('/tentang/pariwisata') }}">Pariwisata</a></li>
                                    <li><a href="{{ url('/paket-wisata/live-in') }}">Live In</a></li>
                                    <li><a href="{{ url('/paket-wisata/education') }}">Education</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="{{ url('/paket-wisata/outbond') }}">Outbond</a></li>
                                    <li><a href="{{ url('/produk/fashion') }}">Fashoion</a></li>
                                    <li><a href="{{ url('/produk/kerajinan') }}">Kerajinan</a></li>
                                    <li><a href="{{ url('/produk/kuliner') }}">Kuliner</a></li>
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

@endsection
