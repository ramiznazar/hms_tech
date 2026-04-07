@extends('website.layouts.main-inner')
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="zq_breadcrumb-area">
            <div class="zq_breadcrumb-wrap">
                <img src="{{ asset('assets/website/images/bg/breadcrumb.png') }}" alt="" class="zq_breadcrumb-img">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="zq_breadcrumb-content text-center">
                                <h2 class="zq_breadcrumb-content-title">Portfolio Details</h2>
                                <div class="zq_breadcrumb-content-list">
                                    <a href="index.html">Home</a>
                                    <span>Portfolio Details</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area start -->

        <!-- service details area start -->
        <section class="zq_service_details-area pt-95 pb-80">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="zq_section-area mb-50">
                            @if($portfolio->subtitle)
                                <span class="zq_section-subtitle mb-20">{{ $portfolio->subtitle }}</span>
                            @endif
                            <h2 class="zq_section-title mb-0">{{ $portfolio->title }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="zq_section-area mb-50">
                            @if($portfolio->description_1)
                                <p class="zq_section-text mb-20">{{ $portfolio->description_1 }}</p>
                            @endif
                            @if($portfolio->description_2)
                                <p class="zq_section-text mb-0">{{ $portfolio->description_2 }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="zq_portfolio_details-info mb-50">
                    @if($portfolio->client_name)
                        <div class="zq_portfolio_details-info-item">
                            <span>Name:</span>
                            <p>{{ $portfolio->client_name }}</p>
                        </div>
                    @endif
                    @if($portfolio->category)
                        <div class="zq_portfolio_details-info-item">
                            <span>Categories:</span>
                            <p>{{ $portfolio->category->name }}</p>
                        </div>
                    @endif
                    @if($portfolio->location)
                        <div class="zq_portfolio_details-info-item">
                            <span>Location:</span>
                            <p>{{ $portfolio->location }}</p>
                        </div>
                    @endif
                    @if($portfolio->project_date)
                        <div class="zq_portfolio_details-info-item">
                            <span>Date:</span>
                            <p>{{ $portfolio->project_date }}</p>
                        </div>
                    @endif
                    @if($portfolio->status)
                        <div class="zq_portfolio_details-info-item">
                            <span>Status:</span>
                            <p>{{ $portfolio->status }}</p>
                        </div>
                    @endif
                    @if($portfolio->duration)
                        <div class="zq_portfolio_details-info-item">
                            <span>Duration:</span>
                            <p>{{ $portfolio->duration }}</p>
                        </div>
                    @endif
                </div>

                @if($portfolio->website_url || $portfolio->ios_url || $portfolio->android_url)
                    <!-- live preview row -->
                    <div class="zq_live-preview mb-40">
                        <span class="zq_live-preview-label">Live Preview</span>
                        <div class="zq_live-preview-links">
                            @if($portfolio->website_url)
                                <a href="{{ $portfolio->website_url }}" target="_blank" class="zq_live-btn zq_live-btn--web">
                                    <i class="fa-sharp fa-regular fa-globe"></i>
                                    Visit Website
                                </a>
                            @endif
                            @if($portfolio->ios_url)
                                <a href="{{ $portfolio->ios_url }}" target="_blank" class="zq_live-btn zq_live-btn--ios">
                                    <i class="fa-brands fa-apple"></i>
                                    App Store
                                </a>
                            @endif
                            @if($portfolio->android_url)
                                <a href="{{ $portfolio->android_url }}" target="_blank" class="zq_live-btn zq_live-btn--android">
                                    <i class="fa-brands fa-google-play"></i>
                                    Google Play
                                </a>
                            @endif
                        </div>
                    </div>
                @endif

                @if($portfolio->gallery_images && count($portfolio->gallery_images))
                    <!-- image carousel -->
                    <div class="zq_portfolio-gallery">
                        <div class="swiper portfolio_details-gallery">
                            <div class="swiper-wrapper">
                                @foreach($portfolio->gallery_images as $img)
                                    <div class="swiper-slide">
                                        <div class="zq_portfolio-gallery-img">
                                            <img src="{{ asset($img) }}" alt="{{ $portfolio->title }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="zq_portfolio-gallery-prev"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="zq_portfolio-gallery-next"><i class="fa-solid fa-angle-right"></i></div>
                            <div class="swiper-pagination zq_portfolio-gallery-pagination"></div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            new Swiper('.portfolio_details-gallery', {
                                loop: true,
                                slidesPerView: 1,
                                spaceBetween: 0,
                                navigation: {
                                    nextEl: '.zq_portfolio-gallery-next',
                                    prevEl: '.zq_portfolio-gallery-prev',
                                },
                                pagination: {
                                    el: '.zq_portfolio-gallery-pagination',
                                    clickable: true,
                                },
                            });
                        });
                    </script>
                @endif
            </div>
        </section>
        <!-- service details area end -->

        @if($portfolio->what_we_built || $portfolio->why_it_was_built || $portfolio->technologies)
        <!-- working process area start -->
        <section class="zq_service_details_2-area pb-80">
            <div class="container">
                <div class="row justify-content-between mb-50">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="zq_section-area mb-40">
                            <span class="zq_section-subtitle mb-20">Working Process</span>
                            <h2 class="zq_section-title mb-0">How This Project Was Delivered</h2>
                        </div>
                    </div>
                </div>
                @if($portfolio->what_we_built || $portfolio->why_it_was_built)
                    <div class="row justify-content-between">
                        @if($portfolio->what_we_built)
                            <div class="col-lg-6 mb-40">
                                <div class="zq_section-area">
                                    <h4 class="zq_section-title mb-15" style="font-size:22px;">What We Built</h4>
                                    <p class="zq_section-text mb-0">{{ $portfolio->what_we_built }}</p>
                                </div>
                            </div>
                        @endif
                        @if($portfolio->why_it_was_built)
                            <div class="col-lg-6 mb-40">
                                <div class="zq_section-area">
                                    <h4 class="zq_section-title mb-15" style="font-size:22px;">Why It Was Built</h4>
                                    <p class="zq_section-text mb-0">{{ $portfolio->why_it_was_built }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
                @if($portfolio->technologies)
                    <div class="row">
                        <div class="col-12">
                            <div class="zq_section-area mb-20">
                                <h4 class="zq_section-title mb-25" style="font-size:22px;">Technologies Used</h4>
                                <div class="zq_tech-tags d-flex flex-wrap gap-3">
                                    @foreach($portfolio->technologies as $tech)
                                        @if($tech)
                                            <span class="zq_tech-tag">{{ $tech }}</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- working process area end -->
        @endif

        <!-- cta area start -->
        <div class="zq_cta-area">
            <div class="container">
                <div class="zq_cta-wrapper">
                    <h2 class="zq_cta-title">Lets Get Stared with Us. <br>
                        Call Us Now!</h2>
                    <div class="zq_cta-action">
                        <img src="{{ asset('assets/website/images/bg/call.png') }}" alt="">
                        <div class="zq_cta-action-info">
                            <span>Toll Free Call.</span>
                            <a href="tel:+704-555-0127">(+704) 555-0127</a>
                        </div>
                    </div>
                    <div class="zq_cta-shape-1">
                        <svg width="320" height="135" viewBox="0 0 320 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.48873 267.853C9.84073 271.725 7.23273 269.613 154.945 319.181C158.227 320.274 161.775 320.274 165.057 319.181C304.001 271.997 308.545 273.165 314.529 267.853C316.39 266.113 317.866 264.004 318.865 261.661C319.584 259.857 319.969 257.938 320.001 255.997V63.9968C319.969 62.0555 319.584 60.1362 318.865 58.3328C317.866 55.9893 316.39 53.8803 314.529 52.1408C308.721 46.9888 305.457 48.3008 165.057 0.812773C161.775 -0.280364 158.227 -0.280364 154.945 0.812773C110.401 15.7408 12.5607 47.9968 8.67273 49.9968C7.51955 50.573 6.44427 51.2934 5.47273 52.1408C3.61112 53.883 2.1295 55.9911 1.12073 58.3328C0.407022 60.1372 0.0275118 62.0565 0.000732422 63.9968V255.997C0.0326085 257.938 0.41755 259.857 1.13673 261.661C2.14183 264.004 3.62395 266.113 5.48873 267.853ZM288.001 233.789L229.057 214.157C225.025 212.816 220.627 213.131 216.828 215.034C213.029 216.936 210.142 220.269 208.801 224.301C207.46 228.332 207.775 232.731 209.678 236.53C211.58 240.328 214.913 243.216 218.945 244.557L253.409 255.997L176.001 281.789V123.533L288.001 86.2048V233.789ZM160.001 32.8608L253.409 63.9968L160.001 95.1328L66.5927 63.9968L160.001 32.8608ZM32.0007 86.2048L144.001 123.533V281.789L66.5927 255.997L101.057 244.509C105.088 243.168 108.422 240.28 110.324 236.482C112.226 232.683 112.542 228.284 111.201 224.253C109.86 220.221 106.972 216.888 103.174 214.986C99.3749 213.083 94.976 212.768 90.9447 214.109L32.0007 233.789V86.2048Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="zq_cta-shape-2">
                        <svg width="103" height="74" viewBox="0 0 103 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.03453 52.2535C4.77987 53.8064 3.73395 52.9594 62.9726 72.8382C64.2888 73.2766 65.7117 73.2766 67.0279 72.8382C122.75 53.9154 124.573 54.3839 126.972 52.2535C127.719 51.5559 128.311 50.7101 128.711 49.7703C129 49.047 129.154 48.2773 129.167 47.4988V-29.5012C129.154 -30.2798 129 -31.0495 128.711 -31.7727C128.311 -32.7125 127.719 -33.5584 126.972 -34.256C124.643 -36.3221 123.334 -35.796 67.0279 -54.8406C65.7117 -55.279 64.2888 -55.279 62.9726 -54.8406C45.1086 -48.8539 5.8707 -35.9179 4.31145 -35.1158C3.84898 -34.8847 3.41775 -34.5958 3.02812 -34.256C2.28154 -33.5573 1.68734 -32.7118 1.28278 -31.7727C0.996557 -31.0491 0.844358 -30.2794 0.833618 -29.5012V47.4988C0.846402 48.2773 1.00078 49.047 1.2892 49.7703C1.69229 50.7102 2.28668 51.5559 3.03453 52.2535ZM116.334 38.5924L92.6946 30.7192C91.0779 30.1814 89.3138 30.3079 87.7903 31.0708C86.2669 31.8338 85.1089 33.1706 84.5711 34.7874C84.0333 36.4041 84.1598 38.1682 84.9228 39.6917C85.6857 41.2151 87.0226 42.3731 88.6393 42.9109L102.461 47.4988L71.4169 57.8424V-5.62481L116.334 -20.5949V38.5924ZM65.0003 -41.9881L102.461 -29.5012L65.0003 -17.0144L27.5398 -29.5012L65.0003 -41.9881ZM13.667 -20.5949L58.5836 -5.62481V57.8424L27.5398 47.4988L41.3613 42.8916C42.978 42.3538 44.3149 41.1959 45.0778 39.6724C45.8407 38.149 45.9672 36.3848 45.4295 34.7681C44.8917 33.1514 43.7337 31.8145 42.2102 31.0516C40.6868 30.2887 38.9227 30.1622 37.306 30.6999L13.667 38.5924V-20.5949Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->
    </main>
@endsection