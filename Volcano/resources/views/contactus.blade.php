@extends('layouts.app')
@section('content')


<section class="bg-cover pageHeader" style="background:url(images/bg-image/hero-bg40.jpg) no-repeat;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center py-5 mt-3 mb-3">
                    <h1 class="ft-medium mb-3">Contact Us</h1>
                    <ul class="shop_categories_list m-0 p-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" bg-white builder-bg contact-form-style6 xs-padding-0px-tb border-none" style="padding-bottom: 0">
    <div class="container">

        <div class="row four-column equalize xs-equalize-auto">

            <div
                class="col-md-3 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-fifteen-bottom text-center sm-clear-both">
                <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                    <i class="fa ti-location-pin text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                    <h3
                        class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                        Address</h3>
                    <div class="feature-text text-medium center-col tz-text">9 El-Mohandes Mohammed Hasan Helmy,
                        Agouza, Giza</div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-fifteen-bottom text-center">
                <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                    <i class="fa ti-mobile text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                    <h3
                        class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                        Call Us Today!</h3>
                    <div class="feature-text text-medium center-col tz-text">+20 103 333 1050</div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-fifteen-bottom sm-clear-both">
                <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                    <i class="fa ti-email text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                    <h3
                        class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                        Email</h3>
                    <div class="feature-text text-medium center-col"><a class="tz-text"
                            href="mailto:info@volcano-ads.com">info@volcano-ads.com</a></div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                    <i class="fa ti-time text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                    <h3
                        class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                        Working Hours</h3>
                    <div class="feature-text text-medium center-col tz-text">Mon to Sat - 9 AM to 11 PM<br>Sunday
                        10 AM to 6 PM</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======================= Contact Page Detail ======================== -->
<section class="middle contatcUsPage">
    <div class="container">



        <div class="row align-items-start justify-content-center">


            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <form class="row">


                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font xs-margin-fifteen-bottom tz-text"
                            style="margin-bottom: 40px">ANY QUESTIONS?</h2>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12">
                        <div class="form-group">
                            <label class=" text-dark ">First Name *</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12">
                        <div class="form-group">
                            <label class=" text-dark ">Last Name *</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-xs-12">
                        <div class="form-group">
                            <label class=" text-dark ">Your Email *</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12">
                        <div class="form-group">
                            <label class=" text-dark ">Phone *</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class=" text-dark ">Subject</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class=" text-dark ">Message</label>
                            <textarea class="form-control ht-80"></textarea>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-dark">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!-- ======================= Contact Page End ======================== -->


<div class="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe>
</div>
@endsection
