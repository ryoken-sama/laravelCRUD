<!-- Banner -->
<div class="banner_slider banner_slider_1">
    {{-- @dd($sliderItems) --}}
    @foreach($sliderItems as $slider)
    <div class="slide s2">
        {{-- <div class="slide_img" style="background-image: url('images/slides/slider-mainbg-02.jpg'); background-position: center;"> --}}
        <div class="slide_img" style="background-image: url('{{ asset('storage/'. $slider->image)}}'); background-position: center;">
        </div>
        <div class="slide__content">
            <div class="container g-0 position-relative">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-block d-xl-flex flex-row justify-content-between">
                            <div class="slide__content--headings align-self-center">
                                <div class="slide-icon-img" data-animation="fadeInLeft" data-delay="0.5s" data-duration="0.8s">
                                    <img class="img-fluid d-inline-block" src="images/slide-img.png" width="46" height="44" alt="slide-img">
                                    <span>YOUR DESTINY</span>
                                    <span>OUR PRIORITY</span>
                                    <span>NCLEX Center</span>
                                    {{-- {!!$slider->short_description!!} --}}
                                </div>
                                <h2 class="ttm-textcolor-white" data-animation="fadeInLeft" data-delay="0.7s" data-duration="0.8s">{!!$slider->description!!}</h2>
                                <div class="d-inline-block pt-30" data-animation="fadeInUp" data-delay="0.6s" data-duration="0.5s">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{{$slider->button_url}}">{{$slider->button_text}}</a>
                                </div>
                            </div>
                            <div class="d-lg-none d-xl-block align-self-center spacing-24">
                                <div class="testimonials style6" data-animation="fadeInRight" data-delay="0.8s" data-duration="0.6s">
                                    <div class="testimonial-content">
                                    </div>
                                </div>
                                <div class="testimonials style6" data-animation="fadeInRight" data-delay="1s" data-duration="0.6s">
                                    <div class="testimonial-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- {!!$slider->description!!} --}}
    </div>
    @endforeach
    {{-- <div class="slide s1">
        <div class="slide_img" style="background-image: url('images/slides/slider-mainbg-01.jpg'); background-position: center; background-size: 100%; background-repeat: no-repeat;">
        </div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-end">
                        <div class="slide__content--headings">
                            <div class="d-sm-flex justify-content-center" data-animation="fadeInUp" data-delay="1.2s" data-duration="0.6s">
                                <!-- featured-iconbox -->
                                <div class="featured-icon-box featured-icon-box-homepage-slider">
                                    <!-- featured-icon -->
                                    <div class="featured-icon">
                                        <img class="img-fluid" src="images/ambulance.svg" alt="ambulance-img" width="30" height="30">
                                    </div>
                                    <!-- featured-icon end-->
                                    <!-- featured-content -->
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="about.php" tabindex="0">Emergency Services</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-iconbox-end -->
                                <!-- featured-iconbox -->
                                <div class="featured-icon-box featured-icon-box-homepage-slider">
                                    <!-- featured-icon -->
                                    <div class="featured-icon">
                                        <img class="img-fluid" src="images/stethoscope.svg" alt="stethoscope-img" width="30" height="30">
                                    </div>
                                    <!-- featured-icon end-->
                                    <!-- featured-content -->
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="about.php" tabindex="0">Outdoor Checkup</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-iconbox-end -->
                                <!-- featured-iconbox -->
                                <div class="featured-icon-box featured-icon-box-homepage-slider">
                                    <!-- featured-icon -->
                                    <div class="featured-icon">
                                        <img class="img-fluid" src="images/heart-icon.svg" alt="heart-icon-img" width="30" height="30">
                                    </div>
                                    <!-- featured-icon end-->
                                    <!-- featured-content -->
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="about.php" tabindex="0">Health Screening</a></h3>
                                        </div>
                                    </div>
                                </div><!-- featured-iconbox-end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide s3">
        <div class="slide_img" style="background-image: url('images/slides/slider-mainbg-07.jpg');
        background-position: center;"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slide__content--headings text-end">
                            <h3 class="ttm-textcolor-white" data-animation="fadeInDown" data-delay="0.6s" data-duration="0.5s">WE GIVE YOU THE BEST</h3>
                            <h2 class="ttm-textcolor-white" data-animation="fadeInRight" data-delay="0.7s" data-duration="0.8s">With our guidance, <br>your skills will flourish,<br> opening doors to <br>endless opportunities</h2>
                            <div class="d-inline-block pt-25 res-767-pt-0" data-animation="fadeInUp" data-delay="0.6s" data-duration="0.5s">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="contact.php">See How Can We Help</a>
                            </div>
                            <div class="d-block d-sm-inline-block pt-25 res-767-pt-0 pl-15 res-575-pl-0 res-575-mt-20" data-animation="fadeInUp" data-delay="0.6s" data-duration="0.5s">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="contact.php">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Banner end-->
