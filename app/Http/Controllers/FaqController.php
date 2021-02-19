<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class FaqController extends Controller
{
    public function index()
    {
        $services = Service::all();  
         
        return view('front.pages.faq', compact(
            'services'
        ));
    }
}
