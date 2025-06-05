<?php

// app/Http/Controllers/FrontendController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Preparation;
use App\Models\Service;
use App\Models\About;

class FrontendController extends Controller
{
    public function homePage()
    {
        $data['sliderItems'] = Slider::all();
        $data['preparations'] = Preparation::all();
        $data['services'] = Service::all();
        $data['abouts'] = About::all();
        // $data['contact'] = Contact::first();
        // $data['testimonials'] = Testimonial::all();
        // $data['partners'] = Partner::all();
        // $data['passers'] = Passer::all();
        // $data['blogs'] = Blog::latest()->take(3)->get();

        return view('frontend.home',$data);
    }
    public function aboutPage()
    {
        $posts = Post::all();
        return view('frontend.about', compact('posts'));
    }
}


/*
    slider
    preparation
    service
    about
    contact
    testimonial
    partners
    passers
    blog
*/
