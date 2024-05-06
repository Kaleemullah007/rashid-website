@extends('layouts.home')
@section('content')
    <!-- Header Area End -->
    <!-- Banner Area Start -->
    <!-- Banner Area Start -->
    <section class="banner-19">
        <div class="banner-layer">
            <video autoplay muted loop id="myVideo">
                <source src="images/slide-9.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <h4 class="fotss">{{ config('details.slider_heading') }}</h4>





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area Start -->
    <!-- Banner Area End -->
    <!-- About Area Start -->
    @include('includes.about-section')
    <!-- About Area End -->
    <!-- Services Area Start -->
    <div class="services__one section-padding pt-0">
        <div class="container">

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 xl-mb-30">
                    <div class="services__one-item">
                        <div class="services__one-item-icon">
                            <img src="images/services-1.png" alt="">
                            <div class="services__one-item-icon-one">
                                <img src="images/services-11.png" alt="">
                            </div>
                        </div>
                        <h4><a href="services-right-sidebar.html">Our Mission</a></h4>
                        <p>our mission is simple yet profound: to elevate everyday meals into extraordinary culinary
                            experiences. We are dedicated to sourcing and delivering the highest-quality food products,
                            fostering culinary exploration through diverse flavors, promoting sustainability, providing
                            unparalleled service, and building lasting relationships based on trust and integrity. Our
                            passion for excellence drives us to continually enhance your culinary world, one bite at a time.
                        </p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 md-mb-30">
                    <div class="services__one-item">
                        <div class="services__one-item-icon">
                            <img src="images/services-2.png" alt="">
                            <div class="services__one-item-icon-one">
                                <img src="images/services-22.png" alt="">
                            </div>
                        </div>
                        <h4><a href="services-right-sidebar.html">Our Vision</a></h4>
                        <p>Our vision at {{ config('details.name') }} is to be the leading provider of premium food
                            products, inspiring a world where culinary excellence knows no bounds. We aim to continuously
                            expand our offerings, set new industry standards in quality and sustainability, and enrich the
                            lives of our customers by connecting them to the world's finest flavors. Through innovation,
                            ethical practices, and an unwavering commitment to excellence, we aspire to redefine the future
                            of the food industry, making every meal a memorable journey.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Cta Area Start -->
    <div class="footer__top">
        <img class="footer__top-shape" src="images/footer.png" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 lg-mb-30">
                    <div class="footer__top-title lg-t-center">
                        <h2>Download Our Company Profile</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="footer__top-btn t-right lg-t-center">
                        <a class="btn-four" href="profile.pdf">Download Now<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Area End -->
    <!-- Experience Area Start -->
    <div class="experience__area dark__image section-padding">
        <img class="experience__area-shape dark-n" src="images/experience.png" alt="">
        <img class="experience__area-shape light-n" src="images/experience-dark.png" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="experience__area-image">
                        <img class="experience__area-image-shape left-right-animate" src="images/dots.png" alt="">
                        <div class="experience__area-image-item">
                            <img src="images/experience-1.jpg" alt="">
                        </div>
                        <div class="experience__area-image-item mt-65">
                            <img src="images/experience-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="experience__area-right">
                        <div class="experience__area-right-title">
                            <span class="subtitle-one">{{ config('details.name') }}</span>
                            <h2>Ceo Message</h2>
                            <p>Welcome to {{ config('details.name') }},</p>

                            <p>At {{ config('details.name') }}, we are driven by a shared passion for exceptional taste
                                and an unwavering commitment to excellence. It is with great pride and enthusiasm that I
                                welcome you to our world of culinary delights.</p>
                            <br>
                            <p>Our journey has been one of dedication and innovation, and we are proud to stand as a trusted
                                provider of high-quality food products in the United Arab Emirates. From the very beginning,
                                our mission has been clear: to bring the finest ingredients and flavors to our valued
                                customers, enriching their lives through the joy of good food.</p>
                        </div>

                        <br>
                        <a class="btn-one" href="ceo-message.html">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Experience Area End -->





    <div class="blog__two section-padding">
        <div class="container">

            <div class="row align-items-end mb-70">
                <div class="col-xl-12 col-lg-12 lg-mb-30">
                    <div class="blog__one-title lg-t-center">
                        <span class="subtitle-one">Some of Our Products</span>
                        <h2>Our Products</h2>
                        <p>At {{ config('details.name') }}, we take pride in our extensive selection of top-notch food
                            products. From pantry staples to gourmet delights, our offerings encompass a wide variety of
                            categories, including:</p>

                    </div>

                </div>

            </div>

            <div class="row">


                <div class="col-xl-3 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Spices-and-Seasonings.jpg" alt=""></a>
                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Spices and Seasonings</a></h4>
                            <p>Elevate your culinary creations with our premium collection of spices and seasonings sourced
                                from around the world.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Grains-and-Pulses.jpg" alt=""></a>

                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Grains and Pulses</a></h4>
                            <p>Discover a wholesome range of grains and pulses that form the foundation of nutritious meals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Canned-Goods.jpg" alt=""></a>

                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Canned Goods</a></h4>
                            <p>Convenient and flavourful canned goods that make meal preparation a breeze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Sauces-and-Condiments.jpg" alt=""></a>

                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Sauces and Condiments</a></h4>
                            <p>Enhance your dishes with our delectable array of sauces and condiments crafted for exquisite
                                taste.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Beverages.jpg" alt=""></a>

                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Beverages</a></h4>
                            <p>Quench your thirst with our refreshing selection of beverages, including natural juices and
                                specialty drinks.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Rice.jpg" alt=""></a>

                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Rice</a></h4>
                            <p>Experience the satisfaction of perfectly cooked rice with our premium rice varieties, known
                                for their superior quality and taste.</p>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-6 mb-30">
                    <div class="blog__two-item page">
                        <div class="blog__two-item-image">
                            <a href=""><img src="images/Cooking-Oil.jpg" alt=""></a>

                        </div>
                        <div class="blog__two-item-content">

                            <h4><a href="">Cooking Oil</a></h4>
                            <p>Elevate your cooking endeavours with our premium cooking oils, carefully sourced and crafted
                                to enhance your dishes' Flavors.</p>
                        </div>
                    </div>
                </div>
            </div>








































        </div>
    </div>




    <!-- Blog Area End -->




    <div class="work__area section-padding pb-0">
        <div class="container">
            <div class="row mb-70">
                <div class="col-xl-12">
                    <div class="work__area-title t-center">
                        <span class="subtitle-two">Work Process</span>
                        <h2>Our Solution Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 xl-mb-30">
                    <div class="work__area-item">
                        <span>01</span>
                        <h6>Explore Our Products</h6>
                        <p>Begin your culinary journey by exploring our diverse range of high-quality food products. From
                            exquisite spices to premium rice and much more, we offer a wide selection to cater to your
                            culinary needs.</p>
                        <img class="work__area-item-arrow sm-display-n dark-n" src="images/arrow-1.png" alt="">
                        <img class="work__area-item-arrow sm-display-n light-n" src="images/arrow-1-dark.png"
                            alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 sm-mb-30">
                    <div class="work__area-item">
                        <span>02</span>
                        <h6>Place Your Order</h6>
                        <p>Once you've found the products that tantalize your taste buds, simply add them to your cart and
                            proceed to our secure checkout. Our user-friendly website ensures a hassle-free ordering
                            experience.</p>
                        <img class="work__area-item-arrow xl-display-n dark-n" src="images/arrow-2.png" alt="">
                        <img class="work__area-item-arrow xl-display-n light-n" src="images/arrow-2-dark.png"
                            alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 sm-mb-30">
                    <div class="work__area-item">
                        <span>03</span>
                        <h6>Fast and Reliable Delivery</h6>
                        <p>Sit back and relax as our efficient team processes your order. We take pride in our prompt
                            delivery service, ensuring your products reach your doorstep quickly and in pristine condition
                        </p>
                        <img class="work__area-item-arrow xl-display-n dark-n" src="images/arrow-1.png" alt="">
                        <img class="work__area-item-arrow xl-display-n light-n" src="images/arrow-1-dark.png"
                            alt="">
                        <img class="work__area-item-arrow display-n xl-display-b sm-display-n dark-n"
                            src="images/arrow-2.png" alt="">
                        <img class="work__area-item-arrow display-n xl-display-b sm-display-n light-n"
                            src="images/arrow-2-dark.png" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="work__area-item">
                        <span>04</span>
                        <h6>Indulge in Excellence</h6>
                        <p>Unpack your order and indulge in the excellence of {{ config('details.name') }}. Whether
                            you're a home chef or a professional, our premium products will elevate your culinary creations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Testimonial Area Start -->
    <!-- Testimonial Area Start -->
    <div class="testimonial__area section-padding">
        <img class="testimonial__area-shape dark-n" src="images/testimonial.png" alt="" />
        <img class="testimonial__area-shape light-n" src="images/testimonial-dark.png" alt="" />
        <div class="container">
            <div class="row mb-70 align-items-end">
                <div class="col-xl-8 col-lg-8 lg-mb-30">
                    <div class="testimonial__area-title lg-t-center">
                        <span class="subtitle-one">Real Client Stories</span>
                        <h2>Customer Experiences</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="testimonial__area-button t-right lg-t-center">
                        <div class="testimonial__area-button-prev swiper-button-prev">
                            <i class="fas fa-long-arrow-left"></i>
                        </div>
                        <div class="testimonial__area-button-next swiper-button-next">
                            <i class="fas fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper testimonial__area-slider">
                        <div class="swiper-wrapper">
                            @foreach (config('details.reviews') as $review)
                                <div class="testimonial__area-item swiper-slide">
                                    <div class="testimonial__area-item-client">
                                        <div class="testimonial__area-item-icon">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <div class="testimonial__area-item-client-image">
                                            <img src="{{ $review['image'] }}" alt="" />
                                        </div>
                                        <div class="testimonial__area-item-client-title">
                                            <h5>{{ $review['name'] }}</h5>
                                            <span class="text-eight">Customer Experiences</span>
                                        </div>
                                    </div>
                                    <p>
                                        {{ $review['review'] }}
                                    </p>
                                    <div class="testimonial__area-item-reviews">
                                        @for ($i = 0; $i < $review['rating']; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="testimonial__area-item swiper-slide">
                  <div class="testimonial__area-item-client">
                    <div class="testimonial__area-item-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial__area-item-client-image">
                      <img src="images/avatar-2.jpg" alt="" />
                    </div>
                    <div class="testimonial__area-item-client-title">
                      <h5>Joti</h5>
                      <span class="text-eight">Customer Experiences </span>
                    </div>
                  </div>
                  <p>
                    The flavors brought to us by {{ config('details.name')}}
                    are a true delight. I've explored a wide range of their
                    products, and each one has been a culinary adventure. It's
                    like taking a journey around the world through food.
                  </p>
                  <div class="testimonial__area-item-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
                <div class="testimonial__area-item swiper-slide">
                  <div class="testimonial__area-item-client">
                    <div class="testimonial__area-item-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial__area-item-client-image">
                      <img src="images/avatar-3.jpg" alt="" />
                    </div>
                    <div class="testimonial__area-item-client-title">
                      <h5>Amir Shah</h5>
                      <span class="text-eight">Customer Experiences </span>
                    </div>
                  </div>
                  <p>
                    I appreciate {{ config('details.name')}}'s commitment to
                    sustainability. It's reassuring to know that I can enjoy
                    their products knowing they prioritize responsible sourcing
                    and eco-friendly practices.
                  </p>
                  <div class="testimonial__area-item-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>

                <div class="testimonial__area-item swiper-slide">
                  <div class="testimonial__area-item-client">
                    <div class="testimonial__area-item-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial__area-item-client-image">
                      <img src="images/avatar-4.jpg" alt="" />
                    </div>
                    <div class="testimonial__area-item-client-title">
                      <h5>Arjun Kumar</h5>
                      <span class="text-eight">Customer Experiences </span>
                    </div>
                  </div>
                  <p>
                    The team at {{ config('details.name')}} is fantastic.
                    They are always ready to assist and provide valuable
                    insights. Their passion for what they do shines through in
                    every interaction..
                  </p>
                  <div class="testimonial__area-item-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>

                <div class="testimonial__area-item swiper-slide">
                  <div class="testimonial__area-item-client">
                    <div class="testimonial__area-item-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial__area-item-client-image">
                      <img src="images/avatar-5.jpg" alt="" />
                    </div>
                    <div class="testimonial__area-item-client-title">
                      <h5>Baljeet</h5>
                      <span class="text-eight">Customer Experiences </span>
                    </div>
                  </div>
                  <p>
                    I rely on {{ config('details.name')}} for all my
                    culinary needs. Their wide selection of spices, rice, and
                    other essentials is unmatched. The quality is superb, and it
                    elevates my cooking to another level.
                  </p>
                  <div class="testimonial__area-item-reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Get In Touch Start End -->
    <!-- Get In Touch Start End -->
    @include('includes.contact-us')
    <!-- Get In Touch Area End -->
    <!-- Get In Touch Area End -->
    <!-- Emargency Help Area Start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-5"></div>
            <div class="col-xl-7">
                <div class="help__area">
                    <div class="help__area-item">
                        <div class="help__area-item-icon icon-animation">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="help__area-item-info">
                            <span class="text-three">Emargency Help</span>
                            <h5 class="my-head"><a
                                    href="tel:{{ config('details.phone') }}">{{ config('details.phone') }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="help__area-item">
                        <div class="help__area-item-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="help__area-item-info">
                            <span class="text-three">Email drop Us</span>
                            <h5 class="my-head"><a
                                    href="mailto:{{ config('details.email') }}">{{ config('details.email') }}
                                </a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
