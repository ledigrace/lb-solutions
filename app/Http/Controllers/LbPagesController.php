<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LbPagesController extends Controller
{
    function index()
    {
        return view('pages.index');
    }

    function about()
    {
        return view('pages.aboutpage');    
    }

    function services()
    {
        return view('pages.services');    
    }

    function projects()
    {
        return view('pages.projectspage');
    }
    function contact()
    {
        return view('pages.contact');    
    }
    function privacypolicy()
    {
        return view('pages.privacypolicy');
    }
    function termsconditions()
    {
        return view('pages.termsconditions');    
    }
}
