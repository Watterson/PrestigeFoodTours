<?php

/*
|--------------------------------------------------------------------------
| Web Routes for PrestigeFood @Watterson
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/latest', 'CompetitionController@index')->name('latest');

//Auth routes
Auth::routes();

//NavBar links
Route::get('/competitions', 'CompetitionController@index')->name('competitions');
Route::get('/winners', 'WinnerController@index')->name('winners');
Route::get('/draws', 'DrawController@index')->name('draws');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/account', 'AccountController@index')->name('account');
Route::get('/console', 'Admin\ConsoleController@index')->name('console');

//Quick links
Route::get('/latest', 'QuicklinksController@index')->name('latest');
Route::get('/selling-fast', 'QuicklinksController@sellingfast')->name('selling-fast');
Route::get('/recent-winners', 'QuicklinksController@recentwinners')->name('recent-winners');
Route::get('/vote-next', 'QuicklinksController@votenext')->name('vote-next');
Route::get('/reveiw', 'QuicklinksController@reveiw')->name('reveiw');
Route::get('/share', 'QuicklinksController@share')->name('share');

//Helpful Links
Route::get('/about', 'HelpfullinksController@about')->name('about');
Route::get('/contact', 'HelpfullinksController@contact')->name('contact');
Route::get('/contribute', 'HelpfullinksController@contribute')->name('contribute');
Route::get('/privacy-policy', 'HelpfullinksController@privacy')->name('privacy-policy');
Route::get('/sitemap', 'HelpfullinksController@sitemap')->name('sitemap');

//Social Links
Route::get('/fb', 'FacebookController@index')->name('fb');
Route::get('/tw', 'TwitterController@index')->name('tw');
Route::get('/insta', 'InstagramController@index')->name('insta');
Route::get('/link', 'LinkedinController@index')->name('link');

//Admin Console
//User interface management
Route::get('/console/ui-welcome', 'Admin\UiController@indexWelcome')->name('console-ui-welcome');
Route::get('/console/ui-account', 'Admin\UiController@indexAccount')->name('console-ui-account');
Route::get('/console/ui-comps', 'Admin\UiController@indexComps')->name('console-ui-comps');
Route::get('/console/ui-winners', 'Admin\UiController@indexWinners')->name('console-ui-winners');
Route::get('/console/ui-draws', 'Admin\UiController@indexDraws')->name('console-ui-draws');

//Users management
Route::get('/console/users', 'Admin\UserController@index')->name('console-users');
//Competitions
Route::get('/console/competitions', 'Admin\CompetitionController@index')->name('console-comps');
Route::get('/console/competitions/create', 'Admin\CompetitionController@create')->name('console-comps-create');
Route::get('/console/competitions/update', 'Admin\CompetitionController@update')->name('console-comps-update');
Route::get('/console/competitions/prizes', 'Admin\PrizeController@index')->name('console-comps-prizes');
Route::get('/console/competitions/suppliers', 'Admin\SuppliersController@index')->name('console-comps-suppliers');

//Orders management
Route::get('/console/orders', 'Admin\OrderController@index')->name('console-orders');
