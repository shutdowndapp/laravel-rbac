<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register',function(){
    return view('register');
})->name('register');;

Route::group(['namespace' => 'Rbac'],function(){
    Route::post('/post_register',[
        'uses' => 'RbacController@postRegister',
        'as' => 'post.register'
    ]);

    Route::post('/login',[
        'uses' => 'RbacController@postLogin',
        'as' => 'login'
    ]);

    Route::get('/user/list',[
        'uses' => 'RbacController@userList',
        'as' => 'user.list'
    ]);

    Route::get('/user/edit/{user_id}',[
        'uses' => 'RbacController@userEdit',
        'as' => 'user.edit'
    ]);

    Route::get('/user/delete/{user_id}',[
        'uses' => 'RbacController@userDelete',
        'as' => 'user.delete'
    ]);
    Route::post('/user/edit',[
        'uses' => 'RbacController@postEdit',
        'as' => 'post.edit'
    ]); 
   
});