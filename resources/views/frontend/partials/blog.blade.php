<!-- about-section-->
<section class="ttm-row about-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>READ OUR BLOG</h3>
                        <h2 class="title mb-0">We Provide Special Service For Patients</h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>

        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":991,"settings":{"slidesToShow": 2}}, {"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>

            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="featured-imagebox featured-imagebox-blog style2 m-15">
                        <div class="featured-thumbnail">
                            @if($blog->thumbnail)
                                <img class="img-fluid" src="{{ Storage::url($blog->thumbnail) }}" alt="{{ $blog->title }}" width="740" height="568">
                            @else
                                <img class="img-fluid" src="/images/placeholder.jpg" alt="placeholder" width="740" height="568">
                            @endif
                        </div>
                        <div class="featured-content featured-content-blog align-self-center">
                            <div class="featured-title">
                                <h3>
                                    <a href="{{ route('frontend.blog-details', $blog->id) }}">
                                        {{ Str::limit($blog->title, 80) }}
                                    </a>
                                </h3>
                            </div>
                            <div class="post-footer">
                                <div class="post-footer-link">
                                    <a class="ttm-btn btn-inline d-block ttm-btn-size-md ttm-icon-btn-right" href="{{ route('blogs.show', $blog->id) }}">
                                        {{ $blog->button_text ?? 'Read More' }}<i class="icon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- about-section-end-->
