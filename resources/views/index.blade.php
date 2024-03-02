@extends('layouts.app')
@section('content')
<section class="rv-12-banner">
    <!-- banner socials -->
    <div class="rv-1-socials rv-3-banner__socials">
        <h6>Follow us</h6>
        <ul>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        </ul>
    </div>

    <!-- banner main content -->
    <div class="rv-12-banner__slider swiper">
        <div class="swiper-wrapper">
            <div class="rv-12-banner__slide swiper-slide">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-11">
                            <div class="rv-11-banner__txt">
                                <h6 class="rv-10-section__sub-title rv-12-banner__sub-title rv-text-anime">Ecospan Formulae</h6>
                                <h1 class="rv-11-banner__title rv-text-anime">The complete formula for a brightful tomorrow</h1>
                                <p class="ban-txt rv-text-anime wow fadeInUp" data-wow-delay="0.3s">Providing our best micronutrients & pesticides to the market & market’s best micronutrients and pesticides to you!</p>
                                <a href="{{ route('contact-us') }}" class="rv-3-def-btn rv-12-banner__btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rv-12-banner__slide rv-12-banner__slide--2 swiper-slide">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-11">
                            <div class="rv-11-banner__txt">
                                <h6 class="rv-10-section__sub-title rv-12-banner__sub-title rv-text-anime">Ecospan Formulae</h6>
                                <h1 class="rv-11-banner__title rv-text-anime">The complete formula for a brightful tomorrow</h1>
                                <p class="ban-txt rv-text-anime wow fadeInUp" data-wow-delay="0.3s">Providing our best micronutrients & pesticides to the market & market’s best micronutrients and pesticides to you!</p>
                                <a href="#" class="rv-3-def-btn rv-12-banner__btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rv-12-banner__slide rv-12-banner__slide--3 swiper-slide">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-11">
                            <div class="rv-11-banner__txt">
                               <h6 class="rv-10-section__sub-title rv-12-banner__sub-title rv-text-anime">Ecospan Formulae</h6>
                                <h1 class="rv-11-banner__title rv-text-anime">The complete formula for a brightful tomorrow</h1>
                                <p class="ban-txt rv-text-anime wow fadeInUp" data-wow-delay="0.3s">Providing our best micronutrients & pesticides to the market & market’s best micronutrients and pesticides to you!</p>
                                <a href="#" class="rv-3-def-btn rv-12-banner__btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- banner slider pagination -->
        <div class="rv-12-banner__dots" id="rv-12-banner-dots"></div>
    </div>

</section>
<!-- END INDEX-20 BANNER SLIDER -->


<!-- START INDEX-20 SERVICE SECTION -->
<section class="rv-20-service_section">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-down">
            <div class="col-md-6">


            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-5 col-sm-10 col-md-6">
                <img src="{{ asset('assets/img/wel-pic.png') }}" alt="image">
            </div>
            <div class="col-lg-7 col-sm-10 col-md-6">
            <div class="rv-20-service_section_heading">
                    <p class="rv-20-service_sub_title rv-text-anime"> <span></span> Welcome To</p>
                    <h2 class="rv-20-service_section_title rv-text-anime">Ecospan Formulae</h2>
                </div>
                <p>Micronutrients are the most indispensable element used by the plants in minimal quantities. If the quality and quantity is not properly judged then the crops/plants can result to low yield, poor growth and abnormal conditions. We at Ecospan Formulae, produced a high yielding, advanced growth building natural formula for all the micronutrients used in Atomic Absorption Spectrophotometer, deionizer, water treatment plant etc. We are among the best involved in continuous research & development of large-scale uniform quality products (Crop Micronutrients & allied products) to the agricultural market under “ZECO” brand. Best fertilizer manufacturing company in kolkata, West Bengal.</p>
                <p>By maintaining all the statuary & regulatory measures, we are continuously producing high grade Bio- Organic Manure, PGR, Agricultural stickers along with other micronutrients.</p>
            </div>

        </div>
    </div>

    <!--<span class="service-sh-1"><img src="assets/img/services/home-6-service-4.png" alt="image"></span>-->
    <span class="service-sh-2"><img src="{{ asset('assets/img/services/home-6-service-5.png') }}" alt="image"></span>
</section>
<!-- END INDEX-20 SERVICE SECTION -->


