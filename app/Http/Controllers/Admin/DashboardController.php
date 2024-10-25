<?php

namespace App\Http\Controllers\Admin;

use App\Events\OrderNotifyEvent;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Team;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class DashboardController extends Controller
{
    //
    public function index(){


        if(Auth::user()){

            return view('admin.dashboard');
        }
        return view('admin.auth.login');
    }

}
