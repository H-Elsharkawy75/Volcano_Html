@extends('layouts.app')

@section('content')
<section class="bg-cover pageHeader" style="background:url(images/bg-image/hero-bg40.jpg) no-repeat;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center py-5 mt-3 mb-3">
                    <h1 class="ft-medium mb-3">Services</h1>
                    <ul class="shop_categories_list m-0 p-0">
                        <li><a href="index.html">Home</a></li>
                        <li><a>Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= Blog Start ============================ -->
<section class="middle">
    <div class="container">



        <div class="row" style="justify-content: center">
            @foreach ($services as $service)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a class="d-block"><img
                                src="{{  asset('storage/' . $service->image) }}" class="img-fluid rounded" /></a>
                    </div>
                    <div class="_blog_caption">

                        <h5 class="bl_title lh-1"><a>{{$service->name}}</a></h5>
                        <p>{{$service->description}}</p>

                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a class="d-block"><img
                                src="{{ asset('images/new/s2.png') }}" class="img-fluid rounded" /></a>
                    </div>
                    <div class="_blog_caption">

                        <h5 class="bl_title lh-1"><a>Steel Production</a></h5>
                        <p>Professional and technical staff and advanced processing and production eqipment, strict
                            process inspection and factory inspection, ensure the quality of steel components.</p>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a class="d-block"><img
                                src="{{ asset('images/new/s3.png') }}" class="img-fluid rounded" /></a>
                    </div>
                    <div class="_blog_caption">

                        <h5 class="bl_title lh-1"><a>Billboard Poster Printing</a></h5>
                        <p>Our finished outdoor billboard posters are printed using UV stable inks, which means they
                            have far more contrast and impact than ordinary digital posters.</p>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a class="d-block"><img
                                src="{{ asset('images/new/s4.png') }}" class="img-fluid rounded" /></a>
                    </div>
                    <div class="_blog_caption">

                        <h5 class="bl_title lh-1"><a>Fast Installation</a></h5>
                        <p>TIn addition to our expertise, what sets us apart is our ability to deliver
                            installations quickly. We value your time, and our efficient approach
                            guarantees that your outdoor advertising endeavors can be
                            launched promptly. You can trust us to get the job done smoothly
                            and swiftly, without compromising on quality.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a class="d-block"><img
                                src="{{ asset('images/new/s5.png') }}" class="img-fluid rounded" /></a>
                    </div>
                    <div class="_blog_caption">

                        <h5 class="bl_title lh-1"><a>24/7 Service Support</a></h5>
                        <p>Customer satisfaction is our first priority. To ensure that, we offer
                            round-the-clock service support. Experienced and professional staff is
                            always available to provide assistance whenever it’s needed.</p>

                    </div>
                </div>
            </div>



        </div>



    </div>
</section>
<!-- ======================= Blog Start ============================ -->
@endsection

