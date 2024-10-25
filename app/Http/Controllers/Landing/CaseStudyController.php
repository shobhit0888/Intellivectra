<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index(){
        return view('landing.pages.case-study');
    }

     //infrastucture solutions
     public function pragrajIndex(){
        $data['title']='pragraj';
        return view('landing.pages.case-study.prayagraj-smart',compact('data'));
    }

    public function smartIndex(){
        $data['title']='smart-city';
        return view('landing.pages.case-study.weather-forecast',compact('data'));
    }
}
