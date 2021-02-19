<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $services = Service::all(); 
        return view('front.pages.contact', compact(
            'services'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'subject' => 'nullable',
            'text' => 'nullable'
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Your contact is created successfully');
    }
}
