<?php

Route::group(['middleware'=>['auth']], function(){

    Route::redirect('/', 'devices');
    Route::resource('funcionaries', 'FuncionaryController');
    Route::resource('ubications', 'UbicationController');
    Route::resource('dependences', 'DependenceController');
    Route::resource('elements', 'ElementController');
    Route::resource('brands', 'BrandController');
    Route::get('devices/{id}/traceabilities/create', 'DeviceController@traceabilitiescreate')->name('traceabilities.create');
    Route::post('devices/traceabilities', 'DeviceController@traceabilitiesstore')->name('traceabilities.store');
    Route::resource('devices', 'DeviceController');
    Route::get('reports', 'ReportController@index')->name('reports.index');
    Route::get('all', 'ReportController@all')->name('report.all');
    Route::get('report/{id}/life', 'ReportController@life')->name('report.life');
    Route::get('report/{id}/{type}', 'ReportController@mant')->name('report.mant');
    Route::resource('computerinactives', 'ComputerinactiveController');
});

Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
