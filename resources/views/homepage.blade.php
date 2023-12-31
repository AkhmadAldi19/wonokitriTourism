@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                <img
                    src="{{ asset('frontend/assets/img/hero.jpg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                Jelajahi Keindahan Desa Wisata
                            </h2>
                            <h1 class="islands__title">
                                Edelweiss Wonokitri
                            </h1>
                            <p class="islands__description">
                                desa terakhir menuju Bromo
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center"
            >Pilihan terbaik</span
        >
        <h2 class="section__title" style="text-align: center">
            Paket wisata Populer
        </h2>

        <div class="popular__container swiper">
            <div class="swiper-wrapper">
                @foreach($travel_packages as $travel_package)
                    <article class="popular__card swiper-slide">
                        <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                            <img
                                src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                                alt=""
                                class="popular__img"
                            />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>Rp </span>{{ number_format($travel_package->price,3) }} / Pax
                                </h2>
                                <h3 class="popular__title">
                                    {{ $travel_package->location}}
                                </h3>
                                <p class="popular__description">{{ $travel_package->type }}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div>
    </div>
</section>

<!--==================== VALUE ====================-->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
            </div>
        </div>

        <div class="value__content">
            <div class="value__data">
                <span class="section__subtitle">Mengapa Memilih Kami</span>
                <h2 class="section__title">
                    Pengalaman Yang Kami Janjikan Kepada Anda
                </h2>
                <p class="value__description">
                    Kami selalu siap melayani dengan memberikan pelayanan terbaik untuk Anda. 
                    Kami membuat pilihan yang baik untuk bepergian mengeksplore alam suku tengger.
                </p>
            </div>

            <div class="value__accordion">
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-shield-x value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Menikmati Spot Terbaik Melihat Sunrise <br> di Bromo
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Bromo adalah Salah satu gunung terkenal di Jawa Timur
                            dengan ketinggian 2.393 mdpl, yang seakan
                            berada di negeri atas awan. Di sini, Anda
                            dapat menikmati Sunrise ditemani
                            dengan pemandangan padang rumput dan
                            bunga-bunga cantik di spot Pananjakan salah satu
                            Spot Terindah dikawasan Bromo.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-x-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Menjelajahi Desa Wisata Yang Masih <br> memegang teguh budaya <br> asli Suku Tengger
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Desa Wonokitri Terkenal Akan Masyarakat yang
                            masih Memegang Adat dan tradisi Suku Tengger,
                            Nikmati dan jelajahi wisata alam budaya dengan
                            memesan tiket wisata event di WonokitriTourism
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-bar-chart-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Dengan Harga Paket wisata Yang <br>
                            sangat terjangkau
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            rasakan perjalanan yang menarik dengan paket wisata yang tentunya sangat amat terjangkau
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==================== Homestay ====================-->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center"
            >banyak pilihan</span
        >
        <h2 class="section__title" style="text-align: center">
            Homestay Terbaik 
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
                        <p class="blog__description">
                            {{ $blog->excerpt }}
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                {{ date('d M Y', strtotime($blog->created_at)) }}
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>{{ $blog->reads }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection