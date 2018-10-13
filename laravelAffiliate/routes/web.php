<?php



Route::get('/', function () {return view('frontend.index');})->name('frontend.index');

Auth::routes();

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/checkgmail', function () { return view('email.checkgmail');})->name('email.checkgmail');

Route::get('/wallet', function () { return view('email.ewallet');})->name('email.ewallet');


Route::get('/home', 'HomeController@index')->name('home');


// ==================================frontend==========================================//

Route::get('/contactUs','BlogController@contact')->name('frontend.contactUs');
Route::get('/service', 'BlogController@service')->name('frontend.service');
Route::get('/news', 'BlogController@news')->name('frontend.news');
Route::get('/support', 'BlogController@support')->name('frontend.support');
Route::get('/about', 'BlogController@about')->name('frontend.aboutus');
Route::get('/faq', 'BlogController@faq')->name('frontend.faq');

// ==================================userbackend==========================================//
Route::get('/dashboard', 'HomeController@backend_dashboard')->name('backend.dashboard');

Route::get('/myAccount', 'HomeController@profile')->name('backend.myAccount');

Route::post('/update/{id}', 'HomeController@updateProfile')->name('backend.updateProfile');

Route::get('/setupInstroduction', 'HomeController@setupInstroduction')->name('backend.setupInstroduction');

Route::get('/notification', 'HomeController@notification')->name('backend.notification');

Route::get('/myreferrals', 'HomeController@myreferrals')->name('backend.myreferrals');

Route::get('/socialPromotion', 'HomeController@socialPromotion')->name('backend.socialPromotion');
//Route::get('/myreferrals', 'ReferralProgramController@getReferralProgram')->name('backend.myreferrals');




Route::get('/social', 'HomeController@social')->name('backend.social');

Route::get('/referralContest', 'HomeController@referralContest')->name('backend.referralContest');


// ==================================admin backend==========================================//

// Route::get('/admin', 'AdminController@admin_dashboard')->name('admin.dashboard');
Route::get('/admin', 'AdminController@admin_dashboard')->name('admin.summary');
Route::get('/lockscreen', 'AdminController@lockscreen')->name('admin.passwordchange.index');
Route::post('/passwordupdate/{id}', 'AdminController@passwordupdate')->name('admin.passwordchange.passwordupdate');

// ==================================Notification backend==========================================//

Route::get('/post/index', 'PostController@index')->name('admin.notification.create');
Route::post('/post/store', 'PostController@store')->middleware('auth');
Route::get('/post/{id}', 'PostController@show')->name('admin.notification.show')->middleware('auth');
Route::get('/post/{id}/edit', 'PostController@edit')->name('admin.notification.edit')->middleware('auth');
Route::post('/post/{id}/update', 'PostController@update')->middleware('auth');
Route::get('/post/{id}/delete','PostController@destroy')->middleware('auth')->name('admin.notification.delete');

Route::post('/comment/store', 'CommentController@store')->middleware('auth');
Route::post('/notification/get', 'NotificationController@get');
Route::post('/notification/read', 'NotificationController@read');



Route::get("/notifications/{id}/read","HomeController@readNotification");
Route::get('/home', 'HomeController@index')->name('home');

// ==================================blog backend==========================================//
Route::get('/blogs/index','BlogController@index')->name('admin.blog.index');
Route::get('/blog/create','BlogController@create')->name('admin.blog.create');
Route::post('/blog/store','BlogController@store')->middleware('auth');
Route::get('/blog/{id}', 'BlogController@show')->name('admin.blog.show')->middleware('auth');
Route::get('/blog/{id}/edit','BlogController@edit')->middleware('auth')->name('admin.blog.edit');
Route::post('/blog/{id}/update','BlogController@update')->middleware('auth');
Route::get('/blog/{id}/delete','BlogController@destroy')->middleware('auth')->name('admin.blog.delete');

// ========================================UserList========================================
Route::get('/userProfile','AdminController@userProfile')->name('admin.userProfile.index');


// ========================================UserManagement========================================
Route::get('/userManagement','AdminController@userManagement')->name('admin.usermanagement.index');
Route::get('/user/{id}','AdminController@userShow')->name('admin.userManagement.show')->middleware('auth');
Route::post('/user/{id}/update','AdminController@userupdate')->middleware('auth')->name('admin.userManagement.edit');
Route::post('/CheckValue','BonousController@get_qualified_loan');

// Route::post('changestatustask', array('as' => 'statusTask', 'uses' => 'BonousController@statusTask'));

// ========================================Referral and referralContestSetting========================================
Route::get('/referralSetting','ReferralSettingController@referralSetting')->name('admin.referralSetting.index');
Route::post('/referralUpdate','ReferralSettingController@referralUpdate')->name('admin.referralSetting.update');

//==========================================userguid=========================================
Route::get('file','AdminController@userguid')->name('admin.userguid.index');
Route::post('file','AdminController@filestore');
Route::get('/admin/file/{id}/delete','AdminController@destroy')->name('admin.files.delete')->middleware('auth');
// Route::get('file','FileController@create');
// Route::post('file','FileController@store');