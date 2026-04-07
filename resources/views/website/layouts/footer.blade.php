  @php $footerServices = \App\Models\Service::orderBy('sort_order')->orderBy('created_at','desc')->take(5)->get(); @endphp
  <footer class="zq_footer-area">
                    <div class="zq_footer-top pt-205">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 col-md-6">
                                    <div class="zq_footer-widget mr-85 mb-40">
                                        <h4 class="zq_footer-widget-title">Get In Touch</h4>
                                        <p class="zq_footer-widget-text">Our team comprises professionals with years of experience delivering cutting-edge IT solutions.</p>
                                        <div class="zq_footer-widget-mail">
                                            <i class="fa-sharp fa-light fa-envelope"></i>
                                            <a href="mailto:hmstech11@gmail.com">hmstech11@gmail.com</a>
                                        </div>
                                         <form action="#">
                                            <input type="email" placeholder="Email Address" required>
                                            <button type="submit"><i class="fa-sharp fa-solid fa-paper-plane"></i></button>
                                        </form>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="zq_footer-widget ml-25 mb-35">
                                        <h4 class="zq_footer-widget-title">Services</h4>
                                        <ul>
                                            @forelse($footerServices as $fs)
                                                <li><a href="{{ route('service.detail', $fs->id) }}">{{ $fs->title }}</a></li>
                                            @empty
                                                <li><a href="{{ route('service') }}">View All Services</a></li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 order-lg-3 order-md-4 order-3">
                                    <div class="zq_footer-widget ml-15 mb-35">
                                        <h4 class="zq_footer-widget-title">Quick Links</h4>
                                        <ul>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('service') }}">Services</a></li>
                                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 order-lg-4 order-md-3 order-4">
                                    <div class="zq_footer-widget ml-45 mb-40">
                                        <h4 class="zq_footer-widget-title">Our Office</h4>
                                        <div class="zq_footer-widget-post">
                                            <span>Head Office</span>
                                            <h5><a href="#">Main Bakar Mandi Road, Liaquatabad, Near UBL Bank, Faisalabad.</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="zq_footer-bottom">
                        <div class="container">
                            <div class="zq_footer-bottom-wrap">
                                <div class="zq_footer-logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('assets/website/images/logo/logo.png') }}" alt=""></a>
                                </div>
                                <div class="zq_footer-copyright">
                                    <p>Copyright &copy; {{ date('Y') }} <a href="#">HMS Tech</a>. All Rights Reserved.</p>
                                </div>
                                <div class="zq_footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer area end -->
            </div>
        </div>
    </div>
