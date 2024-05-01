@extends('web.layouts.home-page')

@push('pageTitle', 'Trang chủ')

@section('mainContent')
    <!-- Swiper-->
    <section id="home">
        <div class="swiper-container swiper-slider swiper-slider_fullheight bg-gray-dark" data-simulate-touch="false" data-loop="true" data-autoplay="4500">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-slide-bg="{{ asset('theme/images/parallax-2.jpg') }}">
                    <div class="swiper-slide-caption text-center">
                        <div class="container">
                            <div class="row justify-content-lg-center">
                                <div class="col-lg-10">
                                    <h1 class="heading-decorated" data-caption-animate="fadeInUpSmall" data-caption-delay="0">Construction</h1>
                                    <h4 class="text-boxed" data-caption-animate="fadeInUpSmall" data-caption-delay="200">See how a 10-stories TOWER IS  being built, in a time-lapse!</h4><a class="button button-primary" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#modal" data-bs-toggle="modal">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide text-center" data-slide-bg="{{ asset('theme/images/parallax-1.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-lg-center">
                                <div class="col-lg-10">
                                    <h1 class="heading-decorated" data-caption-animate="fadeInUpSmall" data-caption-delay="0">Discounts</h1>
                                    <h4 data-caption-animate="fadeInUpSmall" data-caption-delay="200">Summer discounts for big construction projects!</h4><a class="button button-primary" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#modal" data-bs-toggle="modal">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide text-center" data-slide-bg="{{ asset('theme/images/parallax-3.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-lg-center">
                                <div class="col-lg-10">
                                    <h1 class="heading-decorated" data-caption-animate="fadeInUpSmall" data-caption-delay="0">Projects</h1>
                                    <h4 data-caption-animate="fadeInUpSmall" data-caption-delay="200">This year we took more complex constructions than ever before...</h4><a class="button button-primary" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#modal" data-bs-toggle="modal">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev linearicons-chevron-left"></div>
            <div class="swiper-button-next linearicons-chevron-right"></div>
        </div>
    </section>

    <!-- Our History-->
    <section class="novi-background bg-cover section-md bg-gray-lighter" id="about">
        <div class="container">
            <div class="row justify-content-md-center row-30 row-md-50">
                <div class="col-md-11 col-lg-10 col-xl-6">
                    <h4 class="heading-decorated">@lang('home-page.about-us.title')</h4>
                    <p class="heading-6 text-width-1">@lang('home-page.about-us.headline')</p>
                    <p>@lang('home-page.about-us.description')</p><a class="button button-primary" href="#modal" data-bs-toggle="modal">LIÊN HỆ NGAY</a>
                </div>
                <div class="col-md-11 col-lg-10 col-xl-6"><img src="{{ asset('theme/images/home-1-652x491.jpg') }}" alt="" width="652" height="491"/>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray-dark parallax-container" data-parallax-img="{{ asset('theme/images/slider-slide-1-1920x1080.jpg') }}">
        <div class="parallax-content">
            <div class="section-lg text-center">
                <div class="container">
                    <div class="row justify-content-md-center row-50">
                        <div class="col-md-6 col-lg-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__wrap">
                                    <div class="counter">250</div>
                                </div>
                                <p class="box-counter__title">Projects Completed</p>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__wrap">
                                    <div class="counter">302</div>
                                </div>
                                <p class="box-counter__title">Staff members</p>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__wrap">
                                    <div class="counter">15</div>
                                </div>
                                <p class="box-counter__title">Million Man-hours</p>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__wrap">
                                    <div class="counter">99</div>
                                </div>
                                <p class="box-counter__title">Awards won</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services-->
    <section class="novi-background bg-cover section-md bg-default text-center" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="heading-decorated">Our Services</h4>
                </div>
            </div>
            <div class="row row-50 justify-content-md-center justify-content-lg-start">
                <div class="col-md-6 col-xl-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit__left">
                                <div class="blurb-circle__icon"><span class="icon novi-icon novi-background linearicons-pencil-ruler"></span></div>
                            </div>
                            <div class="unit__body">
                                <p class="heading-6 blurb__title"><a href="#">Pre-construction Services</a></p>
                                <p>We take our time on initial planning before any construction begins, to balance all the financial and efficiency issues beforehand...</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit__left">
                                <div class="blurb-circle__icon"><span class="icon novi-icon novi-background linearicons-users"></span></div>
                            </div>
                            <div class="unit__body">
                                <p class="heading-6 blurb__title"><a href="#">General Contracting</a></p>
                                <p>We have a long list of professional contractors, whom our engineers and architects enjoy to work with on a majority of our projects!</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit__left">
                                <div class="blurb-circle__icon"><span class="icon novi-icon novi-background linearicons-wall"></span></div>
                            </div>
                            <div class="unit__body">
                                <p class="heading-6 blurb__title"><a href="#">Construction Services</a></p>
                                <p>Our customers love the pace/quality tempo that we show during each of the principal construction processes!</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit__left">
                                <div class="blurb-circle__icon"><span class="icon novi-icon novi-background linearicons-apartment"></span></div>
                            </div>
                            <div class="unit__body">
                                <p class="heading-6 blurb__title"><a href="#">Construction Management</a></p>
                                <p>Construction project management is essential. We're using the most time and iterations efficient life cycles methods for that.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit__left">
                                <div class="blurb-circle__icon"><span class="icon novi-icon novi-background linearicons-home4"></span></div>
                            </div>
                            <div class="unit__body">
                                <p class="heading-6 blurb__title"><a href="#">Building Information Modeling (BIM)</a></p>
                                <p>Oftentimes physical and functional essence of any construction project needs to be represented digitally, in a 3D model format.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Blurb circle-->
                    <article class="blurb blurb-circle">
                        <div class="unit flex-sm-row unit-spacing-md">
                            <div class="unit__left">
                                <div class="blurb-circle__icon"><span class="icon novi-icon novi-background linearicons-pencil-ruler2"></span></div>
                            </div>
                            <div class="unit__body">
                                <p class="heading-6 blurb__title"><a href="#">Design-Build</a></p>
                                <p>If a project is not too complex, we may hire a designer-builder type of contractor, to make the longevity of the construction shorter.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="novi-background bg-cover section-md bg-accent text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-9 col-xl-8">
                    <h4 class="heading-decorated">IF YOU CAN ENVISION IT, THEN WE CAN BUILD IT! <br class="d-none d-lg-inline"> TELL US MORE ABOUT YOUR PROJECT</h4><a class="button button-primary" href="#modal" data-bs-toggle="modal">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects-->
    <section class="novi-background bg-cover bg-default" id="projects">
        <div class="container-fluid container-flex">
            <div class="row g-0">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-1-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>COMMERCIAL</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-1-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">COMMERCIAL</a></h6>
                                    <p>It’s probably the most diverse category of construction to work in. But we’ve got experience…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-2-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>CULTURAL / LIFESTYLE</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-2-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">CULTURAL / LIFESTYLE</a></h6>
                                    <p>Working on a socially important building, such as a park involves additional landscape construction expertise.…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-3-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>DATA / TECHNOLOGY</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-3-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">DATA / TECHNOLOGY</a></h6>
                                    <p>While constructing  a headquarters building for an IT company is relatively easy, we’ve also…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-4-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>EDUCATIONAL</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-4-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">EDUCATIONAL</a></h6>
                                    <p>Educational institutions can be much more creative than your regular school or a college campus!…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-5-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>GOVERNMENT / MILITARY</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-5-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">GOVERNMENT / MILITARY</a></h6>
                                    <p>The US military and States governments used our expertise and manpower to build numerous military-grade…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-6-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>HEALTHCARE</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-6-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">HEALTHCARE</a></h6>
                                    <p>We can build any type of healthcare buildings. From a small private medical clinic to…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-7-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>MANUFACTURING / INDUSTRIAL</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-7-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">MANUFACTURING / INDUSTRIAL</a></h6>
                                    <p>Building a manufacturing facility or a factory house can be much more challenging than building…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <!-- Thumb creative-->
                    <div class="thumb-creative">
                        <div class="thumb-creative__inner">
                            <div class="thumb-creative__front">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-8-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6>WAREHOUSE / LOGISTICS</h6>
                                </div>
                            </div>
                            <div class="thumb-creative__back">
                                <figure class="thumb-creative__image-wrap"><img class="thumb-creative__image" src="images/project-8-480x361.jpg" alt="" width="480" height="361"/>
                                </figure>
                                <div class="thumb-creative__content">
                                    <h6 class="thumb-creative__title"><a href="#">WAREHOUSE / LOGISTICS</a></h6>
                                    <p>While building a warehouse for an e-store is no easy feat itself, think about building…</p><a class="button button-link" href="#">View projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Executive managers-->
    <section class="novi-background bg-cover section-lg bg-default text-center">
        <div class="container">
            <h4 class="heading-decorated">Executive managers</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel offset-top-1" data-items="1" data-sm-items="2" data-md-items="2" data-lg-items="3" data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-margin="30" data-mouse-drag="false" data-autoplay="true">
                <article class="thumb-flat"><img class="thumb-flat__image" src="images/calvin-fitzerald-418x415.jpg" alt="" width="418" height="415"/>
                    <div class="thumb-flat__body">
                        <p class="heading-6"><a href="#">Calvin Fitzgerald</a></p>
                        <p class="thumb-flat__subtitle">President</p>
                        <p>Calvin Fitzgerald is an established and well-respected expert in the construction industry. With more than 35 years of practical experience in the business, Calvin has built his career on bringing the most outlandish conceptual visions from blueprints to a street next to yours... His leadership skills cemented Constructo's dominating positions among our competitors.</p>
                    </div>
                </article>
                <article class="thumb-flat"><img class="thumb-flat__image" src="images/taylor-wilson-418x415.jpg" alt="" width="418" height="415"/>
                    <div class="thumb-flat__body">
                        <p class="heading-6"><a href="#">Taylor Wilson</a></p>
                        <p class="thumb-flat__subtitle">Chief Executive Officer</p>
                        <p>Taylor's been involved in the construction business since the 1970's... His profound experience in building miscellaneous types of projects and his innovative mindset makes him the leading force in our company. The BIM and Db methods that he implemented are now the lynchpins of our business operations with all of our clients...</p>
                    </div>
                </article>
                <article class="thumb-flat"><img class="thumb-flat__image" src="images/josh-wagner-418x415.jpg" alt="" width="418" height="415"/>
                    <div class="thumb-flat__body">
                        <p class="heading-6"><a href="#">Josh Wagner</a></p>
                        <p class="thumb-flat__subtitle">Chief Design Officer</p>
                        <p>Josh leads our creative team of designers and engineers...His proven ability to manage the most complex projects and bring the craziest concepts to life is what makes him as efficient as he is. Together, this creative team can be the launchpad of any project, giving it a head start at the earliest stages of the construction project's planning.</p>
                    </div>
                </article>
                <article class="thumb-flat"><img class="thumb-flat__image" src="images/luis-maxwell-418x415.jpg" alt="" width="418" height="415"/>
                    <div class="thumb-flat__body">
                        <p class="heading-6"><a href="#">Luis Maxwell</a></p>
                        <p class="thumb-flat__subtitle">Contractors Operations Head</p>
                        <p>While we do all the pre-construction planning and sketching, scheduling and managing on an in-house basis, we hire a lot of 3rd party contractors for the actual on-site work. Luis Maxwell is the person to manage all our contractors across all of our projects being currently in development.</p>
                    </div>
                </article>
                <article class="thumb-flat"><img class="thumb-flat__image" src="images/ken-ferguson-418x415.jpg" alt="" width="418" height="415"/>
                    <div class="thumb-flat__body">
                        <p class="heading-6"><a href="#">Ken Ferguson</a></p>
                        <p class="thumb-flat__subtitle">Chief Financial Officer</p>
                        <p>Ken's been working as a chief financial analyst for Bechtel; Fluor Corp.; CB&I and Kiewit Corp. During those years he excelled in this field, efficiently cutting the side expenses that were bringing those top contractors down. Few years ago we managed to get him onboard, and not even a full year later we've had a our returns in a form of an optimized expenses budget!</p>
                    </div>
                </article>
                <article class="thumb-flat"><img class="thumb-flat__image" src="images/edward-elliot-418x315.jpg" alt="" width="418" height="315"/>
                    <div class="thumb-flat__body">
                        <p class="heading-6"><a href="#">Edward  Elliott</a></p>
                        <p class="thumb-flat__subtitle">Vice President of Operations</p>
                        <p>Previously Edward owned his own mid-sized contracting company. That kind of a first hand, entrepreneurial experience in managing all the processes and operations for a construction company got our attention. Last year we invited him to join our team, which he fortunately did...</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Testimonials-->
    <section class="section parallax-container" data-parallax-img="{{ asset('theme/project-category-healthcare.jpg') }}" id="testimonials">
        <div class="parallax-content">
            <section class="section-lg context-dark">
                <div class="container">
                    <div class="row row-50">
                        <div class="col-md-6">
                            <!-- Quote default-->
                            <div class="quote-default quote-default_left">
                                <div class="quote-default__image"><img src="{{ asset('theme/deborah-quagmire-120x120.jpg') }}" alt="" width="120" height="120"/>
                                </div>
                                <svg class="quote-default__mark" version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30.234px" height="23.484px" viewbox="0 0 30.234 23.484" xml:space="preserve">
                      <g>
                          <path d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959              c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246              c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885              c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723              c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984              c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635              s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                      </g>
                    </svg>
                                <div class="quote-default__text">
                                    <p class="q">As an official from North Dakota's state government, I want to thank your construction company. On behalf of the citizens of the state, we're so grateful for this new, innovative building! This allows North Dakota to hold its legislative operations in a contemporary, progressive architectural environment!</p>
                                </div>
                                <p class="quote-default__cite text-primary">Deborah Quagmire</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Quote default-->
                            <div class="quote-default quote-default_left">
                                <div class="quote-default__image"><img src="{{ asset('theme/benedict-arnold-120x120.jpg') }}" alt="" width="120" height="120"/>
                                </div>
                                <svg class="quote-default__mark" version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30.234px" height="23.484px" viewbox="0 0 30.234 23.484" xml:space="preserve">
                      <g>
                          <path d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959              c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246              c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885              c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723              c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984              c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635              s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                      </g>
                    </svg>
                                <div class="quote-default__text">
                                    <p class="q">This bridge project was funded by small and medium business of Rhode Island, as well as by its private citizens. After the hurricane hit our shores recently, we all were concerned for the Okaloppo river not having a proper landline connection. But now, after Constructo finished the project, the county can enjoy its new, beautiful infrastructure!</p>
                                </div>
                                <p class="quote-default__cite text-primary">Benedict Arnold</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Posts-->
    <section class="novi-background bg-cover section-md bg-gray-lighter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="heading-decorated">Recent News</h4>
                </div>
            </div>
            <div class="row row-60">
                <div class="col-md-6 col-xl-4">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal"><img src="{{ asset('theme/home-post-1-418x315.jpg') }}" alt="" width="418" height="315"/>
                        <div class="post-classic-title">
                            <h6><a href="#">Future proofing hospitals</a></h6>
                        </div>
                        <div class="post-meta">
                            <div class="group"><a href="#">
                                    <time datetime="2021">Jan.20, 2021</time></a><a class="meta-author" href="#">by Brian Williamson</a></div>
                        </div>
                        <div class="post-classic-body">
                            <p>By improving the physical layout of hospitals and medical facilities, we can enhance and increase safety mechanisms, improve care, and…</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal"><img src="{{ asset('theme/home-post-2-418x315.jpg') }}" alt="" width="418" height="315"/>
                        <div class="post-classic-title">
                            <h6><a href="#">Bike parts warehouse, DE</a></h6>
                        </div>
                        <div class="post-meta">
                            <div class="group"><a href="#">
                                    <time datetime="2021">Jan.20, 2021</time></a><a class="meta-author" href="#">by Brian Williamson</a></div>
                        </div>
                        <div class="post-classic-body">
                            <p>Delaware proved to be a very friendly place to work at… While invited there for completing a mid-sized warehouse for…</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <!-- Post classic-->
                    <article class="post-classic post-minimal"><img src="{{ asset('theme/home-post-3-418x315.jpg') }}" alt="" width="418" height="315"/>
                        <div class="post-classic-title">
                            <h6><a href="#">Joy Hotel & Casino</a></h6>
                        </div>
                        <div class="post-meta">
                            <div class="group"><a href="#">
                                    <time datetime="2021">Jan.20, 2021</time></a><a class="meta-author" href="#">by Brian Williamson</a></div>
                        </div>
                        <div class="post-classic-body">
                            <p>This hotel & casino complex is our most recent completed building… The whole structure that took us 6 months to…</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- contacts-->
    <section class="novi-background bg-cover section-md bg-default" id="contacts">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-5 col-lg-4">
                    <h4 class="heading-decorated">Contact Details</h4>
                    <ul class="list-sm contact-info">
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Address</dt>
                                <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Phones</dt>
                                <dd>
                                    <ul class="list-semicolon">
                                        <li><a href="tel:#">(800) 123-0045</a></li>
                                        <li><a href="tel:#">(800) 123-0045</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>We are open</dt>
                                <dd>Mn-Fr: 10 am-8 pm</dd>
                            </dl>
                        </li>
                        <li>
                            <ul class="list-inline-sm">
                                <li><a class="icon-sm fa-facebook novi-icon icon" href="#"></a></li>
                                <li><a class="icon-sm fa-twitter novi-icon icon" href="#"></a></li>
                                <li><a class="icon-sm fa-google-plus novi-icon icon" href="#"></a></li>
                                <li><a class="icon-sm fa-vimeo novi-icon icon" href="#"></a></li>
                                <li><a class="icon-sm fa-youtube novi-icon icon" href="#"></a></li>
                                <li><a class="icon-sm fa-pinterest-p novi-icon icon" href="#"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="heading-decorated">Get in Touch</h4>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap form-wrap_icon">
                            <input class="form-input" id="contact-name" type="text" name="name">
                            <label class="form-label" for="contact-name">Your name</label><span class="icon novi-icon linearicons-man"></span>
                        </div>
                        <div class="form-wrap form-wrap_icon">
                            <input class="form-input" id="contact-email" type="email" name="email">
                            <label class="form-label" for="contact-email">Your e-mail</label><span class="icon novi-icon linearicons-envelope"></span>
                        </div>
                        <div class="form-wrap form-wrap_icon">
                            <textarea class="form-input" id="contact-message" name="message"></textarea>
                            <label class="form-label" for="contact-message">Your message</label><span class="icon novi-icon linearicons-feather"></span>
                        </div>
                        <button class="button button-primary" type="submit">send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
