        <!--site-main start-->
        <div class="site-main">
{{-- @dd($preparations) --}}
            <!--welcome-section-->
            <section class="ttm-row welcome-section ttm-bgcolor-grey clearfix">
                <div class="container-fluid">
                    <div class="row plr15 res-1199-pl-0 res-1199-pr-0">
                        @foreach($preparations as $preparation)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 abc">
                            <!-- featured-iconbox -->
                            <div class="featured-icon-box icon-align-before-content style19">
                                <!-- featured-icon -->
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                        <i class="flaticon flaticon-heart-5"></i>
                                    </div>
                                </div>
                                <!-- featured-icon end-->
                                <!-- featured-content -->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="about.php" tabindex="0">{{$preparation->title}}</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p> {{$preparation->content}}</p>
                                    </div>
                                </div><!-- featured-content-end -->
                                <div class="featured-bottom">
                                    <a class="" href="about.php" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                                </div>
                            </div><!-- featured-iconbox-end -->
                        </div>
                        @endforeach
                        {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 abc">
                            <!-- featured-iconbox -->
                            <div class="featured-icon-box icon-align-before-content style19">
                                <!-- featured-icon -->
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                        <i class="flaticon flaticon-doctor-1"></i>
                                    </div>
                                </div>
                                <!-- featured-icon end-->
                                <!-- featured-content -->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="about.php" tabindex="0">CGFNS preparation</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>(Comission on Graduates of Foreign Nursing Schools) is to serve the global community through programs and services that verify and promote the knowledge- based practice competency of healthcare professionals.</p>
                                    </div>
                                </div><!-- featured-content-end -->
                                <div class="featured-bottom">
                                    <a class="" href="about.php" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                                </div>
                            </div><!-- featured-iconbox-end -->
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 abc">
                            <!-- featured-iconbox -->
                            <div class="featured-icon-box icon-align-before-content style19">
                                <!-- featured-icon -->
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                        <i class="flaticon flaticon-defribillator"></i>
                                    </div>
                                </div>
                                <!-- featured-icon end-->
                                <!-- featured-content -->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="about.php" tabindex="0">OET preparation</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>OET is an English language test for healthcare professionals recognized by various regulatory healthcare bodies. It assesses the language communication skills of healthcare professionals who wish to register and practice in an English- speaking environment.</p>
                                    </div>
                                </div><!-- featured-content-end -->
                                <div class="featured-bottom">
                                    <a class="" href="about.php" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                                </div>
                            </div><!-- featured-iconbox-end -->
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 abc">
                            <!-- featured-iconbox -->
                            <div class="featured-icon-box icon-align-before-content style19">
                                <!-- featured-icon -->
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                        <i class="flaticon flaticon-cardiology-2"></i>
                                    </div>
                                </div>
                                <!-- featured-icon end-->
                                <!-- featured-content -->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="about.php" tabindex="0">OBA preparation</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>OBA is also referred to as an aunthentic assessment in the sense that the assessment is realistic. It is basically the assessment process for Internationally Qualified Nurses and Midwives (IQNMS) with an international nursing qualification to be a registered nurse.</p>
                                    </div>
                                </div><!-- featured-content-end -->
                                <div class="featured-bottom">
                                    <a class="" href="about.php" tabindex="0"><i class="ti ti-arrow-top-right"></i></a>
                                </div>
                            </div><!-- featured-iconbox-end -->
                        </div> --}}
                    </div>
                </div>
            </section><!--welcome-section end-->
