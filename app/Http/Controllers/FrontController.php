<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\City;
use App\Models\FeaturedService;
use App\Models\FeaturedServicesCatelog;
use App\Models\FeaturedServicesImage;
use App\Models\IconicBanner;
use App\Models\PhotographyBanner;
use App\Models\PhotographyFeature;
use App\Models\Portfolio;
use App\Models\ServicesOffer;
use App\Models\SlidingImage;
use App\Models\Testimonial;
use App\Models\TravelCatelog;
use App\Models\WeddingBanner;
use App\Models\WeddingContent;
use App\Models\WeddingImages;
use App\Models\WeddingVideos;

class FrontController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $f_services = FeaturedService::all();
        $aboutUs = AboutUs::all();
        $testimonials = Testimonial::all();
        $slidingImage = SlidingImage::all();
        $portfolio = Portfolio::all();
        $servicesOffer=ServicesOffer::all();
        // $fsCatelogs = FeaturedServicesCatelog::with('featuredServicesImage');
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.home', compact('banners', 'f_services', 'aboutUs', 'testimonials', 'slidingImage', 'portfolio','servicesOffer','fsCatelogs'));
    }

    public function about()
    {
        $aboutUs = AboutUs::all();
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.about',compact('aboutUs','fsCatelogs'));
    }

    public function service()
    {
        $f_services = FeaturedService::all();
        // $fsCatelogs = FeaturedServicesCatelog::with('featuredServicesImage');
        $fsCatelogs = FeaturedServicesCatelog::all();
        $fSImages = FeaturedServicesImage::with('featuredServicesCatelog')->get();
        return view('front.service',compact('f_services','fsCatelogs','fSImages'));
    }

    public function blogs()
    {
        $blogs = Blog::all();
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.blog',compact('blogs','fsCatelogs'));
    }

    public function photography()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();
        $p_banner=PhotographyBanner::all();
        $p_feature=PhotographyFeature::all();
        $f_services = FeaturedService::all();
        $fSImages = FeaturedServicesImage::with('featuredServicesCatelog')->get();
        return view('front.photography',compact('fsCatelogs','f_services','fSImages','p_banner','p_feature'));
    }

    public function weddings()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();
        $w_Banner=WeddingBanner::all();
        $w_contents=WeddingContent::all();
        $w_images=WeddingImages::all();
        $icon_banner=IconicBanner::all();
        $w_videos=WeddingVideos::all();
        return view('front.weddings',compact('fsCatelogs','w_Banner','w_contents','w_images','icon_banner','w_videos'));
    }

    public function travelblog()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();
        $t_catelog=TravelCatelog::all();
        $city_details=City::with('travelCatelog')->get();
        return view('front.travel-blog',compact('fsCatelogs','t_catelog'));
    }

    public function videography()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();

        return view('front.videography',compact('fsCatelogs'));
    }

    public function documentaries()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();

        return view('front.documentaries',compact('fsCatelogs'));
    }

    public function small_business_owner_profiles()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();

        return view('front.small_business_owner_profiles',compact('fsCatelogs'));
    }

    public function contact()
    {
        $fsCatelogs = FeaturedServicesCatelog::all();

        return view('front.contact',compact('fsCatelogs'));
    }


}
