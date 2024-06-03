@extends('web.layouts.home-page')

@push('pageTitle', 'Trang chủ')

@section('mainContent')
    <!-- Swiper-->
    <section id="home">
        <div class="swiper-container swiper-slider swiper-slider_fullheight bg-gray-dark" data-simulate-touch="false"
             data-loop="true" data-autoplay="4500">
            <div class="swiper-wrapper">
                @foreach($bannerList as $banner)
                    <div class="swiper-slide" data-slide-bg="{{ asset($banner->img_url) }}">
                        <div class="swiper-slide-caption text-center">
                            @if ($banner->head_text != '')
                                <div class="container">
                                    <div class="row justify-content-lg-center">
                                        <div class="col-lg-10">
                                            <h1 class="heading-decorated" data-caption-animate="fadeInUpSmall"
                                                data-caption-delay="0">{{ $banner->head_text }}</h1>
                                            @if ($banner->highlight_text != '')
                                                <h4 class="text-boxed" data-caption-animate="fadeInUpSmall"
                                                    data-caption-delay="200">See how a 10-stories TOWER IS being built,
                                                    in a
                                                    time-lapse!</h4>
                                            @endif
                                            @if ($banner->button_url != '')
                                                <a class="button button-primary"
                                                   data-caption-animate="fadeInUpSmall"
                                                   data-caption-delay="350"
                                                   href="#contacts">Liên Hệ Ngay</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev linearicons-chevron-left"></div>
            <div class="swiper-button-next linearicons-chevron-right"></div>
        </div>
    </section>

    <!-- Our History-->
    @isset($aboutUs)
        <section class="novi-background bg-cover section-md bg-gray-lighter" id="about">
            <div class="container">
                <div class="row justify-content-md-center row-30 row-md-50">
                    <div class="col-md-11 col-lg-10 col-xl-6">
                        <h4 class="heading-decorated yellow-decorated">{{ $aboutUs->title }}</h4>
                        <p class="heading-6 text-width-1">{{ $aboutUs->headline }}</p>
                        <p>{{ $aboutUs->content }}</p><a class="button button-primary" href="#contacts">LIÊN HỆ NGAY</a>
                    </div>
                    <div class="col-md-11 col-lg-10 col-xl-6"><img src="{{ asset($aboutUs->img_url) }}" alt=""
                                                                   width="652" height="491"/>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <section class="section bg-gray-dark parallax-container"
             data-parallax-img="{{ asset('theme/images/slider-slide-1-1920x1080.jpg') }}">
        <div class="parallax-content">
            <div class="section-lg text-center">
                <div class="container">
                    <div class="row justify-content-md-center row-50">
                        <div class="col-md-6 col-lg-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__wrap">
                                    <div class="counter">{{ $statistic['projects'] }}</div>
                                </div>
                                <p class="box-counter__title">Dự án</p>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Box counter-->
                            <article class="box-counter">
                                <div class="box-counter__wrap">
                                    <div class="counter">{{ $statistic['staff'] }}</div>
                                </div>
                                <p class="box-counter__title">Đội ngũ</p>
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
                    <h4 class="heading-decorated yellow-decorated">DỊCH VỤ CỦA CHÚNG TÔI</h4>
                </div>
            </div>
            <div class="row row-50 justify-content-md-center justify-content-lg-start">
                @foreach($serviceList as $service)
                    <div class="col-md-6 col-xl-4">
                        <!-- Blurb circle-->
                        <article class="blurb blurb-circle">
                            <div class="unit flex-sm-row unit-spacing-md">
                                <div class="unit__left">
                                    <div class="blurb-circle__icon"><span
                                            class="icon novi-icon novi-background {{ $service->icon }}"></span></div>
                                </div>
                                <div class="unit__body">
                                    <p class="heading-6 blurb__title"><a href="#">{{ $service->name }}</a></p>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="novi-background bg-cover section-md bg-accent text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-9 col-xl-8">
                    <h3 class="heading-decorated">ĐẸP BẢN VẼ - VỮNG CÔNG TRÌNH!</h3>
                    <p class="h5">Chỉ cần biết mong muốn của bạn, chúng tôi có thể mang đến một công trình mãn nhãn.</p>
                    <a class="button button-primary" href="#contacts">Liên Hệ Ngay</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects-->
    <section class="novi-background bg-cover bg-default" id="projects">
        <div class="container-fluid container-flex">
            <div class="row g-0">
                @foreach($projectCategoryList as $projectCategory)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <!-- Thumb creative-->
                        <div class="thumb-creative">
                            <div class="thumb-creative__inner">
                                <div class="thumb-creative__front">
                                    <figure class="thumb-creative__image-wrap">
                                        <img class="thumb-creative__image"
                                             src="{{ asset($projectCategory->img_url) }}"
                                             alt="" width="480" height="361"/>
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6>{{ $projectCategory->name }}</h6>
                                    </div>
                                </div>
                                <div class="thumb-creative__back">
                                    <figure class="thumb-creative__image-wrap">
                                        <img class="thumb-creative__image"
                                             src="{{ asset($projectCategory->img_url) }}"
                                             alt="" width="480" height="361"/>
                                    </figure>
                                    <div class="thumb-creative__content">
                                        <h6 class="thumb-creative__title"><a href="#">{{ $projectCategory->name }}</a></h6>
                                        <p>{{ $projectCategory->description }}</p>
                                        <a class="button button-link" href="{{ route('web.project-categories.show', $projectCategory->slug) }}">Dự án đã thực hiện</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Executive managers-->
    <section class="novi-background bg-cover section-lg bg-default text-center">
        <div class="container">
            <h4 class="heading-decorated yellow-decorated">Ban Lãnh Đạo</h4>
            <!-- Owl Carousel-->
            <div class="owl-carousel offset-top-1" data-items="1" data-sm-items="2" data-md-items="2" data-lg-items="3"
                 data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-margin="30"
                 data-mouse-drag="false" data-autoplay="false">
                @foreach($staffMemberList as $staffMember)
                    <article class="thumb-flat"><img class="thumb-flat__image" src="{{ asset($staffMember->img_url) }}"
                                                     alt="" width="418" height="415"/>
                        <div class="thumb-flat__body">
                            <p class="heading-6"><a href="#">{{ $staffMember->name }}</a></p>
                            <p class="thumb-flat__subtitle">{{ $staffMember->title }}</p>
                            <p>{{ $staffMember->description }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials-->
    <section class="section parallax-container"
             data-parallax-img="{{ asset('theme/images/project-category-healthcare.jpg') }}" id="testimonials">
        <div class="parallax-content">
            <section class="section-lg context-dark">
                <div class="container">
                    <div class="row row-50">
                        @foreach($testimonialList as $testimonial)
                            <div class="col-md-6">
                                <!-- Quote default-->
                                <div class="quote-default quote-default_left">
                                    <div class="quote-default__image"><img
                                            src="{{ asset($testimonial->img_url) }}" alt="{{ $testimonial->name }}"
                                            width="120" height="120"/>
                                    </div>
                                    <svg class="quote-default__mark" version="1.1" baseprofile="tiny"
                                         xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30.234px"
                                         height="23.484px" viewbox="0 0 30.234 23.484" xml:space="preserve">
                      <g>
                          <path
                              d="M12.129,0v1.723c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959              c0,0.445,0.07,0.773,0.211,0.984c0.093,0.141,0.199,0.211,0.316,0.211c0.117,0,0.293-0.082,0.527-0.246              c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.519,0.545,3.551,1.635c1.031,1.09,1.547,2.385,1.547,3.885              c0,1.57-0.592,2.953-1.775,4.148c-1.184,1.195-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              C0.715,19.441,0,17.274,0,14.555c0-3.164,0.972-6,2.918-8.508C4.863,3.539,7.933,1.524,12.129,0z M29.039,0v1.723              c-2.438,0.891-4.348,2.291-5.73,4.201c-1.383,1.911-2.074,3.897-2.074,5.959c0,0.445,0.07,0.773,0.211,0.984              c0.094,0.141,0.199,0.211,0.316,0.211s0.293-0.082,0.527-0.246c0.75-0.539,1.699-0.809,2.848-0.809c1.336,0,2.52,0.545,3.551,1.635              s1.547,2.385,1.547,3.885c0,1.57-0.592,2.953-1.775,4.148s-2.619,1.793-4.307,1.793c-1.969,0-3.668-0.809-5.098-2.426              s-2.145-3.785-2.145-6.504c0-3.164,0.973-6,2.918-8.508C21.773,3.539,24.844,1.524,29.039,0z"></path>
                      </g>
                    </svg>
                                    <div class="quote-default__text">
                                        <p class="q">{{ $testimonial->comment }}</p>
                                    </div>
                                    <p class="quote-default__cite text-primary">{{ $testimonial->name }}</p>
                                </div>
                            </div>
                        @endforeach
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
                    <h4 class="heading-decorated yellow-decorated">TIN TỨC CHUYÊN NGÀNH</h4>
                </div>
            </div>
            <div class="row row-60">
                @foreach($latestPostList as $post)
                    <div class="col-md-6 col-xl-4">
                        <!-- Post classic-->
                        <article class="post-classic post-minimal">
                            <img
                                src="{{ asset($post->img_url == "" ? 'theme/images/img-unavailable.jpg' : $post->img_url) }}"
                                alt="{{ $post->title }}"
                                width="418"
                                height="315"
                                style="aspect-ratio: 418/315;"
                            />
                            <div class="post-classic-title">
                                <h6><a href="{{ route('web.post.show', $post->slug) }}"
                                       title="{{ $post->title }}">{{ $post->title }}</a></h6>
                            </div>
                            <div class="post-meta">
                                <div class="group">
                                    <a href="{{ route('web.post.show', $post->slug) }}"
                                       title="{{ $post->created_at->format('d/m/Y') }}">
                                        <time datetime="2021">{{ $post->created_at->format('d/m/Y') }}</time>
                                    </a>
                                </div>
                            </div>
                            <div class="post-classic-body">
                                <p>{{ $post->description }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- contacts-->
    <section class="novi-background bg-cover section-md bg-default" id="contacts">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-5 col-lg-4">
                    <h4 class="heading-decorated yellow-decorated">Thông tin liên lạc</h4>
                    <ul class="list-sm contact-info">
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Địa chỉ</dt>
                                <dd>@lang('contact-info.address')</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Điện thoại</dt>
                                <dd>
                                    <ul class="list-semicolon">
                                        <li><a href="tel:@lang('contact-info.phone1')">@lang('contact-info.phone1')</a>
                                        </li>
                                        <li><a href="tel:@lang('contact-info.phone2')">@lang('contact-info.phone2')</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Giờ làm việc</dt>
                                <dd>Thứ Hai - Thứ Bảy: 08:00 - 18:00</dd>
                            </dl>
                        </li>
                        <li>
                            <ul class="list-inline-sm">
                                <li><a class="icon-sm fa-facebook novi-icon icon" href="#"></a></li>
                                {{--                                <li><a class="icon-sm fa-twitter novi-icon icon" href="#"></a></li>--}}
                                {{--                                <li><a class="icon-sm fa-google-plus novi-icon icon" href="#"></a></li>--}}
                                {{--                                <li><a class="icon-sm fa-vimeo novi-icon icon" href="#"></a></li>--}}
                                <li><a class="icon-sm fa-youtube novi-icon icon" href="#"></a></li>
                                {{--                                <li><a class="icon-sm fa-pinterest-p novi-icon icon" href="#"></a></li>--}}
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="heading-decorated yellow-decorated">Gửi câu hỏi cho chúng tôi</h4>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global"
                          data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap form-wrap_icon">
                            <input class="form-input" id="contact-name" type="text" name="name">
                            <label class="form-label" for="contact-name">Tên của bạn</label><span
                                class="icon novi-icon linearicons-man"></span>
                        </div>
                        <div class="form-wrap form-wrap_icon">
                            <input class="form-input" id="contact-email" type="email" name="email">
                            <label class="form-label" for="contact-email">Email liên lạc</label><span
                                class="icon novi-icon linearicons-envelope"></span>
                        </div>
                        <div class="form-wrap form-wrap_icon">
                            <textarea class="form-input" id="contact-message" name="message"></textarea>
                            <label class="form-label" for="contact-message">Nội dung</label><span
                                class="icon novi-icon linearicons-feather"></span>
                        </div>
                        <button class="button button-primary" type="submit">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
