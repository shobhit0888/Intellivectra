<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OemsController extends Controller
{
    public function index(){
        return view('landing.pages.oems');
    }

    public function index2(){
        return view('landing.pages.oems-page-2');
    }


}
