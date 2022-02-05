@extends('layouts/main')

@section('title')
    Menu
@endsection

@section('content')

        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Our Food Menu</h4>
                    <h2>Experience The Taste <br>of Italian Food.</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="food-menu bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="row">
                    @forelse($product as $item)
                        <div class="col-lg-4 col-sm-6 padding-15">
                            <div class="product-item">
                            <div class="sale">-{{ $item->discount }}%</div>
                                <div class="product-thumb">
                                    <img src="{{ $item->image }}" alt="food">
                                    <div><a href="{{ route('shopDetailes', $item->id) }}" class="order-btn">Order Now</a></div>
                                </div>
                                <div class="food-info">
                                <ul class="ratting">
                                    <li>{{ $item->category->name }}</li>
                                    <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                </ul>
                                    <h3>{{ $item->name }}</h3>
                                    <div class="price">
                                        <h4>Price: <span>${{ $item->price }}</span> <span class="reguler">${{ $item->old_price }}</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">Menu yo`q</div>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center mt-5">
                    {{$product->links()}}
                </div>
                <!-- <ul class="pagination-wrap text-center mt-30">
                    <li><a href="food-menu.html#"><i class="las la-arrow-left"></i></a></li>
                    <li><a href="food-menu.html#">1</a></li>
                    <li><a href="food-menu.html#" class="active">2</a></li>
                    <li><a href="food-menu.html#">3</a></li>
                    <li><a href="food-menu.html#"><i class="las la-arrow-right"></i></a></li>
                </ul> -->
            </div>
        </section>
@endsection