@extends('layouts.app')
@section('content')
    <section id="home" class="position-relative cover-background tz-builder-bg-image border-none bg-img-one"
        style="background:linear-gradient(rgba(14,15,21,0.55), rgba(14,15,21,0.55)), url('images/bg-image/hero-bg40.jpg')">
        <div class="container one-sixth-screen position-relative">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row">
                <div class="slider-typography text-center xs-position-absolute">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                                <a href="#book" class="inner-link"><img src="{{ asset('images/hero-text.png') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
                                    <section class="padding-110px-tb xs-padding-60px-tb bg-white builder-bg border-none" id="about">
                                        <div class="container">

                                            <div class="row">
                                                <div class="col-lg-7 col-md-9 col-sm-12 col-xs-12 center-col text-center ">
                                                    <span class="text-small text-deep-orange letter-spacing-1 alt-font tz-text margin-three-bottom">MAKE THE JOURNEY FROM A TO Z THE ESSENCE OF YOUR TRIP</span>
                                                    <div class="title-small xs-title-small tz-text font-weight-300"><p class="no-margin-bottom">We prefer to work with locally owned and operated lodging and tour operators. This allows more money to stay inside of local communities and in the hands of people who live in the destinations you visit.</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                -->
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
                            We will helping find the perfect holidays for you!</h2>
                        <div class="text-extra-large tz-text width-90 sm-width-100 margin-five-bottom sm-margin-ten-bottom">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived
                            not only five centuries.</div>
                        <div
                            class="text-medium tz-text width-90 sm-width-100 margin-ten-bottom sm-margin-ten-bottom xs-margin-twenty-bottom">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown
                                printer took a galley of type scrambled it to make a type specimen book. Lorem Ipsum has
                                been the industry's standard dummy text ever since the when an unknown printer took a
                                galley of type scrambled.</p>
                        </div>
                        <a class="btn-medium btn-circle btn border-2-deep-orange btn-border text-deep-orange propClone"
                            href="#"><span class="tz-text">EXPLORE PACKAGES</span><i
                                class="fa fa-long-arrow-right icon-extra-small tz-icon-color"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="destination" class="padding-110px-tb bg-white builder-bg clients-section2 xs-padding-60px-tb">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2
                        class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-thirteen-bottom xs-margin-nineteen-bottom tz-text">
                        CHOOSE YOUR DESTINATION</h2>
                </div>

            </div>
            <div class="row">
                <!-- clients logo -->
                <div
                    class="owl-slider-style4 owl-carousel owl-theme owl-no-pagination owl-dark-pagination outside-arrow-simple black-pagination sm-no-owl-buttons sm-show-pagination owl-pagination-bottom">
                    <!-- client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/clients-4.jpg') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- end client logo image -->
                    <!-- client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/clients-2.jpg') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/clients-1.jpg') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/clients-5.jpg') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                    <!-- end client logo image -->
                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="client-logo-outer">
                                <div class="client-logo-inner"><a href="#"><img
                                            src="{{ asset('images/clients-3.jpg') }}" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- client logo image -->
                </div>
                <!-- end clients logo -->
            </div>
        </div>
    </section>

    <!--
                                    <section class="bg-white builder-bg padding-110px-tb xs-padding-60px-tb border-none" id="packages">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text" id="tz-slider-text244">TOUR PACKAGES</h2>
                                                    <div class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom xs-margin-nineteen-bottom" id="tz-slider-text245">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="work-4col gutter wide work-with-title-light">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="overflow-hidden grid-gallery">
                                                            <div class="tab-content">
                                                                <ul class="masonry-items grid work-gallery grid">
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-10.jpg" title="BEST OF PARIS"><img src="{{ asset('images/agency-work-10.jpg" id="tz-bg-110') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text246"><a href="#" class="text-dark-gray">BEST OF PARIS</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text247"><p class="no-margin-bottom">8 DAYS / 7 NIGHTS - $2500</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-02.jpg" title="BANGKOK PATTAYA"><img src="{{ asset('images/agency-work-02.jpg" id="tz-bg-111') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text248"><a href="#" class="text-dark-gray">BANGKOK PATTAYA</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text249"><p class="no-margin-bottom">2 DAYS / 3 NIGHTS - $580</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-11.jpg" title="THAILAND SPECIAL"><img src="{{ asset('images/agency-work-11.jpg" id="tz-bg-112') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text250"><a href="#" class="text-dark-gray">THAILAND SPECIAL</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text251"><p class="no-margin-bottom">4 DAYS / 5 NIGHTS - $1500 (22% OFF)</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-04.jpg" title="AUSTRALIAN GETAWAY"><img src="{{ asset('images/agency-work-04.jpg" id="tz-bg-113') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text252"><a href="#" class="text-dark-gray">AUSTRALIAN GETAWAY</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text253"><p class="no-margin-bottom">2 DAYS / 3 NIGHTS - $1500</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-05.jpg" title="SWITZERLAND WINTER"><img src="{{ asset('images/agency-work-05.jpg" id="tz-bg-114') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text254"><a href="#" class="text-dark-gray">SWITZERLAND WINTER</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text255"><p class="no-margin-bottom">5 DAYS / 6 NIGHTS - $1350 (50% OFF)</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-06.jpg" title="SINGAPORE CITY"><img src="{{ asset('images/agency-work-06.jpg" id="tz-bg-115') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text256"><a href="#" class="text-dark-gray">SINGAPORE CITY</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text257"><p class="no-margin-bottom">2 DAYS / 3 NIGHTS - $950</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-07.jpg" title="PRINCIPE FORTE DEI MARMI"><img src="{{ asset('images/agency-work-07.jpg" id="tz-bg-116') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text258"><a href="#" class="text-dark-gray">PRINCIPE FORTE DEI MARMI</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text259"><p class="no-margin-bottom">5 DAYS / 6 NIGHTS - $1350 (50% OFF)</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                    <li class="xs-no-padding">
                                                                        <figure>
                                                                            <div class="gallery-img lightbox-gallery">
                                                                                <a href="images/agency-work-08.jpg" title="SOUTH AFRICA ADVENTURES"><img src="{{ asset('images/agency-work-08.jpg" id="tz-bg-117') }}"></a>
                                                                            </div>
                                                                            <figcaption>
                                                                                <h3 class="text-medium alt-font tz-text" id="tz-slider-text260"><a href="#" class="text-dark-gray">SOUTH AFRICA ADVENTURES</a></h3>
                                                                                <div class="text-small2 letter-spacing-1 tz-text" id="tz-slider-text261"><p class="no-margin-bottom">5 DAYS / 6 NIGHTS - $1350 (50% OFF)</p></div>
                                                                            </figcaption>
                                                                        </figure>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                -->
    <section class="padding-110px-tb feature-style4 bg-sand-yellow builder-bg xs-padding-60px-tb border-none"
        id="experience">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2
                        class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-thirteen-bottom xs-margin-nineteen-bottom tz-text">
                        CHOOSE YOUR EXPERIENCE</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 four-column">

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-nine-bottom xs-margin-nineteen-bottom">
                        <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img
                                alt="" src="{{ asset('images/restaurant-service-icon01.png') }}"></div>
                        <h3
                            class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">
                            EPIC JOURNEYS</h3>
                        <div class="text-medium tz-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been.</p>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-nine-bottom xs-margin-nineteen-bottom">
                        <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img
                                alt="" src="{{ asset('images/restaurant-service-icon02.png') }}"></div>
                        <h3
                            class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">
                            HIDDEN TRIBES</h3>
                        <div class="text-medium tz-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been.</p>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-nine-bottom xs-margin-nineteen-bottom">
                        <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img
                                alt="" src="{{ asset('images/restaurant-service-icon03.png') }}"></div>
                        <h3
                            class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">
                            ECO LODGES & TOURS</h3>
                        <div class="text-medium tz-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been.</p>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="margin-nineteen-bottom sm-margin-thirteen-bottom xs-margin-nine-bottom"><img
                                alt="" src="{{ asset('images/restaurant-service-icon04.png') }}"></div>
                        <h3
                            class="text-medium text-dark-gray alt-font margin-three-bottom display-block sm-margin-nine-bottom xs-margin-five-bottom tz-text font-weight-600">
                            ENDANGERED WILDLIFE</h3>
                        <div class="text-medium tz-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-sand-yellow-dark builder-bg border-none" style="padding: 0" id="content-section19">
        <div class="container-fluid">
            <div class="row equalize">
                <div class="col-md-6 col-sm-12 col-xs-12 display-table no-padding xs-padding-ten">
                    <div class="display-table-cell-vertical-middle padding-twenty-two md-padding-seven xs-no-padding-lr">

                        <div class="col-md-12 col-sm-12 col-xs-12 margin-nine-top xs-no-padding-lr">
                            <h2
                                class="title-extra-large-2 md-title-extra-large sm-title-extra-large xs-title-extra-large text-white margin-four-bottom xs-margin-fifteen-bottom alt-font tz-text">
                                Why people like us?</h2>
                            <div
                                class="text-extra-large sm-text-extra-large text-sand-yellow font-weight-300 width-80 md-width-100 margin-fourteen-bottom tz-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>


                        <div class="two-column">
                            <div
                                class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">
                                    <div
                                        class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-deep-orange title-large sm-title-large no-padding tz-text">
                                        01.</div>
                                    <h3
                                        class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">
                                        Best Price Guarantee</h3>
                                </div>
                                <div
                                    class="text-medium sm-text-medium float-left width-90 md-width-100 text-sand-yellow tz-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">
                                    <div
                                        class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-deep-orange title-large sm-title-large no-padding tz-text">
                                        02.</div>
                                    <h3
                                        class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">
                                        Pricing Transparency</h3>
                                </div>
                                <div
                                    class="text-medium sm-text-medium float-left width-90 md-width-100 text-sand-yellow tz-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-margin-fifteen-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">
                                    <div
                                        class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-deep-orange title-large sm-title-large no-padding tz-text">
                                        03.</div>
                                    <h3
                                        class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">
                                        Diverse Destinations</h3>
                                </div>
                                <div
                                    class="text-medium sm-text-medium float-left width-90 md-width-100 text-sand-yellow tz-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-12 col-sm-6 col-xs-12 margin-six-bottom xs-no-margin-bottom xs-no-padding-lr">
                                <div class="float-left width-100 margin-four-bottom">
                                    <div
                                        class="col-md-2 col-sm-2 col-xs-12 font-weight-300 text-deep-orange title-large sm-title-large no-padding tz-text">
                                        04.</div>
                                    <h3
                                        class="title-small sm-title-small text-white col-md-10 col-sm-10 col-xs-12 no-padding-left xs-no-padding margin-one-top md-margin-one-half-top tz-text">
                                        Incredible Journey</h3>
                                </div>
                                <div
                                    class="text-medium sm-text-medium float-left width-90 md-width-100 text-sand-yellow tz-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 tz-builder-bg-image xs-height-400-px cover-background bg-img-two"
                    data-img-size="(W)1000px X (H)800px"
                    style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('images/bg-image/infographic-6.jpg')">
                </div>
            </div>
        </div>
    </section>
    <section class="padding-110px-tb xs-padding-60px-tb bg-white builder-bg border-none" id="offers">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2
                        class="section-title-large sm-section-title-medium xs-title-extra-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text">
                        SPECIAL OFFERS</h2>
                    <div
                        class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom xs-margin-nineteen-bottom">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</div>
                </div>

            </div>
            <div class="row four-column">

                <div class="col-md-3 col-sm-6 col-xs-12 margin-two-bottom sm-margin-two-bottom xs-margin-three-bottom">
                    <div class="feature-box">
                        <div
                            class="feature-box-image margin-seventeen-bottom sm-margin-eleven-bottom xs-margin-seven-bottom">
                            <a href="#"><img alt="" src="{{ asset('images/content-04.jpg') }}"></a>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="tz-text text-small font-weight-600 text-dark-gray margin-three-bottom">ESSENTIAL
                                PERU • <span class="text-deep-orange">JUST $780</span></a>
                            <div class="tz-text width-90 margin-lr-auto sm-width-100">
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12 margin-two-bottom sm-margin-two-bottom xs-margin-three-bottom">
                    <div class="feature-box">
                        <div
                            class="feature-box-image margin-seventeen-bottom sm-margin-eleven-bottom xs-margin-seven-bottom">
                            <a href="#"><img alt="" src="{{ asset('images/content-05.jpg') }}"></a>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="tz-text text-small font-weight-600 text-dark-gray margin-three-bottom">MAHARAJA
                                TOUR • <span class="text-deep-orange">JUST $670</span></a>
                            <div class="tz-text width-90 margin-lr-auto sm-width-100">
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12 margin-two-bottom sm-margin-two-bottom xs-margin-three-bottom">
                    <div class="feature-box">
                        <div
                            class="feature-box-image margin-seventeen-bottom sm-margin-eleven-bottom xs-margin-seven-bottom">
                            <a href="#"><img alt="" src="{{ asset('images/content-06.jpg') }}"></a>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="tz-text text-small font-weight-600 text-dark-gray margin-three-bottom">AFRICAN
                                SURPRISE • <span class="text-deep-orange">JUST $320</span></a>
                            <div class="tz-text width-90 margin-lr-auto sm-width-100">
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12 margin-two-bottom sm-margin-two-bottom xs-margin-three-bottom">
                    <div class="feature-box">
                        <div
                            class="feature-box-image margin-seventeen-bottom sm-margin-eleven-bottom xs-margin-seven-bottom">
                            <a href="#"><img alt="" src="{{ asset('images/content-07.jpg') }}"></a>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="tz-text text-small font-weight-600 text-dark-gray margin-three-bottom">WONDERS
                                INDIA • <span class="text-deep-orange">JUST $790</span></a>
                            <div class="tz-text width-90 margin-lr-auto sm-width-100">
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-white builder-bg border-none" id="content-section12">
        <div class="container-fluid">
            <div class="row equalize">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding xs-no-padding-15 bg-gray tz-builder-bg-image cover-background bg-img-three"
                    data-img-size="(W)1000px X (H)800px"
                    style="background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0)), url('images/bg-image/hero-bg38.jpg')">
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-deep-purple tz-background-color display-table">
                    <div class="display-table-cell-vertical-middle padding-twenty-six md-padding-twenty xs-no-padding-lr">
                        <h2
                            class="alt-font text-white title-extra-large-2 md-title-extra-large xs-section-title-large line-height-50 margin-six-bottom tz-text sm-margin-ten-bottom width-80 md-width-100">
                            Explore the Taj Mahal</h2>
                        <div
                            class="title-medium text-white sm-title-medium xs-title-medium font-weight-100 tz-text margin-seven-bottom sm-margin-ten-bottom width-85 md-width-100">
                            Standing majestically on the banks of River Yamuna, the Taj Mahal is synonymous to love and
                            romance.</div>
                        <div
                            class="text-medium text-light-gray sm-text-medium tz-text margin-ten-bottom width-85 md-width-100 sm-margin-ten-bottom">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's.Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's. Lorem Ipsum has been the industry's.
                                Lorem Ipsum is simply dummy text printing and typesetting industry. Lorem Ipsum has been
                                the industry's.</p>
                        </div>
                        <a class="btn-medium btn-circle btn border-2-white btn-border text-white inner-link"
                            href="#book"><span class="tz-text">BOOK NOW!</span><i
                                class="fa fa-long-arrow-right icon-extra-small tz-icon-color"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="testimonials-section14"
        class="builder-bg testimonial-style1 bg-white padding-110px-tb xs-padding-top-60px border-none">
        <div class="container">
            <div class="row">
                <div class="testimonial-style3 owl-carousel owl-theme owl-dark-pagination owl-pagination-bottom">

                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                            <div class="margin-ten-bottom"><img class="img-round-100"
                                    src="{{ asset('images/avtar-01.jpg') }}" id="tz-bg-64" /></div>
                            <div class="text-medium margin-six-bottom tz-text width-95 sm-width-100 center-col"
                                id="tz-slider-text94">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since type.</div>
                            <div class="text-small alt-font text-dark-gray tz-text font-weight-600" id="tz-slider-text95">
                                MELISSA SMITH - GOOGLE</div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                            <div class="margin-ten-bottom"><img class="img-round-100"
                                    src="{{ asset('images/avtar-02.jpg') }}" id="tz-bg-65" /></div>
                            <div class="text-medium margin-six-bottom tz-text width-95 sm-width-100 center-col"
                                id="tz-slider-text96">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since type.</div>
                            <div class="text-small alt-font text-dark-gray tz-text font-weight-600" id="tz-slider-text97">
                                JEREMY GIRARD - MICROSOFT</div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                            <div class="margin-ten-bottom"><img class="img-round-100"
                                    src="{{ asset('images/avtar-03.jpg') }}" id="tz-bg-66" /></div>
                            <div class="text-medium margin-six-bottom tz-text width-95 sm-width-100 center-col"
                                id="tz-slider-text98">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since type.</div>
                            <div class="text-small alt-font text-dark-gray tz-text font-weight-600" id="tz-slider-text99">
                                PAUL SCRIVENS - FACEBOOK</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="counter-section7"
        class="padding-110px-tb cover-background tz-builder-bg-image xs-padding-60px-tb border-none bg-img-four"
        data-img-size="(W)1920px X (H)525px"
        style="background:linear-gradient(rgba(25,25,25,0.85), rgba(25,25,25,0.85)), url('images/bg-image/hero-bg33.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                    <div id="counter">
                        <div class="col-md-3 col-sm-3 col-xs-12 first xs-margin-seventeen-bottom">
                            <i
                                class="fa ti-image icon-large tz-icon-color text-deep-orange margin-ten-bottom xs-margin-seven-bottom"></i>
                            <div class="counter-content">
                                <span
                                    class="timer counter-number title-extra-large sm-title-extra-large alt-font font-weight-600 text-white display-block tz-text"
                                    data-to="1500" data-speed="7000"></span>
                                <span
                                    class="text-small2 alt-font text-light-gray sm-text-medium display-block tz-text">DESTINATIONS</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 first xs-margin-seventeen-bottom">
                            <i
                                class="fa ti-world icon-large tz-icon-color text-deep-orange margin-ten-bottom xs-margin-seven-bottom"></i>
                            <div class="counter-content">
                                <span
                                    class="timer counter-number title-extra-large sm-title-extra-large alt-font font-weight-600 text-white display-block tz-text"
                                    data-to="1865" data-speed="7000"></span>
                                <span
                                    class="text-small2 alt-font text-light-gray sm-text-medium display-block tz-text">TOURS</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 first xs-margin-seventeen-bottom">
                            <i
                                class="fa ti-home icon-large tz-icon-color text-deep-orange margin-ten-bottom xs-margin-seven-bottom"></i>
                            <div class="counter-content">
                                <span
                                    class="timer counter-number title-extra-large sm-title-extra-large alt-font font-weight-600 text-white display-block tz-text"
                                    data-to="1325" data-speed="7000"></span>
                                <span
                                    class="text-small2 alt-font text-light-gray sm-text-medium display-block tz-text">HOTELS</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 first">
                            <i
                                class="fa ti-user icon-large tz-icon-color text-deep-orange margin-ten-bottom xs-margin-seven-bottom"></i>
                            <div class="counter-content">
                                <span
                                    class="timer counter-number title-extra-large sm-title-extra-large alt-font font-weight-600 text-white display-block tz-text"
                                    data-to="1299" data-speed="7000"></span>
                                <span
                                    class="text-small2 alt-font text-light-gray sm-text-medium display-block tz-text">TOURISTS</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="padding-110px-tb bg-white builder-bg xs-padding-60px-tb" id="feature-section2">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2
                        class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text">
                        USEFUL INFORMATION</h2>
                    <div
                        class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom xs-margin-nineteen-bottom">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-twenty-three-bottom xs-text-center">
                    <div class="feature-box">
                        <div class="feature-box-image margin-eleven-bottom">
                            <a href="#"><img alt=""
                                    src="{{ asset('images/agency-content-img01.jpg') }}"></a>
                        </div>
                        <div class="feature-box-details float-left width-100">
                            <a href="#"
                                class="tz-text text-medium font-weight-600 text-dark-gray alt-font margin-six-bottom display-block tz-text">PRIVATE
                                TOUR GUIDE</a>
                            <div class="text-medium line-height-24 float-left width-100 tz-text">
                                <p class="no-margin-bottom">Lorem Ipsum has been the industry's standard dummy text
                                    ever since, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-twenty-three-bottom xs-text-center">
                    <div class="feature-box">
                        <div class="feature-box-image margin-eleven-bottom">
                            <a href="#"><img alt=""
                                    src="{{ asset('images/agency-content-img02.jpg') }}"></a>
                        </div>
                        <div class="feature-box-details float-left width-100">
                            <a href="#"
                                class="tz-text text-medium font-weight-600 text-dark-gray alt-font margin-six-bottom display-block tz-text">SPECIAL
                                ACTIVITIES</a>
                            <div class="text-medium line-height-24 float-left width-100 tz-text">
                                <p class="no-margin-bottom">Lorem Ipsum has been the industry's standard dummy text
                                    ever since, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12 xs-text-center">
                    <div class="feature-box">
                        <div class="feature-box-image margin-eleven-bottom">
                            <a href="#"><img alt=""
                                    src="{{ asset('images/agency-content-img03.jpg') }}"></a>
                        </div>
                        <div class="feature-box-details float-left width-100">
                            <a href="#"
                                class="tz-text text-medium font-weight-600 text-dark-gray alt-font margin-six-bottom display-block tz-text">MAKE
                                TRAVEL ENJOYABLE</a>
                            <div class="text-medium line-height-24 float-left width-100 tz-text">
                                <p class="no-margin-bottom">Lorem Ipsum has been the industry's standard dummy text
                                    ever since, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="book"
        class="no-padding position-relative cover-background tz-builder-bg-image border-none xs-padding-60px-tb bg-img-five"
        style="background:linear-gradient(rgba(65,0,41,0.8), rgba(16,65,153,0.4)), url('images/bg-image/hero-bg3.jpg')">
        <div class="container one-third-screen position-relative xs-height-auto">
            <div class="row">
                <div class="slider-typography xs-position-static">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle text-left">

                            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 center-col text-center">
                                <h2
                                    class="section-title-large2 sm-section-title-medium font-weight-700 xs-section-title-large text-white alt-font margin-five-bottom xs-margin-fifteen-bottom tz-text">
                                    BOOK YOUR VACATION</h2>
                                <div
                                    class="text-medium text-light-gray width-90 sm-width-100 center-col tz-text margin-thirteen-bottom xs-margin-nineteen-bottom">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type.</div>
                            </div>


                            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 center-col text-center">

                                <form action="{{ route('messages.store') }}" method="post"
                                    enctype="multipart/form-data"
                                    class="margin-seven no-margin-tb no-margin-right xs-no-margin">
                                    @csrf
                                    @error('firstname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" name="firstname" id="firstname" placeholder="*Your firstname"
                                        class="medium-input alt-font border-radius-4" value="{{ old('firstname') }}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" name="email" id="email" placeholder="*Your Email"
                                        class="medium-input alt-font border-radius-4" value="{{ old('email') }}">
                                    <textarea name="message" rows="4" id="message" placeholder="Your Message"
                                        class="medium-input alt-font border-radius-4">{{ old('message') }}</textarea>
                                    <button type="submit"
                                        class="default-submit btn btn-large font-weight-600 propClone bg-deep-orange btn-3d tz-text text-white">SEND
                                        MESSAGE</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-110px-tb bg-white builder-bg contact-form-style6 xs-padding-60px-tb border-none"
        id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2
                        class="section-title-large sm-section-title-medium xs-section-title-large text-dark-gray font-weight-700 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text">
                        ANY QUESTIONS?</h2>
                    <div
                        class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 tz-text margin-thirteen-bottom xs-margin-nineteen-bottom">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</div>
                </div>

            </div>
            <div class="row four-column equalize xs-equalize-auto">

                <div
                    class="col-md-3 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-fifteen-bottom text-center sm-clear-both">
                    <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                        <i class="fa ti-location-pin text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                        <h3
                            class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                            Contact Address</h3>
                        <div class="feature-text text-medium center-col tz-text">301 The Greenhouse,
                            Custard,<br>Factory, London, E2 8DY.</div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-fifteen-bottom text-center">
                    <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                        <i class="fa ti-mobile text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                        <h3
                            class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                            Call Us Today!</h3>
                        <div class="feature-text text-medium center-col tz-text">(M) +44 (0) 123 456 7890<br>(O) +44
                            (0) 123 456 7890</div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-fifteen-bottom sm-clear-both">
                    <div class="contact-details builder-bg bg-white xs-margin-seven xs-no-margin-tb height-100">
                        <i class="fa ti-email text-deep-orange icon-large tz-icon-color margin-ten-bottom"></i>
                        <h3
                            class="feature-title text-dark-gray text-medium alt-font font-weight-600 display-block margin-three-bottom xs-margin-five-bottom tz-text">
                            Email</h3>
                        <div class="feature-text text-medium center-col"><a class="tz-text"
                                href="mailto:no-reply@domain.com">no-reply@domain.com</a><br><a class="tz-text"
                                href="mailto:help@domain.com">help@domain.com</a></div>
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
@endsection
