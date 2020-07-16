<?php

/*
|--------------------------------------------------------------------------
| Web Routes for PrestigeFood @Watterson
|--------------------------------------------------------------------------
|
*/
//
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index')->name('welcome');

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
Route::get('/about', 'HelpfulController@about')->name('about');
Route::get('/contact', 'HelpfulController@contact')->name('contact');
Route::get('/contribute', 'HelpfulController@contribute')->name('contribute');
Route::get('/privacy-policy', 'HelpfulController@privacy')->name('privacy-policy');
Route::get('/sitemap', 'HelpfulController@sitemap')->name('sitemap');

//Social Links
Route::get('/fb', 'Social\FacebookController@index')->name('fb');
Route::get('/tw', 'Social\TwitterController@index')->name('tw');
Route::get('/insta', 'Social\InstagramController@index')->name('insta');
Route::get('/link', 'Social\LinkedinController@index')->name('linkedin');

//Competition page
// Route::POST('/competitions/{$compId}', ['uses' => 'CompetitionController@getComp', 'as' => 'get-comp']);
Route::get('/competitions/{compId}', 'CompetitionController@getComp')->name('get-comp');

//Admin Console
//User interface management
Route::get('/console/ui-welcome', 'Admin\UiController@indexWelcome')->name('console-ui-welcome');
Route::get('/console/ui-account', 'Admin\UiController@indexAccount')->name('console-ui-account');
Route::get('/console/ui-comps', 'Admin\UiController@indexComp')->name('console-ui-comps');
Route::get('/console/ui-winners', 'Admin\UiController@indexWinners')->name('console-ui-winners');
Route::get('/console/ui-draws', 'Admin\UiController@indexDraws')->name('console-ui-draws');

//Users management
Route::get('/console/users', 'Admin\UserController@index')->name('console-users');
//Competitions
Route::get('/console/competitions', 'Admin\CompetitionController@index')->name('console-comps');
Route::get('/console/competitions/create', 'Admin\CompetitionController@create')->name('console-comps-create');
Route::POST('/console/competitions/create', 'Admin\CompetitionController@postCreate')->name('create-comp');
Route::get('/console/competitions/update', 'Admin\CompetitionController@update')->name('console-comps-update');
Route::get('/console/competitions/prizes', 'Admin\PrizeController@index')->name('console-comps-prizes');
Route::POST('/console/competitions/prizes', 'Admin\PrizeController@create')->name('create-prize');

Route::get('/console/competitions/suppliers', 'Admin\SupplierController@index')->name('console-comps-suppliers');
Route::POST('/console/competitions/suppliers', 'Admin\SupplierController@create')->name('create-supplier');

//Orders management
Route::get('/console/orders', 'Admin\OrderController@index')->name('console-orders');
