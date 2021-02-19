<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscribeController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        ]);

        $sub = Subscription::create($request->all());
        $sub->setProvideId($request->get('provide_id'));

        return back()->with('success', 'Thanks for your request!');
    }
}
