<?php

return [
    'about'=> 'AboutController@index',
    'contact' => 'ContactController@index',
    'store' => 'ContactController@store',
    'catalog' => 'CatalogController@index',
    'admin' => 'Admin\DashboardController@index',
    'admin/categories' => 'Admin\CategoryController@index',
    'admin/categories/create' => 'Admin\CategoryController@create',
    'admin/categories/store' => 'Admin\CategoryController@store',
    'admin/categories/show/{id}' => 'Admin\CategoryController@show',
    'admin/categories/edit/{id}' => 'Admin\CategoryController@edit',
    'admin/categories/update' => 'Admin\CategoryController@patch',
    'admin/categories/delete/{id}' => 'Admin\CategoryController@delete',
    'admin/categories/destroy/{id}' => 'Admin\CategoryController@destroy',

    'admin/products' => 'Admin\ProductController@index',
    'admin/products/create' => 'Admin\ProductController@create',
    'admin/products/store' => 'Admin\ProductController@store',
    'admin/products/show/{id}' => 'Admin\ProductController@show',
    'admin/products/edit/{id}' => 'Admin\ProductController@edit',
    // 'admin/products/update' => 'Admin\ProductController@patch',
    'admin/products/delete/{id}' => 'Admin\ProductController@delete',
    // 'admin/products/destroy/{id}' => 'Admin\ProductController@destroy',
    
    'admin/brands' => 'Admin\BrandController@index',
    'admin/brands/create' => 'Admin\BrandController@create',
    'admin/brands/store' => 'Admin\BrandController@store',
    'admin/brands/show/{id}' => 'Admin\BrandController@show',
    'admin/brands/edit/{id}' => 'Admin\BrandController@edit',
    // 'admin/brands/update' => 'Admin\BrandController@patch',
    'admin/brands/delete/{id}' => 'Admin\BrandController@delete',
    // 'admin/brands/destroy/{id}' => 'Admin\BrandController@dest
    'admin/config' => 'Admin\ConfigController@index',
    '' => 'HomeController@index'
];