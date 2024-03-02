@extends('layouts.app')
@section('content')

<section id="inn-banner-slider" class="banner-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('assets/img/contact-banner.jpg')">
        </div>
      </div>
    </div>
  </section>




<section id="inn-abt-section" class="rv-2-contact rv-inner-contact rv-section-spacing" data-aos="fade-up">
      <div class="container">
      <div class="row">
<div class="col-lg-12 text-center">
<h2 class="rv-product-details__title text-left mb-0">Contact Us</h2>
<p>Thanks for showing your interest. Please fill the bellow mentioned form so that we can contact you asap. </p>

</div>
</div>

          <div class="rv-inner-contact-info-cards">
              <div class="rv-inner-contact-info">
                  <div class="rv-inner-contact-info__heading">
                      <div class="rv-inner-contact-info__icon">
                          <i class="fa-regular fa-phone"></i>
                      </div>
                      <h5 class="rv-inner-contact-info__title">Contact Numbers</h5>
                  </div>

                  <div class="rv-inner-contact-info__bottom">
                      <ul class="rv-5-footer-timings">
                          <li><a href="tel:9830040105"><b>Pallab Kundu (M.D.)</b> 9830040105</a></li>
                          <li><a href="tel:9830937637"><b>Office</b> 9830937637</a></li>
                          <li><a href="tel:9433340105"><b>Customer Care</b> 9433340105</a></li>
                      </ul>
                  </div>
              </div>

              <div class="rv-inner-contact-info">
                  <div class="rv-inner-contact-info__heading">
                      <div class="rv-inner-contact-info__icon">
                          <i class="fa-regular fa-envelope"></i>
                      </div>
                      <h5 class="rv-inner-contact-info__title">Email Address</h5>
                  </div>

                  <div class="rv-inner-contact-info__bottom">
                      <ul class="rv-5-footer-timings">
                          <li><a href="mailto:info@ecospan.in">info@ecospan.in</a></li>
                      </ul>
                  </div>
              </div>

              <div class="rv-inner-contact-info">
                  <div class="rv-inner-contact-info__heading">
                      <div class="rv-inner-contact-info__icon">
                          <i class="fa-regular fa-map"></i>
                      </div>
                      <h5 class="rv-inner-contact-info__title">Address</h5>
                  </div>

                  <div class="rv-inner-contact-info__bottom">
                      <p class="rv-5-footer-timings">22/2, Khetra Mitra Lane, <br>Salkia, Howrah 711106, <br>West Bengal</p>
                  </div>
              </div>
          </div>

          <div class="row gy-3 gy-sm-4">
              <!-- contact form -->
              <div class="col-xxl-8 col-lg-7">
                  <div class="rv-2-contact__txt rv-inner-contact__txt">
                      <h3 class="rv-2-contact-form-title">Let's Connect.</h3>
                      @include('admin.includes.alert-message')
                      <form action="{{ route('contact-us-send') }}" class="rv-2-contact__form rv-inner-contact__form">
                        @csrf
                          <div class="row">
                              <div class="col-sm-6">
                                  <input type="text" name="name" id="rv-2-contact-name" placeholder="Your Name">
                              </div>

                              <div class="col-sm-6">
                                  <input type="email" name="email" id="rv-2-contact-email" placeholder="Email">
                              </div>
                              <div class="col-12">
                                  <input type="phone" name="phone" id="rv-2-contact-phone" placeholder="Phone No.">
                              </div>
                              <div class="col-12">
                                  <textarea name="message" id="rv-2-contact-message" placeholder="Message"></textarea>
                              </div>
                              <div class="col-12">
                                  <button type="submit">Send Message</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>

              <!-- map -->
              <div class="col-xxl-4 col-lg-5">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29467.821375626852!2d88.344203!3d22.598631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277f1481c62b7%3A0xd2185cfd1c51101f!2sEcospan%20Formulae!5e0!3m2!1sen!2sin!4v1709220666931!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
      </div>
  </section>
@endsection
