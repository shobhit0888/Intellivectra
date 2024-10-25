<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Blogs\BlogController as BlogsBlogController;
use App\Http\Controllers\Admin\Blogs\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResetPasswordRequestController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\CareerController;
use App\Http\Controllers\Landing\CaseStudyController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\OemsController;
use App\Http\Controllers\Landing\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

#############################################################
################ LANDING #####################################
#############################################################

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/getInTouch',[HomeController::class,'getInTouch'])->name('getInTouch');
Route::get('refresh_captcha', [HomeController::class,'refreshCaptcha'])->name('refresh_captcha');

Route::get('/about-us',[AboutController::class,'index'])->name('about');
Route::get('/careers',[CareerController::class,'index'])->name('career');
Route::get('/careers/apply',[CareerController::class,'apply'])->name('career.apply');
Route::post('/careers/apply',[CareerController::class,'sendApply'])->name('career.apply.send');

Route::get('/blogs',[BlogController::class,'index'])->name('blogs');
Route::get('/blogs/{category}/{slug}',[BlogController::class,'blogDetail'])->name('blogs-details');
Route::get('/contact-us',[ContactController::class,'index'])->name('contact');
Route::get('/case-study',[CaseStudyController::class,'index'])->name('case-study');
Route::get('/case-study/prayagraj-smart',[CaseStudyController::class,'pragrajIndex'])->name('case-study-pragraj');
Route::get('/case-study/weather-forecast',[CaseStudyController::class,'smartIndex'])->name('weather-forecast');

Route::get('/oems',[OemsController::class,'index'])->name('oems');
Route::get('/oems/page-2',[OemsController::class,'index2'])->name('oems-page2');

Route::get('/services/staffing',[ServicesController::class,'staffingIndex'])->name('services.staffing');
Route::get('/services/consulting',[ServicesController::class,'consultingIndex'])->name('services.consulting');
// Route::get('/services/cloud',[ServicesController::class,'cloudIndex'])->name('services.cloud');
Route::get('/services/backup',[ServicesController::class,'backupIndex'])->name('services.backup');
Route::get('/services/data',[ServicesController::class,'dataIndex'])->name('services.data');
Route::get('/services/survillence',[ServicesController::class,'survillenceIndex'])->name('services.survillence');
Route::get('/services/command',[ServicesController::class,'commandIndex'])->name('services.command');
Route::get('/services/security',[ServicesController::class,'securityIndex'])->name('services.security');
Route::get('/services/infrastucture',[ServicesController::class,'infrastuctureIndex'])->name('services.infrastucture');
Route::get('/services/cloud-transformation',[ServicesController::class,'transformation'])->name('services.cloud');
Route::get('/services/it-staffing',[ServicesController::class,'transformation2'])->name('services.itStaffing');
Route::get('/services/solutions',[ServicesController::class,'transformation3'])->name('services.technologySolutions');

Route::get('services/it-solutions',[ServicesController::class,'itsolutions'])->name('services.solutions');

Route::get('services/lifecycle',[ServicesController::class,'lifecycle'])->name('services.lifecycle');


Route::get('/privacy-policy',[HomeController::class,'privacy'])->name('privacy');
Route::get('/term-condition',[HomeController::class,'term'])->name('term');

#############################################################
################ Admin #####################################
#############################################################
//Admin Section
// Auth::routes();
Route::post('/register', [AuthController::class, 'createUser'])->name('register');
Route::get('/login', [AuthController::class, 'loginview'])->name('user-login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');

Route::get('/request-password', [ResetPasswordRequestController::class, 'reqForgotPasswordView'])->name("request-password-view");
Route::post('/request-password', [ResetPasswordRequestController::class, 'reqForgotPassword'])->name("request-password");
Route::get('/reset-password/{token}', [ResetPasswordRequestController::class, 'resetPasswordView'])->name("reset-password-view");
Route::post('/reset-password', [ResetPasswordRequestController::class, 'updateForgotPassword'])->name("reset-password");
Route::get('/{token}/get-email-token', [ResetPasswordRequestController::class, 'getEmailFromToken'])->name("get-email-token");
Route::post('/logout', [AuthController::class, 'logout'])->name("logout");


Route::prefix('admin/')->middleware('auth','web')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Blogs
    Route::resource('category',CategoryController::class);
    Route::resource('blogs',BlogsBlogController::class);
});
