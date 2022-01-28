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
                        <div class="booking-form">
                            <h3>Book a Table <span></span></h3>
                            <form action="https://html.dynamiclayers.net/te/caferio/booking-form.php" method="post" id="ajax_booking_form" class="form-horizontal">
                                <div class="booking-form-group">
                                    <div class="form-padding">
                                        <input type="text" id="b_name" name="b_name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-padding">
                                        <input type="email" id="b_email" name="b_email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-padding">
                                        <select class="form-select" id="b_person" name="b_person">
                                          <option selected>Person</option>
                                          <option>2 Person</option>
                                          <option>3 Person</option>
                                          <option>4 Person</option>
                                          <option>5 Person</option>
                                        </select>
                                    </div>
                                    <div class="form-padding">
                                        <input class="form-control" type="date" id="b_date" name="b_date">
                                    </div>
                                    <div class="form-padding">
                                        <textarea id="b_message" name="b_message" cols="30" rows="6" class="form-control message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <button id="b_submit" class="book-btn" type="submit">Book a Table</button>
                                <div id="b-form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.booking-section-->

@endsection