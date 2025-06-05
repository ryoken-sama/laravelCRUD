
            <!-- progress-section-->
            {{-- @dd($about_nclex) --}}
            {{-- @dd($popups) --}}
            <section class="ttm-row progress-section clearfix">
                <div class="container">
                    <div class="row g-0 res-991-plr-15">
                        {{-- <div class="col-lg-4 order-lg-first ">
                             <!--section-title -->
                            <div class="section-title mb-0 res-1199-pl-15 res-991-pl-0 pt-20">
                                <div class="title-header">
                                    <h3>{{$about_nclex->title}}</h3>
                                    <h2 class="title">{{$about_nclex->short_description}}</h2>
                                    <p>{!!$about_nclex->description!!} </p>

                                </div>
                            </div><!--section-title-end -->
                        </div> --}}
                        {{-- <div class="col-lg-4 order-lg-1">
                            <div class="pr-20 res-1199-pl-15 res-991-pl-0">
                                <div class="progress-section-text mb-25">
                                    <p>We believe in your potential and are here to help you achieve your goal of becoming a licensed nurse. </p>
                                    <p>To know more about us make an appointment with us.</p>
                                    <div class="d-inline-block">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="register.php">Make an Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-4 order-lg-0">
                            <div class="featured-icon-box icon-align-top-content ttm-bgcolor-skincolor ttm-textcolor-white style12">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-white">
                                        <i class="flaticon flaticon-heart-attack"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Don’t let the NCLEX intimidate you.</h3>
                                        </div>
                                        <div class="featured-desc">
                                        </p>
                                        </div>
                                        <div class="featured-bottom">
                                            <a href="programs.php">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-0 res-991-display-none res-991-mt-15">
                        </div> --}}
                        @foreach($abouts as $about)
                        <div class="col-lg-4 order-lg-3 res-991-mt-15">
                            <div class="featured-icon-box icon-align-top-content ttm-bgcolor-darkgrey ttm-textcolor-white style12">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-white">
                                        <i class="flaticon flaticon-heart-attack"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>{{$about->title}}</h3>
                                        </div>
                                        <div class="featured-desc">
                                            {{$about->description}}
                                        </div>
                                        <div class="featured-bottom">
                                            <a href="programs.php">{{$about->button_text}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-4 order-lg-4 res-991-mt-15">
                            <div class="featured-icon-box icon-align-top-content ttm-bgcolor-skincolor ttm-textcolor-white style12">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-white">
                                        <i class="flaticon flaticon-heart-attack"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>you can approach the exam with confidence </h3>
                                        </div>
                                        <div class="featured-desc">
                                        </div>
                                        <div class="featured-bottom">
                                            <a href="programs.php">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-last res-991-mt-15">
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-ten spacing-19">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div>
                            <img src="images/bg-image/col-bgimage-10.png" class="ttm-equal-height-image" alt="single-img-10">
                        </div>
                        <div class="col-lg-4 order-lg-5 res-991-mt-15 align-self-center">
                            <div class="text-center">
                                <div class="ttm-fid inside style1">
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                        </h4>
                                    </div>
                                </div>
                                <!--section-title -->
                                <div class="section-title title-style-center_text">
                                    <div class="title-header">
                                        <h2 class="title font-size-26 pl-40 pr-40 res-991-pl-0 res-991-pr-0"> We wish you the best of luck on your NCLEX journey!</h2>
                                        <h3><a href="about.php">Become a Licensed Nurse</a></h3>
                                    </div>
                                </div><!--section-title-end -->
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-2">
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-nine spacing-19">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div>
                            <img src="images/bg-image/col-bgimage-9.png" class="ttm-equal-height-image" alt="single-img-09">
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- progress-section-end-->
