@extends('website.layouts.main')
@section('content')

    <main>
        <!-- hero area start -->
        <section class="zq_h2_hero-area">
            <img src="{{ asset('assets/website/images/hero/h2_shape.png') }}" alt="" class="zq_h2_hero-shape">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <div class="zq_h2_hero-wrap mb-lg-0 mb-50">
                            <div class="zq_h2_hero-content">
                                <h1 class="zq_h2_hero-content-title">Digital IT <span>Management<img
                                            src="{{ asset('assets/website/images/hero/h2_2.png') }}" alt=""></span>Solution</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. <br> Aliquam in
                                    hendrerit urna. Pellentesque sit amet sapien.</p>
                                <a href="#" class="zq_theme-btn">Explore More</a>
                            </div>
                            <div class="zq_h2_hero-brand">
                                <span>COMPANIES THAT TRUST US:</span>
                                <div class="swiper h2_brand-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="zq_h2_hero-brand-item">
                                                <img src="{{ asset('assets/website/images/brand/h2_1.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="zq_h2_hero-brand-item">
                                                <img src="{{ asset('assets/website/images/brand/h2_2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="zq_h2_hero-brand-item">
                                                <img src="{{ asset('assets/website/images/brand/h2_3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="zq_h2_hero-brand-item">
                                                <img src="{{ asset('assets/website/images/brand/h2_4.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="zq_h2_hero-right">
                            <div class="zq_h2_hero-form">
                                <h4 class="zq_h2_hero-form-title">Get a Free Quote</h4>
                                <form action="#">
                                    <div class="zq_h2_hero-form-item">
                                        <input type="text" placeholder="Name" required>
                                        <input type="email" placeholder="Email" required>
                                    </div>
                                    <div class="zq_h2_hero-form-item">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="zq_h2_hero-bottom">
                                <div class="zq_h2_hero-bottom-item">
                                    <h2>180</h2>
                                    <p>People work with us</p>
                                </div>
                                <div class="zq_h2_hero-bottom-item">
                                    <h2>220k+</h2>
                                    <p>People trust us</p>
                                    <img src="{{ asset('assets/website/images/hero/h2_1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->

        <!-- service area start -->
        <section class="zq_h2_service-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="zq_h2_section-area text-center">
                            <span class="zq_h2_section-subtitle">day-to-day operations</span>
                            <h2 class="zq_h2_section-title mb-40">Empowering Excellence: Our IT Solutions Story”</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="zq_h2_service-item mb-30">
                            <div class="zq_h2_service-item-icon">
                                <i class="fa-solid fa-rocket" style="font-size:40px; color: var(--clr-theme-primary);"></i>
                            </div>
                            <div class="zq_h2_service-item-content">
                                <h4><a href="#">Instant Entry</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="zq_h2_service-item mb-30">
                            <div class="zq_h2_service-item-icon">
                                <i class="fa-solid fa-layer-group" style="font-size:40px; color: var(--clr-theme-primary);"></i>
                            </div>
                            <div class="zq_h2_service-item-content">
                                <h4><a href="#">Multi-Platform</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="zq_h2_service-item mb-30">
                            <div class="zq_h2_service-item-icon">
                                <i class="fa-solid fa-plug" style="font-size:40px; color: var(--clr-theme-primary);"></i>
                            </div>
                            <div class="zq_h2_service-item-content">
                                <h4><a href="#">Handy Integration</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="zq_h2_service-item mb-30">
                            <div class="zq_h2_service-item-icon">
                                <i class="fa-solid fa-microchip" style="font-size:40px; color: var(--clr-theme-primary);"></i>
                            </div>
                            <div class="zq_h2_service-item-content">
                                <h4><a href="#">Latest Technology</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end -->

        <!-- project area start -->
        <section class="zq_project-area">
            <div class="zq_common_width-2">
                <div class="zq_common_width-2_inner pt-100 pb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="zq_section-area text-center">
                                    <span class="zq_section-subtitle mb-20">Our Projects</span>
                                    <h2 class="zq_section-title mb-40">Elevating Tomorrow's IT Landscape</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if($portfolios->isNotEmpty())
                            <div class="col-xl-4 col-md-6">
                                <div class="zq_h2_project-item mb-30">
                                    <div class="zq_h2_project-item-content">
                                        <h3><a href="{{ route('portfolio.detail', $portfolios[0]->id) }}">{{ $portfolios[0]->title }}</a></h3>
                                        @if($portfolios[0]->short_description)
                                            <p>{{ $portfolios[0]->short_description }}</p>
                                        @endif
                                    </div>
                                    <div class="zq_h2_project-item-img">
                                        <a href="{{ route('portfolio.detail', $portfolios[0]->id) }}">
                                            <img src="{{ $portfolios[0]->thumbnail ? asset($portfolios[0]->thumbnail) : asset('assets/website/images/project/h2_1.png') }}" alt="{{ $portfolios[0]->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.detail', $portfolios[0]->id) }}" class="zq_h2_project-item-img-icon"><i class="fa-light fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-12 order-4 order-xl-0">
                                <div class="zq_h2_project-img mb-30">
                                    <img src="{{ asset('assets/website/images/project/h2_2.png') }}" alt="" class="w-100">
                                </div>
                            </div>
                            @if($portfolios->count() > 1)
                            <div class="col-xl-4 col-md-6">
                                <div class="zq_h2_project-item mb-30">
                                    <div class="zq_h2_project-item-content">
                                        <h3><a href="{{ route('portfolio.detail', $portfolios[1]->id) }}">{{ $portfolios[1]->title }}</a></h3>
                                        @if($portfolios[1]->short_description)
                                            <p>{{ $portfolios[1]->short_description }}</p>
                                        @endif
                                    </div>
                                    <div class="zq_h2_project-item-img">
                                        <a href="{{ route('portfolio.detail', $portfolios[1]->id) }}">
                                            <img src="{{ $portfolios[1]->thumbnail ? asset($portfolios[1]->thumbnail) : asset('assets/website/images/project/h2_3.png') }}" alt="{{ $portfolios[1]->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.detail', $portfolios[1]->id) }}" class="zq_h2_project-item-img-icon"><i class="fa-light fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($portfolios->count() > 2)
                            <div class="col-xl-4 col-md-6">
                                <div class="zq_h2_project-item mb-30">
                                    <div class="zq_h2_project-item-content">
                                        <h3><a href="{{ route('portfolio.detail', $portfolios[2]->id) }}">{{ $portfolios[2]->title }}</a></h3>
                                        @if($portfolios[2]->short_description)
                                            <p>{{ $portfolios[2]->short_description }}</p>
                                        @endif
                                    </div>
                                    <div class="zq_h2_project-item-img">
                                        <a href="{{ route('portfolio.detail', $portfolios[2]->id) }}">
                                            <img src="{{ $portfolios[2]->thumbnail ? asset($portfolios[2]->thumbnail) : asset('assets/website/images/project/h2_4.png') }}" alt="{{ $portfolios[2]->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.detail', $portfolios[2]->id) }}" class="zq_h2_project-item-img-icon"><i class="fa-light fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($portfolios->count() > 3)
                            <div class="col-xl-4 col-md-6">
                                <div class="zq_h2_project-item mb-30">
                                    <div class="zq_h2_project-item-content">
                                        <h3><a href="{{ route('portfolio.detail', $portfolios[3]->id) }}">{{ $portfolios[3]->title }}</a></h3>
                                        @if($portfolios[3]->short_description)
                                            <p>{{ $portfolios[3]->short_description }}</p>
                                        @endif
                                    </div>
                                    <div class="zq_h2_project-item-img">
                                        <a href="{{ route('portfolio.detail', $portfolios[3]->id) }}">
                                            <img src="{{ $portfolios[3]->thumbnail ? asset($portfolios[3]->thumbnail) : asset('assets/website/images/project/h2_5.png') }}" alt="{{ $portfolios[3]->title }}">
                                        </a>
                                        <a href="{{ route('portfolio.detail', $portfolios[3]->id) }}" class="zq_h2_project-item-img-icon"><i class="fa-light fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @else
                            <div class="col-12 text-center py-5">
                                <p class="text-muted">No projects available yet.</p>
                            </div>
                            @endif
                        </div>
                        <div class="zq_project-btn text-center pt-20">
                            <a href="#" class="zq_h2_theme-btn">More Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project area end -->

        <!-- price area start -->
        <section class="zq_h2_price-area pt-95 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="zq_section-area text-center">
                            <span class="zq_section-subtitle mb-20">Our Price</span>
                            <h2 class="zq_section-title mb-40">Elevating Tomorrow's IT Landscape</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    @forelse($plans as $plan)
                    <div class="col-xl-4 col-md-6">
                        <div class="zq_h2_price_item mb-30 {{ $plan->is_featured ? 'zq_h2_price_item--featured' : '' }}">
                            <div class="zq_h2_price-category">
                                <p>{{ $plan->name }}</p>
                            </div>
                            <div class="zq_h2_price-amount">
                                <h2>${{ number_format($plan->price, 0) }}</h2><span>/{{ $plan->billing_cycle }}</span>
                            </div>
                            @if($plan->description)
                            <p class="zq_h2_price-text">{{ $plan->description }}</p>
                            @endif
                            @if(!empty($plan->features))
                            <div class="zq_h2_price-feature">
                                <ul>
                                    @foreach($plan->features as $feature)
                                        <li><i class="fa-light fa-circle-check"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="zq_h2_price-btn">
                                <a href="{{ route('contact') }}">Get this Plan Now
                                    <svg width="11" height="13" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.57971 10.1668L9.55073 1.8335M9.55073 1.8335H2.37681M9.55073 1.8335V9.33349"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <p style="color: rgba(255,255,255,0.6);">No pricing plans available yet.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- price area end -->

        <!-- team area start -->
        <section class="zq_h2_team-area pt-95 pb-100 zq_border-top">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-xxl-5 col-lg-6 col-md-8">
                        <div class="zq_section-area">
                            <span class="zq_section-subtitle mb-20">Our Teams</span>
                            <h2 class="zq_section-title mb-40">We’re Building An Amazing Team Of People</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="zq_navigation justify-content-md-end mb-50">
                            <div class="h2_team-prev"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="h2_team-next"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="h2_team-active swiper">
                    <div class="swiper-wrapper align-items-end">
                        <div class="swiper-slide">
                            <div class="zq_h2_team-item">
                                <div class="zq_h2_team-item-img">
                                    <img src="{{ asset('assets/website/images/team/h2_1.png') }}" alt="">
                                </div>
                                <div class="zq_h2_team-item-content">
                                    <h3><a href="#">Jane Cooper</a></h3>
                                    <span>Marketing Coordinator</span>
                                    <p>Partnering exceptional companies to build a world-class commercial landscaping
                                        business</p>
                                    <ul class="zq_h2_team-item-social">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="zq_h2_team-item">
                                <div class="zq_h2_team-item-img">
                                    <img src="{{ asset('assets/website/images/team/h2_2.png') }}" alt="">
                                </div>
                                <div class="zq_h2_team-item-content">
                                    <h3><a href="#">Esther Howard</a></h3>
                                    <span>CEO</span>
                                    <p>Partnering exceptional companies to build a world-class commercial landscaping
                                        business</p>
                                    <ul class="zq_h2_team-item-social">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="zq_h2_team-item">
                                <div class="zq_h2_team-item-img">
                                    <img src="{{ asset('assets/website/images/team/h2_3.png') }}" alt="">
                                </div>
                                <div class="zq_h2_team-item-content">
                                    <h3><a href="#">Robert Fox</a></h3>
                                    <span>Web Designer</span>
                                    <p>Partnering exceptional companies to build a world-class commercial landscaping
                                        business</p>
                                    <ul class="zq_h2_team-item-social">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->

        <!-- choose area start -->
        <section class="zq_h2_choose-area pt-95 pb-100 zq_border-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-lg-6 col-md-8">
                        <div class="zq_section-area text-center">
                            <span class="zq_section-subtitle mb-20">why chose us</span>
                            <h2 class="zq_section-title mb-40">The Only Card You’ll Ever Need Simple.</h2>
                        </div>
                    </div>
                </div>
                <div class="zq_h2_choose-wrap">
                    <div class="zq_h2_choose-img">
                        <img src="{{ asset('assets/website/images/choose/h2_1.png') }}" alt="" class="w-100">
                        <div class="zq_h2_choose-img-info">
                            <div class="zq_h2_choose-img-info-item zq_project">
                                <h2>800+</h2>
                                <span>SUCCESSFUL PROJECTS</span>
                            </div>
                            <div class="zq_h2_choose-img-info-item zq_download">
                                <h2>300+</h2>
                                <span>GLOBAL DOWNLOADS</span>
                            </div>
                        </div>
                    </div>
                    <div class="zq_h2_choose-content">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-single">
                                <div class="accordion-single-icon">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_235_277)">
                                            <path
                                                d="M37.037 11.4815C35.5556 11.4815 34.1975 11.4815 32.963 11.4815C30.3704 11.4815 28.5185 9.62963 28.5185 7.03704C28.5185 5.67901 28.5185 4.32099 28.5185 2.96296C28.1482 2.96296 27.9012 2.96296 27.6543 2.96296C22.8395 2.96296 18.1482 2.96296 13.3333 2.96296C11.8519 2.96296 11.358 3.45679 11.358 4.93827C11.358 5.67901 11.358 6.41975 11.358 7.16049C11.358 8.02469 10.7407 8.64198 9.87655 8.64198C9.13581 8.51852 8.64198 7.90123 8.51852 7.03704C8.51852 6.04938 8.51852 5.06173 8.51852 4.07407C8.64198 1.85185 10.4938 0 12.7161 0C18.3951 0 24.0741 0 29.8765 0C30.3704 0 30.8642 0.246914 31.2346 0.617284C33.9506 3.33333 36.6667 6.04938 39.3827 8.76543C39.7531 9.1358 40 9.75309 40 10.1235C40 18.642 40 27.037 40 35.5556C40 38.0247 38.1482 39.8765 35.679 39.8765C30.1235 39.8765 24.4444 39.8765 18.8889 39.8765C17.9012 39.8765 17.1605 39.2593 17.1605 38.3951C17.1605 37.5309 17.7778 36.9136 18.8889 36.9136C24.321 36.9136 29.7531 36.9136 35.1852 36.9136C36.6667 36.9136 37.1605 36.4198 37.1605 34.9383C37.1605 27.2839 37.1605 19.7531 37.1605 12.0988C37.037 12.0988 37.037 11.8519 37.037 11.4815ZM31.4815 5.18518C31.2346 8.2716 31.8519 8.88889 34.8148 8.51852C33.7037 7.40741 32.5926 6.2963 31.4815 5.18518Z"
                                                fill="currentColor" />
                                            <path
                                                d="M8.51852 36.2963C7.40741 37.4074 6.41975 38.3951 5.4321 39.3827C4.93827 39.8765 4.44444 40.2469 3.7037 39.8765C2.96296 39.6296 2.71605 39.0123 2.71605 38.2716C2.71605 34.5679 2.71605 30.8642 2.71605 27.1605C2.71605 26.7901 2.46914 26.2963 2.22222 26.0494C-0.493827 23.0864 -0.987654 18.8889 1.23457 15.5556C3.33333 12.2222 7.40741 10.7407 11.1111 11.9753C14.8148 13.2099 17.2839 16.7901 17.037 20.7407C16.9136 22.716 16.0494 24.5679 14.6914 26.0494C14.4444 26.4198 14.1975 26.9136 14.1975 27.4074C14.1975 30.9877 14.1975 34.6914 14.1975 38.2716C14.1975 39.0123 14.0741 39.7531 13.2099 40.1235C12.3457 40.4938 11.8519 40 11.358 39.5062C10.4938 38.2716 9.62963 37.284 8.51852 36.2963ZM14.321 20C14.321 16.7901 11.7284 14.321 8.51852 14.321C5.4321 14.321 2.83951 16.9136 2.83951 20.1235C2.83951 23.2099 5.4321 25.8025 8.51852 25.8025C11.7284 25.679 14.321 23.0864 14.321 20ZM5.80247 34.8148C5.92593 34.8148 5.92593 34.9383 6.04938 34.9383C6.2963 34.6914 6.54321 34.321 6.79012 34.0741C6.91358 33.8272 7.16049 33.5802 7.40741 33.3333C8.2716 32.5926 8.88889 32.5926 9.75309 33.3333C10.2469 33.8272 10.7407 34.321 11.358 35.0617C11.358 32.5926 11.358 30.3704 11.358 28.0247C9.50617 28.642 7.65432 28.642 5.80247 28.0247C5.80247 30.3704 5.80247 32.5926 5.80247 34.8148Z"
                                                fill="currentColor" />
                                            <path
                                                d="M25.679 32.8395C23.3333 32.8395 21.1111 32.8395 18.7654 32.8395C17.6543 32.8395 17.037 32.3457 17.037 31.4815C17.037 30.6173 17.6543 30 18.642 30C23.2099 30 27.9012 30 32.4691 30C33.2099 30 33.9506 30.2469 34.0741 30.9877C34.1975 31.4815 33.9506 32.0988 33.5802 32.4691C33.3333 32.716 32.8395 32.8395 32.3457 32.8395C30.2469 32.8395 27.9012 32.8395 25.679 32.8395Z"
                                                fill="currentColor" />
                                            <path
                                                d="M27.1605 18.5185C25.3086 18.5185 23.5802 18.5185 21.7284 18.5185C20.6173 18.5185 20 17.9012 20 17.037C20 16.1728 20.6173 15.679 21.7284 15.679C25.3086 15.679 29.0123 15.679 32.5926 15.679C33.5802 15.679 34.321 16.2963 34.321 17.1605C34.321 18.0247 33.7037 18.642 32.5926 18.642C30.7407 18.5185 28.8889 18.5185 27.1605 18.5185Z"
                                                fill="currentColor" />
                                            <path
                                                d="M27.037 25.679C25.3086 25.679 23.4568 25.679 21.7284 25.679C20.6173 25.679 20 25.1852 20 24.321C20 23.4568 20.6173 22.8395 21.7284 22.8395C25.3086 22.8395 28.8889 22.8395 32.4691 22.8395C33.5802 22.8395 34.1975 23.3333 34.1975 24.321C34.1975 25.1852 33.5802 25.679 32.4691 25.679C30.6173 25.679 28.8889 25.679 27.037 25.679Z"
                                                fill="currentColor" />
                                            <path
                                                d="M20.7407 11.4815C19.6296 11.4815 18.5185 11.4815 17.4074 11.4815C16.4197 11.4815 15.8025 10.8642 15.8025 10.1235C15.8025 9.25926 16.4197 8.64198 17.4074 8.64198C19.6296 8.64198 21.9753 8.64198 24.1975 8.64198C25.1852 8.64198 25.8025 9.25926 25.8025 10.1235C25.8025 10.9877 25.1852 11.4815 24.321 11.4815C22.963 11.4815 21.8518 11.4815 20.7407 11.4815Z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01.</span> Software Business
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.
                                                Aliquam in hendrerit urna. Pellentesque sit.Aliquam in hendrerit urna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <div class="accordion-single-icon">
                                    <svg width="36" height="43" viewBox="0 0 36 43" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_235_297)">
                                            <path
                                                d="M12.6707 43C12.6707 39.6417 12.6707 36.415 12.6707 33.1884C12.6707 32.464 12.4717 32.0689 11.8747 31.6738C8.09336 29.1057 4.37837 26.4717 0.66339 23.9035C0.132678 23.5084 0 23.1133 0 22.5207C0.066339 20.9403 0 19.294 0 17.6478C0.464373 17.6478 0.796068 17.5819 1.1941 17.5819C1.59214 13.4992 3.78132 10.9969 7.89434 10.075C4.71007 8.75805 3.31695 6.585 3.914 3.951C4.44471 1.64626 6.56756 -0.0658424 9.0221 7.49528e-06C11.4103 0.0658574 13.4668 1.84381 13.8648 4.14855C14.2629 6.8484 12.8698 8.9556 9.81817 10.0092C13.9312 10.9311 16.1867 13.4334 16.5184 17.5161C17.3145 17.5161 18.1105 17.5161 18.9066 17.5161C19.3046 13.4334 21.4938 10.9311 25.6068 10.0092C22.4226 8.6922 21.0958 6.51915 21.6265 3.88515C22.1572 1.51456 24.3464 -0.131692 26.8009 -0.0658424C29.1892 7.49528e-06 31.2457 1.84381 31.5774 4.14855C31.9754 6.8484 30.5159 8.9556 27.5307 9.94335C31.6437 10.8652 33.8992 13.3675 34.2973 17.4502C34.6953 17.4502 35.027 17.5161 35.4914 17.5161C35.4914 18.8331 35.3587 20.1501 35.4914 21.4671C35.624 22.7841 35.1597 23.5084 34.0982 24.2328C30.5159 26.6034 27 29.1715 23.4177 31.608C22.9533 31.9372 22.8206 32.2006 22.8206 32.7933C22.8869 35.0322 22.8206 37.2052 22.8206 39.51C19.5037 40.6953 16.1204 41.8147 12.6707 43ZM15.258 39.4441C16.7838 38.9173 18.1769 38.4564 19.6363 37.9954C20.167 37.8637 20.3661 37.6003 20.2997 37.0735C20.2334 35.2297 20.2997 33.4518 20.2997 31.608C20.2997 31.0153 20.4987 30.6861 20.9631 30.3568C24.5454 27.9204 28.1277 25.3522 31.8427 22.9158C32.9705 22.1914 33.1695 21.3354 32.9041 20.1501C22.8206 20.1501 12.7371 20.1501 2.65356 20.1501C2.3882 21.3354 2.65356 22.1914 3.71498 22.9158C7.36363 25.3522 10.9459 27.9204 14.5946 30.4227C15.0589 30.7519 15.258 31.0812 15.258 31.6738C15.1916 34.242 15.258 36.8101 15.258 39.4441ZM3.84766 17.5819C7.23095 17.5819 10.5479 17.5819 13.9312 17.5819C13.9312 15.7381 13.0688 14.3553 11.543 13.3675C9.81817 12.3139 8.02702 12.3139 6.3022 13.3017C4.71007 14.2894 3.914 15.6723 3.84766 17.5819ZM21.6265 17.5819C25.0098 17.5819 28.3267 17.5819 31.71 17.5819C31.71 15.7381 30.8476 14.2894 29.3218 13.3675C27.597 12.3139 25.7395 12.3139 23.9484 13.3675C22.4226 14.2894 21.6265 15.7381 21.6265 17.5819ZM11.4103 5.0046C11.4103 3.62175 10.2825 2.5023 8.88942 2.5023C7.4963 2.5023 6.36854 3.62175 6.43488 5.07045C6.43488 6.4533 7.56264 7.57275 8.95576 7.57275C10.2825 7.5069 11.4103 6.38745 11.4103 5.0046ZM29.1892 5.07045C29.1892 3.6876 28.0614 2.56815 26.6683 2.56815C25.2752 2.56815 24.1474 3.6876 24.1474 5.07045C24.1474 6.4533 25.2752 7.57275 26.6683 7.57275C27.9951 7.57275 29.1228 6.4533 29.1892 5.07045Z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Business Leading
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.
                                                Aliquam in hendrerit urna. Pellentesque sit.Aliquam in hendrerit urna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <div class="accordion-single-icon">
                                    <svg width="29" height="46" viewBox="0 0 29 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_235_311)">
                                            <path
                                                d="M6.423 36.5544C6.80082 34.7598 6.04518 33.7207 4.7228 32.4928C0.188915 28.5257 -1.13347 22.1971 1.13347 16.7187C3.40041 11.3347 8.87885 7.74538 14.7351 8.02875C20.6858 8.21766 25.8809 12.1848 27.6756 17.8522C29.4702 23.5195 27.4867 29.7536 22.6694 33.3429C22.1027 33.8152 21.9138 34.193 21.9138 34.8542C21.9138 36.3655 22.0082 37.9713 21.8193 39.4825C21.2526 43.4497 17.7577 46.1889 13.6961 46C9.82341 45.8111 6.70637 42.5996 6.51746 38.6324C6.423 37.9713 6.423 37.2156 6.423 36.5544ZM19.0801 34.3819C19.0801 34.193 19.1745 34.0986 19.1745 34.0041C18.9856 32.7762 19.6468 32.115 20.5914 31.3593C24.2752 28.7146 25.9754 25.0308 25.5031 20.5914C24.9363 15.5852 20.7803 11.4292 15.963 10.768C10.5791 10.1068 5.5729 12.9405 3.68378 17.7577C1.60575 22.6694 3.2115 28.2423 7.46202 31.1704C8.59549 31.9261 9.35113 32.7762 9.16222 34.193C9.16222 34.193 9.25668 34.2875 9.25668 34.3819C10.3901 34.3819 11.5236 34.3819 12.7515 34.3819C12.7515 32.115 12.7515 29.9425 12.7515 27.6756C12.7515 27.4867 12.3737 27.2033 12.1848 27.1088C10.8624 26.3532 10.0123 25.3142 9.82341 23.7084C9.72896 22.575 10.0123 22.0082 10.8624 21.8193C11.7125 21.6304 12.3737 22.1971 12.4682 23.2361C12.5626 23.9918 12.9405 24.4641 13.6016 24.653C14.6407 25.0308 15.4908 24.3696 15.7741 23.0472C15.963 22.1027 16.5298 21.6304 17.3799 21.7248C18.1355 21.8193 18.6078 22.386 18.5133 23.4251C18.4189 25.1253 17.4743 26.2587 16.0575 27.1088C15.7741 27.2977 15.4908 27.6756 15.4908 27.9589C15.3963 29.2813 15.4908 30.6037 15.4908 31.9261C15.4908 32.6817 15.4908 33.5318 15.4908 34.2875C16.8131 34.3819 17.9466 34.3819 19.0801 34.3819ZM19.0801 37.2156C15.7741 37.2156 12.4682 37.2156 9.16222 37.2156C8.97331 39.4826 9.54004 41.2772 11.5236 42.5051C13.2238 43.5442 15.0185 43.6386 16.7187 42.5996C18.6078 41.3717 19.269 39.577 19.0801 37.2156Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12.7515 2.55031C12.7515 2.07803 12.7515 1.60575 12.846 1.13347C12.9405 0.472279 13.4127 0 14.0739 0C14.8296 0 15.3018 0.377823 15.3963 1.03901C15.4908 1.98357 15.4908 3.02259 15.3963 3.96714C15.3963 4.72279 14.8296 5.10062 14.1684 5.10062C13.4127 5.10062 12.9405 4.72279 12.846 4.0616C12.7515 3.49487 12.7515 3.02259 12.7515 2.55031Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10.5791 4.72278C10.2012 5.10061 9.91786 5.66734 9.44559 5.85625C8.87885 6.13962 8.21766 5.85625 7.93429 5.28952C7.46201 4.43942 7.08419 3.49486 6.89528 2.5503C6.80082 2.07802 7.2731 1.41683 7.65092 1.13346C8.1232 0.755639 8.87885 0.850095 9.25667 1.41683C9.72895 2.45584 10.1068 3.49486 10.5791 4.72278Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21.6304 2.26695C21.1581 3.40042 20.7803 4.5339 20.2136 5.47845C20.0246 5.76182 19.1745 6.04519 18.7967 5.85628C18.4189 5.66737 17.8522 5.00617 17.9466 4.62835C18.1355 3.58934 18.5133 2.55032 19.0801 1.60576C19.269 1.3224 20.1191 1.13348 20.5914 1.22794C20.9692 1.22794 21.2526 1.79468 21.6304 2.26695Z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="accordion-item mb-20">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <span>03.</span> Solution of Reality
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.
                                                Aliquam in hendrerit urna. Pellentesque sit.Aliquam in hendrerit urna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-single">
                                <div class="accordion-single-icon">
                                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_235_336)">
                                            <path
                                                d="M0 19.366C0 14.4119 0 9.36776 0 4.41367C0 3.06255 0.360298 2.61218 1.80149 2.61218C4.14342 2.61218 6.39529 2.61218 8.73722 2.61218C9.90819 2.61218 10.3586 3.06255 10.3586 4.3236C10.3586 14.4119 10.3586 24.5003 10.3586 34.6787C10.3586 35.9397 9.90819 36.3901 8.73722 36.3901C6.39529 36.3901 3.96328 36.3901 1.62134 36.3901C0.450372 36.3901 0 35.9397 0 34.7688C0 29.5444 0 24.4102 0 19.366ZM2.61216 5.22434C2.61216 14.7722 2.61216 24.23 2.61216 33.5978C4.32357 33.5978 6.03499 33.5978 7.65633 33.5978C7.65633 24.0499 7.65633 14.6822 7.65633 5.22434C6.03499 5.22434 4.32357 5.22434 2.61216 5.22434Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12.9707 24.5003C12.9707 21.1675 12.9707 17.9248 12.9707 14.5921C12.9707 13.331 13.4211 12.8806 14.6821 12.8806C17.0241 12.8806 19.366 12.8806 21.7079 12.8806C22.8789 12.8806 23.3293 13.331 23.3293 14.5921C23.3293 21.2576 23.3293 27.9231 23.3293 34.5886C23.3293 35.8496 22.8789 36.2099 21.7079 36.2099C19.366 36.2099 16.934 36.2099 14.5921 36.2099C13.4211 36.2099 12.9707 35.7596 12.9707 34.5886C12.9707 31.2558 12.9707 27.9231 12.9707 24.5003ZM20.627 33.5978C20.627 27.5628 20.627 21.5278 20.627 15.5829C18.9156 15.5829 17.2042 15.5829 15.5829 15.5829C15.5829 21.6179 15.5829 27.5628 15.5829 33.5978C17.2943 33.5978 18.9156 33.5978 20.627 33.5978Z"
                                                fill="currentColor" />
                                            <path
                                                d="M25.9414 29.7246C25.9414 28.1032 25.9414 26.4819 25.9414 24.8606C25.9414 23.7797 26.3918 23.3293 27.4727 23.3293C29.9047 23.3293 32.3367 23.3293 34.8588 23.3293C35.8496 23.3293 36.3 23.7797 36.3 24.8606C36.3 28.1933 36.3 31.5261 36.3 34.7687C36.3 35.7596 35.8496 36.3 34.8588 36.3C32.3367 36.3 29.9047 36.3 27.3826 36.3C26.4819 36.3 25.9414 35.7596 25.9414 34.8588C25.8514 33.0573 25.9414 31.436 25.9414 29.7246ZM33.5978 25.9414C31.8863 25.9414 30.1749 25.9414 28.5536 25.9414C28.5536 28.5536 28.5536 31.0757 28.5536 33.5978C30.265 33.5978 31.9764 33.5978 33.5978 33.5978C33.5978 31.0757 33.5978 28.5536 33.5978 25.9414Z"
                                                fill="currentColor" />
                                            <path
                                                d="M27.9231 11.6196C25.7613 9.36775 23.5995 7.29604 21.5278 5.22433C20.627 4.32358 19.7263 3.42284 18.8256 2.52209C18.0149 1.71142 17.9248 0.900755 18.5553 0.360308C19.1859 -0.180138 19.9065 -0.0900638 20.627 0.630532C23.4194 3.42284 26.2117 6.21515 29.004 9.00745C29.1841 9.1876 29.4543 9.36775 29.7246 9.63797C29.7246 9.27768 29.7246 9.09753 29.8146 8.8273C29.9047 8.10671 30.4452 7.65634 31.1658 7.65634C31.8863 7.74641 32.3367 8.10671 32.4268 8.8273C32.5169 10.1784 32.5169 11.6196 32.4268 12.9707C32.4268 13.6913 31.8864 14.1417 31.0757 14.1417C29.9047 14.1417 28.7337 14.1417 27.5628 14.1417C26.662 14.1417 26.0315 13.6012 26.0315 12.8807C26.0315 12.1601 26.572 11.6196 27.4727 11.6196C27.4727 11.6196 27.6529 11.6196 27.9231 11.6196Z"
                                                fill="currentColor" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <span>04.</span> Public Repository
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi.
                                                Aliquam in hendrerit urna. Pellentesque sit.Aliquam in hendrerit urna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose area end -->

        <!-- testimonial area start -->
        <section class="zq_h3_testimonial-area pt-100 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h3_testimonial-wrap">
                            <div class="h3_testimonial-thumbs swiper mb-30">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="h3_testimonial-img">
                                            <img src="{{ asset('assets/website/images/testimonial/h3_1.png') }}" alt="">
                                            <img src="{{ asset('assets/website/images/testimonial/h3_shape.png') }}" alt="" class="h3_testimonial-img-shape">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h3_testimonial-img">
                                            <img src="{{ asset('assets/website/images/testimonial/h3_2.png') }}" alt="">
                                            <img src="{{ asset('assets/website/images/testimonial/h3_shape.png') }}" alt="" class="h3_testimonial-img-shape">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h3_testimonial-img">
                                            <img src="{{ asset('assets/website/images/testimonial/h3_3.png') }}" alt="">
                                            <img src="{{ asset('assets/website/images/testimonial/h3_shape.png') }}" alt="" class="h3_testimonial-img-shape">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h3_testimonial-active swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="zq_h3_testimonial-item">
                                            <p>Lorem ipsum dolor sit amet consecte adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae ullam imperde.</p>
                                            <div class="zq_h3_testimonial-item-admin">
                                                <h4>Sara Jackson</h4>
                                                <span>Web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="zq_h3_testimonial-item">
                                            <p>Lorem ipsum dolor sit amet consecte adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae ullam imperde.</p>
                                            <div class="zq_h3_testimonial-item-admin">
                                                <h4>Sara Jackson</h4>
                                                <span>Web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="zq_h3_testimonial-item">
                                            <p>Lorem ipsum dolor sit amet consecte adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae ullam imperde.</p>
                                            <div class="zq_h3_testimonial-item-admin">
                                                <h4>Sara Jackson</h4>
                                                <span>Web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h3_testimonial-prev h3_testimonial-nav"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="h3_testimonial-next h3_testimonial-nav"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

        <!-- blog area start -->
        <section class="zq_h2_blog-area pt-95 pb-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="zq_section-area text-center">
                            <span class="zq_section-subtitle mb-20">Our Blog</span>
                            <h2 class="zq_section-title mb-40">Our Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4">
                        <div class="zq_h2_blog-left pb-40">
                            <div class="zq_h2_blog-widget pb-10">
                                <h3 class="zq_h2_blog-widget-title mb-45">Feature Posts</h3>
                                <div class="zq_h2_blog-widget-item mb-30">
                                    <img src="{{ asset('assets/website/images/blog/h2_sidebar-1.png') }}" alt="">
                                    <div class="zq_h2_blog-widget-item-info">
                                        <p><a href="#">How to optimize images in WordPress for faster loading (complete
                                                guide)</a></p>
                                        <span>April 2, 2022</span>
                                    </div>
                                </div>
                                <div class="zq_h2_blog-widget-item mb-30">
                                    <img src="{{ asset('assets/website/images/blog/h2_sidebar-2.png') }}" alt="">
                                    <div class="zq_h2_blog-widget-item-info">
                                        <p><a href="#">How to choose the right customer for your photo business?</a></p>
                                        <span>April 2, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="zq_h2_blog-widget mb-45">
                                <h3 class="zq_h2_blog-widget-title mb-35">Feature Posts</h3>
                                <ul>
                                    <li><a href="#"><i class="fa-light fa-angle-right"></i>Development</a></li>
                                    <li><a href="#"><i class="fa-light fa-angle-right"></i>Business</a></li>
                                    <li><a href="#"><i class="fa-light fa-angle-right"></i>Finance</a></li>
                                </ul>
                            </div>
                            <div class="zq_h2_blog-widget-btn">
                                <a href="#" class="zq_h2_theme-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="zq_h2_blog-right pb-40">
                            <div class="row">
                                <div class="col-12">
                                    <div class="zq_h2_blog-item-big mb-30">
                                        <div class="zq_h2_blog-item-big-img">
                                            <img src="{{ asset('assets/website/images/blog/h2_1.png') }}" alt="">
                                            <span class="zq_h2_blog-item-big-img-tag">Finance</span>
                                        </div>
                                        <div class="zq_h2_blog-item-big-content">
                                            <h3 class="zq_h2_blog-item-big-content-title"><a href="blog-details.html">Where
                                                    to grow your business as a photographer: site or social media?</a></h3>
                                            <div class="zq_h2_blog-item-big-admin">
                                                <img src="{{ asset('assets/website/images/blog/h2_admin-1.png') }}" alt="">
                                                <div class="zq_h2_blog-item-big-admin-info">
                                                    <h5>Jenny Wilson</h5>
                                                    <span>April 2, 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="zq_h2_blog-item mb-30">
                                        <div class="zq_h2_blog-item-img">
                                            <a href="blog-details.html"><img src="{{ asset('assets/website/images/blog/h2_2.png') }}" alt=""></a>
                                        </div>
                                        <div class="zq_h2_blog-item-content">
                                            <span class="zq_h2_blog-item-content-tag">Finance</span>
                                            <h3 class="zq_h2_blog-item-content-title"><a href="blog-details.html">How to
                                                    choose the right colors when creating a coding base website?</a></h3>
                                            <div class="zq_h2_blog-item-content-admin">
                                                <img src="{{ asset('assets/website/images/blog/h1_admin-2.png') }}" alt="">
                                                <span>By <a href="#">Jenny Wilson</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="zq_h2_blog-item mb-30">
                                        <div class="zq_h2_blog-item-img">
                                            <a href="blog-details.html"><img src="{{ asset('assets/website/images/blog/h2_3.png') }}" alt=""></a>
                                        </div>
                                        <div class="zq_h2_blog-item-content">
                                            <span class="zq_h2_blog-item-content-tag">Finance</span>
                                            <h3 class="zq_h2_blog-item-content-title"><a href="blog-details.html">The Role
                                                    of Business Ethics in Building Customer Trust and Loyalty</a></h3>
                                            <div class="zq_h2_blog-item-content-admin">
                                                <img src="{{ asset('assets/website/images/blog/h1_admin-3.png') }}" alt="">
                                                <span>By <a href="#">Jenny Wilson</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->

        <!-- contact area start -->
        <section class="zq_contact-area pb-100">
            <div class="container">
                <div class="zq_contact-wrap">
                    <div class="zq_contact-content">
                        <div class="zq_section-area">
                            <h2 class="zq_section-title mb-30">Let's Get Started with Us. <br>
                                Call Us Now!</h2>
                            <p class="zq_section-text mb-40">Ready to take your business to the next level? Our expert team is here to deliver the IT solutions you need. Reach out today and let's build something great together.</p>
                        </div>
                        <div class="zq_contact-call">
                            <div class="zq_contact-call-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M44.2391 16.9892C41.5369 6.94588 33.3318 0 24 0C14.6965 0 6.46024 6.95718 3.76094 16.9892C1.65176 17.2207 0 18.9995 0 21.1765V32.4706C0 34.2353 1.07859 35.7459 2.60894 36.3812C3.15671 41.3139 7.30447 45.1765 12.3812 45.1765H20.0245C20.6089 46.8169 22.1619 48 24 48H32.4706C34.8056 48 36.7059 46.0998 36.7059 43.7647C36.7059 41.4296 34.8056 39.5294 32.4706 39.5294H24C22.1619 39.5294 20.6089 40.7125 20.0245 42.3529H12.3812C8.97035 42.3529 6.12141 39.9247 5.46635 36.7059H8.47059V33.8824H11.2941V19.7647H8.47059V16.9412H6.75953C9.33741 8.58071 16.224 2.82353 24 2.82353C31.7986 2.82353 38.6626 8.57506 41.2405 16.9412H39.5294V19.7647H36.7059V33.8824H39.5294V36.7059H43.7816C46.1082 36.7059 48 34.8056 48 32.4706V21.1765C48 18.9995 46.3482 17.2207 44.2391 16.9892ZM24 42.3529H32.4706C33.2471 42.3529 33.8824 42.9854 33.8824 43.7647C33.8824 44.544 33.2471 45.1765 32.4706 45.1765H24C23.2235 45.1765 22.5882 44.544 22.5882 43.7647C22.5882 42.9854 23.2235 42.3529 24 42.3529ZM5.64706 33.8824H4.21835C3.45035 33.8824 2.82353 33.2499 2.82353 32.4706V21.1765C2.82353 20.3972 3.45035 19.7647 4.21835 19.7647H5.64706V33.8824ZM45.1765 32.4706C45.1765 33.2499 44.5496 33.8824 43.7816 33.8824H42.3529V19.7647H43.7816C44.5496 19.7647 45.1765 20.3972 45.1765 21.1765V32.4706Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="zq_contact-call-info">
                                <span>Call Us Anytime.</span>
                                <a href="tel:+923048552653">+92 304 855 2653</a>
                            </div>
                        </div>
                    </div>
                    <div class="zq_contact-form">
                        <form action="#">
                            <div class="row g-20">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Phone" required>
                                </div>
                                <div class="col-sm-6">
                                    <select name="select" class="has-nice-select">
                                        <option value="1">Select Service</option>
                                        <option value="2">Art & Design</option>
                                        <option value="3">Graphic Design</option>
                                        <option value="4">Web Design</option>
                                        <option value="5">UX/UI Design</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="zq_contact-form-btn">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
    </main>
@endsection