<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', 'ArticleController@homepage');


    Route::get('/albums/{id?}', 'AlbumController@albums');
    Route::get('/articles/{id?}', 'ArticleController@index');
    Route::get('/article/{article}', 'ArticleController@show' );
    Route::get('/album/{id?}', 'AlbumController@album');
    Route::post('/album/img', 'AlbumController@img');

    Route::group(['middleware' => ['auth','authuser']], function () {

        Route::get('/admin','AdminController@index');
        Route::post('/admin/thumbnail','AdminController@thumbnail');
        Route::post('/admin/thumbnail2','AdminController@thumbnail2');


        Route::get('/admin/articles/{id?}', 'ArticleController@article_list');
        Route::get('/admin/article/create', 'ArticleController@create');
        Route::post('/admin/article/store', 'ArticleController@store');
        Route::get('/admin/article/{id}/edit', 'ArticleController@edit');
        Route::post('/admin/article/{id}/update', 'ArticleController@update');
        Route::get('/admin/article/{id}/destroy', 'ArticleController@destroy');

        Route::get('/admin/display', 'DisplayController@index');
        Route::post('/admin/display/store', 'DisplayController@store');
        Route::get('/admin/display/banner/{id?}', 'DisplayController@banner');

        Route::get('/admin/album/{id?}/show', 'AlbumController@show');
        Route::get('/admin/album/create', 'AlbumController@create');
        Route::post('/admin/album/store', 'AlbumController@store');
        Route::get('/admin/album/{id}/edit', 'AlbumController@edit');
        Route::post('/admin/album/{id}/update', 'AlbumController@update');
        Route::get('/admin/album/upload/{id?}', 'AlbumController@upload');
        Route::post('/admin/album/upload/uploadstore','AlbumController@uploadstore');
        Route::get('/admin/album/{id}/destroy', 'AlbumController@destroy');
        Route::get('/admin/albums/{id?}', 'AlbumController@index');

        Route::get('/admin/video/create', 'VideoController@create');
        Route::post('/admin/video/store', 'VideoController@store');
        Route::get('/admin/video/{id}/edit', 'VideoController@edit');
        Route::post('/admin/video/{id}/update', 'VideoController@update');
        Route::post('/admin/video/upload/uploadstore','VideoController@uploadstore');
        Route::get('/admin/video/{id}/destroy', 'VideoController@destroy');
        Route::get('/admin/videos/{id?}/', 'VideoController@index');

        Route::get('/admin/users/', 'UserController@index');
        Route::get('/admin/user/create', 'UserController@create');
        Route::get('/admin/user/{id}/edit', 'UserController@edit');
        Route::post('/admin/user/{id}/update', 'UserController@update');
        Route::post('/admin/user/store', 'UserController@store');
        Route::get('/admin/user/{id}/destroy', 'UserController@destroy');

    });


});
