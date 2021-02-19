<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Provide;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get();
        $freights = Provide::pluck('title', 'id')->all();

        return view('front.pages.services', compact(
            'services',
            'freights'
        ));
    }

    public function view($slug)
    {
        $services = Service::all();
        $service = Service::where('slug', $slug)->firstOrFail();
        // $service = Service::where('slug', $slug)->first();
        return view('front.pages.service_details', compact(
            'services',
            'service'
        ));
    }
}
