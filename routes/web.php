<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin/dashboard');

Auth::routes(['register' => false]);
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Backend', 'middleware' => ['auth']], function () {
		Route::get('dashboard', 'HomeController@index')->name('dashboard');

		// Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

		// Route::resource('permissions', 'PermissionsController');

		// Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

		// Route::resource('roles', 'RolesController');

		// Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

		// Route::resource('users', 'UsersController');

		// Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

		// Route::resource('products', 'ProductsController');
	});
