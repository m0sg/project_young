<!-- ========== Home_Slider ========== -->
<section id="home">
    @if (isset($sliders) && is_object($sliders))
        <div class="owl-carousel testimonial-slider-02">
            @foreach($sliders as $slide)
                <div class="item">
                    <div class="single-testimonial-02 text-center">
                        <img class="image_item" src="{{ asset('assets/img/' . $slide['image']) }}"
                             alt="{{ $slide['name'] }}">
                        <div class="content_item">
                            <h1>{{ $slide['name'] }}</h1>
                            <h3>{{ $slide['title'] }}</h3>
                            <a href="{{ route('product', array('alias'=>$slide->alias)) }}" class="m-btn">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>
<!-- ========== End Home_Slider ========== -->


<!-- ========== About Us ========== -->
<section id="about" class="section">
    <!-- Container -->
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-5">
                <div class="personal-pic">
                    <img src="{{ asset('assets/img/550x500.jpg') }}" title="" alt=""/>
                </div><!-- .personal-pic -->
            </div><!-- .col-xs-12 col-sm-5 -->

            <div class="col-xs-12 col-sm-7">
                <div class="personal-info">
                    <div class="section-title left">
                        <h2>О программе<span> "Молодняк"</span></h2>
                    </div><!-- .section-title -->
                    <h3>Hello! i'm Martin Luther</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus.</p>
                    <div class="social-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!-- .social-link -->
                    <div class="about-actions">
                        <button class="m-btn lets-talk">contact me</button>
                        <button class="m-btn">download cv</button>
                    </div>
                </div><!-- .personal-info -->
            </div><!-- .col-xs-12 col-sm-5 -->

        </div><!-- .Row -->
    </div><!-- .Container -->

</section>
<!-- ========== End Of About Us ========== -->

<!-- ========== Advantages ========== -->
<section id="advantages" class="section grey-bg">
    <div class="container">
        <div class="section-title">
            <h2><span>Наши</span> Преимущества</h2>
        </div><!-- .section-title -->
        @if(isset($advantages) && is_object($advantages))
            <div class="row">
                @foreach($advantages as $k=>$advantage)
                    <div class="col-sm-4">
                        <div class="service-box">
                    <span class="sb-icon">
                      <i class="{{ $advantage['icon'] }}" aria-hidden="true"></i>
                    </span>
                            {{--<h4>WEB DESIGN</h4>--}}
                            <div class="sb-desc">
                                <p><span>{{ $advantage['name'] }}</span></p>
                                <p>{{ $advantage['text'] }}</p>
                            </div><!-- .sb-desc -->
                        </div><!-- .service-box -->
                    </div><!-- .col-sm-4 -->
                @endforeach
            </div><!-- .row -->
        @endif
    </div><!-- .container -->
</section>
<!-- ========== End Of Advantages ========== -->

<!-- ========== Products ========== -->
<section id="products" class="section">
    <div class="container">
        <div class="section-title">
            <h2><span>Наши</span> Продукты</h2>
        </div><!-- .section-title -->

        @if(isset($products) && is_object($products))
            <div class="row">
                @foreach($products as $product)
                    <div class="col-sm-4 col-sm-12">
                        <div class="product-item">
                            <div class="product-img">
                                <img src="{{ asset('assets/img/' . $product['image']) }}"
                                     title="{{ $product['name'] }}" alt="{{ $product['name'] }}">
                            </div><!-- .product-img -->
                            <div class="product-contents">
                                <h3><a href="{{ route('product', array('alias'=>$product->alias)) }}">{{ $product['name'] }}</a></h3>
                                <div class="product-desc">
                                    <p>{{ $product['text'] }}</p>
                                </div>
                                <div class="product-action">
                                    <a href="{{ route('product', array('alias'=>$product->alias)) }}" class="m-btn">Подробнее</a>
                                </div>
                            </div><!-- .product-contents -->
                        </div><!-- .product-item -->
                    </div><!-- .col-sm-4 col-sm-12 -->
                @endforeach
            </div><!-- .row -->
        @endif

    </div><!-- .container -->
