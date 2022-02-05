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
                            @forelse($searchBlogs as $item)
                                <div class="col-md-6 padding-15">
                                    <div class="post-card">
                                        <div class="post-thumb">
                                            <img src="{{ $item->image }}" alt="img">
                                            <div class="category"><a href="#">{{ $item->category->name }}</a></div>
                                        </div>
                                        <div class="post-content">
                                            <ul class="post-meta">
                                            <li><i class="far fa-calendar-alt"></i><a href="#">{{ $item->date }}</a></li>
                                            <li><i class="far fa-user"></i><a href="#">{{ $item->author->name }}</a></li>
                                            </ul>
                                            <h3><a href="#">{{ $item->food_name }}</a></h3>
                                            <p>{{ $item->short_description }}...</p>
                                            <a href="{{ route('blogFull', $item->id) }}" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">Blog yo`q</div>
                            @endforelse
                        </div>
                        <div class="mt-5">
                            {{$searchBlogs->links()}}
                        </div>
                    </div><!--/. col-lg-8 -->
                    <div class="col-lg-4 sm-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget">
                                <form class="search-form">
                                    <input type="text" class="form-control" name="name" placeholder="Search">
                                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!--/.search-form-->
                            <div class="sidebar-widget">
                                <div class="widget-tittle">
                                   <h2>Categories</h2>
                                   <span></span>
                                </div>
                                <ul class="categories">
                                    @forelse($blogCount as $item)
                                        <li><a href="#">{{ $item->name }}<span>{{ $item->blog_count }}</span></a></li>
                                    @empty
                                        <li>Kategoriya yo`q</li>
                                    @endforelse
                                </ul>
                            </div><!--/. categories-->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Follow Us</h2>
                                   <span></span>
                                </div>
                                <ul class="social-widget">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a class="instagram" href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                                    <li><a class="pinterest" href="#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                                    <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
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
                                    <h2>Tags</h2>
                                    <span></span>
                                </div>
                                <ul class="tags">
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">marketing</a></li>
                                    <li><a href="#">startup</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">consulting</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">tips</a></li>
                                    <li><a href="#">strategy</a></li>
                                    <li><a href="#">Seo</a></li>
                                </ul>
                            </div><!--/.tags -->
                        </div>
                    </div><!--/. col-lg-4 -->
                </div>
            </div>
        </section><!--/. blog-section -->

@endsection
