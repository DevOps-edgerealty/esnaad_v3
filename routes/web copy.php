<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Mail\DemoEmail;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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


use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return redirect()->to('http://esnaad.com/en');
});

Route::get('/public', function () {
    return redirect()->to('http://esnaad.com/en');
});

Route::get('/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        return redirect()->route('esnaad.home');
    }
 
    App::setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->route('esnaad.home');    
});

Route::group(['prefix' => '{locale}', 'middleware' => 'web'], function() {
    Route::get('', [FrontEndController::class, 'home'])->name('esnaad.home');
    Route::get('/about-us', [FrontEndController::class, 'about'])->name('esnaad.about');

});



// Route::get('/', [FrontEndController::class, 'home'])->name('esnaad.home');

// Route::get('/about-us', [FrontEndController::class, 'about'])->name('esnaad.about');

// Route::get('/communities/{slug}', [FrontEndController::class, 'communities_details'])->name('esnaad.communities');

// Route::get('/developments/{slug}', [FrontEndController::class, 'developments_details'])->name('esnaad.developments');

// Route::get('/projects', [FrontEndController::class, 'projects'])->name('esnaad.projects');

// Route::get('/project-details', [FrontEndController::class, 'developments'])->name('esnaad.developments.comingsoon');

// Route::get('/communities', [FrontEndController::class, 'communities'])->name('esnaad.communities.comingsoon');

// Route::get('/community-details', [FrontEndController::class, 'community_details'])->name('esnaad.community.details');

// Route::get('/media-center', [FrontEndController::class, 'media_center'])->name('esnaad.media_center');

// Route::get('/contact', [FrontEndController::class, 'contact'])->name('esnaad.contact');

// Route::get('/invest-in-dubai', [FrontEndController::class, 'invest'])->name('esnaad.invest_in_dubai');

// Route::get('/constructions', [FrontEndController::class, 'constructions'])->name('esnaad.constructions');
// Route::get('/constructions/{slug}', [FrontEndController::class, 'constructions_details'])->name('esnaad.constructions.detail');

// Route::get('/news', [FrontEndController::class, 'news'])->name('esnaad.news');
// Route::get('/news/{slug}', [FrontEndController::class, 'news_details'])->name('esnaad.news.detail');

// Route::post('/communities/register-your-interest', [FrontEndController::class, 'communities_registration'])->name('esnaad.communities.registration');


// Route::get('/terms-and-conditions', [FrontEndController::class, 'terms_and_conditions'])->name('website.terms-and-conditions');

// Route::get('/privacy-and-policy', [FrontEndController::class, 'privacy_and_policy'])->name('website.privacy-and-policy');


// Route::get('/agency-registration', [FrontEndController::class, 'agency_registration'])->name('agency.registration');

// Route::post('/agency-registration-post', [FrontEndController::class, 'agency_registration_post'])->name('agency.registration.post');

// Route::post('/subscription-form', [FrontEndController::class, 'subscription_form'])->name('subscription.form');

// Route::post('/contact-form-post', [FrontEndController::class, 'contact_form_post'])->name('contact.form.post');

// Route::post('/project-detail-inquiry', [FrontEndController::class, 'project_detail_inquiry'])->name('project.detail.inquiry');

// Route::post('/project-detail-brochure-download', [FrontEndController::class, 'project_detail_brochure_download'])->name('project.detail.brochure.download');

// Route::get('/careers', [FrontEndController::class, 'careers'])->name('careers');

// Route::get('/career-registration', [FrontEndController::class, 'career_registration'])->name('career.registration');

// Route::post('/career-registration-post-v1', [FrontEndController::class, 'career_registration_post_v1'])->name('career.registration.post.v1');

// Route::post('/career-registration-post-v2', [FrontEndController::class, 'career_registration_post_v2'])->name('career.registration.post.v2');




Route::get('/thankyou', function() {
    return view('thankyou');
});


Route::get('/email', function() {
    return view('emails.verificationEmail');
});


require __DIR__.'/auth.php';
