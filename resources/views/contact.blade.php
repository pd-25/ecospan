@extends('layouts.app')
@section('content')
    <!-- BREADCRUMB STARTS HERE -->
    <div class="rv-breadcrumb pt-120 pb-120">
        <div class="container">
            <h1 class="rv-breadcrumb__title">Contact</h1>

            <ul class="rv-breadcrumb__nav d-flex justify-content-center">
                <li><a href="index.html"><i class="fa-solid fa-sharp fa-home"></i> Home</a></li>
                <li class="current-page"><span class="dvdr"> &#47;</span><span>Contact</span></li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ENDS HERE -->


    <!-- CONTACT SECTION START -->
    <section class="rv-2-contact rv-inner-contact rv-section-spacing" data-aos="fade-up">
        <div class="container">
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
                            <li><a href="tel:0123456789">0123 456 789</a></li>
                            <li><a href="tel:9876543210">9876 543 210</a></li>
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
                            <li><a href="mailto:info@organiyo.com">info@organiyo.com</a></li>
                            <li><a href="mailto:test@organiyo.com">test@organiyo.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="rv-inner-contact-info">
                    <div class="rv-inner-contact-info__heading">
                        <div class="rv-inner-contact-info__icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <h5 class="rv-inner-contact-info__title">Hours of Operation</h5>
                    </div>

                    <div class="rv-inner-contact-info__bottom">
                        <ul class="rv-5-footer-timings">
                            <li>
                                <span class="key">Monday - Friday : </span>
                                <span class="value">08:30 am - 10:00 pm</span>
                            </li>
                            <li>
                                <span class="key">Saturday - Sunday : </span>
                                <span class="value">10:30 am - 08:00 pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-3 gy-sm-4">
                <!-- contact form -->
                <div class="col-xxl-8 col-lg-7">
                    <div class="rv-2-contact__txt rv-inner-contact__txt">
                        <h3 class="rv-2-contact-form-title">Let's Connect.</h3>
                        <form action="#" class="rv-2-contact__form rv-inner-contact__form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="rv-2-contact-name" placeholder="Your Name">
                                </div>

                                <div class="col-sm-6">
                                    <input type="email" name="email" id="rv-2-contact-email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <select name="subjects" id="rv-2-contact-subject">
                                        <option value="Selects Subject" hidden>Select Subject</option>
                                        <option value="Project Buy">Project Buy</option>
                                        <option value="Custom Project">Custom Project</option>
                                        <option value="Partnership Offer">Partnership Offer</option>
                                        <option value="others">Others</option>
                                    </select>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187902115!2d90.33728818728464!3d23.780975728108746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1697280378529!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END -->
@endsection
