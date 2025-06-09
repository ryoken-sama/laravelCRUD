@extends('layouts.app')
@section('content')
@include('frontend.header')
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">{{ $blog->title }}</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span><a href="{{ route('home')}}">Home</a></span>
                                        <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                        <span>Blog</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title-end -->

        <!--site-main start-->
        <div class="site-main">

            <section class="ttm-row blog-single-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 content-area m-auto">
                            <div class="post ttm-blog-single">
                                <div class="ttm-blog-single-content">
                                    <div class="entry-content">
                                        <div class="ttm-box-desc-text">
                                            <div class="entry-header">
                                                <h3 class="entry-title">{{ $blog->subtitle1 }}</h3>
                                            </div>
                                            <p>{{ $blog->description1 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttm-post-featured-wrapper ttm-featured-wrapper w-100">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ttm_single_image-wrapper">
                                                <img class="img-fluid" src="{{ asset('storage/' . $blog->image )}}" width="773" height="317" alt="blog-01">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttm-blog-single-content mt-20 res-991-mt-20">
                                    <div class="entry-header">
                                        <h3 class="entry-title">{{ $blog->subtitle2 }}</h3>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{ $blog->description2 }}</p>
                                        <div class="ttm-horizontal_sep style2 mt-40 res-991-mt-30"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget widget-recent-post clearfix">
                               <h3 class="widget-title">Popular Posts</h3>
                               <ul class="widget-post ttm-recent-post-list">
                                    @foreach($otherBlogs as $other)
                                    <li>
                                        <img class="img-fluid" src="{{ asset('storage/' . $other->thumbnail) }}" width="72" height="80" alt="post-img">
                                        <div class="post-detail">
                                            <a href="{{ route('frontend.blog-details', $other->id) }}">
                                                {{ Str::limit($other->title, 40) }}
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--site-main end-->
@include('frontend.footer')
@endsection
