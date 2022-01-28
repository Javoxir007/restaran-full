@extends('layouts/main')

@section('title')
    Home
@endsection

@section('content')

        <section class="hero-section">
            <div class="container">
               <div class="hero-img wow fadeInRight" data-wow-delay="400ms">
                    <img src="assets/img/pizza.png" alt="pizza">
                    <div class="sale">
                       <div>
                           <h4>Get Up To</h4>
                            <h2><span>50%</span>Off Now</h2>
                        </div>
                    </div>
               </div>
                <div class="hero-content wow fadeInLeft" data-wow-delay="200ms">
                    <h3>Free Home Delivery 24 Hours</h3>
                    <h1>Best Italian <br> Pizza In<span> Town!</span></h1>
                    <ul class="hero-list">
                        <li><i class="fas fa-check"></i>Hot &amp; Spicy</li>
                        <li><i class="fas fa-check"></i>100% Fresh</li>
                        <li><i class="fas fa-check"></i>Fast Delivery</li>
                    </ul>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                    <a href="shop.html" class="default-btn"><i class="fas fa-shopping-cart"></i>Order Now <span></span></a>
                </div>
            </div>
        </section><!--/.hero-section-->

        <section class="about-section padding">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                       <div id="gallery-videos-demo" class="content-img-holder">
                          <img src="assets/img/about02.png" alt="img">
                           <a class="play-btn video-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tpSw_nu_kQw">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </a>
                       </div>
                   </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="about-info">
                            <h2 class="mb-20">Caferio, Burgers, And <br>Best Pizzas <span>in Town!</span></h2>
                            <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                            <p>Food is any substance consumed to provide nutritional support for an organism. Everyone just loves italian foods, because its delicious.</p>
                            <a href="/shopDetailes" class="default-btn">Order Now <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.about-section-->

        <section class="food-menu bg-grey padding">
            <div class="container">
                <div class="heading-wrap">
                    <div class="section-heading mb-30">
                        <h4>Popular Dishes</h4>
                        <h2>Our Delicious <span>Foods</span></h2>
                        <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                    </div>
                    <div>
                        <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                        <a href="/menu" class="default-btn"><i class="fas fa-utensils"></i>Full Menu <span></span></a>
                    </div>
                </div>
                <div class="nav-outside">
                  <div class="food-carousel swiper-container nav-visible">
                       <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-item">
                                   <div class="sale">-15%</div>
                                    <div class="product-thumb">
                                        <img src="assets/img/food01.png" alt="food">
                                        <div><a href="/shopDetailes" class="order-btn">Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Chicken</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>Fried Chicken Unlimited</h3>
                                        <div class="price">
                                            <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="sale">-10%</div>
                                    <div class="product-thumb">
                                        <img src="assets/img/food02.png" alt="food">
                                        <div><a href="shop-details.html" class="order-btn">Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Noddles</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>Burger King Whopper</h3>
                                        <div class="price">
                                            <h4>Price: <span>$29.00</span> <span class="reguler">$39.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="sale">-25%</div>
                                    <div class="product-thumb">
                                        <img src="assets/img/food03.png" alt="food">
                                        <div><a href="shop-details.html" class="order-btn">Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Pizzas</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>White Castle Pizzas</h3>
                                        <div class="price">
                                            <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="sale">-20%</div>
                                    <div class="product-thumb">
                                        <img src="assets/img/food04.png" alt="food">
                                        <div><a href="shop-details.html" class="order-btn">Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Burrito</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>Bell Burrito Supreme</h3>
                                        <div class="price">
                                            <h4>Price: <span>$59.00</span> <span class="reguler">$69.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dl-slider-controls style-2">
                            <div class="dl-slider-button-prev"><i class="las la-arrow-left"></i></div>
                            <div class="dl-swiper-pagination"></div>
                            <div class="dl-slider-button-next"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="carousel-preloader"><div class="dot-flashing"></div></div>
                   </div>
                </div>
            </div>
        </section><!--/.food-menu-->

        <section class="content-section delivery">
            <div class="bg-shape white"></div>
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="content-info">
                            <h2>A Moments Of Delivered <br> On <span>Right Time</span> &amp; Place</h2>
                            <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                            <div class="order-content">
                               <a href="shop.html" class="default-btn">Order Now <span></span></a>
                                <h3><span>Order Number</span>012-345-6789</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delivery-girl">
                            <img src="assets/img/delivery-girl.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.content-section-->

        <section class="team-section padding">
           <div class="bg-shape grey"></div>
            <div class="container">
                <div class="section-heading mb-30 text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Team Mebmers</h4>
                    <h2>Our Expart <span>Chefs</span></h2>
                    <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team-01.jpg" alt="team">
                                <ul class="team-social">
                                    <li><a href="index-2.html#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <div class="team-shape"></div>
                                <div class="inner">
                                    <h3>Charles Richard</h3>
                                    <h4>Executive Chef</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team-02.jpg" alt="team">
                                <ul class="team-social">
                                    <li><a href="index-2.html#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <div class="team-shape"></div>
                                <div class="inner">
                                    <h3>Robert William</h3>
                                    <h4>Head Chef</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="600ms">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team-03.jpg" alt="team">
                                <ul class="team-social">
                                    <li><a href="index-2.html#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <div class="team-shape"></div>
                                <div class="inner">
                                    <h3>Thomas Josef</h3>
                                    <h4>Junior Chef</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="800ms">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team-04.jpg" alt="team">
                                <ul class="team-social">
                                    <li><a href="index-2.html#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="index-2.html#"><i class="lab la-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <div class="team-shape"></div>
                                <div class="inner">
                                    <h3>Mike Albatson</h3>
                                    <h4>Kitchen Porter</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.team-section-->

        <section class="testimonial-section bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="section-heading mb-30 text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Testimonials</h4>
                    <h2>Our Customers <span>Reviews</span></h2>
                    <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                </div>
                <div class="nav-outside">
                  <div class="testimonial-carousel swiper-container nav-visible">
                       <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testi-thumb">
                                        <img src="assets/img/testi01.jpg" alt="img">
                                        <div class="author">
                                            <h3>Robert William</h3>
                                            <h4>CEO Kingfisher</h4>
                                        </div>
                                    </div>
                                    <p> "I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testi-thumb">
                                        <img src="assets/img/testi02.jpg" alt="img">
                                        <div class="author">
                                            <h3>Thomas Josef</h3>
                                            <h4>CEO Getforce</h4>
                                        </div>
                                    </div>
                                    <p> "I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testi-thumb">
                                        <img src="assets/img/testi03.jpg" alt="img">
                                        <div class="author">
                                            <h3>Charles Richard</h3>
                                            <h4>CEO Angela</h4>
                                        </div>
                                    </div>
                                    <p> "I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dl-slider-controls style-2">
                            <div class="dl-slider-button-prev"><i class="las la-arrow-left"></i></div>
                            <div class="dl-swiper-pagination"></div>
                            <div class="dl-slider-button-next"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="carousel-preloader"><div class="dot-flashing"></div></div>
                   </div>
                </div>
            </div>
        </section><!--/.testimonial-section-->

        <section class="banner-section padding">
           <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row banner-wrapper">
                   <div class="col-md-6 wow fadeInUp" data-wow-delay="200ms">
                       <div class="banner-item">
                            <img src="assets/img/banner01.jpg" alt="banner">
                            <div class="banner-content">
                                <h3>-50% Off Now!</h3>
                                <h2>Discount For Delicious <br>Tasty Burgers!</h2>
                                <p>Sale off 50% only this week</p>
                                <a href="shop.html" class="order-btn">Order Now</a>
                            </div>
                        </div>
                   </div>
                    <div class="col-md-6">
                       <div class="row">
                           <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
                               <div class="banner-item">
                                    <img src="assets/img/banner02.jpg" alt="banner">
                                    <div class="banner-content">
                                        <h3>Delicious <br> Pizza</h3>
                                        <p>50% off Now</p>
                                        <a href="shop.html" class="order-btn">Order Now</a>
                                    </div>
                                </div>
                           </div>
                           <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms">
                               <div class="banner-item">
                                    <img src="assets/img/banner03.jpg" alt="banner">
                                    <div class="banner-content">
                                        <h3>American <br>Burgers</h3>
                                        <p>50% off Now</p>
                                        <a href="shop.html" class="order-btn">Order Now</a>
                                    </div>
                                </div>
                           </div>
                           <div class="col-md-12 wow fadeInUp" data-wow-delay="800ms">
                               <div class="banner-item">
                                    <img src="assets/img/banner04.jpg" alt="banner">
                                    <div class="banner-content">
                                        <h3>Tasty Buzzed <br>Pizza</h3>
                                        <p>Sale off 50% only this week</p>
                                        <a href="shop.html" class="order-btn">Order Now</a>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </section><!--/.banner-section-->

        <section class="blog-section bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="section-heading mb-30 text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Latest Blog Posts</h4>
                    <h2>This Is All About <span>Foods</span></h2>
                    <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                </div>
                <div class="row blog-posts">
                    <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="assets/img/post-1.jpg" alt="img">
                                <div class="category"><a href="index-2.html#">Pizza</a></div>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                   <li><i class="far fa-calendar-alt"></i><a href="index-2.html#">Jan 01 2021</a></li>
                                   <li><i class="far fa-user"></i><a href="index-2.html#">Jonathan Smith</a></li>
                                </ul>
                                <h3><a href="blog-details.html">What Do You Think About Cheese Pizza Recipes?</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="assets/img/post-2.jpg" alt="img">
                                <div class="category"><a href="index-2.html#">Burger</a></div>
                            </div>
                            <div class="post-content">
                               <ul class="post-meta">
                                   <li><i class="far fa-calendar-alt"></i><a href="index-2.html#">Jan 01 2021</a></li>
                                   <li><i class="far fa-user"></i><a href="index-2.html#">Jonathan Smith</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Making Chicken Strips With New Delicious Ingridents.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="600ms">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="assets/img/post-3.jpg" alt="img">
                                <div class="category"><a href="index-2.html#">Chicken</a></div>
                            </div>
                            <div class="post-content">
                               <ul class="post-meta">
                                   <li><i class="far fa-calendar-alt"></i><a href="index-2.html#">Jan 01 2021</a></li>
                                   <li><i class="far fa-user"></i><a href="index-2.html#">Jonathan Smith</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Innovative Hot Chessyraw Pasta Make Creator Fact.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.blog-section -->

@endsection
