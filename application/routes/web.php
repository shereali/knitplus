<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');	
Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login','Auth\LoginController@login');
Route::post('register','Auth\RegisterController@register');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::group(['namespace'=>'FrontView'],function(){

	Route::get('/', 'frontViewController@index');
	Route::get('company_profile', 'frontViewController@company_profile');
	Route::get('all_division', 'frontViewController@all_division');
	Route::get('management', 'frontViewController@management');
	Route::get('our_products', 'frontViewController@our_products');
	Route::get('tshirt', 'frontViewController@tshirt');
	Route::get('polo_tshirt', 'frontViewController@polo_tshirt');
	Route::get('kids_item', 'frontViewController@kids_item');
	Route::get('our_bankers', 'frontViewController@our_bankers');
	Route::get('particulars', 'frontViewController@particulars');
	Route::get('dyeing', 'frontViewController@dyeing');
	Route::get('knitting', 'frontViewController@knitting');
	Route::get('sewing_and_finishing', 'frontViewController@sewing_and_finishing');
	Route::get('contact_us', 'frontViewController@contact_us');
	Route::get('certificate', 'frontViewController@certificate');
	Route::get('valued_customer', 'frontViewController@valued_customer');
	Route::get('embroidery', 'frontViewController@embroidery');
	Route::get('printing', 'frontViewController@printing');
	Route::get('jacket', 'frontViewController@jacket');
	Route::get('trouser', 'frontViewController@trouser');
	Route::get('ladies_item', 'frontViewController@ladies_item');
	Route::get('tank_top', 'frontViewController@tank_top');
	Route::get('all_over_printing', 'frontViewController@all_over_printing');
	Route::get('sister_concern', 'frontViewController@sister_concern');
	Route::get('compliance', 'frontViewController@compliance');
	Route::get('go_practice', 'frontViewController@go_practice');
	Route::get('cutting', 'frontViewController@cutting');
	Route::get('carton', 'frontViewController@carton');
	Route::get('accessories', 'frontViewController@accessories');
	Route::get('sublimation_label', 'frontViewController@sublimation_label');

});

// Admin Panel 

Route::group(['namespace'=>'Admin'],function(){
	Route::resource('admin/product', 'MainAdmin');
	Route::resource('admin/division','DivisionController');
        
	Route::resource('admin/users','UserManageController');
	Route::get('admin/dashboard','DashboardController@dashboard');		
	Route::resource('admin','AdminHome');		
});







