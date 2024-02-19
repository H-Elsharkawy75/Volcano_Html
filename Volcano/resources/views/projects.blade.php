@extends('layouts.app')
@section('content')
    <section class="bg-cover pageHeader" style="background:url(images/bg-image/hero-bg40.jpg) no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center py-5 mt-3 mb-3">
                        <h1 class="ft-medium mb-3">Projects</h1>
                        <ul class="shop_categories_list m-0 p-0">
                            <li><a href="index.html">Home</a></li>
                            <li><a>Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= Category Style ======================== -->
    <section class="middle">
        <div class="container-fluid">
            <div class="row no-gutters exlio_gutters">



                @foreach ($projects as $project)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single_cats">
                        <a class="cards card-overflow card-scale md_height">
                            <div class="bg-image" style="background:url({{ asset('storage/' . $project->image) }})no-repeat;"></div>
                            <div class="ct_body">
                                <div class="ct_body_caption left">
                                    <h2 class="m-0 ft-bold lh-1 fs-md text-upper">{{ $project->name }}</h2>
                                    {{-- <span>Size 8*16 m</span>
                                    <span>Face / Quntity 2</span> --}}
                                </div>
                                <!--
                                                                <div class="ct_footer left">
                                                                    <span class="btn stretched-link borders">Browse Items <i class="lni lni-arrow-right"></i></span>
                                                                </div>
                            -->
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach


            <!-- /row -->

            <!-- row -->

            <!-- /row -->

        </div>


        </div>
        </div>
    </section>
    <!-- ======================= Category Style 1 ======================== -->
@endsection
