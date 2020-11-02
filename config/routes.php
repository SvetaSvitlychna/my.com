<?php


$router->get('about', 'AboutController@index');
$router->get('contact' , 'ContactController@index');
$router->get('store','ContactController@store');
$router->get('catalog', 'CatalogController@index');
$router->get('admin' , 'Admin\DashboardController@index');
$router->get('admin/categories' , 'Admin\CategoryController@index');
$router->get('admin/categories/create', 'Admin\CategoryController@create');
$router->post('admin/categories/store' ,'Admin\CategoryController@store');
$router->get('admin/categories/show/{id}' , 'Admin\CategoryController@show');
$router->get('admin/categories/edit/{id}' , 'Admin\CategoryController@edit');
$router->post('admin/categories/update/{id}' , 'Admin\CategoryController@patch');
$router->get('admin/categories/delete/{id}' , 'Admin\CategoryController@delete');
$router->post('admin/categories/destroy/{id}' , 'Admin\CategoryController@destroy');

$router->get('admin/products' , 'Admin\ProductController@index');
$router->get('admin/products/create' ,'Admin\ProductController@create');
$router->post('admin/products/store' , 'Admin\ProductController@store');
$router->get('admin/products/show/{id}', 'Admin\ProductController@show');
$router->get('admin/products/edit/{id}' ,'Admin\ProductController@edit');
$router->post('admin/products/update/{id}', 'Admin\ProductController@patch');
$router->get('admin/products/delete/{id}', 'Admin\ProductController@delete');
$router->post('admin/products/destroy/{id}' , 'Admin\ProductController@destroy');
    
$router->get('admin/brands' , 'Admin\BrandController@index');
$router->get('admin/brands/create' , 'Admin\BrandController@create');
$router->post('admin/brands/store' , 'Admin\BrandController@store');
$router->get('admin/brands/show/{id}' , 'Admin\BrandController@show');
$router->get('admin/brands/edit/{id}' , 'Admin\BrandController@edit');
$router->post('admin/brands/update/{id}' , 'Admin\BrandController@patch');
$router->get('admin/brands/delete/{id}' , 'Admin\BrandController@delete');
$router->post('admin/brands/destroy/{id}' , 'Admin\BrandController@destroy');


$router->get('admin/roles', 'Admin\RoleController@index');
$router->get('admin/roles/create', 'Admin\RoleController@create');
$router->post('admin/roles/store', 'Admin\RoleController@store');
$router->get('admin/roles/show/{id}' , 'Admin\RoleController@show');
$router->get('admin/roles/edit/{id}' , 'Admin\RoleController@edit');
$router->post('admin/roles/update/{id}' , 'Admin\RoleController@patch');
$router->get('admin/roles/delete/{id}' , 'Admin\RoleController@delete');
$router->post('admin/roles/destroy/{id}' , 'Admin\RoleController@destroy');

$router->get('admin/users' , 'Admin\UserController@index');
$router->get('admin/users/create' ,'Admin\UserController@create');
$router->post('admin/users/store' , 'Admin\UserController@store');
$router->get('admin/users/show/{id}', 'Admin\UserController@show');
$router->get('admin/users/edit/{id}' ,'Admin\UserController@edit');
$router->post('admin/users/update/{id}', 'Admin\UserController@patch');
$router->get('admin/users/delete/{id}', 'Admin\UserController@delete');
$router->post('admin/users/destroy/{id}' , 'Admin\UserController@destroy');
    // 'admin/config' => 'Admin\ConfigController@index',
$router->get('' , 'HomeController@index');


$router->get('api/products','HomeController@getProducts');
$router->get('api/categories','HomeController@getCategories');
//  $router->get('api/shop/{id}', 'HomeController@getProduct');
//  $router->get('api/product/{id}', 'HomeController@getProductItem');


$router->get('signup', 'SignupController@signUpForm');
$router->get('signin', 'LoginController@signInForm');
$router->get('login', 'LoginController@signInForm');
$router->post('login', 'LoginController@signin');
$router->get('profile', 'ProfileController@index');
$router->post('signup', 'SignupController@signup');

$router->get('logout', 'LoginController@logout');




