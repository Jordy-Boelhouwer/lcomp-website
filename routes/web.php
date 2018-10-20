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

    Route::get(LaravelLocalization::transRoute('routes.about'), function() {
    })->uses('AboutController@index')->name('about.index');

    Route::get(LaravelLocalization::transRoute('routes.brochure'), function() {
    })->uses('BrochureController@index')->name('brochure.index');

//Services routes
        Route::get(LaravelLocalization::transRoute('routes.automation'), function() {
        })->uses('ServicesController@automation')->name('services.automation');

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

        Route::get(LaravelLocalization::transRoute('routes.repairs'), function() {
        })->uses('ServicesController@repair')->name('services.repair');

        Route::get('/voip', [
            'uses' => 'ServicesController@voip',
            'as' => 'services.voip'
        ]);

        Route::get(LaravelLocalization::transRoute('routes.management'), function() {
        })->uses('ServicesController@management')->name('services.management');

//Information routes
        Route::get(LaravelLocalization::transRoute('routes.management'), function() {
        })->uses('ServicesController@management')->name('services.management');

        Route::get(LaravelLocalization::transRoute('routes.privacy-statement'), function() {
        })->uses('InformationController@privacy')->name('information.privacy');

        Route::get(LaravelLocalization::transRoute('routes.cookie-statement'), function() {
        })->uses('InformationController@cookie')->name('information.cookie');

        Route::get(LaravelLocalization::transRoute('routes.references'), function() {
        })->uses('InformationController@references')->name('information.references');

        Route::get(LaravelLocalization::transRoute('routes.processor-agreement'), function() {
        })->uses('InformationController@processor')->name('information.processor');

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
