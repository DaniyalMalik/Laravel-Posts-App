<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Index Page';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function services()
    {
        // dd('Working!');
        $data = array('title' => 'Service Page', 'Services' => ['Web Design', 'SEO', 'Web Development']);
        return view('pages.services')->with($data);
    }

    public function about()
    {
        $title = 'About Page';
        return view('pages.about', compact('title'));
    }
}
