<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function IndexPage(){
        $title = "Welcome to Programming Language";
        $infors = array(
            "title" => "Welcome to Programming Langugage",
            "name" => "Bui Vinh Thai",
        );
     
        // return view('pages.home', compact('infors'));
        return view('pages.home')->with($infors);
    }

    public function AboutPage(){
        return view('pages.about');
    }

    public function ServicesPage(){
        $datas = array(
            "title" => "Services",
            "services" => ["Programming", "Web Design", "SEO"]
        );
        
        return view('pages.services')->with('datas', $datas);

    }
  
}