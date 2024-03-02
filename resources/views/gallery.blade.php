@extends('layouts.app')
@section('content')
<section id="inn-banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('assets/img/gallery-banner.jpg')">
        </div>
      </div>
    </div>
  </section>





























  <section id="inn-abt-section">
  <div class="container">
  <div class="row">
<div class="col-lg-12 text-center">
<h2 class="rv-product-details__title text-left">Our Gallery</h2>
</div>
</div>

      <div class="row">
      <div class="tz-gallery">

      <div class="row mb-3">

        @foreach ($galleries as $gallery)
            <div class="col-md-4 gal-img-box">
                <div class="card">
                    <a class="lightbox" href="{{ asset(@$gallery->image) }}">
                    <img src="{{ asset(@$gallery->image) }}" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
        @endforeach

      </div>

  </div>






      </div>
    </div>
  </section>
@endsection
