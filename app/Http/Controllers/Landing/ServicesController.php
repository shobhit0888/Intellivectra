<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public $data;
    public function __construct()
    {

    }

    //Staffing services
    public function staffingIndex(){
        $data['title']='staffing';
        return view('landing.pages.services.staffing-services',compact('data'));
    }

    //consulting services
    public function consultingIndex(){
        $data['title']='consulting';
        return view('landing.pages.services.consulting-services',compact('data'));
    }

    //cloud services
    public function cloudIndex(){
        $data['title']='cloud';
        return view('landing.pages.services.cloud-services-solutions',compact('data'));
    }

     //backup services
    public function backupIndex(){
        $data['title']='backup';
        return view('landing.pages.services.backup-archieve-solutions',compact('data'));
    }

     //data management solutions
    public function dataIndex(){
        $data['title']='data';
        return view('landing.pages.services.data-management-solutions',compact('data'));
    }

     //survillence solutions
    public function survillenceIndex(){
        $data['title']='survillence';
        return view('landing.pages.services.survillence-solutions',compact('data'));
    }

    //command control solutions
    public function commandIndex(){
        $data['title']='command';
        return view('landing.pages.services.command-control-solutions',compact('data'));
    }

    //security solutions
    public function securityIndex(){
        $data['title']='security';
        return view('landing.pages.services.security-solutions',compact('data'));
    }

    //infrastucture solutions
    public function infrastuctureIndex(){
        $data['title']='infrastucture';
        return view('landing.pages.services.infrastucture-solutions',compact('data'));
    }
      public function transformation(){
        $data['title']='cloud transformation';
        return view('landing.components.pages.cloud_transform',compact('data'));
    }
      public function transformation2(){
        $data['title']='itStaffing';
        return view('landing.components.pages.it_staffing_services',compact('data'));
    }
      public function transformation3(){
        $data['title']='technologySolutions';
        return view('landing.components.pages.technologies_solutions',compact('data'));
    }

    public function itsolutions(){
        $data['title']='itSolutions';
        return view('landing.pages.services.it-solutions',compact('data'));
    }
}
