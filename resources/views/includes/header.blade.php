<!-- HEADER SECTION STARTS HERE -->
<header class="rv-1-header rv-inner-header p-0 header">
    <div class="rv-20-header-top">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-lg-6">
                    <div class="rv-8-header-top__txt rv-7-header-top__actions mb-0">
                        <div class="rv-8-header-contact-info">
                            <p class="mb-0"><i class="fa fa-map-marker"></i> 22/2, Khetra Mitra Lane, Salkia, Howrah, 711106</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rv-7-header-top__actions rv-20-header-top__actions justify-content-center justify-content-lg-end">

                        <h6 class="rv-8-header-contact-info rv-8-header-contact-numb"><i class="fa-solid fa-sharp fa-phone"></i> <a href="tel:9433340105">+91 9433340105</a></h6>
                        <h6 class="rv-8-header-contact-info rv-8-header-contact-email"><i class="fa-solid fa-envelope"></i><a href="mailto:info@ecospan.in"> info@ecospan.in
</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="to-be-fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4 col-xxs-6">
                    <div class="rv-1-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo">
                        </a>
                    </div>
                </div>

                <!-- nav menu -->
                <div class="col-md-8 col-8 col-xxs-6 order-1 order-lg-2">



                           <div class="overlay"></div>
                    <nav class="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
                        </div>
                        <ul class="menu-section">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>

                            @foreach($allProducts as $category => $columns)
                                <li class="menu-item-has-children">
                                    <a href="#">{{ $category }} <i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-mega menu-column-5">
                                        @foreach($columns as $columnName => $products)
                                            <div class="list-item">
                                                <ul>
                                                    @foreach($products as $product)
                                                        <li><a href="{{ route('product-detail', ['productId' => $product->id]) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </li>
                            @endforeach

                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                        <div class="header-item-right">
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                </div>

                 <div class="col-lg-2 col-8 col-xxs-6 order-1 order-lg-2">
                    <div class="justify-content-end">
                        <div class="rv-inner-header-right-btns rv-15-header-right-btns rv-20-header-bottom-right-btns">
                            <a href="#" class="d-sm-inline-block d-none">Download Brochure</a>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
</header>
<!-- HEADER SECTION ENDS HERE -->
