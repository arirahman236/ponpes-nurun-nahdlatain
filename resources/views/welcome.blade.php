@extends('layouts.app')

@section('content')
    @parent
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(/img/slide/slide-1.jpg)">
            <div class="carousel-container">
                <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Pondok Pesantren Nurun Nahdlatain Raha</span></h2>
                <p class="animate__animated animate__fadeInUp">{{Str::limit($abo->isi, 200)}}</p>
                <a href="{{ route('aboutProfile') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(/img/slide/slide-2.jpg)">
            <div class="carousel-container">
                <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="{{ route('aboutProfile') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(/img/slide/slide-3.jpg)">
            <div class="carousel-container">
                <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="{{ route('aboutProfile') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-8 col-md-6">
                        <div class="icon-box">
                        <div class="icon"><i class="icofont-listine-dots"></i></div>
                        @forelse ($berita as $berita1)
                            <img src="{{ asset($berita1->gambar) }}" class="img-fluid" alt="">
                            <h4 class="title"><a href="">{{$berita1->judul}}</a></h4>
                            <p class="description">
                                {{ Str::limit($berita1->isi, 300) }}
                            </p>
                        @empty
                            data tidak ada...
                        @endforelse
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                        <div class="icon"><i class="icofont-ui-clip-board"></i></div>
                        @forelse ($berita as $berita2)
                            <h4 class="title"><a href="">{{$berita2->judul}}</a></h4>
                            <h2>{{$berita2->created_at}}</h2>
                            <p class="description">{{Str::limit($berita2->isi, 200)}}</p>
                        @empty
                            data tidak ada...
                        @endforelse
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->
    </main>
@endsection
