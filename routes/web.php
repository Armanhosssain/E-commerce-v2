<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//admin route
// route::get('/admin',function(){
// 	return view('admin.dashboard.index');
// });
require('admin.php');
//blank-page route
route::get('/blank-page',function(){
	return view('admin.dashboard.blank-page');
});
//bootstrap components route
route::get('/bootstrap-components',function(){
	return view('admin.dashboard.bootstrap-components');
});
//charts route
route::get('/charts',function(){
	return view('admin.dashboard.charts');
});
//form components route
route::get('/form-components',function(){
	return view('admin.dashboard.form-components');
});
//form custom route
route::get('/form-custom',function(){
	return view('admin.dashboard.form-custom');
});
//form notification route
route::get('/form-notification',function(){
	return view('admin.dashboard.form-notification');
});
//form sample route
route::get('/form-sample',function(){
	return view('admin.dashboard.form-sample');
});
//page-calender route
route::get('/page-calender',function(){
	return view('admin.dashboard.page-calender');
});
//page-error route
route::get('/page-error',function(){
	return view('admin.dashboard.page-error');
});
//page-invoice route
route::get('/page-invoice',function(){
	return view('admin.dashboard.page-invoice');
});
//page-lockscreen route
route::get('/page-lockscreen',function(){
	return view('admin.dashboard.page-lockscreen');
});
//page-login route
route::get('/page-login',function(){
	return view('admin.dashboard.page-login');
});
//page-mailbox route
route::get('/page-mailbox',function(){
	return view('admin.dashboard.page-mailbox');
});
//page-user route
route::get('/page-user',function(){
	return view('admin.dashboard/page-user');
});
//read-mail route
route::get('/read-mail',function(){
	return view('admin.dashboard.read-mail');
});
//table-basic route
route::get('/table-basic',function(){
	return view('admin.dashboard.table-basic');
});
//table-data route
route::get('/table-data',function(){
	return view('admin.dashboard.table-data');
});
//ui-cards route
route::get('/ui-cards',function(){
	return view('admin.dashboard.ui-cards');
});
//widgets route
route::get('/widgets',function(){
	return view('admin.dashboard.widgets');
});
