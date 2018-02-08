<?php

Route::group(['prefix' =>'admin', 'namespace' => 'App\Modules\Admin\Controllers'],function (){
   Route::get('/test', function (){
       return view('Admin::pages.product.index');
   });
   Route::get('/login', function (){
        return view('Admin::auth.login');
   });

    Route::get('/register', function (){
        return view('Admin::auth.register');
    });

    Route::get('/edit', function (){
        return view('Admin::pages.product.edit');
    });

    Route::get('/profile', function(){
       return view('Admin::pages.profile.index');
    });
});