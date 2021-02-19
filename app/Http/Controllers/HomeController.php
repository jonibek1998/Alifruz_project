<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provide;
use App\Team;
use App\News;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
        $providers = Provide::take(6)->get();
        $teams = Team::all();
        $news = News::take(3)->get();
        $services = Service::all(); 
        $freights = Provide::pluck('title', 'id')->all();
        return view('front.home', compact(
            'providers',
            'teams',
            'news',
            'services',
            'freights'
        ));
    }

    public function show($slug)
    {
        $services = Service::all();
        $news = News::where('slug', $slug)->firstOrFail();

        return view('front.pages.news', compact(
            'services',
            'news'
        ));
    }
}
