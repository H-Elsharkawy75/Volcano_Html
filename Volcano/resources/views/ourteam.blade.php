@extends('layouts.app')
@section('content')
    <section class="bg-cover pageHeader" style="background:url(images/bg-image/hero-bg40.jpg) no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center py-5 mt-3 mb-3">
                        <h1 class="ft-medium mb-3">Our Team</h1>
                        <ul class="shop_categories_list m-0 p-0">
                            <li><a href="index.html">Home</a></li>
                            <li><a>Our Team</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ======================= Product List ======================== -->
    <section class="middle ourTeam">
        <div class="container">



            <!-- row -->
            <div class="row align-items-center rows-products">


                <!-- Single -->
                @foreach ($teams as $team)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden "><img class="card-img-top"
                                            src="{{ asset('storage/' . $team->member_image) }}"></a>
                                    <div class="product-hover-overlay btn d-flex align-items-center justify-content-center">
                                        <div class="group_btn">
                                            <a href="{{ $team->member_facebook }}" class="prd_btn_square" target="_blank"><i
                                                    class="fa fa-facebook tz-icon-color"></i></a>
                                            <a href="{{ $team->member_twitter }}" class="prd_btn_square" target="_blank"><i
                                                    class="fa fa-twitter tz-icon-color"></i></a>
                                            <a href="{{ $team->member_linkedin }}" class="prd_btn_square" target="_blank"><i
                                                    class="fa fa-linkedin tz-icon-color"></i></a>
                                            <a href="{{ $team->member_gmail }}" class="prd_btn_square" target="_blank"><i
                                                    class="fa fa-google-plus tz-icon-color"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                                <div class="text-left">
                                    <div class="text-center">
                                        <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1">{{ $team->member_name }}</h5>
                                        <div class="elis_rty"><span
                                                class="text-muted ft-medium line-through mr-2">{{ $team->member_role }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- row -->



        </div>
    </section>
@endsection
