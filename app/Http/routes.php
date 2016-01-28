<?php

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('/articles/{id?}', 'ArticleController@index');
    Route::post('/article/fileupload','ArticleController@fileUpload');
    Route::post('/Album/thumbnail','AlbumController@thumbnail');

    Route::get('/article/{article}', function (App\Article $article) {
        return view('articles.show',['article'=>$article]);
    });


    Route::group(['middleware' => 'auth'], function () {


        Route::get('/admin','AdminController@index');
        Route::get('/admin/articles/{id?}', 'ArticleController@article_list');
        Route::get('/admin/article/create', 'ArticleController@create');
        Route::post('/admin/article/store', 'ArticleController@store');
        Route::get('/admin/article/{id}/edit', 'ArticleController@edit');
        Route::post('/admin/article/{id}/update', 'ArticleController@update');
        Route::get('/admin/article/{id}/destroy', 'ArticleController@destroy');

        Route::get('/admin/categorys/', 'CategoryController@index');
        Route::post('/admin/category/store', 'CategoryController@store');

        Route::get('/admin/display', 'DisplayController@index');
        Route::post('/admin/display/store', 'DisplayController@store');

        Route::get('/admin/albums/{id?}', 'AlbumController@index');
        Route::get('/admin/album/{id?}/show', 'AlbumController@show');
        Route::get('/admin/album/create', 'AlbumController@create');
        Route::post('/admin/album/store', 'AlbumController@store');
        Route::get('/admin/album/upload/{id?}', 'AlbumController@upload');
        Route::post('/admin/album/upload/uploadstore','AlbumController@uploadstore');

        Route::get('/admin/users/', 'UserController@index');
        Route::get('/admin/user/create', 'UserController@create');
        Route::get('/admin/user/roles', 'UserController@roles');
        Route::post('/admin/user/role/store', 'UserController@role_store');
        Route::get('/admin/user/role/{id}/edit', 'UserController@role_edit');
        Route::post('/admin/user/role/{id}/update', 'UserController@role_update');
        Route::get('/admin/user/role/{id}/destroy', 'UserController@role_destroy');


    });

});
