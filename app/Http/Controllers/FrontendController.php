<?php

namespace App\Http\Controllers;

use App\Models\file;
use App\Models\category;
use App\Models\banner;
use App\Models\main;
use App\Models\team;
use App\Models\service;
use Illuminate\Http\Request;
use Auth;
class FrontendController extends Controller
{
    public function index()
    {
        $banner=banner::all();
        $team = team::all();
        $main=main::all();

        return view('frontend.index')->with(compact('banner','team','main',));
    }
    public function about()
    {
        return view('frontend.aboutus');
    }
    public function services()
    {
        $service=service::all();
        return view('frontend.services')->with(compact('service'));
    }
    public function gallery()
    {
        $file = file::all();
        $category=category::all();
        return view('frontend.gallery')->with(compact('file','category'));
    }
    public function blog()
    {
        return view('frontend.blog');
    } public function contact()
    {
        return view('frontend.contact');
    }
}
