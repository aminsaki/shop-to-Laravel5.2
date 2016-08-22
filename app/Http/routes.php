<?php

Route::get('/', 'HomeController@index');


Route::group(['middleware' => ['web']], function () {

    Route::get('about','HomeController@about');
    Route::get('learn','HomeController@learn');
    Route::get('onlinepayment','HomeController@onlinepayment');
    Route::get('faq','HomeController@faq');
    Route::get('admin','AdminController@index');
    Route::get('user','UserController@index');
    Route::post('contact','HomeController@insertcontent');
    Route::get('readmore/{id}','HomeController@readmore');
    Route::post('message','MessageController@insert');
    Route::get('serachs','HomeController@serach');


});


Route::get('clogin',function(){

    if(Auth::user())
    {
        if (Auth::user()->level === 'admin' ||Auth::user()->level ==='write') {

            return view('admins.index');
        } elseif (Auth::user()->level === 'user') {

            return  redirect()->back()->with(['title'=>'اطلاعات کاربر']);
        }
        else {
            return view('auth.login');
        }
    }
    else {
        return view('auth.login');

    }
});

Route::group(['midddleware'=>['auth']],function() {
    $this->get('login', 'AuthController@showLoginForm');
    $this->post('login', 'AuthController@login');
    $this->get('logout', 'AuthController@logout');
    // Registration Routes...
    $this->get('register', 'AuthController@showRegistrationForm');
    $this->post('register', 'AuthController@register');
    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'PasswordController@showResetForm');
    $this->post('password/email', 'PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'PasswordController@reset');
    Route::auth();
    ///users
    Route::get('user','User\UserController@index');
    Route::get('datashow','User\UserController@show');
    Route::get('formpassword','User\UserController@passwords');
    Route::post('savepassword','User\UserController@save');

});

Route::group(['middleware' => 'admin'] , function(){
   Route::get('admin','AdminController@index');
    ///ShowAboutcatpost
   Route::get('commit','CommitController@index');
   Route::post('commit','CommitController@insert');
   Route::get('deletecommit/{id}','CommitController@delete');
    //Showcontents
    Route::get('contact','ContactController@index');
    Route::get('contact/{id}','ContactController@show');
    Route::get('delcontact/{id}','ContactController@delete');
    Route::post('send','ContactController@sendemail');
    ///upload
    Route::get('upload','UploadController@index');
    Route::get('duploads/{id}','UploadController@delete');
    Route::post('sendup','UploadController@insert');
    Route::get('showimg','UploadController@showimg');
     ///adminusers
    Route::get('showuser','AdminuserController@index');
    Route::get('deleteuser/{id}','AdminuserController@delete');
    Route::post('saveuser','AdminuserController@saves');
    Route::get('userpass/{id}','AdminuserController@password');
    Route::post('chanepassword','AdminuserController@chanepassword');
  ///Porduct
    Route::get('porduct','PorductController@index');
    Route::post('porinsert','PorductController@insert');
    Route::get('porductshow','PorductController@show');
    Route::get('delproduct/{id}','PorductController@delete');
    Route::get('editproduct/{id}','PorductController@showporduct');
    Route::post('editproduct','PorductController@edit');
    Route::post('/snedusers','PorductController@content');
    ///catproduct
    Route::get('catproduct','CatproductController@index');
    Route::post('catsave','CatproductController@save');
    Route::get('catproduct/{id}','CatproductController@delete');
    Route::post('editcatproduct','CatproductController@edit');

    ///massej
    Route::get('mass/{id}','MessageController@index');
    Route::get('mass/delmass/{id}','MessageController@delete');
    Route::post('massjes','MessageController@update');

});


























