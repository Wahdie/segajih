<<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ url('/beranda') }}" class="">Beranda</a></li>
    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="{{ url('/tentang/pariwisata') }}">Pariwisata</a></li>
            <li><a href="{{ url('/tentang/sejarah') }}">Sejarah</a></li>

        </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Paket Wisata</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="{{ url('/paket-wisata/live-in') }}">Live In</a></li>
            <li><a href="{{ url('/paket-wisata/education') }}">Education</a></li>
            <li><a href="{{ url('/paket-wisata/outbond') }}">Outbond</a></li>
            <li><a href="{{ url('/paket-wisata/camping') }}">Camping</a></li>
            <li><a href="{{ url('/paket-wisata/tracking') }}">Tracking</a></li>
            <li><a href="{{ url('/paket-wisata/ldk') }}">LDK</a></li>
            <li><a href="{{ url('/paket-wisata/susur-sungai') }}">Susur Sungai</a></li>
            <li><a href="{{ url('/paket-wisata/jeep-tour') }}">Jeep Tour</a></li>
        </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Seni Budaya</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="{{ url('/seni-budaya/saparan') }}">Saparan</a></li>
            <li><a href="{{ url('/seni-budaya/suronan') }}">Suronan</a></li>
            <li><a href="{{ url('/seni-budaya/takbiran') }}">Takbiran</a></li>
            <li><a href="{{ url('/seni-budaya/mocopatan') }}">Mocopatan</a></li>
            <li><a href="{{ url('/seni-budaya/ketoprak') }}">Ketoprak</a></li>
            <li><a href="{{ url('/seni-budaya/wayang-kulit')}}">kulit</a></li>
            <li><a href="{{ url('/seni-budaya/incling') }}">Incling</a></li>
            <li><a href="{{ url('/seni-budaya/karawitan') }}">Karawitan</a></li>
        </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="{{ url('/produk/kuliner') }}">Kuliner</a></li>
            <li><a href="{{ url('/produk/kerajinan') }}">Kerajinan</a></li>
            <li><a href="{{ url('/produk/fashion') }}">Fashion</a></li>
        </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Akomodasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="{{ url('/akomodasi/penginapan') }}">Penginapan</a></li>
            <li><a href="{{ url('/akomodasi/transportasi') }}">Transportasi</a></li>
            <li><a href="{{ url('/akomodasi/rumah-makan') }}">Rumah Makan</a></li>
        </ul>
    </li>
    <li><a href="{{ url('/articles') }}">Artikel</a></li>
    <li><a href="{{ url('/prestasi') }}">Prestasi</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
