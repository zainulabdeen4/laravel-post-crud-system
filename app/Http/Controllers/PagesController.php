<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'index';
        return view('pages.index')->with('index',$title);

    }
    public function about(){
        $about = 'about';
        return view('pages.about')->with('about',$about);

    }
    public function services(){
        $data = array(
            'title' => 'index',
            'services' => ['programming','java','c#']
        );
        return view('pages.services') ->with($data);

    }
}
