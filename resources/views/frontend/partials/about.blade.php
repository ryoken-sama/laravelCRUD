
            <!-- progress-section-->
            <section class="ttm-row progress-section clearfix">
                <div class="container">
                    <div class="row g-0 res-991-plr-15">
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
                    </div>
                </div>
            </section>
            <!-- progress-section-end-->
