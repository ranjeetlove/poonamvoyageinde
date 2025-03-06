<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CommentsController;
use App\Http\Controllers\frontend\ContactusController;
use App\Http\Controllers\frontend\DestinationController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PolicyController;
use App\Http\Controllers\frontend\TailorMadeTripController;
use App\Http\Controllers\admin\AdminController;

use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminAboutController;
use App\Http\Controllers\admin\AdminRegionController;
use App\Http\Controllers\admin\AdminTestimonialController;
use App\Http\Controllers\admin\AdminTourController;
use App\Http\Controllers\admin\AdminVideoController;
use App\Http\Controllers\admin\ContactController;
use Illuminate\Support\Facades\Artisan;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('route:clear');
    return "Cache is cleared222";
});
Route::get('migrate',function(){
    Artisan::call('migrate');
    return "Migrate Completed!";
});
Route::get('optimize',function(){
    Artisan::call('optimize');
    return "optimized!";
});

Route::redirect('/index.php', '/', 301);
Route::redirect('/public/', '/', 301);
Route::redirect('/sejour-au-rajasthan-en-inde-du-nord/', '/', 301);
Route::redirect('/embed/', '/', 301);
Route::redirect('/sejour-au-', '/', 301);
Route::redirect('/public/index.php/comments-details', '/', 301);
Route::redirect('/public/comments-details', '/', 301);

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/qui-sommes-nous', [HomeController::class, 'aboutus'])->name('aboutus');


Route::get('/blogs', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'blogdetails'])->name('blogdetails');

Route::get('/commentaires', [CommentsController::class, 'comments'])->name('comments');
Route::get('/comments-details/{slug}', [CommentsController::class, 'commentsdetails'])->name('commentsdetails');

Route::get('/contactez-nous', [ContactusController::class, 'contactus'])->name('contactus');
Route::post('/contactez-nous2', [ContactusController::class, 'mail'])->name('mail');
Route::post('/contactez-nous1', [ContactusController::class, 'mail1'])->name('mail1');


Route::get('/destination-details/{slug1}/{slug2}', [DestinationController::class, 'destinationdetails'])->name('destinationdetails');
Route::get('/destination-list/{slug}', [DestinationController::class, 'destinationlist'])->name('destinationlist');
Route::get('/destination-list', [DestinationController::class, 'allTour'])->name('allTour');

Route::get('/privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-and-conditions', [PolicyController::class, 'termsandconditions'])->name('termsandconditions');

Route::get('/voyage-sur-mesure-en-inde', [TailorMadeTripController::class, 'tailormadetrip'])->name('tailormadetrip');
Route::get('/newLandingPage', [HomeController::class, 'newLandingPage'])->name('newLandingPage');
Route::get('/landing-page', [HomeController::class, 'landingpage'])->name('landingpage');
Route::post('/contact',[HomeController::class,'store'])->name('store');
Route::get('admin/login',[AdminController::class,'login'])->name('admin-login');
Route::post('/admin/login',[AdminController::class,'authenticate']);
Route::get('/logout',[AdminController::class,'logout'])->name('admin-logout');
Route::get('/thankyou', function () {
    return view('frontend.thankyou');
})->name('thankyou');


Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['auth'])->group(function() {

Route::get('/home',[AdminController::class,'dashboard'])->name('dashboard');

//Banner

Route::get('/banners',[BannerController::class,'index'])->name('banners');
Route::get('/banners/create',[BannerController::class,'create']);
Route::post('/banners/store',[BannerController::class,'store']);
Route::get('/banners/edit',[BannerController::class,'edit'])->name('banner-edit');
Route::post('/banners/edit',[BannerController::class,'update']);
Route::post('/banners/destroy',[BannerController::class,'destroy'])->name('banner-destroy');


Route::get('/blog',[AdminBlogController::class,'index'])->name('admin-blog');
Route::get('/blog/create',[AdminBlogController::class,'create']);
Route::post('/blog/store',[AdminBlogController::class,'store']);
Route::get('/blog/edit',[AdminBlogController::class,'edit'])->name('blog-edit');
Route::post('/blog/edit',[AdminBlogController::class,'update']);
Route::post('/blog/destroy',[AdminBlogController::class,'destroy'])->name('blog-destroy');


Route::get('/about',[AdminAboutController::class,'index'])->name('about');
Route::get('/about/create',[AdminAboutController::class,'create']);
Route::post('/about/store',[AdminAboutController::class,'store']);
Route::get('/about/edit',[AdminAboutController::class,'edit'])->name('about-edit');
Route::post('/about/edit',[AdminAboutController::class,'update']);
Route::post('/about/destroy',[AdminAboutController::class,'destroy'])->name('about-destroy');

Route::get('/region',[AdminRegionController::class,'index'])->name('region');
Route::get('/region/create',[AdminRegionController::class,'create']);
Route::post('/region/store',[AdminRegionController::class,'store']);
Route::get('/region/edit',[AdminRegionController::class,'edit'])->name('region-edit');
Route::post('/region/edit',[AdminRegionController::class,'update']);
Route::post('/region/destroy',[AdminRegionController::class,'destroy'])->name('region-destroy');


Route::get('/testimonial',[AdminTestimonialController::class,'index'])->name('testimonial');
Route::get('/testimonial/create',[AdminTestimonialController::class,'create']);
Route::post('/testimonial/store',[AdminTestimonialController::class,'store']);
Route::get('/testimonial/edit',[AdminTestimonialController::class,'edit'])->name('testimonial-edit');
Route::post('/testimonial/edit',[AdminTestimonialController::class,'update']);
Route::post('/testimonial/destroy',[AdminTestimonialController::class,'destroy'])->name('testimonial-destroy');


Route::get('/tour',[AdminTourController::class,'index'])->name('tour');
Route::get('/tour/create',[AdminTourController::class,'create']);
Route::post('/tour/store',[AdminTourController::class,'store']);
Route::get('/tour/edit',[AdminTourController::class,'edit'])->name('tour-edit');
Route::post('/tour/edit',[AdminTourController::class,'update']);
Route::post('/tour/destroy',[AdminTourController::class,'destroy'])->name('tour-destroy');


Route::get('/video',[AdminVideoController::class,'index'])->name('video');
Route::get('/video/create',[AdminVideoController::class,'create']);
Route::post('/video/store',[AdminVideoController::class,'store']);
Route::get('/video/edit',[AdminVideoController::class,'edit'])->name('video-edit');
Route::post('/video/edit',[AdminVideoController::class,'update']);
Route::post('/video/destroy',[AdminVideoController::class,'destroy'])->name('video-destroy');

Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact/delete',[ContactController::class,'delete'])->name('contact-delete');

});
});
