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

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
    function()
{
    // Home routes
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home.index'
    ]);

//Contact routes
    Route::get('/contact', [
        'uses' => 'ContactController@index',
        'as' => 'contact.index'
    ]);

    Route::post('/contact', [
        'uses' => 'ContactController@store',
        'as' => 'contact.store'
    ]);

//About routes
    Route::get('/over-ons', [
        'uses' => 'AboutController@index',
        'as' => 'about.index'
    ]);

//Brochure routes
    Route::get('/folder', [
        'uses' => 'BrochureController@index',
        'as' => 'brochure.index'
    ]);

//Services routes
        Route::get('/automatisering', [
            'uses' => 'ServicesController@automation',
            'as' => 'services.automation'
        ]);

        Route::get('/wifi', [
            'uses' => 'ServicesController@wifi',
            'as' => 'services.wifi'
        ]);

		    Route::get('/cloud', [
            'uses' => 'ServicesController@cloud',
            'as' => 'services.cloud'
        ]);

        Route::get('/consultancy', [
            'uses' => 'ServicesController@consultancy',
            'as' => 'services.consultancy'
        ]);

        Route::get('/reparaties', [
            'uses' => 'ServicesController@repair',
            'as' => 'services.repair'
        ]);

        Route::get('/voip', [
            'uses' => 'ServicesController@voip',
            'as' => 'services.voip'
        ]);

        Route::get('/ictbeheer', [
            'uses' => 'ServicesController@management',
            'as' => 'services.management'
        ]);

//Information routes
        Route::get('/privacyverklaring', [
            'uses' => 'InformationController@privacy',
            'as' => 'information.privacy'
        ]);

        Route::get('/cookies', [
            'uses' => 'InformationController@cookie',
            'as' => 'information.cookie'
        ]);

        Route::get('/referenties', [
            'uses' => 'InformationController@references',
            'as' => 'information.references'
        ]);

        Route::get('/verwerkersovereenkomst', [
            'uses' => 'InformationController@processor',
            'as' => 'information.processor'
        ]);

        //Wifi scan routes
        Route::get('/wifi-scan', [
            'uses' => 'WifiController@index',
            'as' => 'wifiScan.index'
        ]);

        Route::post('/wifi-scan', [
            'uses' => 'WifiController@store',
            'as' => 'wifiScan.store'
        ]);


});
