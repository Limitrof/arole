<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
/*Route::get('/language/{lang}',function($lang){
    //session()->put('locale',$lang);
    app()->setLocale($lang);
    session()->put('locale',$lang);
    return app()->getLocale().' <a href="/organizations">organizations</a>';
    //return redirect()->back();
});*/
Route::get('/home', 'HomeController@index');
Route::get('organizations', 'OrganizationController@index');
Route::get('organization/{id}',  ['uses' => 'OrganizationController@getbyid']);

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
   /* CRUD::resource('user', 'Admin\UserCrudController');
    CRUD::resource('task', 'Admin\TaskCrudController');
    CRUD::resource('service', 'Admin\ServiceCrudController');
    CRUD::resource('tcd_article', 'Admin\Tcd_articleCrudController');
    CRUD::resource('tcd_art_categorie', 'Admin\Tcd_art_categorieCrudController');
    CRUD::resource('tcd_car', 'Admin\Tcd_carCrudController');
    CRUD::resource('service_book', 'Admin\ServiceBookCrudController');
    CRUD::resource('brand', 'Admin\BrandCrudController');*/
    CRUD::resource('organization', 'Admin\OrganizationCrudController');
    CRUD::resource('organizationtranslation', 'Admin\OrganizationTranslationCrudController');
   /* CRUD::resource('occupation', 'Admin\OccupationCrudController');
    CRUD::resource('organizationoccupation', 'Admin\OrganizationoccupationCrudController');
    CRUD::resource('order', 'Admin\OrderCrudController');*/
    //CRUD::resource('role', 'Admin\RoleCrudController');
    //CRUD::resource('userrole', 'Admin\UserroleCrudController');

});
