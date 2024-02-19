@extends('layouts.app')

@section('content')
    <section class="bg-cover pageHeader" style="background:url(images/bg-image/hero-bg40.jpg) no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center py-5 mt-3 mb-3">
                        <h1 class="ft-medium mb-3">About Us</h1>
                        <ul class="shop_categories_list m-0 p-0">
                            <li><a href="index.html">Home</a></li>
                            <li><a>About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-50px-tb xs-padding-50px-tb bg-sand-yellow builder-bg border-none" id="content-section13">
        <div class="container">
            <div class="row equalize xs-equalize-auto equalize-display-inherit">
                <div class="col-md-6 col-sm-6 xs-12 xs-text-center display-table">
                    <div class="display-table-cell-vertical-middle">
                        <img alt="" src="{{ asset('images/content-50.jpg') }}">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 xs-12 xs-text-center xs-margin-nineteen-bottom display-table">
                    <div class="display-table-cell-vertical-middle">
                        <h2
                            class="alt-font title-extra-large sm-title-large xs-section-title-large text-dark-gray line-height-40 width-90 sm-width-100 margin-eight-bottom tz-text sm-margin-ten-bottom sm-margin-ten-top">
                            WHO WE ARE</h2>
                        <div class="text-extra-large tz-text width-90 sm-width-100 margin-five-bottom sm-margin-ten-bottom">
                            VOLCANO advertising agency is a full-service billboard advertising company works in Egypt.
                            We specialize in providing premium advertising solutions through our wide range network of
                            billboards strategically located in the most important areas of the country, particularly in
                            the North Coast region.</div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======================= About Us Detail ======================== -->
    <section class="middle">
        <div class="container">
            {{-- @foreach ($aboutus as $about)
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="abt_caption">
                        <h2 class="ft-medium mb-4">{{$about->title}}</h2>
                        <p class="mb-4">{{$about->description}}.</p>


                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="abt_caption">
                        <img src="{{ asset('storage/' . $about->client_image) }}" class="img-fluid rounded" />
                    </div>
                </div>

            </div>
            @endforeach --}}
        </div>
    </section>
    <!-- ======================= About Us End ======================== -->

    <!-- ======================= About Us Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="abt_caption">
                        <img src="{{ asset('img/about-2.png') }}" class="img-fluid rounded" />
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="abt_caption">
                        <h2 class="ft-medium mb-4">OUR MISSION</h2>
                        <p class="mb-4">WE WANT TO HELP BUSINESSES GROW UP BY PROVIDING THEM WITH THE PERFECT
                            PLATFORM TO SHOWCASE THEIR BRAND TO A DIVERSE AUDIENCE. WITH OUR PRIME LOCATIONS IN THE
                            NORTH COAST, WE OFFER AN INCREDIBLE OPPORTUNITY TO REACH A WIDE RANGE OF POTENTIAL
                            CUSTOMERS.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= About Us End ======================== -->

    <section id="destination" class="padding-60px-tb bg-white builder-bg clients-section2 xs-padding-60px-tb">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font  xs-margin-nineteen-bottom tz-text"
                        style="margin-bottom: 35px">OUR CLIENTS</h2>
                </div>

            </div>
            <div class="row">
                <!-- clients logo -->
                <div
                    class="owl-slider-style4 owl-carousel owl-theme owl-no-pagination owl-dark-pagination outside-arrow-simple black-pagination sm-no-owl-buttons sm-show-pagination owl-pagination-bottom">
                    <!-- client logo image -->
                    @foreach($aboutus as $about)
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('storage/' . $about->client_image) }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- end client logo image -->
                    <!-- client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/10.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/11.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/12.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/2.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/3.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/4.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/5.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/6.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/7.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/8.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/logos/9.png') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                </div>
                <!-- end clients logo -->
            </div>
        </div>
    </section>
@endsection