</section>
<!-- ========== End Of product ========== -->




<!-- ========== CAT ========== -->
<section class="call-to-action">
    <div class="container">
        <h2>I am Available for Freelance</h2>
        <button class="m-btn m-btn-white">hire me Now</button>
    </div><!-- .container -->
</section><!-- .call-to-action -->
<!-- ========== End Of CTA ========== -->


<!-- ========== Start Testimonial ========== -->
<section class="section testimonial-area grey-bg">
    <div class="container">
        @if(isset($reviews) && is_object($reviews))
        <div class="owl-carousel testimonial-slider">
            @foreach($reviews as $review)
            <div class="item">
                <div class="single-testimonial text-center">
                    <div class="avtar"><img src="{{ asset('assets/img/' . $review['images']) }}" alt=""></div>
                    <p>{{ $review['text'] }}</p>
                    <div class="clearfix"></div>
                    <h4>{{ $review['name'] }}</h4>
                    <p class="desg">{{ $review['company'] }}</p>
                </div>
            </div><!-- .item -->
                @endforeach
        </div><!-- .owl-carousel testimonial-slider -->
            @endif
    </div><!-- .container -->
</section><!-- .section testimonial-area -->
<!-- ========== End Of Testimonial ========== -->


<!-- ========== Contact ========== -->
<section id="contact" class="section contact-us grey-bg">
    <div class="container">
        <div class="section-title">
            <h2>Contact<span> Me</span></h2>
        </div><!-- .section-title -->
        <div class="row">
            <div class="col-sm-6 col-xs-12 col-md-6 col-md-offset-1">
                <div class="contact-form">
                    <form id="contact_form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input class="form-control" name="name" placeholder="Name" type="text">
                                </div>
                            </div><!-- .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input class="form-control" name="name" placeholder="Email" type="email">
                                </div>
                            </div><!-- .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only">Phone</label>
                                    <input class="form-control" name="name" placeholder="Phone" type="text">
                                </div>
                            </div><!-- .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only">Website</label>
                                    <input class="form-control" name="name" placeholder="Website" type="email">
                                </div>
                            </div><!-- .col-md-6 -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="sr-only">Your message</label>
                                    <textarea class="form-control" name="message" rows="7"
                                              placeholder="Your message"></textarea>
                                </div>
                            </div><!-- .col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-group action">
                                    <button class="m-btn">SEND MESSAGE</button>
                                </div>
                            </div><!-- .col-md-12 -->
                        </div><!-- .row -->

                    </form>
                </div>
            </div><!-- .col-sm-8 col-xs-12 -->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-info">
                    <i class="fa fa-map-marker"></i>
                    <h4>Adress:</h4>
                    <p>123 6th St. <br> Melbourne, FL 32904, USA</p>
                </div><!-- .contact-info -->
                <div class="contact-info">
                    <i class="fa fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>
                        <a href="mailto:example@yourdomain.com">example@yourdomain.com</a>
                        <br>
                        <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                    </p>
                </div><!-- .contact-info -->
                <div class="contact-info">
                    <i class="fa fa-phone"></i>
                    <h4>Phone:</h4>
                    <p>Mob: +01 000 000 000<br>Fax: +01 000 000 000</p>
                </div><!-- .contact-info -->
            </div><!-- .col-sm-4 col-xs-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- ========== End Of Contact ========== -->

<!-- ========== Footer ========== -->
<footer class="footer">
    <div class="main-footer text-center">
        <h4 class="footer-logo">MARTIN LUTHER</h4>
        <div class="social-link">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div><!-- .social-link -->
    </div><!-- .main-footer -->
    <div class="sub-footer  text-center">
        <p>Copy Right © By Martin Luther 2017-18 | All Rights Reserved.</p>
    </div>
</footer> <!-- .footer -->
<!-- ========== End Of Footer ========== -->