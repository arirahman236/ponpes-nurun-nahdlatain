@extends('layouts.app')

@section('content')
    @parent
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Berita Detail</h2>
            <ol>
              <li><a href="index.html">Berita</a></li>
              <li>Berita Detail</li>
            </ol>
          </div>

        </div>
    </section>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

          <div class="portfolio-details-container">

            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset($berita->gambar) }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="portfolio-description">
            <h2>{{ $berita->judul }}</h2>
            <p>
                {{ $berita->isi }}
            </p>
          </div>

        </div>
      </section>
@endsection
