@extends('layouts/main')

@section('title')
    Checkout
@endsection

@section('content')

        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Checkout</h4>
                    <h2>Your Order Page</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->
        
        <section class="checkout-section bg-grey padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 sm-padding">
                        <form action="checkout.html#" class="checkout-form-wrap">
                            <h2>Billing Details</h2>
                            <div class="checkout-form mb-30">
                                <div class="form-field">
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="companyname" name="companyname" class="form-control" placeholder="Company Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="country" name="country" class="form-control" placeholder="Country" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="city" name="city" class="form-control" placeholder="City" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="state" name="state" class="form-control" placeholder="State / Province" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="street" name="street" class="form-control" placeholder="Street" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="postcode" name="postcode" class="form-control" placeholder="Post Code" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="additional-info mb-30">
                                <h2>Additional Information</h2>
                                <div class="form-field">
                                    <textarea id="message" name="message" cols="30" rows="3" class="form-control" placeholder="Order Note"></textarea>
                                </div>
                            </div>
                            <div class="payment-method">
                                <h2>Payment Method</h2>
                                <ul class="mb-20">
                                    <li>
                                        <input type="radio" id="option-1" name="selector" checked="">
                                        <label for="option-1">Direct Bank Transfer</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="option-2" name="selector">
                                        <label for="option-2">Check Payments</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="option-3" name="selector">
                                        <label for="option-3">Cash On Delivery</label>
                                    </li>
                                </ul>
                                <a href="checkout.html#" class="default-btn">Place Order <span></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 sm-padding">
                        <ul class="cart-total">
                            <li><span>Subtotal:</span>$32.99</li>
                            <li><span>Estimated shipping:</span>$50</li>
                            <li><span>Total:</span>$37.99</li>
                            <li><a href="shop.html">Continue Shopping</a><a href="checkout.html#" class="default-btn">Checkout <span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--/.checkout-section-->

@endsection