@extends('layouts/main')

@section('title')
    Cart
@endsection

@section('content')

        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Cart Page</h4>
                    <h2>Your Order Page</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->
        
        <section class="cart-section bg-grey padding">
            <div class="container">
                <div class="row cart-header">
                    <div class="col-lg-6">Product</div>
                    <div class="col-lg-3">Quantity</div>
                    <div class="col-lg-1">Price</div>
                    <div class="col-lg-1">Total</div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row cart-body pb-30">
                    <div class="col-lg-6">
                        <div class="cart-item">
                            <img src="assets/img/food01.png" alt="food">
                            <div class="cart-content">
                                <h3><a href="shop-details.html">Fried Chicken Unlimited</a></h3>
                                <p>Food is any substance consumed to provide nutritional support for an organism.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3">
                        <div class="cart-item">
                            <input type="number" value="1" min="1" max="10">
                        </div>
                    </div>
                    <div class="col-3 col-lg-1">
                        <div class="cart-item">
                            <p>$14.00</p>
                        </div>
                    </div>
                    <div class="col-3 col-lg-1">
                        <div class="cart-item">
                            <p>$14.00</p>
                        </div>
                    </div>
                    <div class="col-2 col-lg-1">
                        <div class="cart-item">
                            <a class="remove" href="cart.html#"><i class="las la-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row cart-body pb-30">
                    <div class="col-lg-6">
                        <div class="cart-item">
                            <img src="assets/img/food02.png" alt="food">
                            <div class="cart-content">
                                <h3><a href="shop-details.html">Burger King Whopper</a></h3>
                                <p>Food is any substance consumed to provide nutritional support for an organism.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3">
                        <div class="cart-item">
                            <input type="number" value="1" min="1" max="10">
                        </div>
                    </div>
                    <div class="col-3 col-lg-1">
                        <div class="cart-item">
                            <p>$16.00</p>
                        </div>
                    </div>
                    <div class="col-3 col-lg-1">
                        <div class="cart-item">
                            <p>$16.00</p>
                        </div>
                    </div>
                    <div class="col-2 col-lg-1">
                        <div class="cart-item">
                            <a class="remove" href="cart.html#"><i class="las la-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row cart-body">
                    <div class="col-lg-6">
                        <div class="cart-item">
                            <img src="assets/img/food03.png" alt="food">
                            <div class="cart-content">
                                <h3><a href="shop-details.html">White Castle Pizzas</a></h3>
                                <p>Food is any substance consumed to provide nutritional support for an organism.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3">
                        <div class="cart-item">
                            <input type="number" value="1" min="1" max="10">
                        </div>
                    </div>
                    <div class="col-3 col-lg-1">
                        <div class="cart-item">
                            <p>$18.00</p>
                        </div>
                    </div>
                    <div class="col-3 col-lg-1">
                        <div class="cart-item">
                            <p>$18.00</p>
                        </div>
                    </div>
                    <div class="col-2 col-lg-1">
                        <div class="cart-item">
                            <a class="remove" href="cart.html#"><i class="las la-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <ul class="cart-total mt-30">
                            <li><span>Subtotal:</span>$32.99</li>
                            <li><span>Estimated shipping:</span>$50</li>
                            <li><span>Total:</span>$37.99</li>
                            <li><a href="/menu">Continue Shopping</a><a href="/checkout" class="default-btn">Checkout <span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--/.cart-section-->

@endsection
