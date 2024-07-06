<?php

// Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin'], function () {
Route::get('test', function () {
    return json_encode(['code' => 200, 'message' => 'ok']);
});
// });

Route::post('/register', 'Api\V1\Admin\AuthController@register');
Route::post('/login', 'Api\V1\Admin\AuthController@login');
Route::post('/api/endpoint', 'App\Http\Controllers\Api\EndpointController@store')->middleware('auth:sanctum');

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {

    Route::get('test', function () {
        return 'ok';
    });

    // Product Category
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Product Tag
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Product
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');
});