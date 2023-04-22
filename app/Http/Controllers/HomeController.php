<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;
use App\Models\page;
use App\Models\partner;
use App\Models\service;
use App\Models\video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $video = video::where('id', '1')->first();
        $partners = partner::all()->where('status', 1);
        $categories = category::where('status', 1)->get();
        $services = service::where('status', '1')->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_categories = category::orderBy("serial")->where('status', 1)->where('featured', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        return view('index', compact('partners', 'services', 'categories', 'pages', 'video', 'featured_blogs', 'featured_categories'));
    }

    public function contact(){
        $services = service::where('status', '1')->get();
        $partners = partner::all()->where('status', 1);
        $categories = category::where('status', 1)->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        return view('contact', compact('partners', 'services', 'categories', 'pages', 'featured_blogs'));
    }

    public function service_details($slug){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $categories = category::where('status', 1)->get();
        $service = service::where('slug', $slug)->first();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        return view('service-details', compact('service', 'services', 'pages', 'featured_blogs', 'categories'));
    }
    
    public function page_details($slug){
        $services = service::where('status', '1')->get();
        $page = page::where('slug', $slug)->where('status', '1')->first();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $categories = category::where('status', 1)->get();
        return view('page', compact('page', 'pages', 'services', 'featured_blogs', 'categories'));
    }

    public function blogs(){
        $services = service::where('status', '1')->get();
        $partners = partner::where('status', '1')->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $blogs = blog::where('status', '1')->orderBy('created_at', 'desc')->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $categories = category::where('status', 1)->get();
        return view('blogs', compact('pages', 'services', 'partners', 'blogs', 'featured_blogs', 'categories'));
    }

    public function blog_details($slug){
        $services = service::where('status', '1')->get();
        $blog = blog::where('slug', $slug)->where('status', '1')->first();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $categories = category::where('status', 1)->get();
        return view('blog-details', compact('blog', 'pages', 'services', 'featured_blogs', 'categories'));
    }

    public function license(){
        return view('license');
    }

}
