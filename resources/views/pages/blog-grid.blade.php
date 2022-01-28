@extends('layouts/main')

@section('title')
    Blog
@endsection

@section('content')
        <section class="page-header">
           <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Recent Posts</h4>
                    <h2>Book of Recipes and <br>Cooking Tips!</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="blog-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row blog-posts">
                    <div class="col-lg-8 sm-padding">
                        <div class="row grid-layout">
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="assets/img/post-1.jpg" alt="img">
                                        <div class="category"><a href="blog-grid.html#">Desert</a></div>
                                    </div>
                                    <div class="post-content">
                                        <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="blog-grid.html#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="blog-grid.html#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="blog-grid.html#">Incredible Mac and Cheese.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="/blogFull" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="assets/img/post-2.jpg" alt="img">
                                        <div class="category"><a href="blog-grid.html#">Fish</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="blog-grid.html#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="blog-grid.html#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="blog-grid.html#">Burrata Salad with Fried.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-grid.html#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="assets/img/post-3.jpg" alt="img">
                                        <div class="category"><a href="blog-grid.html#">Chicken</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="blog-grid.html#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="blog-grid.html#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="blog-grid.html#">Chicken Tinga cahos.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-grid.html#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="assets/img/post-4.jpg" alt="img">
                                        <div class="category"><a href="blog-grid.html#">Salad</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="blog-grid.html#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="blog-grid.html#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="blog-grid.html#">Quinoa Sweet Potato Salad.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-grid.html#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="assets/img/post-5.jpg" alt="img">
                                        <div class="category"><a href="blog-grid.html#">Chicken</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="blog-grid.html#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="blog-grid.html#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="blog-grid.html#">Hot Chessyraw Pasta.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-grid.html#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="assets/img/post-6.jpg" alt="img">
                                        <div class="category"><a href="blog-grid.html#">Pizza</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="blog-grid.html#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="blog-grid.html#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="blog-grid.html#">Tasty Cheese Pizza.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-grid.html#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination-wrap text-left mt-30">
                            <li><a href="blog-grid.html#"><i class="las la-arrow-left"></i></a></li>
                            <li><a href="blog-grid.html#">1</a></li>
                            <li><a href="blog-grid.html#" class="active">2</a></li>
                            <li><a href="blog-grid.html#">3</a></li>
                            <li><a href="blog-grid.html#"><i class="las la-arrow-right"></i></a></li>
                        </ul><!--/.pagination -->
                    </div><!--/. col-lg-8 -->
                    <div class="col-lg-4 sm-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget">
                                <form action="blog-grid.html" class="search-form">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!--/.search-form-->
                            <div class="sidebar-widget">
                                <div class="widget-tittle">
                                   <h2>Categories</h2>
                                   <span></span>
                                </div>
                                <ul class="categories">
                                    <li><a href="blog-grid.html#">Burger Strips<span>23</span></a></li>
                                    <li><a href="blog-grid.html#">Catalonian Salad <span>15</span></a></li>
                                    <li><a href="blog-grid.html#">Nicoise Salad <span>05</span></a></li>
                                    <li><a href="blog-grid.html#">Fried Chicjken <span>18</span></a></li>
                                    <li><a href="blog-grid.html#">Spacial Cawmin <span>04</span></a></li>
                                </ul>
                            </div><!--/. categories-->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Follow Us</h2>
                                   <span></span>
                                </div>
                                <ul class="social-widget">
                                    <li><a class="facebook" href="blog-grid.html#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a class="twitter" href="blog-grid.html#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a class="instagram" href="blog-grid.html#"><i class="fab fa-instagram"></i>Instagram</a></li>
                                    <li><a class="pinterest" href="blog-grid.html#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                                    <li><a class="dribbble" href="blog-grid.html#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                    <li><a class="linkedin" href="blog-grid.html#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Recent Articles</h2>
                                   <span></span>
                                </div>
                                <ul class="recent-post">
                                    <li>
                                        <div class="thumb">
                                            <img src="assets/img/post-thumb-1.jpg" alt="thumb">
                                        </div>
                                        <div class="recent-post-meta">
                                            <h3><a href="blog-grid.html#">How to go about initiating an startup in few days.</a></h3>
                                            <a href="blog-grid.html#" class="date"><i class="far fa-calendar-alt"></i>Jan 01 2021</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="assets/img/post-thumb-2.jpg" alt="thumb">
                                        </div>
                                        <div class="recent-post-meta">
                                            <h3><a href="blog-grid.html#">Financial experts support or help you to to find way.</a></h3>
                                            <a href="blog-grid.html#" class="date"><i class="far fa-calendar-alt"></i>Jan 01 2021</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="assets/img/post-thumb-3.jpg" alt="thumb">
                                        </div>
                                        <div class="recent-post-meta">
                                            <h3><a href="blog-grid.html#">Innovative helping your business all over the world.</a></h3>
                                            <a href="blog-grid.html#" class="date"><i class="far fa-calendar-alt"></i>Jan 01 2021</a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--/.recent-posts -->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                    <h2>Tags</h2>
                                    <span></span>
                                </div>
                                <ul class="tags">
                                    <li><a href="blog-grid.html#">business</a></li>
                                    <li><a href="blog-grid.html#">marketing</a></li>
                                    <li><a href="blog-grid.html#">startup</a></li>
                                    <li><a href="blog-grid.html#">design</a></li>
                                    <li><a href="blog-grid.html#">consulting</a></li>
                                    <li><a href="blog-grid.html#">development</a></li>
                                    <li><a href="blog-grid.html#">tips</a></li>
                                    <li><a href="blog-grid.html#">strategy</a></li>
                                    <li><a href="blog-grid.html#">Seo</a></li>
                                </ul>
                            </div><!--/.tags -->
                        </div>
                    </div><!--/. col-lg-4 -->
                </div>
            </div>
        </section><!--/. blog-section -->

@endsection