<section class="rv-12-products rv-section-spacing" data-aos="fade-up">
    <div class="container">
    <div class="row justify-content-center" data-aos="fade-down">
            <div class="col-md-6">
                <div class="rv-20-service_section_heading">
                    <p class="rv-20-service_sub_title rv-text-anime"> <span></span> Our Products</p>
                    <h2 class="rv-20-service_section_title rv-text-anime">Our Best Products.</h2>
                </div>

            </div>
        </div>
        <div class="rv-9-projects__slider swiper">
            <div class="swiper-wrapper">
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="rv-3-product rv-12-product swiper-slide">
                    <div class="rv-3-product__img rv-12-product__img">
                        <img src="{{ asset('assets/img/rv-12-pro-1.jpg') }}" alt="Product Image">
                    </div>

                    <div class="rv-3-product__txt">
                        <h5 class="rv-3-product__title"><a href="#">Product Name Here</a></h5>

                        <div class="rv-3-product__bottom">
                            <span class="rv-3-product__price">
                                <p class="pro-cat">Product Category</p>
                            </span>

                            <a href="" class="rv-3-product__cart-btn">Explore Now</a>
                        </div>
                    </div>
                </div>



            </div>

           <div class="rv-9-section-heading__right">
                <div class="rv-1-slider-nav rv-9-slider-nav" id="rv-9-projects-slider-nav">
                    <button class="prev"><i class="fa-regular fa-arrow-left"></i></button>
                    <button class="next"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- END INDEX-20 ABOUT SECTION -->
<section class="rv-20-about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="rv-20-about_image">
                    <img data-aos="fade-down" src="{{ asset('assets/img/home-6-about-1.png') }}" alt="image">

                    <img data-aos="fade-up" src="{{ asset('assets/img/home-6-about-2.png') }}" alt="image">
                    <div class="rv-20-about_experience_txt">
                        <h3>23+</h3>
                        <p>Year of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="rv-20-about_section_content" data-aos="fade-up">
                    <div class="rv-20-about_section_heading">
                        <p class="rv-20-about_sub_title rv-text-anime"> <span></span> Ecospan Formulae</p>
                        <h2 class="rv-20-about_section_title rv-text-anime">Exceptional Services</h2>
                        <p>At Ecospan Formulae, our main aim is to offer the best crop nutrition to the market. With every growing phase, we are continuously evolving as the market’s best production hub of all agro products.</p>
                    </div>
                    <div class="rv-20-about_content_top_actions">
                        <div class="rv-20-about_content_single_top_actions">
                            <div class="rv-20-about_content_single_top_actions_left">
                                <h3>Heading</h3>
                                <p>Denim aliquot poseurs locus..!</p>
                            </div>
                            <div class="rv-20-about_content_single_top_actions_icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="rv-20-about_content_single_top_actions">
                            <div class="rv-20-about_content_single_top_actions_left">
                                <h3>Heading</h3>
                                <p>Denim aliquot poseurs locus..!</p>
                            </div>
                            <div class="rv-20-about_content_single_top_actions_icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="rv-20-about_list">
                        <ul>
                            <li>
                                <h4><i class="far fa-chevron-double-right"></i>Heading</h4>
                                <p> 60% of your crop yield depends on soil. We believe that our Ecospan Formulae can definitely help you in 100% better and advanced growth when mixed with soil. </p>
                            </li>

                            <li>
                                <h4><i class="far fa-chevron-double-right"></i>Heading</h4>
                                <p> Our Ecospan Formulae is continuously developing and researching crop nutrition knowledge and practices all over the country under the brand name Zeco. </p>
                            </li>
                            <li>
                                <h4><i class="far fa-chevron-double-right"></i>Heading</h4>
                                <p> Agro based education is highly important for everyone. We are building technologies, backup system & equipments / Machineries for manufacturing crop micronutrients. </p>
                            </li>
                            <li>
                                <h4><i class="far fa-chevron-double-right"></i>Heading</h4>
                                <p> By working together with Zeco, your crop nutrition can perform more and ultimately you will win. More investment, more production, more return. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="about-sh-6"> <img src="{{ asset('assets/img/home-6-about-3.png') }}" alt="image"></span>
</section>
<!-- END INDEX-20 ABOUT SECTION -->


<!-- START INDEX-20 VIDEO SECTION -->
<section class="rv-20-video_section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7 col-sm-7">
                <div class="rv-20-video_section_heading" data-aos="fade-up">
                    <p class="rv-20-video_sub_title rv-text-anime"> <span></span> More Information</p>
                    <h2 class="rv-20-video_section_title rv-text-anime">Our Product Specialty</h2>
                    <p>Our main rationale is to provide the best quality of agricultural products to make the world much greener. Green means advanced quality of crop production, better yield and perfect income to all agro based businesses.</p>
                    <p>Zeco is the future formula & the choice of the millions. 5000+ retail outlets are our first phase of success.</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-5">
                <div class="rv-20-video_button" data-aos="fade-up">
                    <a href="https://www.youtube.com/embed/ruX4Le0kBng?si=lGo94ITFx_3PWjDx" class="video_btn my-video-links" data-vbtype="video" data-autoplay="true"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END INDEX-20 VIDEO SECTION -->


