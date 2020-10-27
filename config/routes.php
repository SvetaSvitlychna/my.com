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

    // 'admin/config' => 'Admin\ConfigController@index',
$router->get('' , 'HomeController@index');


$router->get('api/products','HomeController@getProducts');
$router->get('api/categories','HomeController@getCategories');


// // $router->get('api/products', 'HomeController@getProducts');
// // $router->get('api/categories', 'HomeController@getCategories');
// // $router->get('api/shop/{id}', 'HomeController@getProduct');
// // $router->get('api/product/{id}', 'HomeController@getProductItem');

// $router->get('api/categories/{id}', 'HomeController@getProductsByCategory');