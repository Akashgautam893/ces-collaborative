<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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



/*---------------- Admin Start----------------------------------------------*/

Route::get('/admin', function () {
    return view('admin.welcome');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/admin/home/addbanner', [HomeController::class, 'addbanner']);
Route::post('/admin/home/updatebanner/{id}', [HomeController::class, 'updatebanner']);
Route::get('/admin/home/deletebanner/{id}', [HomeController::class, 'deletebanner']);

Route::post('/admin/home/addFeaturedServices', [HomeController::class, 'addFeaturedServices']);
Route::post('/admin/home/updateFeaturedServices/{id}', [HomeController::class, 'updateFeaturedServices']);
Route::get('/admin/home/deleteFeaturedServices/{id}', [HomeController::class, 'deleteFeaturedServices']);

Route::post('/admin/home/addFeaturedServicesCatelog', [HomeController::class, 'addFeaturedServicesCatelog']);
Route::get('/admin/home/editFeaturedServicesCatelog/{id}', [HomeController::class, 'editFeaturedServicesCatelog']);
Route::post('/admin/home/updateFeaturedServicesCatelog/{id}', [HomeController::class, 'updateFeaturedServicesCatelog']);
Route::get('/admin/home/deleteFeaturedServicesCatelog/{id}', [HomeController::class, 'deleteFeaturedServicesCatelog']);

Route::post('/admin/home/addImageInFsCatelog', [HomeController::class, 'addImageInFsCatelog']);
Route::get('/admin/home/editImageInFsCatelog/{id}', [HomeController::class, 'editImageInFsCatelog']);
Route::post('/admin/home/updateImageInFsCatelog/{id}', [HomeController::class, 'updateImageInFsCatelog']);
Route::get('/admin/home/deleteImageInFsCatelog/{id}', [HomeController::class, 'deleteImageInFsCatelog']);

Route::get('/admin/home/catelogImages/{slug}', [HomeController::class, 'catelogImages']);

Route::post('/admin/home/addAboutUs', [HomeController::class, 'addAboutUs']);
Route::post('/admin/home/updateAboutUs/{id}', [HomeController::class, 'updateAboutUs']);
Route::get('/admin/home/deleteAboutUs/{id}', [HomeController::class, 'deleteAboutUs']);

Route::post('/admin/home/addPortfolio', [HomeController::class, 'addPortfolio']);
Route::get('/admin/home/editPortfolio/{id}', [HomeController::class, 'editPortfolio']);
Route::post('/admin/home/updatePortfolio/{id}', [HomeController::class, 'updatePortfolio']);
Route::get('/admin/home/deletePortfolio/{id}', [HomeController::class, 'deletePortfolio']);

Route::post('/admin/home/addtestimonial', [HomeController::class, 'addtestimonial']);
Route::get('/admin/home/edittestimonial/{id}', [HomeController::class, 'edittestimonial']);
Route::post('/admin/home/updatetestimonial/{id}', [HomeController::class, 'updatetestimonial']);
Route::get('/admin/home/deletetestimonial/{id}', [HomeController::class, 'deletetestimonial']);

Route::post('/admin/home/addSlidingImage', [HomeController::class, 'addSlidingImage']);
Route::get('/admin/home/editSlidingImage/{id}', [HomeController::class, 'editSlidingImage']);
Route::post('/admin/home/updateSlidingImage/{id}', [HomeController::class, 'updateSlidingImage']);
Route::get('/admin/home/deleteSlidingImage/{id}', [HomeController::class, 'deleteSlidingImage']);

Route::post('/admin/home/addServicesOffer', [HomeController::class, 'addServicesOffer']);
Route::get('/admin/home/editServicesOffer/{id}', [HomeController::class, 'editServicesOffer']);
Route::post('/admin/home/updateServicesOffer/{id}', [HomeController::class, 'updateServicesOffer']);
Route::get('/admin/home/deleteServicesOffer/{id}', [HomeController::class, 'deleteServicesOffer']);


Route::post('/admin/home/addBlog', [HomeController::class, 'addBlog']);
Route::get('/admin/home/editBlog/{id}', [HomeController::class, 'editBlog']);
Route::post('/admin/home/updateBlog/{id}', [HomeController::class, 'updateBlog']);
Route::get('/admin/home/deleteBlog/{id}', [HomeController::class, 'deleteBlog']);

Route::post('/admin/wedding/addWeddingBanner', [HomeController::class, 'addWeddingBanner']);
Route::get('/admin/wedding/editWeddingBanner/{id}', [HomeController::class, 'editWeddingBanner']);
Route::post('/admin/wedding/updateWeddingBanner/{id}', [HomeController::class, 'updateWeddingBanner']);
Route::get('/admin/wedding/deleteWeddingBanner/{id}', [HomeController::class, 'deleteWeddingBanner']);

// Route::post('/admin/wedding/addWeddingContent', [HomeController::class, 'addWeddingContent']);
// Route::get('/admin/wedding/editWeddingContent/{id}', [HomeController::class, 'editWeddingContent']);
Route::post('/admin/wedding/updateWeddingContent/{id}', [HomeController::class, 'updateWeddingContent']);
// Route::get('/admin/wedding/deleteWeddingContent/{id}', [HomeController::class, 'deleteWeddingContent']);

Route::post('/admin/home/addWeddingImage', [HomeController::class, 'addWeddingImage']);
Route::get('/admin/home/editWeddingImage/{id}', [HomeController::class, 'editWeddingImage']);
Route::post('/admin/home/updateWeddingImage/{id}', [HomeController::class, 'updateWeddingImage']);
Route::get('/admin/home/deleteWeddingImage/{id}', [HomeController::class, 'deleteWeddingImage']);

// Route::post('/admin/wedding/addWeddingBanner', [HomeController::class, 'addWeddingBanner']);
// Route::get('/admin/wedding/editWeddingBanner/{id}', [HomeController::class, 'editWeddingBanner']);
Route::post('/admin/wedding/updateIconicBanner/{id}', [HomeController::class, 'updateIconicBanner']);
// Route::get('/admin/wedding/deleteWeddingBanner/{id}', [HomeController::class, 'deleteWeddingBanner']);

Route::post('/admin/wedding/addWeddingVideo', [HomeController::class, 'addWeddingVideo']);
Route::get('/admin/wedding/editWeddingVideo/{id}', [HomeController::class, 'editWeddingVideo']);
Route::post('/admin/wedding/updateWeddingVideo/{id}', [HomeController::class, 'updateWeddingVideo']);
Route::get('/admin/wedding/deleteWeddingVideo/{id}', [HomeController::class, 'deleteWeddingVideo']);


// Route::post('/admin/photography/addPhotographyBanner', [HomeController::class, 'addPhotographyBanner']);
// Route::get('/admin/photography/editPhotographyBanner/{id}', [HomeController::class, 'editPhotographyBanner']);
Route::post('/admin/photography/updatePhotographyBanner/{id}', [HomeController::class, 'updatePhotographyBanner']);
// Route::get('/admin/photography/deletePhotographyBanner/{id}', [HomeController::class, 'deletePhotographyBanner']);


// Route::post('/admin/photography/addPhotographyBanner', [HomeController::class, 'addPhotographyBanner']);
// Route::get('/admin/photography/editPhotographyBanner/{id}', [HomeController::class, 'editPhotographyBanner']);
Route::post('/admin/photography/updatePhotographyFeature/{id}', [HomeController::class, 'updatePhotographyFeature']);
// Route::get('/admin/photography/deletePhotographyBanner/{id}', [HomeController::class, 'deletePhotographyBanner']);


Route::post('/admin/travel-blog/addtravel-blog', [HomeController::class, 'addtravelblog']);
Route::get('/admin/travel-blog/edittravel-blog/{id}', [HomeController::class, 'edittravelblog']);
Route::post('/admin/travel-blog/updatetravel-blog/{id}', [HomeController::class, 'updatetravelblog']);
Route::get('/admin/travel-blog/deletetravel-blog/{id}', [HomeController::class, 'deletetravelblog']);

Route::get('/admin/travel-blog/catelogCity/{id}', [HomeController::class, 'showCityDetails']);

Route::post('/admin/travel-blog/addCityDetails', [HomeController::class, 'addCityDetails']);
Route::get('/admin/travel-blog/editCityDetails/{id}', [HomeController::class, 'editCityDetails']);
Route::post('/admin/travel-blog/updateCityDetails/{id}', [HomeController::class, 'updateCityDetails']);
Route::get('/admin/travel-blog/deleteCityDetails/{id}', [HomeController::class, 'deleteCityDetails']);

/*---------------- Admin End----------------------------------------------*/



/*---------------- Front Start----------------------------------------------*/
Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/service', [FrontController::class, 'service']);
Route::get('/blogs', [FrontController::class, 'blogs']);
Route::get('/photography', [FrontController::class, 'photography']);
Route::get('/weddings', [FrontController::class, 'weddings']);
Route::get('/travel-blog', [FrontController::class, 'travelblog']);
Route::get('/videography', [FrontController::class, 'videography']);
Route::get('/documentaries', [FrontController::class, 'documentaries']);
Route::get('/small_business_owner_profiles', [FrontController::class, 'small_business_owner_profiles']);
Route::get('/contact', [FrontController::class, 'contact']);


Route::view('/Japan', 'front.Japan');
Route::view('/us_cities', 'front.us_cities');
Route::view('/amsterdam', 'front.amsterdam');
Route::view('/copenhagen', 'front.copenhagen');
Route::view('/contact', 'front.contact');
Route::view('/5_desirable_qualities_a_professional_photographer_must_have', 'front.5_desirable_qualities_a_professional_photographer_must_have');
Route::view('/5_ways_you_can_become_a_successful_travel_blogger', 'front.5_ways_you_can_become_a_successful_travel_blogger');
Route::view('/proven_tips_for_promoting_your_small_business_from_online_entrepreneurs', 'front.proven_tips_for_promoting_your_small_business_from_online_entrepreneurs');

/*---------------- Front End----------------------------------------------*/
