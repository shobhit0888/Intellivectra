<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Mail\GetInTouchMail;
use App\Mail\ThankyouMail;
use App\Models\Blog;
use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mews\Captcha\Facades\Captcha;

class HomeController extends Controller
{
    public function index(){

        $blogs = Blog::with('category','sub_category','banner','image')->latest()->get();
        return view('home',compact('blogs'));
    }


    // Privacy
    public function privacy(){
        return view('landing.pages.privacy');
    }


    // Term
    public function term(){
        return view('landing.pages.term');
    }

    //Get In Touch Mail
    public function getInTouch(Request $request)
    {
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required', 
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']
        );
        $apply = new Apply();
        $apply->first_name = $request['first_name'];
        $apply->last_name = $request['last_name'];
        $apply->email = $request['email'];
        $apply->mobile = $request['mobile'];
        $apply->message = (isset($request['message'])) ?$request['message'] : '' ;
        $apply->save();

        $data = $request->except('captcha');
        // $data = $request->all();
        // $to = ['info@intellivectra.tech', $request->email];
      
        //foreach($to as $key => $value) {
            Mail::to('info@intellivectra.tech')->send(new GetInTouchMail($data));
            Mail::to($request->email)->send(new ThankyouMail($data));
        //}

        return true;
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('math')]);
    }
}
