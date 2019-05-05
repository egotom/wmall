<?php
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Auth::routes();
Route::get('/admin', 'AdminController@overview');
Route::get('/admin/overview', 'AdminController@overview');
Route::get('/admin/album', 'AdminController@album');
Route::get('/admin/menu', 'AdminController@menu');
Route::get('/admin/menu/{id}', 'AdminController@menuEdit');
Route::get('/admin/store', 'AdminController@store');
Route::post('/admin/store', 'AdminController@storeAdd');
Route::put('/admin/store', 'AdminController@storeEdit');
Route::get('/admin/statistics', 'AdminController@statistics');
Route::get('/admin/setting', 'AdminController@setting');