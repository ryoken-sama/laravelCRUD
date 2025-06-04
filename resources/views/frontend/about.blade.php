<!--about-section-start-->
{{-- @dd($posts) --}}
<section class="ttm-row about-section-3 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-50 res-991-pt-0">
                <div class="">
                    @foreach($posts as $post)
                	<!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>Post ID: {{ $post->id }}</h3>
                            <h2 class="title">{{ $post->title }}</h2>
                        </div>
                        <div class="featured-desc">
                            {{$post->content}}
                        </div>
                    </div>
                    <!-- section title end -->
                    @endforeach
                    <div class="pt-10 res-991-pt-0">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="contact.php" tabindex="0">Contact Us</a>
                    </div>
                    <div class="">
                        <div class="ttm-horizontal_sep mt-40 mb-40 res-991-mt-30 res-991-mb-15"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about-section-end-->
