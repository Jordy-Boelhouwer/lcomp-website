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

//About routes
    Route::get('/over-ons', [
        'uses' => 'AboutController@index',
        'as' => 'about.index'
    ]);

    Route::get('/werkwijze', [
        'uses' => 'AboutController@methods',
        'as' => 'about.methods'
    ]);

    Route::get('/referenties', [
        'uses' => 'AboutController@references',
        'as' => 'about.references'
    ]);

//Brochure routes
    Route::get('/folder', [
        'uses' => 'BrochureController@index',
        'as' => 'brochure.index'
    ]);

    Route::get('folder-pagina-1', [
        'uses' => 'BrochureController@showPagina1',
        'as' => 'brochure.pagina-1'
    ]);

    Route::get('folder-pagina-2', [
        'uses' => 'BrochureController@showPagina2',
        'as' => 'brochure.pagina-2'
    ]);

//Syscal routes
        Route::get('/applicatiebeheer', [
            'uses' => 'SyscalController@application',
            'as' => 'syscal.application'
        ]);

        Route::get('/systeembeheer', [
            'uses' => 'SyscalController@systems',
            'as' => 'syscal.systems'
        ]);

        Route::get('/calamiteitenbeheer', [
            'uses' => 'SyscalController@calamities',
            'as' => 'syscal.calamities'
        ]);

        Route::get('/serviceovereenkomsten', [
            'uses' => 'SyscalController@service',
            'as' => 'syscal.service'
        ]);

        Route::get('/tarieven', [
            'uses' => 'SyscalController@prices',
            'as' => 'syscal.prices'
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
});



