<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CompanyInformationController;
use App\Http\Controllers\Api\LeaderController;
use App\Http\Controllers\Api\ServiceHeroSectionController;
use App\Http\Controllers\Api\ExpertiseController;

// use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\GalleryController;

use App\Http\Controllers\Api\HeroSectionController;
use App\Http\Controllers\Api\VideoSectionController;
use App\Http\Controllers\Api\WhoWeAreController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CtaSectionController;
use App\Http\Controllers\Api\TestimonialController;


use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\BlogPostController;

use App\Http\Controllers\Api\ContactInformationController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/api')->controller(HomeController::class)->group(function () {
   


// Route::post('/contact-submit', [ContactListController::class, 'store']);


// homepage - final

Route::get('/hero-sections', [HeroSectionController::class, 'index']);
Route::get('/whoweare', [WhoWeAreController::class, 'index']);
Route::get('/video-section', [VideoSectionController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/features', [FeatureController::class, 'index']);
Route::get('/services/{category}', [ServiceController::class, 'byCategory']);
Route::get('/ctasection', [CtaSectionController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);

// aboutus - final
Route::get('/companyinformation', action: [CompanyInformationController::class, 'index']);
Route::get('/leaders', [LeaderController::class, 'index']);
Route::get('/expertise', [ExpertiseController::class, 'index']);

// services - final
Route::get('/service-hero-sections', [ServiceHeroSectionController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);

// projects - final
// Route::get('/clients', [ClientController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);

// blog - final
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/recent', [BlogController::class, 'recent']);
Route::get('/blog/category', [BlogController::class, 'byCategory']);
Route::get('/blog/category/{category}', [BlogController::class, 'byCategory']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

// contact - final
Route::get('/contact', [ContactInformationController::class, 'index']);

});


