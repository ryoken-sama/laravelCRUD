<!--consultant-section-->
{{-- @dd($consultant_section) --}}
<section
    class="ttm-row consultant-section bg-img2 ttm-bgcolor-dark ttm-textcolor-white ttm-bg ttm-bgimage-yes clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row row-title">
            <div class="col-lg-12 m-auto">
                <!-- section title -->
                <div class="section-title title-style-center_text style2">
                    <div class="title-header">
                        {{-- <h3>{{$consultant_section->title}}</h3> --}}
                        {{-- <h2 class="title">{{$consultant_section->short_description}} --}}
                        </h2>
                    </div>
                </div><!-- section title end -->
                <div class="consutant-doc-info d-sm-flex justify-content-center align-items-center">
                    <div class="pr-30 res-575-pr-0 text-center">
                        {{-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-10"
                            href="contact.php" tabindex="0">{{$consultant_section->button_text}}</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--consultant-section-->
{{-- @dd($testimonials) --}}
<!--testimonial-section-->
<section class="ttm-row zero_padding-section testimonial-section-homepage clearfix">
    <div class="container">
        <div class="row g-0">
            <div class="col-xl-5 col-lg-12">
                <div class="box-shadow ttm-bg ttm-col-bgcolor-yes ttm-left-span ttm-bgcolor-skincolor spacing-21">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="layer-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section title -->
                                <div class="section-title mb-18">
                                    <div class="title-header">
                                        <h3 class="ttm-textcolor-white">TESTIMONIALS</h3>
                                        <h2 class="title">What Are They Saying</h2>
                                    </div>
                                </div><!-- section title end -->
                            </div>
                        </div>
                        <div class="ttm-horizontal_sep mt-5"></div>
                        <div class="featured-icon-box icon-align-before-content style20">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-white">
                                    <i class="flaticon flaticon-support"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-desc">
                                    <p>If you have any questions or need help contact<br>with our team, or call<a
                                            href="tel: (+977) 9851102535 "><span> (+977) 9851102535 </span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12  res-1199-pt-0">
                <div class="box-shadow ttm-bg ttm-col-bgimage-yes ttm-right-span col-bg-img-eleven spacing-22">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ttm-bgcolor-darkgrey"></div>
                    <div class="layer-content">
                        <div class="row slick_slider slick-arrows-style1 mx-0"
                        data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 1}} , {"breakpoint":768,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>

                            @foreach($testimonials as $testimonial)
                            <div class="col-sm-12">
                                <div class="testimonials style5 ">
                                    <div class="testimonial-content">
                                        <div class="row">
                                            <div class="col-md-3 align-self-center">
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="{{asset('storage/' . $testimonial->image)}}"
                                                                alt="testimonial-img" width="80" height="80">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>{{$testimonial->name}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 res-767-pt-20 res-767-pr-15">
                                                <div class="testimonial-desc">
                                                    <blockquote class="testimonial-text">{{$testimonial->message}}
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="col-sm-12">
                                <div class="testimonials style5  ">
                                    <div class="testimonial-content">
                                        <div class="row">
                                            <div class="col-md-3 align-self-center">
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="images/testimonial/13.jpg"
                                                                alt="testimonial-img" width="80" height="80">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Prapti Acharya</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 res-767-pt-30 res-767-pr-15">
                                                <div class="testimonial-desc">
                                                    <blockquote class="testimonial-text">“I am deeply grateful to NCLEX
                                                        Center Nepal for their invaluable support, expert guidance, and
                                                        exceptional instructors that enabled me to pass the NCLEX exam
                                                        on my first attempt, and I wholeheartedly recommend their
                                                        services to aspiring candidates.”</blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-12">
                                <div class="testimonials style5  ">
                                    <div class="testimonial-content">
                                        <div class="row">
                                            <div class="col-md-3 align-self-center">
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="images/testimonial/14.jpg"
                                                                alt="testimonial-img" width="80" height="80">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Garima Khanal</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 res-767-pt-30 res-767-pr-15">
                                                <div class="testimonial-desc">
                                                    <blockquote class="testimonial-text">“I would like to extend my
                                                        deepest gratitude in thanking NCLEX Center Nepal and helping me
                                                        during my NCLEX journey. I truly appreciate your teaching and
                                                        hope you will always continue to teach NCLEX and make difference
                                                        in everyone’s lives.” </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--testimonial-section-end-->
