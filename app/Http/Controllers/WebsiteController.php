<?php

namespace Proactys\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Proactys\Mail\Contact;

class WebsiteController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.home');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('website.contact');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function sendContact(Request $request)
    {
        $data = $request->except('_token');

        Mail::to('info@proactys.swiss')->send(new Contact($data));

        $request->session()->flash('success', 'Mail sent!');

        return view('website.contact');
    }
}
