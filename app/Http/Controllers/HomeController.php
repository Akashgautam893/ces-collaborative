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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $f_services = FeaturedService::all();
        $aboutUs = AboutUs::all();
        $testimonials = Testimonial::all();
        $slidingImage = SlidingImage::all();
        $portfolio = Portfolio::all();
        $servicesOffer = ServicesOffer::all();
        $fsCatelogs = FeaturedServicesCatelog::all();
        // DD($fsCatelogs);
        return view('front.home', compact('banners', 'f_services', 'aboutUs', 'testimonials', 'slidingImage', 'portfolio', 'servicesOffer', 'fsCatelogs'));
    }

    public function addbanner(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required',
            'short_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $banner = new Banner;
        $bannerImg = $request->image;
        if (!empty($bannerImg)) {
            $bannerImgName = time() . '.' . $bannerImg->extension();
            $bannerImg->move(public_path('asset/Images/bannerImages'), $bannerImgName);
            $banner->image = $bannerImgName;
        } else {
            $banner->image = 0;
        }
        $banner->heading = $request->heading;
        $banner->short_desc = $request->short_desc;
        $banner->status = 1;
        $banner->created_at = $timestamp;
        $banner->updated_at = $timestamp;
        $affected = $banner->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Banner Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function updatebanner(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required',
            'short_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $banner = Banner::find($id);
        $bannerImg = $request->image;
        if (!empty($bannerImg)) {
            $img_destination = public_path('asset/images/bannerImages/' . $banner->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $bannerImgName = time() . '.' . $bannerImg->extension();
                $bannerImg->move(public_path('asset\Images\bannerImages'), $bannerImgName);
                $banner->image = $bannerImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $banner->heading = $request->heading;
        $banner->short_desc = $request->short_desc;
        $banner->status = 1;
        $banner->created_at = $timestamp;
        $banner->updated_at = $timestamp;
        $affected = $banner->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Banner Updated Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }

    public function addFeaturedServices(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'p_heading' => 'required',
            's_heading' => 'required',
            'short_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $f_services = new FeaturedService;
        $f_services->p_heading = $request->p_heading;
        $f_services->s_heading = $request->s_heading;
        $f_services->short_desc = $request->short_desc;
        $f_services->status = 1;
        $f_services->created_at = $timestamp;
        $f_services->updated_at = $timestamp;
        $affected = $f_services->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Featured Service Add Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }
    public function updateFeaturedServices(Request $request, $id)
    {
        // DD($request->all());
        $request->validate([
            'p_heading' => 'required',
            's_heading' => 'required',
            'short_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $f_services = FeaturedService::find($id);
        $f_services->p_heading = $request->p_heading;
        $f_services->s_heading = $request->s_heading;
        $f_services->short_desc = $request->short_desc;
        $f_services->status = 1;
        $f_services->created_at = $timestamp;
        $f_services->updated_at = $timestamp;
        $affected = $f_services->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Featured Service Add Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }

    public function addFeaturedServicesCatelog(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'service_name' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $fsCatelog = new FeaturedServicesCatelog();
        $fsCatelogImg = $request->image;
        if (!empty($fsCatelogImg)) {
            $fsCatelogImgName = time() . '.' . $fsCatelogImg->extension();
            $fsCatelogImg->move(public_path('asset/images/fsCatelog'), $fsCatelogImgName);
            $fsCatelog->image = $fsCatelogImgName;
        } else {
            $fsCatelog->image = 0;
        }
        $fsCatelog->service_name = $request->service_name;
        $fsCatelog->slug = Str::slug($request->service_name);
        $fsCatelog->status = 1;
        $fsCatelog->created_at = $timestamp;
        $fsCatelog->updated_at = $timestamp;
        $affected = $fsCatelog->save();
        if ($affected) {
            return redirect('/service')->with('success', 'Featured Services Catelog Add Successfully.');
        } else {
            return redirect('/service')->with('error', 'Something Wrong.');
        }
    }
    public function editFeaturedServicesCatelog($id)
    {
        $fsCatelog = FeaturedServicesCatelog::find($id);
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.editFsCatelog', compact('fsCatelog', 'fsCatelogs'));
    }
    public function updateFeaturedServicesCatelog(Request $request, $id)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'service_name' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $fsCatelog = FeaturedServicesCatelog::find($id);
        $fsCatelogImg = $request->image;
        if (!empty($fsCatelogImg)) {
            $img_destination = public_path('asset/images/fsCatelog/' . $fsCatelog->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $fsCatelogImgName = time() . '.' . $fsCatelogImg->extension();
                $fsCatelogImg->move(public_path('asset\images\fsCatelog'), $fsCatelogImgName);
                $fsCatelog->image = $fsCatelogImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }
        $fsCatelog->service_name = $request->service_name;
        $fsCatelog->slug = Str::slug($request->service_name);
        $fsCatelog->status = 1;
        $fsCatelog->created_at = $timestamp;
        $fsCatelog->updated_at = $timestamp;
        $affected = $fsCatelog->save();
        if ($affected) {
            return redirect('/service')->with('success', 'Featured Services Catelog Updated Successfully.');
        } else {
            return redirect('/service')->with('error', 'Something Wrong.');
        }
    }
    public function deleteFeaturedServicesCatelog($id)
    {
        $fsCatelog = FeaturedServicesCatelog::find($id);
        $fsCatelogImgDestination = public_path('asset/images/fsCatelog/' . $fsCatelog->image);
        if (File::exists($fsCatelogImgDestination)) {
            File::delete($fsCatelogImgDestination);
            $affected = $fsCatelog->delete();
            if ($affected) {
                return back()->with('success', 'Image Deleted');
            } else {
                return back()->with('error', "Something Wrong");
            }
        } else {
            return back()->with('error', "Brand File not Found");
        }
    }

    public function addAboutUs(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'short_desc' => 'required',
            'heading' => 'required',
            'content' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $aboutUs = new AboutUs;
        $aboutUsImg = $request->image;
        if (!empty($aboutUsImg)) {
            $aboutUsImgName = time() . '.' . $aboutUsImg->extension();
            $aboutUsImg->move(public_path('asset/Images/aboutUsImage'), $aboutUsImgName);
            $aboutUs->image = $aboutUsImgName;
        } else {
            $aboutUs->image = 0;
        }
        $aboutUs->short_desc = $request->short_desc;
        $aboutUs->heading = $request->heading;
        $aboutUs->content = $request->content;
        $aboutUs->status = 1;
        $aboutUs->created_at = $timestamp;
        $aboutUs->updated_at = $timestamp;
        $affected = $aboutUs->save();
        if ($affected) {
            return redirect()->back()->with('success', 'aboutUs Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function updateAboutUs(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $aboutUs = AboutUs::find($id);
        $aboutUsImg = $request->image;
        if (!empty($aboutUsImg)) {
            $img_destination = public_path('asset/images/aboutUsImage/' . $aboutUs->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $aboutUsImgName = time() . '.' . $aboutUsImg->extension();
                $aboutUsImg->move(public_path('asset\Images\aboutUsImage'), $aboutUsImgName);
                $aboutUs->image = $aboutUsImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $aboutUs->short_desc = $request->short_desc;
        $aboutUs->heading = $request->heading;
        $aboutUs->content = $request->content;
        $aboutUs->status = 1;
        $aboutUs->created_at = $timestamp;
        $aboutUs->updated_at = $timestamp;
        $affected = $aboutUs->save();
        if ($affected) {
            return redirect()->back()->with('success', 'aboutUs update Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }

    public function addPortfolio(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required',
            'desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $portfolio = new Portfolio;
        $portfolioImg = $request->image;
        if (!empty($portfolioImg)) {
            $portfolioImgName = time() . '.' . $portfolioImg->extension();
            $portfolioImg->move(public_path('asset/Images/portfolioImage'), $portfolioImgName);
            $portfolio->image = $portfolioImgName;
        } else {
            $portfolio->image = 0;
        }
        $portfolio->heading = $request->heading;
        $portfolio->desc = $request->desc;
        $portfolio->status = 1;
        $portfolio->created_at = $timestamp;
        $portfolio->updated_at = $timestamp;
        $affected = $portfolio->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Portfolio Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function editPortfolio(Request $request, $id)
    {
        $port = Portfolio::find($id);
        return view('front.editPortfolio', compact('port'));
    }
    public function updatePortfolio(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required',
            'desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $portfolio = Portfolio::find($id);
        $portfolioImg = $request->image;
        if (!empty($portfolioImg)) {
            $img_destination = public_path('asset/images/portfolioImage/' . $portfolio->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $portfolioImgName = time() . '.' . $portfolioImg->extension();
                $portfolioImg->move(public_path('asset\Images\portfolioImage'), $portfolioImgName);
                $portfolio->image = $portfolioImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $portfolio->heading = $request->heading;
        $portfolio->desc = $request->desc;
        $portfolio->status = 1;
        $portfolio->created_at = $timestamp;
        $portfolio->updated_at = $timestamp;
        $affected = $portfolio->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Portfolio Add Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }
    public function deletePortfolio(Request $request, $id)
    {
        $portfolioImage = Portfolio::find($id);
        $portfolioImgDestination = public_path('asset/images/portfolioImage/' . $portfolioImage->image);
        if (File::exists($portfolioImgDestination)) {
            File::delete($portfolioImgDestination);
            $affected = $portfolioImage->delete();
            if ($affected) {
                return back()->with('success', 'Image Deleted');
            } else {
                return back()->with('error', "Something Wrong");
            }
        } else {
            return back()->with('error', "Portfolio Image not Found");
        }
    }

    public function addtestimonial(Request $request)
    {
        $request->validate([
            'review' => 'required',
            'client_name' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $test = new Testimonial;
        $test->review = $request->review;
        $test->client_name = $request->client_name;
        $test->created_at = $timestamp;
        $test->updated_at = $timestamp;
        $affected = $test->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Testimonial Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function edittestimonial(Request $request, $id)
    {
        $test = Testimonial::find($id);
        return view('front.edit_testimonial', compact('test'));
    }
    public function updatetestimonial(Request $request, $id)
    {
        $request->validate([
            'review' => 'required',
            'client_name' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $test = Testimonial::find($id);
        $test->review = $request->review;
        $test->client_name = $request->client_name;
        $test->created_at = $timestamp;
        $test->updated_at = $timestamp;
        $affected = $test->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Testimonial Updated Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }
    public function deletetestimonial(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $affected = $testimonial->delete();
        if ($affected) {
            return back()->with('success', 'Testimonial Deleted Successfully');
        } else {
            return back()->with('error', 'Something wrong');
        }
    }

    public function addSlidingImage(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $slidingImage = new SlidingImage;
        $slidingImg = $request->image;
        if (!empty($slidingImg)) {
            $slidingImgName = time() . '.' . $slidingImg->extension();
            $slidingImg->move(public_path('asset/images/slidingImage'), $slidingImgName);
            $slidingImage->image = $slidingImgName;
        } else {
            $slidingImage->image = 0;
        }
        $slidingImage->created_at = $timestamp;
        $slidingImage->updated_at = $timestamp;
        $affected = $slidingImage->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Sliding Image Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function editSlidingImage($id)
    {
        $s_image = SlidingImage::find($id);
        return view('front.editSlidingImage', compact('s_image'));
    }
    public function updateSlidingImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $slidingImage = SlidingImage::find($id);
        $slidingImg = $request->image;
        if (!empty($slidingImg)) {
            $img_destination = public_path('asset/images/slidingImage/' . $slidingImage->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $slidingImgName = time() . '.' . $slidingImg->extension();
                $slidingImg->move(public_path('asset\images\slidingImage'), $slidingImgName);
                $slidingImage->image = $slidingImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $slidingImage->created_at = $timestamp;
        $slidingImage->updated_at = $timestamp;
        $affected = $slidingImage->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Sliding Image Add Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }
    public function deleteSlidingImage($id)
    {
        $slidingImage = SlidingImage::find($id);
        $slidingImgDestination = public_path('asset/images/slidingImage/' . $slidingImage->image);
        if (File::exists($slidingImgDestination)) {
            File::delete($slidingImgDestination);
            $affected = $slidingImage->delete();
            if ($affected) {
                return back()->with('success', 'Image Deleted');
            } else {
                return back()->with('error', "Something Wrong");
            }
        } else {
            return back()->with('error', "Brand File not Found");
        }
    }

    public function addServicesOffer(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'service_name' => 'required',
            'heading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'sub_category' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $servicesOffer = new ServicesOffer;
        $servicesOffer->service_name = $request->service_name;
        $servicesOffer->heading = $request->heading;
        $servicesOfferImg = $request->image;
        if (!empty($servicesOfferImg)) {
            $servicesOfferImgName = time() . '.' . $servicesOfferImg->extension();
            $servicesOfferImg->move(public_path('asset/images/servicesOffer'), $servicesOfferImgName);
            $servicesOffer->image = $servicesOfferImgName;
        } else {
            $servicesOffer->image = 0;
        }
        $servicesOffer->sub_category = $request->sub_category;
        $servicesOffer->status = 1;
        $servicesOffer->created_at = $timestamp;
        $servicesOffer->updated_at = $timestamp;
        $affected = $servicesOffer->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Service Offer Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function editServicesOffer($id)
    {
        $ServiceOffer = ServicesOffer::find($id);
        return view('front.editServicesOffers', compact('ServiceOffer'));
    }
    public function updateServicesOffer(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'heading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'sub_category' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $servicesOffer = ServicesOffer::find($id);
        $servicesOffer->service_name = $request->service_name;
        $servicesOffer->heading = $request->heading;
        $servicesOfferImg = $request->image;
        if (!empty($servicesOfferImg)) {
            $img_destination = public_path('asset/images/servicesOffer/' . $servicesOffer->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $servicesOfferImgName = time() . '.' . $servicesOfferImg->extension();
                $servicesOfferImg->move(public_path('asset\images\servicesOffer'), $servicesOfferImgName);
                $servicesOffer->image = $servicesOfferImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $servicesOffer->sub_category = $request->sub_category;
        $servicesOffer->status = 1;
        $servicesOffer->created_at = $timestamp;
        $servicesOffer->updated_at = $timestamp;
        $affected = $servicesOffer->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Service Offer Add Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }
    public function deleteServicesOffer($id)
    {
        $servicesOffer = ServicesOffer::find($id);
        $slidingImgDestination = public_path('asset/images/servicesOffer/' . $servicesOffer->image);
        if (File::exists($slidingImgDestination)) {
            File::delete($slidingImgDestination);
            $affected = $servicesOffer->delete();
            if ($affected) {
                return back()->with('success', 'ServicesOffer Image Deleted');
            } else {
                return back()->with('error', "Something Wrong");
            }
        } else {
            return back()->with('error', "Services Offer File not Found");
        }
    }

    public function addBlog(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $blog = new Blog;
        $blogImg = $request->image;
        if (!empty($blogImg)) {
            $blogImgName = time() . '.' . $blogImg->extension();
            $blogImg->move(public_path('asset/images/blog'), $blogImgName);
            $blog->image = $blogImgName;
        } else {
            $blog->image = 0;
        }
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->post_date = $timestamp;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->status = 1;
        $blog->created_at = $timestamp;
        $blog->updated_at = $timestamp;
        $affected = $blog->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Service Offer Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function editBlog($id)
    {
        $ServiceOffer = ServicesOffer::find($id);
        return view('front.editServicesOffers', compact('ServiceOffer'));
    }
    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'heading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'sub_category' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $servicesOffer = ServicesOffer::find($id);
        $servicesOffer->service_name = $request->service_name;
        $servicesOffer->heading = $request->heading;
        $servicesOfferImg = $request->image;
        if (!empty($servicesOfferImg)) {
            $img_destination = public_path('asset/images/servicesOffer/' . $servicesOffer->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $servicesOfferImgName = time() . '.' . $servicesOfferImg->extension();
                $servicesOfferImg->move(public_path('asset\images\servicesOffer'), $servicesOfferImgName);
                $servicesOffer->image = $servicesOfferImgName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $servicesOffer->sub_category = $request->sub_category;
        $servicesOffer->status = 1;
        $servicesOffer->created_at = $timestamp;
        $servicesOffer->updated_at = $timestamp;
        $affected = $servicesOffer->save();
        if ($affected) {
            return redirect('/home')->with('success', 'Service Offer Add Successfully.');
        } else {
            return redirect('/home')->with('error', 'Something Wrong.');
        }
    }
    public function deleteBlog($id)
    {
        $servicesOffer = ServicesOffer::find($id);
        $slidingImgDestination = public_path('asset/images/servicesOffer/' . $servicesOffer->image);
        if (File::exists($slidingImgDestination)) {
            File::delete($slidingImgDestination);
            $affected = $servicesOffer->delete();
            if ($affected) {
                return back()->with('success', 'ServicesOffer Image Deleted');
            } else {
                return back()->with('error', "Something Wrong");
            }
        } else {
            return back()->with('error', "Services Offer File not Found");
        }
    }

    public function updatePhotographyBanner(Request $request, $id)
    {
        $request->validate([
            'photo_banner' => 'mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required',
            'desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $p_banner = PhotographyBanner::find($id);
        $p_bannerImg = $request->photo_banner;
        if (!empty($p_bannerImg)) {
            $img_destination = public_path('asset/images/photographyBanner/' . $p_banner->photo_banner);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $p_bannerImgName = time() . '.' . $p_bannerImg->extension();
                $p_bannerImg->move(public_path('asset\images\photographyBanner'), $p_bannerImgName);
                $p_banner->photo_banner = $p_bannerImgName;
            } else {
                return redirect('/photography')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $p_banner->heading = $request->heading;
        $p_banner->desc = $request->desc;
        $p_banner->status = 1;
        $p_banner->created_at = $timestamp;
        $p_banner->updated_at = $timestamp;
        $affected = $p_banner->save();
        if ($affected) {
            return redirect('/photography')->with('success', 'Banner Updated Successfully.');
        } else {
            return redirect('/photography')->with('error', 'Something Wrong.');
        }
    }

    public function updatePhotographyFeature(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'f_image' => 'mimes:jpeg,png,jpg',
            's_image' => 'mimes:jpeg,png,jpg',
            'our_features' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $p_feature = PhotographyFeature::find($id);

        $f_Img = $request->f_image;
        if (!empty($f_Img)) {
            $img_destination = public_path('asset/images/photographyFeature/' . $p_feature->f_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $f_ImgName = rand(11111, 99999) . '.' . $f_Img->extension();
                $f_Img->move(public_path('asset\images\photographyFeature'), $f_ImgName);
                $p_feature->f_image = $f_ImgName;
            } else {
                return redirect('/photography')->with('error', "Sorry!! Banner old Image not found");
            }
        }

        $s_Img = $request->s_image;
        if (!empty($s_Img)) {
            $img_destination = public_path('asset/images/photographyFeature/' . $p_feature->s_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $s_ImgName = rand(11111, 99999) . '.' . $s_Img->extension();
                $s_Img->move(public_path('asset\images\photographyFeature'), $s_ImgName);
                $p_feature->s_image = $s_ImgName;
            } else {
                return redirect('/photography')->with('error', "Sorry!! Banner old Image not found");
            }
        }

        $p_feature->our_features = $request->our_features;
        $p_feature->status = 1;
        $p_feature->created_at = $timestamp;
        $p_feature->updated_at = $timestamp;
        $affected = $p_feature->save();
        if ($affected) {
            return redirect('/photography')->with('success', 'Banner Updated Successfully.');
        } else {
            return redirect('/photography')->with('error', 'Something Wrong.');
        }
    }

    public function addImageInFsCatelog(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_text' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $fSImage = new FeaturedServicesImage;
        $fSImageImg = $request->image;
        if (!empty($fSImageImg)) {
            $fSImageImgName = time() . '.' . $fSImageImg->extension();
            $fSImageImg->move(public_path('asset/images/fsImage'), $fSImageImgName);
            $fSImage->image = $fSImageImgName;
        } else {
            $fSImage->image = 0;
        }
        $fSImage->featured_services_catelog_id = $request->fsCatlogName_id;
        $fSImage->image_text = $request->image_text;
        $fSImage->status = 1;
        $fSImage->created_at = $timestamp;
        $fSImage->updated_at = $timestamp;
        $affected = $fSImage->save();
        if ($affected) {
            return redirect('/service')->with('success', 'Featured Services Catelog Add Successfully.');
        } else {
            return redirect('/service')->with('error', 'Something Wrong.');
        }
    }
    public function editImageInFsCatelog($id)
    {
        $fSImage = FeaturedServicesImage::with('featuredServicesCatelog')->find($id);
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.editServiceCatelogImage', compact('fSImage', 'fsCatelogs'));
    }
    public function updateImageInFsCatelog(Request $request, $id)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_text' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $fSImage = FeaturedServicesImage::find($id);
        $fSImageImg = $request->image;
        if (!empty($fSImageImg)) {
            $img_destination = public_path('asset/images/fsImage/' . $fSImage->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $fSImageImgName = time() . '.' . $fSImageImg->extension();
                $fSImageImg->move(public_path('asset\images\fsImage'), $fSImageImgName);
                $fSImage->image = $fSImageImgName;
            } else {
                return redirect('/service')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }
        $fSImage->featured_services_catelog_id = $request->fsCatlogName_id;
        $fSImage->image_text = $request->image_text;
        $fSImage->status = 1;
        $fSImage->created_at = $timestamp;
        $fSImage->updated_at = $timestamp;
        $affected = $fSImage->save();
        if ($affected) {
            return redirect('/service')->with('success', 'Services Catelog Image Update Successfully.');
        } else {
            return redirect('/service')->with('error', 'Something Wrong.');
        }
    }
    // public function deleteImageInFsCatelog($id)
    // {
    //     $fsCatelog = FeaturedServicesCatelog::find($id);
    //     $fsCatelogImgDestination = public_path('asset/images/fsCatelog/' . $fsCatelog->image);
    //     if (File::exists($fsCatelogImgDestination)) {
    //         File::delete($fsCatelogImgDestination);
    //         $affected = $fsCatelog->delete();
    //         if ($affected) {
    //             return back()->with('success', 'Image Deleted');
    //         } else {
    //             return back()->with('error', "Something Wrong");
    //         }
    //     } else {
    //         return back()->with('error', "Brand File not Found");
    //     }
    // }

    public function catelogImages($slug)
    {
        // DD($slug);
        $fsCatelogs = FeaturedServicesCatelog::all();
        $catImages = FeaturedServicesCatelog::where('slug', '=', $slug)->with('featuredServicesImage')->get();
        return view('front.showCatlogImages', compact('catImages', 'fsCatelogs'));
    }

    public function updateWeddingBanner(Request $request, $id)
    {
        $request->validate([
            'w_banner' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
            'banner_heading' => 'required',
            'banner_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $w_banner = WeddingBanner::find($id);
        $w_bannerVideo = $request->w_banner;
        if (!empty($w_bannerVideo)) {
            $video_destination = public_path('asset/images/weddingBanner/' . $w_banner->w_banner);
            if (File::exists($video_destination)) {
                File::delete($video_destination);
                $w_bannerVideoName = time() . '.' . $w_bannerVideo->extension();
                $w_bannerVideo->move(public_path('asset/Images/weddingBanner'), $w_bannerVideoName);
                $w_banner->w_banner = $w_bannerVideoName;
            } else {
                return redirect('/home')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $w_banner->banner_heading = $request->banner_heading;
        $w_banner->banner_desc = $request->banner_desc;
        $w_banner->status = 1;
        $w_banner->created_at = $timestamp;
        $w_banner->updated_at = $timestamp;
        $affected = $w_banner->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Wedding Banner Update Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }

    public function updateWeddingContent(Request $request, $id)
    {
        // DD($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required',
            'desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $w_content = WeddingContent::find($id);
        $w_contentImg = $request->image;
        if (!empty($w_contentImg)) {
            $img_destination = public_path('asset/images/weddingContent/' . $w_content->image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $w_contentImgName = time() . '.' . $w_contentImg->extension();
                $w_contentImg->move(public_path('asset\images\weddingContent'), $w_contentImgName);
                $w_content->image = $w_contentImgName;
            } else {
                return redirect('/weddings')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }
        $w_content->heading = $request->heading;
        $w_content->desc = $request->desc;
        $w_content->status = 1;
        $w_content->created_at = $timestamp;
        $w_content->updated_at = $timestamp;
        $affected = $w_content->save();
        if ($affected) {
            return redirect('/weddings')->with('success', 'Wedding Content Update Successfully.');
        } else {
            return redirect('/weddings')->with('error', 'Something Wrong.');
        }
    }

    public function addWeddingImage(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'bg_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'bg_image_heading' => 'required',
            'bg_image_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $w_image = new WeddingImages;
        $w_imageImg = $request->bg_image;
        if (!empty($w_imageImg)) {
            $w_imageImgName = time() . '.' . $w_imageImg->extension();
            $w_imageImg->move(public_path('asset/images/weddingImages'), $w_imageImgName);
            $w_image->bg_image = $w_imageImgName;
        } else {
            $w_image->bg_image = 0;
        }
        $w_image->bg_image_heading = $request->bg_image_heading;
        $w_image->bg_image_desc = $request->bg_image_desc;
        $w_image->status = 1;
        $w_image->created_at = $timestamp;
        $w_image->updated_at = $timestamp;
        $affected = $w_image->save();
        if ($affected) {
            return redirect()->back()->with('success', 'Wedding Image Add Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something Wrong.');
        }
    }
    public function editWeddingImage($id)
    {
        $w_image = WeddingImages::find($id);
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.editWeddingImage', compact('w_image', 'fsCatelogs'));
    }
    public function updateWeddingImage(Request $request, $id)
    {
        $request->validate([
            'bg_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'bg_image_heading' => 'required',
            'bg_image_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $w_image = WeddingImages::find($id);
        $w_imageImg = $request->bg_image;
        if (!empty($w_imageImg)) {
            $img_destination = public_path('asset/images/weddingImages/' . $w_image->bg_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $w_imageImgName = time() . '.' . $w_imageImg->extension();
                $w_imageImg->move(public_path('asset\images\weddingImages'), $w_imageImgName);
                $w_image->bg_image = $w_imageImgName;
            } else {
                return redirect('/weddings')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $w_image->bg_image_heading = $request->bg_image_heading;
        $w_image->bg_image_desc = $request->bg_image_desc;
        $w_image->status = 1;
        $w_image->created_at = $timestamp;
        $w_image->updated_at = $timestamp;
        $affected = $w_image->save();
        if ($affected) {
            return redirect('/weddings')->with('success', 'Wedding Image Add Successfully.');
        } else {
            return redirect('/weddings')->with('error', 'Something Wrong.');
        }
    }
    public function deleteWeddingImage($id)
    {
        $w_Image = WeddingImages::find($id);
        $ImgDestination = public_path('asset/images/weddingImages/' . $w_Image->bg_image);
        if (File::exists($ImgDestination)) {
            File::delete($ImgDestination);
            $affected = $w_Image->delete();
            if ($affected) {
                return back()->with('success', 'Image Deleted');
            } else {
                return back()->with('error', "Something Wrong");
            }
        } else {
            return back()->with('error', "Brand File not Found");
        }
    }

    public function updateIconicBanner(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'icon_banner' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
            'icon_bheading' => 'required',
            'icon_bdesc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $icon_banner = IconicBanner::find($id);
        $icon_bannerVideo = $request->icon_banner;
        if (!empty($icon_bannerVideo)) {
            $video_destination = public_path('asset/images/iconicBanner/' . $icon_banner->icon_banner);
            if (File::exists($video_destination)) {
                File::delete($video_destination);
                $icon_bannerVideoName = time() . '.' . $icon_bannerVideo->extension();
                $icon_bannerVideo->move(public_path('asset\Images\iconicBanner'), $icon_bannerVideoName);
                $icon_banner->icon_banner = $icon_bannerVideoName;
            } else {
                return redirect('/weddings')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $icon_banner->icon_bheading = $request->icon_bheading;
        $icon_banner->icon_bdesc = $request->icon_bdesc;
        $icon_banner->status = 1;
        $icon_banner->created_at = $timestamp;
        $icon_banner->updated_at = $timestamp;
        $affected = $icon_banner->save();
        if ($affected) {
            return redirect('/weddings')->with('success', 'Wedding Banner Update Successfully.');
        } else {
            return redirect('/weddings')->with('error', 'Something Wrong.');
        }
    }

    public function addWeddingVideo(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'im_video' => 'required|file|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'im_vheading' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $w_video = new WeddingVideos;
        $w_VideoFile = $request->im_video;
        if (!empty($w_VideoFile)) {
            $w_VideoFileName = time() . '.' . $w_VideoFile->extension();
            $w_VideoFile->move(public_path('asset/Images/weddingVideo'), $w_VideoFileName);
            $w_video->im_video = $w_VideoFileName;
        } else {
        }
        $w_video->im_vheading = $request->im_vheading;
        $w_video->status = 1;
        $w_video->created_at = $timestamp;
        $w_video->updated_at = $timestamp;
        $affected = $w_video->save();
        if ($affected) {
            return redirect('/weddings')->with('success', 'Wedding Video Add Successfully.');
        } else {
            return redirect('/weddings')->with('error', 'Something Wrong.');
        }
    }
    public function editWeddingVideo($id)
    {
        $w_video = WeddingVideos::find($id);
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.editWeddingVideo', compact('w_video', 'fsCatelogs'));
    }
    public function updateWeddingVideo(Request $request, $id)
    {
        // DD($request->all());
        $request->validate([
            'im_video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
            'im_vheading' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $w_video = WeddingVideos::find($id);
        $w_VideoFile = $request->im_video;
        if (!empty($w_VideoFile)) {
            $video_destination = public_path('asset/images/weddingVideo/' . $w_video->im_video);
            if (File::exists($video_destination)) {
                File::delete($video_destination);
                $w_VideoFileName = time() . '.' . $w_VideoFile->extension();
                $w_VideoFile->move(public_path('asset\images\weddingVideo'), $w_VideoFileName);
                $w_video->im_video = $w_VideoFileName;
            } else {
                return redirect('/weddings')->with('error', "Sorry!! Banner old Image not found");
            }
        }
        $w_video->im_vheading = $request->im_vheading;
        $w_video->status = 1;
        $w_video->created_at = $timestamp;
        $w_video->updated_at = $timestamp;
        $affected = $w_video->save();
        if ($affected) {
            return redirect('/weddings')->with('success', 'Wedding Video Add Successfully.');
        } else {
            return redirect('/weddings')->with('error', 'Something Wrong.');
        }
    }
    public function deleteWeddingVideo($id)
    {
        $w_Video = WeddingVideos::find($id);
        $videoDestination = public_path('asset/images/weddingVideo/' . $w_Video->im_video);
        if (File::exists($videoDestination)) {
            File::delete($videoDestination);
            $affected = $w_Video->delete();
            if ($affected) {
                return redirect('/weddings')->with('success', 'Image Deleted');
            } else {
                return redirect('/weddings')->with('error', "Something Wrong");
            }
        } else {
            return redirect('/weddings')->with('error', "Brand File not Found");
        }
    }

    public function addtravelblog(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'city_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'city_name' => 'required',
            'author_name' => 'required',
            'desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $t_catelog = new TravelCatelog;
        $t_catelogImg = $request->city_image;
        if (!empty($t_catelogImg)) {
            $t_catelogImgName = time() . '.' . $t_catelogImg->extension();
            $t_catelogImg->move(public_path('asset/images/travelCatelog'), $t_catelogImgName);
            $t_catelog->city_image = $t_catelogImgName;
        } else {
            $t_catelog->city_image = 0;
        }
        $t_catelog->city_name = $request->city_name;
        $t_catelog->date = date('Y-m-d');
        $t_catelog->author_name = $request->author_name;
        $t_catelog->desc = $request->desc;
        $t_catelog->slug = Str::slug($request->city_name);
        $t_catelog->status = 1;
        $t_catelog->created_at = $timestamp;
        $t_catelog->updated_at = $timestamp;
        $affected = $t_catelog->save();
        if ($affected) {
            return redirect('/travel-blog')->with('success', 'Featured Services Catelog Add Successfully.');
        } else {
            return redirect('/travel-blog')->with('error', 'Something Wrong.');
        }
    }
    public function edittravelblog($id)
    {
        // $fSImage = FeaturedServicesImage::with('featuredServicesCatelog')->find($id);
        $t_catelog = TravelCatelog::find($id);
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.editTravelCatelog', compact('t_catelog', 'fsCatelogs'));
    }
    public function updatetravelblog(Request $request, $id)
    {
        $request->validate([
            'city_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'city_name' => 'required',
            'date' => 'required|date',
            'author_name' => 'required',
            'desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $t_catelog = TravelCatelog::find($id);
        $t_catelogImg = $request->city_image;
        if (!empty($t_catelogImg)) {
            $img_destination = public_path('asset/images/travelCatelog/' . $t_catelog->city_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $t_catelogImgName = time() . '.' . $t_catelogImg->extension();
                $t_catelogImg->move(public_path('asset\images\travelCatelog'), $t_catelogImgName);
                $t_catelog->city_image = $t_catelogImgName;
            } else {
                return redirect('/service')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }
        $t_catelog->city_name = $request->city_name;
        $t_catelog->date = date("M d Y");
        $t_catelog->author_name = $request->author_name;
        $t_catelog->desc = $request->desc;
        $t_catelog->slug = Str::slug($request->city_name);
        $t_catelog->status = 1;
        $t_catelog->created_at = $timestamp;
        $t_catelog->updated_at = $timestamp;
        $affected = $t_catelog->save();
        if ($affected) {
            return redirect('/travel-blog')->with('success', 'Featured Services Catelog Add Successfully.');
        } else {
            return redirect('/travel-blog')->with('error', 'Something Wrong.');
        }
    }
    public function deletetravelblog($id)
    {
        $t_catelog = TravelCatelog::find($id);
        $ImgDestination = public_path('asset/images/travelCatelog/' . $t_catelog->city_image);
        if (File::exists($ImgDestination)) {
            File::delete($ImgDestination);
            $affected = $t_catelog->delete();
            if ($affected) {
                return redirect('/travel-blog')->with('success', 'Image Deleted');
            } else {
                return redirect('/travel-blog')->with('error', "Something Wrong");
            }
        } else {
            return redirect('/travel-blog')->with('error', "Brand File not Found");
        }
    }

    public function showCityDetails($id)
    {
        // DD($slug);
        $t_catelog = TravelCatelog::all();
        // $city = $this->getCity($id);
        $city = TravelCatelog::select('travel_catelogs.*', 'cities.banner','cities.fir_desc', 'cities.fir_image', 'cities.sec_desc', 'cities.sec_image', 'cities.thrd_image', 'cities.frt_image', 'cities.thrd_desc')->join('cities', 'travel_catelogs.id', '=', 'cities.travel_catelogs_id')->where('cities.travel_catelogs_id', $id)->first();
        // dd($city);
        $fsCatelogs = FeaturedServicesCatelog::all();
        return view('front.showCityDetails', compact('city', 'fsCatelogs', 't_catelog'));
    }

    public function getCity($id)
    {
        return City::where('travel_catelogs_id', $id)->first();
    }

    public function addCityDetails(Request $request)
    {
        // DD($request->all());
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'travel_catelogs_id' => 'required',
            'fir_desc' => 'required',
            'fir_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'sec_desc' => 'required',
            'sec_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'thrd_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'frt_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'thrd_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $city = new City;

        $c_banner = $request->banner;
        if (!empty($c_banner)) {
            $c_bannerName = rand(111111111, 999999999) . '.' . $c_banner->extension();
            $c_banner->move(public_path('asset/images/city'), $c_bannerName);
            $city->banner = $c_bannerName;
        } else {
            $city->banner = 0;
        }

        $city->travel_catelogs_id = $request->travel_catelogs_id;

        $city->fir_desc = $request->fir_desc;

        $c_fir_image = $request->fir_image;
        if (!empty($c_fir_image)) {
            $fir_imageName = rand(111111111, 999999999) . '.' . $c_fir_image->extension();
            $c_fir_image->move(public_path('asset/images/city'), $fir_imageName);
            $city->fir_image = $fir_imageName;
        } else {
            $city->fir_image = 0;
        }

        $city->sec_desc = $request->sec_desc;

        $c_sec_image = $request->sec_image;
        if (!empty($c_sec_image)) {
            $sec_imageName = rand(111111111, 999999999) . '.' . $c_sec_image->extension();
            $c_sec_image->move(public_path('asset/images/city'), $sec_imageName);
            $city->sec_image = $sec_imageName;
        } else {
            $city->sec_image = 0;
        }

        $c_thrd_image = $request->thrd_image;
        if (!empty($c_thrd_image)) {
            $thrd_imageName = rand(111111111, 999999999) . '.' . $c_thrd_image->extension();
            $c_thrd_image->move(public_path('asset/images/city'), $thrd_imageName);
            $city->thrd_image = $thrd_imageName;
        } else {
            $city->thrd_image = 0;
        }

        $c_frt_image = $request->frt_image;
        if (!empty($c_frt_image)) {
            $frt_imageName = rand(111111111, 999999999) . '.' . $c_frt_image->extension();
            $c_frt_image->move(public_path('asset/images/city'), $frt_imageName);
            $city->frt_image = $frt_imageName;
        } else {
            $city->frt_image = 0;
        }

        $city->thrd_desc = $request->thrd_desc;

        $city->status = 1;
        $city->created_at = $timestamp;
        $city->updated_at = $timestamp;
        $affected = $city->save();
        if ($affected) {
            return redirect('/travel-blog')->with('success', 'Featured Services Catelog Add Successfully.');
        } else {
            return redirect('/travel-blog')->with('error', 'Something Wrong.');
        }
    }
    public function editCityDetails($id)
    {
        $city = TravelCatelog::select('travel_catelogs.*', 'cities.banner','cities.fir_desc', 'cities.fir_image', 'cities.sec_desc', 'cities.sec_image', 'cities.thrd_image','cities.travel_catelogs_id', 'cities.frt_image',
        'cities.thrd_desc','cities.id as city_id')->join('cities', 'travel_catelogs.id', '=', 'cities.travel_catelogs_id')->where('cities.travel_catelogs_id', $id)->first();
          //dd($city->travel_catelogs_id);



        // $ci = (array)$city;
        $fsCatelogs = FeaturedServicesCatelog::all();
        $t_catelog = TravelCatelog::all();
        return view('front.editCityDetails', compact('city', 'fsCatelogs', 't_catelog'));
    }
    public function updateCityDetails(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'banner' => 'mimes:jpeg,png,jpg,gif,svg',
            'travel_catelogs_id' => 'required',
            'fir_desc' => 'required',
            'fir_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'sec_desc' => 'required',
            'sec_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'thrd_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'frt_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'thrd_desc' => 'required',
        ]);
        $timestamp = Carbon::now()->toDateTimeString();
        $city = City::find($id);

        $c_banner = $request->banner;
        if (!empty($c_banner)) {
            $img_destination = public_path('asset/images/city/' . $city->banner);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $c_bannerName = rand(111111111, 999999999) . '.' . $c_banner->extension();
                $c_banner->move(public_path('asset/images/city'), $c_bannerName);
                $city->banner = $c_bannerName;
            } else {
                return redirect('/travel-blog')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }

        $city->travel_catelogs_id = $request->travel_catelogs_id;

        $city->fir_desc = $request->fir_desc;

        $c_fir_image = $request->fir_image;
        if (!empty($c_fir_image)) {
            $img_destination = public_path('asset/images/city/' . $city->fir_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $fir_imageName = rand(111111111, 999999999) . '.' . $c_fir_image->extension();
                $c_fir_image->move(public_path('asset/images/city'), $fir_imageName);
                $city->fir_image = $fir_imageName;
            } else {
                return redirect('/travel-blog')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }

        $city->sec_desc = $request->sec_desc;

        $c_sec_image = $request->sec_image;
        if (!empty($c_sec_image)) {
            $img_destination = public_path('asset/images/city/' . $city->sec_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $sec_imageName = rand(111111111, 999999999) . '.' . $c_sec_image->extension();
                $c_sec_image->move(public_path('asset/images/city'), $sec_imageName);
                $city->sec_image = $sec_imageName;
            } else {
                return redirect('/travel-blog')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }

        $c_thrd_image = $request->thrd_image;
        if (!empty($c_thrd_image)) {
            $img_destination = public_path('asset/images/city/' . $city->thrd_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $thrd_imageName = rand(111111111, 999999999) . '.' . $c_thrd_image->extension();
                $c_thrd_image->move(public_path('asset/images/city'), $thrd_imageName);
                $city->thrd_image = $thrd_imageName;
            } else {
                return redirect('/travel-blog')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }

        $c_frt_image = $request->frt_image;
        if (!empty($c_frt_image)) {
            $img_destination = public_path('asset/images/city/' . $city->frt_image);
            if (File::exists($img_destination)) {
                File::delete($img_destination);
                $frt_imageName = rand(111111111, 999999999) . '.' . $c_frt_image->extension();
                $c_frt_image->move(public_path('asset/images/city'), $frt_imageName);
                $city->frt_image = $frt_imageName;
            } else {
                return redirect('/travel-blog')->with('error', "Sorry!! Featured Services Catelog old Image not found");
            }
        }

        $city->thrd_desc = $request->thrd_desc;

        $city->status = 1;
        $city->created_at = $timestamp;
        $city->updated_at = $timestamp;
        $affected = $city->save();
        if ($affected) {
            return redirect('/travel-blog')->with('success', 'Featured Services Catelog Add Successfully.');
        } else {
            return redirect('/travel-blog')->with('error', 'Something Wrong.');
        }
    }
    // public function deleteCityDetails($id)
    // {
    //     $t_catelog = TravelCatelog::find($id);
    //     $ImgDestination = public_path('asset/images/travelCatelog/' . $t_catelog->city_image);
    //     if (File::exists($ImgDestination)) {
    //         File::delete($ImgDestination);
    //         $affected = $t_catelog->delete();
    //         if ($affected) {
    //             return redirect('/travel-blog')->with('success', 'Image Deleted');
    //         } else {
    //             return redirect('/travel-blog')->with('error', "Something Wrong");
    //         }
    //     } else {
    //         return redirect('/travel-blog')->with('error', "Brand File not Found");
    //     }
    // }
}
