<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "<h1> Cleared!</h1>";
});

Route::get('/', 'FrontendController@index')->name('index');

// Backend
Route::middleware(['auth','admin_type'])->group(function () {

    Route::get('/admin', 'HomeController@admin')->name('admin');
    // left
    // profile image
    Route::get('left/', 'BackendController@left')->name('left');
    Route::post('addPicture/', 'BackendController@addPicture')->name('addPicture');
    Route::get('pictureStatus/{id}/{tab}', 'BackendController@pictureStatus')->name('pictureStatus');
    Route::get('pictureDelete/{id}/{tab}', 'BackendController@pictureDelete')->name('pictureDelete');

    // home
    Route::get('home/', 'BackendController@home')->name('home');
    Route::get('createHome/', 'BackendController@createHome')->name('createHome');
    Route::post('addHome/', 'BackendController@addHome')->name('addHome');
    Route::get('editHome/{id}', 'BackendController@editHome')->name('editHome');
    Route::post('editHome2/', 'BackendController@editHome2')->name('editHome2');

    // Product
    Route::get('product/', 'ProductController@product')->name('product');

    Route::post('addProductCategory/', 'ProductController@addProductCategory')->name('addProductCategory');

    Route::post('addProduct/', 'ProductController@addProduct')->name('addProduct');
    Route::get('editProduct/', 'ProductController@editProduct')->name('editProduct');
    Route::post('editProduct2/', 'ProductController@editProduct2')->name('editProduct2');

    //video
    Route::get('video/', 'VideoController@index')->name('video');
    Route::post('add_video/', 'VideoController@store')->name('add_video');

    

    // Usefull link
    Route::get('useful/', 'FooterController@useful')->name('useful');
    Route::post('addUseful/', 'FooterController@addUseful')->name('addUseful');

    // Leadership
    Route::get('leadership/', 'FooterController@leadership')->name('leadership');
    Route::post('addLeadership/', 'FooterController@addLeadership')->name('addLeadership');

    // Social site
    Route::get('social/', 'FooterController@social')->name('social');

    Route::post('addSocialSite/', 'FooterController@addSocialSite')->name('addSocialSite');
    Route::get('socialStatus/{id}/{tab}', 'FooterController@socialStatus')->name('socialStatus');
    Route::post('editSocialSite/', 'FooterController@editSocialSite')->name('editSocialSite');
    Route::get('socialDelete/{id}/{tab}', 'FooterController@socialDelete')->name('socialDelete');

    // Contact
    Route::get('contact/', 'FooterController@contact')->name('contact');

    Route::post('addContact/', 'FooterController@addContact')->name('addContact');
    Route::post('editContact/', 'FooterController@editContact')->name('editContact');

    // Service page
    Route::get('service/', 'admin\ServiceController@service')->name('service');

    // Service
    Route::post('addService/', 'admin\ServiceController@addService')->name('addService');
    Route::get('editService/', 'admin\ServiceController@editService')->name('editService');
    Route::post('editService2/', 'admin\ServiceController@editService2')->name('editService2');

    // Real-Estate
    Route::post('addRealEstate/', 'admin\ServiceController@addRealEstate')->name('addRealEstate');
    Route::get('editRealEstate/', 'admin\ServiceController@editRealEstate')->name('editRealEstate');
    Route::post('editRealEstate2/', 'admin\ServiceController@editRealEstate2')->name('editRealEstate2');

    // Professional network page
    Route::get('professional-network/', 'admin\ProfessionalNetworkController@professionalNetwork')->name('professional-network');

    // Professional network
    Route::post('addProfessionalNetwork/', 'admin\ProfessionalNetworkController@addProfessionalNetwork')->name('addProfessionalNetwork');
    Route::get('editProfessionalNetwork/', 'admin\ProfessionalNetworkController@editProfessionalNetwork')->name('editProfessionalNetwork');
    Route::post('editProfessionalNetwork2/', 'admin\ProfessionalNetworkController@editProfessionalNetwork2')->name('editProfessionalNetwork2');

    // Professional network service
    Route::post('addProfessionalNetService/', 'admin\ProfessionalNetworkController@addProfessionalNetService')->name('addProfessionalNetService');
    Route::get('editProfessionalNetService/', 'admin\ProfessionalNetworkController@editProfessionalNetService')->name('editProfessionalNetService');
    Route::post('editProfessionalNetService2/', 'admin\ProfessionalNetworkController@editProfessionalNetService2')->name('editProfessionalNetService2');

    //Agent
    Route::get('agent/', 'BackendController@agent')->name('agent');
    Route::post('addAgent/', 'BackendController@addAgent')->name('addAgent');

    //subscribtion
    Route::get('/subscribtion-list', 'BackendController@subscribtionList')->name('subscribtionList');
});

Route::middleware(['auth','user_type'])->prefix('/user')->as('user.')->group(function () {
    Route::get('/dashboard', 'UserDashboardController@dashboard')->name('dashboard');
    Route::get('/profile', 'UserDashboardController@profile')->name('profile');
    Route::post('/update-profile', 'UserDashboardController@updateProfile')->name('updateProfile');
    Route::get('kribtree-video/', 'VideoController@allVideo')->name('allVideo');
});
//Front page route
Route::get('/home-details/{slug}','FrontendController@homeDetails')->name('homeDetails');
Route::get('who-we-are/', 'FrontendController@who_we_are')->name('who-we-are');
Route::get('service-page/', 'FrontendController@service_page')->name('service-page');
Route::get('professional-network-page/', 'FrontendController@professional_network')->name('professional-network-page');
Route::get('products/', 'FrontendController@products')->name('products');
Route::get('buy', 'ProductController@buy')->name('buy');
Route::get('professional-finder', 'ProductController@agent_finder')->name('agent-finder');

//cart
Route::get('/cart', 'CartController@cart')->name('cart');
Route::post('/add-to-cart', 'CartController@addToCart');
Route::post('/update-cart', 'CartController@updateCart')->name('updateCart');
Route::get('/remove-from-cart/{rowId}', 'CartController@removeFromCart')->name('removeFromCart');
Route::get('/destroy-cart', 'CartController@destroyCart')->name('destroyCart');

Route::post('/subscribtion', 'FrontendController@subscribtion')->name('subscribtion');
// All status change
Route::get('/status/update', 'HomeController@changeStatus')->name('status');
Route::get('itemStatus/{id}/{model}/{tab}', 'BackendController@itemStatus')->name('itemStatus');

//Delete
Route::get('itemDelete/{id}/{model}/{tab}', 'BackendController@itemDelete')->name('itemDelete');
Route::get('delete/{model}/{id}/{tab}', 'CommonCodeController@delete')->name('delete');

// Any title
Route::post('addAnyTitle/', 'BackendController@addAnyTitle')->name('addAnyTitle');
Route::post('editAnyTitle/', 'BackendController@editAnyTitle')->name('editAnyTitle');

// Order Change
Route::get('orderBy/{model}/{id}/{targetId}/{tab}', 'BackendController@orderBy')->name('orderBy');

// Botman
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
