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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/','Frontend\FrontendController@index');
Route::get('/about-us','Frontend\FrontendController@aboutus')->name('about.us');
Route::get('/contact-us','Frontend\FrontendController@contactus')->name('contact.us');
Route::get('/news-events/details/{id}','Frontend\FrontendController@newsdetails')->name('news.event.details');
Route::get('/our/mission','Frontend\FrontendController@ourmission')->name('our.mission');
Route::get('/our/vission','Frontend\FrontendController@ourvission')->name('our.vission');
Route::get('/our/news','Frontend\FrontendController@ournews')->name('our.news');
Route::post('/contact/store','Frontend\FrontendController@contactstore')->name('contact.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
	
	Route::prefix('users')->group(function(){
	Route::get('/view','backend\UserController@view')->name('users.view');
	Route::get('/add','backend\UserController@add')->name('users.add');
	Route::post('/store','backend\UserController@store')->name('users.store');
	Route::get('/edit/{id}','backend\UserController@edit')->name('users.edit');
	Route::post('/update/{id}','backend\UserController@update')->name('users.update');
	Route::get('/delete/{id}','backend\UserController@delete')->name('users.delete');
	
});

Route::prefix('profiles')->group(function(){
	Route::get('/view','backend\ProfileController@view')->name('profiles.view');
	Route::get('/edit','backend\ProfileController@edit')->name('profiles.edit');
	Route::post('/store','backend\ProfileController@update')->name('profiles.update');
	Route::get('/password/view','backend\ProfileController@passwordview')->name('profiles.password.view');
	Route::post('/password/update','backend\ProfileController@passwordupdate')->name('profiles.password.update');
});

Route::prefix('logos')->group(function(){
	Route::get('/view','backend\LogoController@view')->name('logos.view');
	Route::get('/add','backend\LogoController@add')->name('logos.add');
	Route::post('/store','backend\LogoController@store')->name('logos.store');
	Route::get('/edit/{id}','backend\LogoController@edit')->name('logos.edit');
	Route::post('/update/{id}','backend\LogoController@update')->name('logos.update');
	Route::get('/delete/{id}','backend\LogoController@delete')->name('logos.delete');
	
});

Route::prefix('banners')->group(function(){
	Route::get('/view','backend\BannerController@view')->name('banners.view');
	Route::get('/add','backend\BannerController@add')->name('banners.add');
	Route::post('/store','backend\BannerController@store')->name('banners.store');
	Route::get('/edit/{id}','backend\BannerController@edit')->name('banners.edit');
	Route::post('/update/{id}','backend\BannerController@update')->name('banners.update');
	Route::get('/delete/{id}','backend\BannerController@delete')->name('banners.delete');
	
});

Route::prefix('sliders')->group(function(){
	Route::get('/view','backend\SliderController@view')->name('sliders.view');
	Route::get('/add','backend\SliderController@add')->name('sliders.add');
	Route::post('/store','backend\SliderController@store')->name('sliders.store');
	Route::get('/edit/{id}','backend\SliderController@edit')->name('sliders.edit');
	Route::post('/update/{id}','backend\SliderController@update')->name('sliders.update');
	Route::get('/delete/{id}','backend\SliderController@delete')->name('sliders.delete');
	
});

Route::prefix('missions')->group(function(){
	Route::get('/view','backend\MissionController@view')->name('missions.view');
	Route::get('/add','backend\MissionController@add')->name('missions.add');
	Route::post('/store','backend\MissionController@store')->name('missions.store');
	Route::get('/edit/{id}','backend\MissionController@edit')->name('missions.edit');
	Route::post('/update/{id}','backend\MissionController@update')->name('missions.update');
	Route::get('/delete/{id}','backend\MissionController@delete')->name('missions.delete');
	
});

Route::prefix('vissions')->group(function(){
	Route::get('/view','backend\VissionController@view')->name('vissions.view');
	Route::get('/add','backend\VissionController@add')->name('vissions.add');
	Route::post('/store','backend\VissionController@store')->name('vissions.store');
	Route::get('/edit/{id}','backend\VissionController@edit')->name('vissions.edit');
	Route::post('/update/{id}','backend\VissionController@update')->name('vissions.update');
	Route::get('/delete/{id}','backend\VissionController@delete')->name('vissions.delete');
	
});

Route::prefix('news_events')->group(function(){
	Route::get('/view','backend\News_eventController@view')->name('news_events.view');
	Route::get('/add','backend\News_eventController@add')->name('news_events.add');
	Route::post('/store','backend\News_eventController@store')->name('news_events.store');
	Route::get('/edit/{id}','backend\News_eventController@edit')->name('news_events.edit');
	Route::post('/update/{id}','backend\News_eventController@update')->name('news_events.update');
	Route::get('/delete/{id}','backend\News_eventController@delete')->name('news_events.delete');
	
});

Route::prefix('services')->group(function(){
	Route::get('/view','backend\ServiceController@view')->name('services.view');
	Route::get('/add','backend\ServiceController@add')->name('services.add');
	Route::post('/store','backend\ServiceController@store')->name('services.store');
	Route::get('/edit/{id}','backend\ServiceController@edit')->name('services.edit');
	Route::post('/update/{id}','backend\ServiceController@update')->name('services.update');
	Route::get('/delete/{id}','backend\ServiceController@delete')->name('services.delete');
	
});

Route::prefix('contacts')->group(function(){
	Route::get('/view','backend\ContactController@view')->name('contacts.view');
	Route::get('/add','backend\ContactController@add')->name('contacts.add');
	Route::post('/store','backend\ContactController@store')->name('contacts.store');
	Route::get('/edit/{id}','backend\ContactController@edit')->name('contacts.edit');
	Route::post('/update/{id}','backend\ContactController@update')->name('contacts.update');
	Route::get('/delete/{id}','backend\ContactController@delete')->name('contacts.delete');
	Route::get('/communicate/','backend\ContactController@viewcommunicate')->name('contacts.communicate');
	Route::get('/communicate/delete/{id}','backend\ContactController@deletecommunicate')->name('contacts.communicate.delete');
});

Route::prefix('abouts')->group(function(){
	Route::get('/view','backend\AboutController@view')->name('abouts.view');
	Route::get('/add','backend\AboutController@add')->name('abouts.add');
	Route::post('/store','backend\AboutController@store')->name('abouts.store');
	Route::get('/edit/{id}','backend\AboutController@edit')->name('abouts.edit');
	Route::post('/update/{id}','backend\AboutController@update')->name('abouts.update');
	Route::get('/delete/{id}','backend\AboutController@delete')->name('abouts.delete');
	
});


	});


	


