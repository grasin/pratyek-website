<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function trust()
    {
        return view('pages.trust');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacyPolicy()
    {
        return view('pages.legal.privacy-policy');
    }

    public function terms()
    {
        return view('pages.legal.terms');
    }

    public function dpdp()
    {
        return view('pages.legal.dpdp');
    }
}
