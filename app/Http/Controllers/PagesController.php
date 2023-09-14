<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Master');
    }
    
    public function about()
    {
        return view('layouts.about');
    }
    public function contact()
    {
        return view('layouts.contact');
    }

}
