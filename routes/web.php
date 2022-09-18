<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\GuestController@Articles');
Route::get('/articles','App\Http\Controllers\GuestController@ArticlesFilter');
Route::get('/details/{id}','App\Http\Controllers\GuestController@detailsArticle');
Route::get('/publier','App\Http\Controllers\GuestController@publierAnnonce')->middleware('auth');
Route::post('/publierAnnonce','App\Http\Controllers\GuestController@Annonce')->middleware('auth');
Route::get('/wishlist/{id}','App\Http\Controllers\GuestController@addToWishlist')->middleware('auth');
Route::get('/wishlistUser/{email}','App\Http\Controllers\GuestController@wishList')->middleware('auth');
Route::post('/search','App\Http\Controllers\GuestController@search');
Route::post('/searchArticle','App\Http\Controllers\GuestController@searchArticle');
Route::post('/wish/guest','App\Http\Controllers\GuestController@WishGuest');
Route::get('/article-categorie/{cat}','App\Http\Controllers\GuestController@searchCat');
Route::get('/article-ville/{ville}','App\Http\Controllers\GuestController@searchVille');
Route::post('/guest/modifier','App\Http\Controllers\GuestController@modifierProfile');
Route::get('/about','App\Http\Controllers\GuestController@QuiSommesNous');
Route::get('/supprimerWish/{id}','App\Http\Controllers\GuestController@SupprimerWish' )->middleware('auth');
Route::get('/blogs-read/{id}','App\Http\Controllers\GuestController@blogDetails');
Route::get('/guest/modifier','App\Http\Controllers\GuestController@modifierProfile');
Route::post('/send','App\Http\Controllers\MailController@sendMail');
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->middleware('auth','admin');;
Route::get('/contact','App\Http\Controllers\GuestController@Contact');
Route::get('/guest/modifier-profile',function(){
    return view('guest.modify-profile');
});
Route::get('/admin/profile',function(){
    return view('admin.modify-profile');
});
Route::get('/blog','App\Http\Controllers\GuestController@Blogs');
Route::get('/guest/dashboard',function(){
    return view('guest.dashboard');
});

Route::get('/admin/annonces','App\Http\Controllers\AdminController@ListeAnnonces');
Route::get('/admin/supprimerAnnonce/{id}/delete','App\Http\Controllers\AdminController@SupprimerAnnonce' )->middleware('auth');;
Route::get('/admin/blogs','App\Http\Controllers\AdminController@ListeBlogs' );
Route::post('/admin/AddBlog','App\Http\Controllers\AdminController@AddBlog' )->middleware('auth');
Route::post('/admin/modifyBlog','App\Http\Controllers\AdminController@ModifyBlog' )->middleware('auth');;
Route::get('/admin/supprimerBlog/{id}/delete','App\Http\Controllers\AdminController@SupprimerBlog' )->middleware('auth');
Route::post('/admin/modifier','App\Http\Controllers\AdminController@modifierProfile');

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