<!-- TESTIMONIAL SECTION START -->
<section class="rv-12-testimonial text-center rv-section-spacing" data-aos="fade-up">
    <div class="container position-relative">
     <div class="row justify-content-center" data-aos="fade-down">
            <div class="col-md-6">
                <div class="rv-20-service_section_heading">
                    <p class="rv-20-service_sub_title rv-text-anime"> <span></span> Customer Review</p>
                    <h2 class="rv-20-service_section_title rv-text-anime">What Our Client Say</h2>
                </div>

            </div>
        </div>



        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-8 col-md-9">
                <div class="rv-12-testimonial__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="rv-12-testimony swiper-slide">
                            <div class="rv-3-product__rating rv-3-testimony__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <p class="rv-3-testimony__txt">“Suspendisse in consectetur justo. Suspends molestee lorem accusant mattis rutrum. Nunc facilisis ultricies mi, et porta diam lobortis non. In hac habitasse platea dictumst”</p>
                        </div>
                        <div class="rv-12-testimony swiper-slide">
                            <div class="rv-3-product__rating rv-3-testimony__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <p class="rv-3-testimony__txt">“Suspendisse in consectetur justo. Suspends molestee lorem accusant mattis rutrum. Nunc facilisis ultricies mi, et porta diam lobortis non. In hac habitasse platea dictumst”</p>
                        </div>
                        <div class="rv-12-testimony swiper-slide">
                            <div class="rv-3-product__rating rv-3-testimony__rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <p class="rv-3-testimony__txt">“Suspendisse in consectetur justo. Suspends molestee lorem accusant mattis rutrum. Nunc facilisis ultricies mi, et porta diam lobortis non. In hac habitasse platea dictumst”</p>
                        </div>
                    </div>
                </div>

                <div class="rv-12-testimony__img-slider swiper">
                    <div class="swiper-wrapper justify-content-center align-items-center">
                        <div class="swiper-slide rv-3-testimony-img">
                            <img src="{{ asset('assets/img/rv-3-testimony-1.png') }}" alt="reviewer image">
                        </div>
                        <div class="swiper-slide rv-3-testimony-img">
                            <img src="{{ asset('assets/img/rv-3-testimony-2.png') }}" alt="reviewer image">
                        </div>
                        <div class="swiper-slide rv-3-testimony-img">
                            <img src="{{ asset('assets/img/rv-3-testimony-3.png') }}" alt="reviewer image">
                        </div>
                    </div>
                </div>

                <div class="rv-1-slider-nav rv-12-slider-nav rv-3-slider-nav-2 mt-0" id="rv-12-testimonial-slider-nav">
                    <button class="prev"><i class="fa-regular fa-arrow-left"></i></button>
                    <button class="next"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL SECTION END -->


<!-- START INDEX-20 CONTACT SECTION -->
<section class="rv-20-contact_main_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="rv-20-contact_image" data-aos="fade-up">
                    <img src="{{ asset('assets/img/home-6-1.png') }}" alt="image">
                </div>
            </div>
            <div class="col-md-12 col-lg-7">
                <div class="rv-20-contact_form_area" data-aos="fade-up">
                    <div class="rv-20-contact_section_heading">
                        <p class="rv-20-contact_sub_title rv-text-anime"> <span></span>Get in Touch</p>
                        <h2 class="rv-20-contact_section_title rv-text-anime">Seeking a Home Gardener? Reach Out To Us.</h2>
                    </div>
                    @include('admin.includes.alert-message')
                    <form action="{{ route('contact-us-send') }}" class="rv-20-contact_form">
                        <div class="row rv-20-form_row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row rv-20-form_row">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Choose Services">
                            </div>
                        </div>
                        <textarea placeholder="Your Message"></textarea>
                        <div class="rv-20-contact_form_button">
                            <button>Send Message <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <span class="home-6-sh-1"> <img src="{{ asset('assets/img/home-6-sh-1.png') }}" alt="image"></span>
    <span class="home-6-sh-2"> <img src="{{ asset('assets/img/home-6-sh-2.png') }}" alt="image"></span>
</section>
<!-- END INDEX-20 CONTACT SECTION -->


<!-- GALLERY SECTION START -->
<section class="rv-9-gallery">
    <div class="row justify-content-center row-cols-lg-5 row-cols-sm-3 row-cols-2 rv-inner-gallery-row">
        <div class="col">
            <div class="rv-9-gallery__img">
                <img src="{{ asset('assets/img/rv-9-gallery-1.jpg') }}" alt="Gallery-1">
            </div>
        </div>
        <div class="col">
            <div class="rv-9-gallery__img">
                <img src="{{ asset('assets/img/rv-9-gallery-2.jpg') }}" alt="Gallery-1">
            </div>
        </div>
        <div class="col">
            <div class="rv-9-gallery__img">
                <img src="{{ asset('assets/img/rv-9-gallery-3.jpg') }}" alt="Gallery-1">
            </div>
        </div>
        <div class="col">
            <div class="rv-9-gallery__img">
                <img src="{{ asset('assets/img/rv-9-gallery-4.jpg') }}" alt="Gallery-1">
            </div>
        </div>
        <div class="col">
            <div class="rv-9-gallery__img">
                <img src="{{ asset('assets/img/rv-9-gallery-5.jpg') }}" alt="Gallery-1">
            </div>
        </div>
    </div>

</section>
<!-- GALLERY SECTION END -->
@endsection
