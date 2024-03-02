@extends('layouts.app')
@section('content')
<section id="inn-banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('{{ asset('assets/img/product-banner.jpg') }}')">
        </div>
      </div>
    </div>
  </section>

<section id="inn-abt-section" class="rv-product-details rv-section-spacing">
      <div class="container">
          <div class="row g-0 align-items-start justify-content-center">
              <div class="col-lg-6 col-12 col-xxs-12">
                  <div class="rv-product-details__imgs">
                      <div class="rv-product-details-img-slider-2 swiper" id="rv-product-details-img-slider-2">
                          <div class="swiper-wrapper">
                              <div class="rv-product-details__img swiper-slide"><img src="{{ asset(@$product->image) }}" alt="Product Image"></div>
                              {{-- <div class="rv-product-details__img swiper-slide"><img src="{{ asset('assets/img/rv-12-pro-7.png') }}" alt="Product Image"></div> --}}
                              {{-- <div class="rv-product-details__img swiper-slide"><img src="{{ asset('assets/img/rv-12-pro-8.png') }}" alt="Product Image"></div> --}}
                              {{-- <div class="rv-product-details__img swiper-slide"><img src="{{ asset('assets/img/rv-12-pro-9.png') }}" alt="Product Image"></div> --}}
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="rv-product-details__top-txt">
                      <h2 class="rv-product-details__title text-left">{{ @$product->name }}</h2>
          <div class="detail single-pro-box">
          <hr>
          <p class="pro-desc-box">MICRONUTRIENT</p>
              <hr>
          <p class="pro-spec-head">Product Category:</p>
          <p class="pro-spec-ctn">{{ @$product->category_name }}
</p>
                          <hr>
                          <p class="pro-spec-head">Major Ingredients:</p>
                      <p class="pro-spec-ctn">{{ @$product->major_ingredients }}</p>
                                      <hr>
          <p class="pro-spec-head">Role And Function:</p>
          <p class="pro-spec-ctn">{{ @$product->role_and_function }}</p>
                                      <hr>
          <p class="pro-spec-head">Use Recommendation:</p>
          <p class="pro-spec-ctn">{{ @$product->use_recommendation }}</p>
                                      <hr>
          <p class="pro-spec-head">Available Pack:</p>
          <p class="pro-spec-ctn">{{ @$product->available_pack }}</p>
                          <hr>
          <p class="pro-call-link"><span>Call Us at: <a href="tel:+919433340105">+91 9433340105</a></span> <span>or</span>  <span>Email Us at: <a href="">info@ecospan.in</a></span></p>


      </div>
                  </div>
              </div>

              <div class="col-12">
                  <div class="rv-product-details__bottom-txt">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="descr-tab" data-bs-toggle="tab" data-bs-target="#descr-tab-pane" type="button" role="tab" aria-controls="descr-tab-pane" aria-selected="true">Description</button>
                          </li>

                      </ul>
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="descr-tab-pane" role="tabpanel" aria-labelledby="descr-tab" tabindex="0">
                              <div class="rv-product-details__descr">
                                  <h6 class="rv-product-details-bottom__title">Product Description</h6>
                                  <p>{{ @$product->description }}</p>
                              </div>
                          </div>



                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
