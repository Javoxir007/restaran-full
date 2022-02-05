@extends('layouts/main')

@section('title')
    Shop-Detailes
@endsection

@section('content')

        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Shop</h4>
                    <h2>Online Food Shop</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->
        
        <section class="food-details bg-grey pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 sm-padding product-details-wrap">
                        <div class="food-details-thumb">
                            <img src="{{ $item->image }}" alt="food" width="100%">
                            <a class="img-popup" data-gall="gallery01" href="{{ $item->image }}"><i class="fas fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 sm-padding">
                        <div class="product-details">
                            <div class="product-info">
                                <div class="product-inner">
                                    <ul class="category">
                                       <li><a href="shop-details.html#">{{ $item->category->name }}</a></li>
                                    </ul>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                                <h3>{{ $item->name }}</h3>
                                <h4 class="price">${{ $item->price }} <span>{{ $stock }}</span></h4>
                                <p>{{ $item->description }}</p>
                                
                                <div class="product-btn">
                                    <form>
                                        <input type="number" name="age" id="age"
                                        min="1" max="100" step="1" value="1">
                                    </form>
                                    <div><a href="shop-details.html#" class="purchase-btn">Add To Cart</a></div>
                                </div>
                                <ul class="product-meta">
                                    <li>SKU:<a href="shop-details.html#">ANQ4O6DWDZ</a></li>
                                    <li>Categories:<a href="shop-details.html#">{{ $item->category->name }}</a></li>
                                    <li>Tags:<a href="shop-details.html#">Dress</a> <a href="shop-details.html#">Pants</a></li>
                                </ul>
                                <ul class="social-icon">
                                    <li>Share:</li>
                                    <li><a href="shop-details.html#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="shop-details.html#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="shop-details.html#"><i class="lab la-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--Shop Section-->
        
        <section class="product-description bg-grey padding">
            <div class="container">
                <ul class="nav tab-navigation" id="product-tab-navigation" role="tablist">
                    <li role="presentation">
                        <button class="active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ingredients</button>
                    </li>
                    <li role="presentation">
                        <button id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Additional information</button>
                    </li>
                    <li role="presentation">
                        <button id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Reviews (2)</button>
                    </li>
                </ul>
                <div class="tab-content" id="product-tab-content">
                    <div class="tab-pane fade show active description" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>Lower temperature washes and delicate spin cycles are gentler on garment, helping to maintain the color, shape and structure of the fabric. At the same time it reduces energy consumption that is used in care processes.</p>
                        <ul class="description-meta">
                            <li><span>Model wears:</span> UK 10/ EU 38/ US 6</li>
                            <li><span>Occasion:</span> Lifestyle, Sport</li>
                            <li><span>Country:</span> Italy</li>
                            <li><span>Outer:</span> Leather 100%, Polyamide 100%</li>
                            <li><span>Lining:</span> Polyester 100%</li>
                            <li><span>CounSoletry:</span> Rubber 100%</li>
                        </ul>
                    </div>
                    <div class="tab-pane ad-info fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table product-table">
                            <thead>
                                <tr>
                                    <th scope="col">Size</th>
                                    <th scope="col">Bust</th>
                                    <th scope="col">Waist</th>
                                    <th scope="col">Hip</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>S</td>
                                <td>34 -36</td>
                                <td>28-30</td>
                                <td>38-40</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>36 -38</td>
                                <td>30-32.5</td>
                                <td>40-43</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>38-40</td>
                                <td>32-34.5</td>
                                <td>42-45.5</td>
                            </tr>
                            <tr>
                               <td>XL</td>
                                <td>40-42</td>
                                <td>35-37</td>
                                <td>46-38</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade review" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <ul class="comment-list">
                            <li>
                                <div class="comment-thumb"><img src="assets/img/comment-1.png" alt="img"></div>
                                <div class="comment-text">
                                    <div class="comment-author">
                                        <h3><span>January 5, 2022</span>Elliot Alderson</h3>
                                        <ul class="ratting">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>Our versatile team is built of designers, developers and digital marketers.</p>
                                </div>
                            </li>
                            <li>
                                <div class="comment-thumb"><img src="assets/img/comment-2.png" alt="img"></div>
                                <div class="comment-text">
                                    <div class="comment-author">
                                        <h3><span>January 5, 2022</span>Melania Trump</h3>
                                        <ul class="ratting">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <p>Our versatile team is built of designers, developers and digital marketers.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--Product Description-->
        
@endsection