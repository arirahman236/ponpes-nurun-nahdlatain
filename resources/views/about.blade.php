@extends('layouts.app')

    @section('content')
    @parent
    <section id="about" class="about">
        <div class="container mt-5 pd-5 pt-lg-3">

          <div class="section-title">
            <h2>Pondok Pesantren Nurun Nahdlatain</h2>
          </div>

          <div class="row">
            <div class="col pt-2 pt-lg-0 order-2 order-lg-1 content">
              <h3>{{ $aboutProfile->judul}}</h3>
              <p class="font-italic">
                {{ $aboutProfile->isi}}
              </p>
            </div>
          </div>

        </div>
      </section>
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p>{{ $aboutProfile->isi_bawah}}</p>
          </div>

          <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>{{ $aboutProfile->lokasi}}</p>
                </div>

                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $aboutProfile->email}}</p>
                </div>

                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>{{ $aboutProfile->telp}}</p>
                </div>
               </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <div class="info">
                    <iframe src="https://www.google.com/maps/place/MASJID+NURUN+NAHDLATAIN/@-4.8143015,122.7149429,17z/data=!3m1!4b1!4m5!3m4!1s0x2da24bfb6b385e91:0xbadabfffbaec1aad!8m2!3d-4.8143015!4d122.7171316" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>
            </div>

          </div>

        </div>
      </section>
    @endsection
