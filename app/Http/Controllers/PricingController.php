<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Price;
use App\Provide;

class PricingController extends Controller
{
    public function index()
    {
        $services = Service::all(); 
        $pricings = Price::all();
        $freights = Provide::pluck('title', 'id')->all();

        return view('front.pages.pricing', compact(
            'services',
            'pricings',
            'freights'
        ));
    }
}
