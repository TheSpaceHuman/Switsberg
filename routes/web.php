<?php

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
// PAGES
Route::get('/', 'PagesController@index')->name('page.index');
Route::get('about', 'PagesController@about')->name('page.about');
Route::get('contact', 'PagesController@contact')->name('page.contact');
Route::get('blog', 'PagesController@blog')->name('page.blog');
Route::get('blog/category/{slug}', 'PagesController@category')->name('page.blog.category');
Route::get('blog/post/{slug}', 'PagesController@post')->name('page.blog.post');
Route::get('products', 'PagesController@products')->name('page.products');
Route::get('product/{slug}', 'PagesController@product')->name('page.products.product');
Route::get('search', 'PagesController@search')->name('page.search');

// TESTING
Route::get('test', 'PagesController@test')->name('test');
//Route::get('/{slug}', function ($slug){
//  $page = Page::where('slug', $slug)->firstOrFail();
//  return view('pages.index', compact($page));
//});

// ACTIONS
Route::post('blog/post/comment/store', 'CommentController@store')->name('action.comment.store');
Route::post('subscribe/store', 'PagesController@subscribe')->name('action.subscribe.store');
Route::post('email/about-feedback', 'MailController@aboutFeedback')->name('action.mail.aboutFeedback');
Route::post('email/contact-feedback', 'MailController@contactFeedback')->name('action.mail.contactFeedback');







Route::group(['prefix' => 'admin'], function () {
  Voyager::routes();
});
