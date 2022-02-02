@extends('layouts/main')

@section('title')
    Contact
@endsection

@section('content')

        <div class="map-wrapper pt-90">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95544.96081701458!2d60.553033702260386!3d41.55235990014622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfc9284eafb523%3A0xffaf4382f65d7b61!2z0KPRgNCz0LXQvdGH!5e0!3m2!1sru!2s!4v1643524422196!5m2!1sru!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div><!-- /#google-map -->

        <section class="contact-section padding">
            <div class="bg-shape grey"></div>
           <div class="map"></div>
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-md-6">
                        <div class="contact-details-wrap">
                            <div class="contact-title">
                                <h2>Do You Have Any Questions? <span></span></h2>
                                <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                            </div>
                           <ul class="contact-details">
                                <li><i class="fas fa-map-marker-alt"></i>962 Fifth Avenue,<br> New York, NY10022</li>
                                <li><i class="fas fa-envelope"></i>hello@themeaster.net <br>Yourmail@gmail.com</li>
                                <li><i class="fas fa-phone"></i>(+123) 456 789 101 <br>+1-302-123-4567</li>
                            </ul>
                        </div>
                   </div>
                    <div class="col-md-6">
                        @include('includes/error_messages')
                        <div class="contact-form">
                            <form action="{{ route('admin/contact/store') }}" method="POST" class="form-horizontal">
                                @csrf @method('POST')
                                <div class="contact-title">
                                    <h2>Drop Us A Line <span></span></h2>
                                </div>
                               <div class="contact-form-group">
                                   <div class="form-field">
                                       <input type="text" name="f_name" class="form-control" placeholder="First Name" required>
                                   </div>
                                   <div class="form-field">
                                       <input type="text" name="l_name" class="form-control" placeholder="Last Name" required>
                                   </div>
                                   <div class="form-field">
                                       <input type="email" name="email" class="form-control" placeholder="Email" required>
                                   </div>
                                   <div class="form-field">
                                       <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                   </div>
                                   <div class="form-field message">
                                       <textarea name="message" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                                   </div>
                                   <div class="form-field">
                                       <button class="default-btn" type="submit">Send Massage<span></span></button>
                                   </div>
                                </div>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.contact-section-->

        <section class="branches-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row branches-lists">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                       <div class="branches-list">
                           <h3>Sydney (Head Office)</h3>
                           <ul>
                               <li>1 Epping Road</li>
                               <li>North Ryde, NSW 2113</li>
                               <li><a href="contact.html#">+61 2 9870 7689</a></li>
                               <li><a href="contact.html#">email@example.com</a></li>
                            </ul>
                       </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="branches-list">
                            <h3>Brisbane</h3>
                          <ul>
                               <li>1 Epping Road</li>
                               <li>North Ryde, NSW 2113</li>
                               <li><a href="contact.html#">+61 2 9870 7689</a></li>
                               <li><a href="contact.html#">email@example.com</a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="branches-list">
                           <h3>Hobart</h3>
                           <ul>
                               <li>1 Epping Road</li>
                               <li>North Ryde, NSW 2113</li>
                               <li><a href="contact.html#">+61 2 9870 7689</a></li>
                               <li><a href="contact.html#">email@example.com</a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="branches-list">
                           <h3>Melbourne</h3>
                           <ul>
                               <li>1 Epping Road</li>
                               <li>North Ryde, NSW 2113</li>
                               <li><a href="contact.html#">+61 2 9870 7689</a></li>
                               <li><a href="contact.html#">email@example.com</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.branches-section-->

@endsection