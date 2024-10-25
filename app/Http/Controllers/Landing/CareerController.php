<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\GetInTouchMail;
use App\Mail\CareerThankyouMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Apply;

class CareerController extends Controller
{
    public function index(){
        return view('landing.pages.career');
    }

    //Career Apply Form
    public function apply(){
        return view('landing.pages.career-apply');
    }

    public function sendApply(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'total_experience' => 'required',
            'applied_for' => 'required',
            "attach_cv" => "required|mimes:pdf,doc|max:10000",
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']
    ); 

        if ($attach_cv = $request->attach_cv) {
        
            $blogattach_cv = uniqid() . "." . $attach_cv->getClientOriginalExtension();
            $path = 'uploads/files/';
            $upload_attach_cv = $attach_cv->move($path, $blogattach_cv);
           
        }

        $apply = new Apply();
        $apply->first_name = $request['first_name'];
        $apply->last_name = $request['last_name'];
        $apply->email = $request['email'];
        $apply->mobile = $request['mobile'];
        $apply->total_experience = $request['total_experience'];
        $apply->applied_for = $request['applied_for'];
        $apply->upload = $blogattach_cv;
        $apply->message = (isset($request['message'])) ?$request['message'] : '' ;
        $apply->save();

        $data = $request->except('captcha');
        // $data = $request->all();
        $attachmentPath = public_path($path.''.$blogattach_cv);
        // Mail::to($to)->send(new  GetInTouchMail($data));

        // $to = ['info@intellivectra.tech', $request->email];

        //foreach($to as $key => $value) {
            Mail::to('info@intellivectra.tech')->send(new GetInTouchMail($data, $attachmentPath));
            Mail::to($request->email)->send(new CareerThankyouMail($data));
        //}
        
        return true;
    }
}
