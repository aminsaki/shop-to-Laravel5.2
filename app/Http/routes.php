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

//header page index 
Route::get('/', 'HomeController@index');

//header  page  website
Route::group(['middleware' => ['web']], function () {

    Route::get('about','HomeController@about');
    Route::get('learn','HomeController@learn');
    Route::get('onlinepayment','HomeController@onlinepayment');
    Route::get('faq','HomeController@faq');
    Route::get('admin','AdminController@index');
    Route::get('user','UserController@index');
    Route::post('contact','HomeController@insertcontent');


});
///header page  validtion logins
Route::group(['midddleware'=>['Auth']],function() {
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
     Route::get('user','UserController@index');
    Route::auth();
});


///header  page admin if pasword and username  true 
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


});

/// header  page uses  if  password youe true
Route::group(['middleware' => 'auth'] , function(){
 
  Route::get('user','UserController@index');
});

///header page users  or admins label  admin or users
 Route::get('clogin',function(){

    if(Auth::user()->level==='admin'):
        $title='صفحه مدیریت';
        return view('admins.index',compact('title'));
     elseif(Auth::user()->level==='user'):
       return view('users.index');
     else:
     Route::get('login', 'AuthController@showLoginForm');
    endif; 

 });


























