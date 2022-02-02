@extends('layouts/main')

@section('title')
    Reservation
@endsection

@section('content')

        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Book Your Table</h4>
                    <h2>Experience The Taste <br>of Italian Food.</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="booking-section bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 sm-padding">
                        <div class="section-heading">
                            <h4>Reservation</h4>
                            <h2>Enjoy Our Tasty Food <br>Reserve <span>Your Table</span></h2>
                            <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                            <a href="reservation.html#" class="default-btn">Contact Us <span></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        @include('includes/error_messages')
                        <div class="booking-form">
                            <h3>Book a Table <span></span></h3>
                            <form action="{{ route('admin/reservation/store') }}" method="POST" class="form-horizontal">
                            @csrf @method('POST')
                                <div class="booking-form-group">
                                    <div class="form-padding">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-padding">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-padding">
                                        <input type="text" name="person" class="form-control" placeholder="Person" required>
                                    </div>
                                    <div class="form-padding">
                                        <input class="form-control" type="date" name="date">
                                    </div>
                                    <div class="form-padding">
                                        <textarea name="message" cols="30" rows="6" class="form-control message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <button class="book-btn" type="submit">Book a Table</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.booking-section-->

@endsection