<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $about = 'About us';
        return view('pages.about')->with('about', $about);
    }

    public function services() {
        
        $title = null;
        $services = null;
        
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO', 'Bamchika']
        ];
        return view('pages.services')->with($data);
    }
}