<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Provide;

class AboutController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $freights = Provide::pluck('title', 'id')->all();

        return view('front.pages.about', compact(
            'services',
            'freights'
        ));
    }
}
