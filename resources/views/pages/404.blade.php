@extends('layouts/main')

@section('title')
    404 Page Not Found
@endsection

@section('content')

        <section class="page-header">
           <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Oops! Where are we?</h4>
                    <h2>404 Page Not Found!</h2>
                    <p>Page not Found! The page you are looking for was moved, <br> removed, renamed or might never existed.</p>
                    <a href="index.html" class="default-btn mt-20"><i class="las la-hand-point-left"></i>Back to Homepage <span></span></a>
                </div>
            </div>
        </section><!--/.page-header-->

@endsection

        