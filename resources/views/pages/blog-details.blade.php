@extends('layouts/main')

@section('title')
    Blog-full
@endsection

@section('content')
        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Blog Details</h4>
                    <h2>Beet and Tasty Burrata<br>Salad with Fried.</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="blog-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row blog-posts">
                    <div class="col-lg-8 col-md-12 sm-padding">
                        <div class="row single-layout">
                            <div class="col-lg-12 sm-padding">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{ $item->image }}" alt="img">
                                        <div class="category"><a href="#">{{ $item->category->name }}</a></div>
                                    </div>
                                    <div class="post-content">
                                        <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="#">{{ $item->date }}</a></li>
                                           <li><i class="far fa-user"></i><a href="#">{{ $item->author->name }}</a></li>
                                           <li><i class="far fa-comments"></i><a href="#">5 Comments</a></li>
                                        </ul>
                                        <h3><a href="#">{{ $item->food_name }}</a></h3>
                                        <p>{{ $item->short_description }}</p>
                                        <p>{{ $item->full_description }}</p>
                                        <ul class="single-post-list">
                                            <h4>Method of cooking:</h4>
                                            <li><i class="fas fa-check"></i>The new functions coming to construction for equipment mathematics.</li>
                                            <li><i class="fas fa-check"></i>Initially their main objective was to ensure the service.</li>
                                            <li><i class="fas fa-check"></i>transformation on the horizon is one where advanced streams</li>
                                            <li><i class="fas fa-check"></i>What all matters are how your hybrid mobile application.</li>
                                            <li><i class="fas fa-check"></i>There are some big shifts taking place in the field of construction.</li>
                                        </ul>
                                        <ul class="single-post-gallery">
                                            <li><img src="{{ $item->image }}" alt="img"></li>
                                            <li><img src="{{ $item->image }}" alt="img"></li>
                                        </ul>
                                        <p>There are some big shifts taking place in the field of construction equipment mathematics. Starting with the integration of mathematics devices in vehicles right from the manufacturers, to the standardization and integration of mathematics data across various business functions, the future of mathematics has never seemed so full of potential for fleet-based businesses.</p>
                                        <blockquote>
                                            There are no secrets to success. It is the result preparation, hard work and learning from failure.<span>- Winston Churchill.</span>
                                        </blockquote>
                                        <p>Another speaker, John Meuse, senior director of heavy equipment at Waste Management Inc., echoed this, citing a cost-saving of $17,000 for the company when it cut idling time of a single Caterpillar 966 wheel loader.</p>
                                        <ul class="tags">
                                            <li><a href="#">business</a></li>
                                            <li><a href="#">marketing</a></li>
                                            <li><a href="#">startup</a></li>
                                            <li><a href="#">design</a></li>
                                            <li><a href="#">consulting</a></li>
                                        </ul>
                                        <div class="author-box">
                                            <img src="{{ $item->image }}" alt="img">
                                            <div class="author-info">
                                                <h4>S M Mostain Billah</h4>
                                                <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
                                            </div>
                                        </div><!--/.author-box -->
                                        <div class="post-navigation">
                                            <div class="nav prev" style="background-image: url(assets/img/post-1.jpg);">
                                                <h4><a href="blog-details.html#"><span><i class="las la-arrow-left"></i>Previous</span>How to go about initiating an startup in few days.</a></h4>
                                            </div>
                                            <div class="nav next" style="background-image: url(assets/img/post-2.jpg);">
                                                <h4><a href="blog-details.html#"><span>Next<i class="las la-arrow-right"></i></span>How to go about initiating an startup in few days.</a></h4>
                                            </div>
                                        </div><!--/.post-navigation -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="single-post-tittle">Posts Comments <span></span></h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="{{ asset('assets/img/comment-1.png') }}" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Jhon Castellon <span class="comments-date">jan 05, 2022 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="blog-details.html#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-thumb">
                                                        <div class="comment-img"><img src="{{ asset('assets/img/comment-2.png') }}" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>José Carpio <span class="comments-date">jan 15, 2022 at 8:00</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href="blog-details.html#"><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment">
                                        <div>
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="{{ asset('assets/img/comment-4.png') }}" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Kyle Frederick <span class="comments-date">jan 02, 2022 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="blog-details.html#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div> <!--/.comments-area -->
                        <div class="comment-respond">
                            <h3 class="single-post-tittle">Write a Comment <span></span></h3>
                            <form method="post" id="commentform" class="comment-form">
                                <div class="form-textarea">
                                    <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                </div>
                                <div class="form-inputs">
                                    <input placeholder="Website" type="url">
                                    <input placeholder="Name" type="text">
                                    <input placeholder="Email" type="email">
                                </div>
                                <div class="form-submit">
                                    <input id="submit" value="Post Comment" type="submit">
                                </div>
                            </form>
                        </div>
                    </div><!--/. col-lg-8 -->
                    <div class="col-lg-4 col-md-12 sm-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget">
                                <div class="about-widget">
                                    <img src="{{ asset('assets/img/blog-single-author.png') }}" alt="img">
                                    <p>Small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    <h3>Kyle Frederick</h3>
                                </div>
                            </div><!--/. about-widget-->
                            <div class="sidebar-widget">
                                <div class="widget-tittle">
                                   <h2>Categories</h2>
                                   <span></span>
                                </div>
                                <ul class="categories">
                                    @forelse($blogCount as $item)
                                        <li><a href="#">{{ $item->name }}<span>{{ $item->blog_count }}</span></a></li>
                                    @empty
                                        <li>Categoriya yo`q</li>
                                    @endforelse
                                </ul>
                            </div><!--/. categories-->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Follow Us</h2>
                                   <span></span>
                                </div>
                                <ul class="social-widget">
                                    <li><a class="facebook" href="blog-details.html#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a class="twitter" href="blog-details.html#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a class="instagram" href="blog-details.html#"><i class="fab fa-instagram"></i>Instagram</a></li>
                                    <li><a class="pinterest" href="blog-details.html#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                                    <li><a class="dribbble" href="blog-details.html#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                    <li><a class="linkedin" href="blog-details.html#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Recent Articles</h2>
                                   <span></span>
                                </div>
                                <ul class="recent-post">
                                    @forelse($last_blogs as $item)
                                        <li>
                                            <div class="thumb">
                                                <img src="{{ $item->image }}" alt="thumb">
                                            </div>
                                            <div class="recent-post-meta">
                                                <h3><a href="#">{{ $item->food_name }}</a></h3>
                                                <a href="#" class="date"><i class="far fa-calendar-alt"></i>{{ $item->date }}</a>
                                            </div>
                                        </li>
                                    @empty
                                        <li>Blog yo`q</li>
                                    @endforelse
                                </ul>
                            </div><!--/.recent-posts -->
                            <div class="sidebar-widget">
                                <div class="widget-tittle">
                                   <h2>Archives</h2>
                                   <span></span>
                                </div>
                                <ul class="categories archive">
                                    <li><a href="blog-details.html#">January<span>2022</span></a></li>
                                    <li><a href="blog-details.html#">February<span>2022</span></a></li>
                                    <li><a href="blog-details.html#">March<span>2019</span></a></li>
                                    <li><a href="blog-details.html#">April<span>2018</span></a></li>
                                    <li><a href="blog-details.html#">September<span>2022</span></a></li>
                                </ul>
                            </div><!--/. archives-->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                    <h2>Tags</h2>
                                    <span></span>
                                </div>
                                <ul class="tags">
                                    <li><a href="blog-details.html#">business</a></li>
                                    <li><a href="blog-details.html#">marketing</a></li>
                                    <li><a href="blog-details.html#">startup</a></li>
                                    <li><a href="blog-details.html#">design</a></li>
                                    <li><a href="blog-details.html#">consulting</a></li>
                                    <li><a href="blog-details.html#">development</a></li>
                                    <li><a href="blog-details.html#">tips</a></li>
                                    <li><a href="blog-details.html#">strategy</a></li>
                                    <li><a href="blog-details.html#">Seo</a></li>
                                </ul>
                            </div><!--/.tags -->
                        </div>
                    </div><!--/. col-lg-4 -->
                </div>
            </div>
        </section><!--/. blog-section -->

@endsection