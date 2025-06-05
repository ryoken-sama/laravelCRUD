            <!--service-section-->
            <section class="ttm-row services-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    {{-- @dd($services) --}}
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                        <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>SERVICES WE PROVIDE</h3>
                                    <h2 class="title">Take The Road To A Healthy Heart Beat</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1020,"settings":{"slidesToShow": 2}} , {"breakpoint":768,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                        @foreach($services as $service)
                        <div class="col-md-4">
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="{{asset('storage/' . $service->image)}}" width="85" height="85" alt="">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="programs.php">{{$service->title}}</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>{{$service->description}}</p>
                                    </div>
                                </div>
                                <div class="fetured-bottom">
                                    <a href="programs.php" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-exit"></i>
                                    </a>
                                </div>
                            </div >
                        </div>
                        @endforeach
                        {{-- <div class="col-md-4">
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="images/nurse.webp" width="85" height="85" alt="">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="programs.php">GREEN CARD SPONSORSHIP</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We cover all the expenses associated with your immigration process, including legal fees, US Government fees, as well..</p>
                                    </div>
                                </div>
                                <div class="fetured-bottom">
                                    <a href="programs.php" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-exit"></i>
                                    </a>
                                </div>
                            </div >
                        </div>
                        <div class="col-md-4">
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon">
                                    <img class="img-fluid" src="images/toefl.png" width="85" height="85" alt="">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="programs.php">IELTS/TOEFL PREPARATION</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We help you prepare for IELTS/TOEFL to make you ready and capable to flourish your nursing dreams across the world  by...</p>
                                    </div>
                                </div>
                                <div class="fetured-bottom">
                                    <a href="programs.php" class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-exit"></i>
                                    </a>
                                </div>
                            </div >
                        </div> --}}
                    </div>
                </div>
            </section>
            <!--service-section end-->
