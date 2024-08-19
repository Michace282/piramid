<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TransparencyController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductFilterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
    [
        'prefix'     => 'cms',
        'namespace' => 'Api',
    ],
    function () {

        Route::any( '/login', 'AuthController@postSignIn' );
        
        //------------------------------------------------
        Route::get( '/contents-types', 'ContentTypesController@getContentTypeList' );
        //------------------------------------------------
        Route::get( '/contents-types/{slug}', 'ContentTypesController@getContentTypeItem' );
        //------------------------------------------------
        Route::get( '/contents/{plural_slug}', 'ContentsController@getContentList' );
        //------------------------------------------------
        Route::any( '/contents/{singular_slug}/{content_slug}', 'ContentsController@getContentItem' );

        Route::group(
            [
                'prefix'     => '/users',
            ],
            function () {
                //------------------------------------------------
                Route::any( '/register', 'AuthController@postSignUp' );
                //------------------------------------------------
                Route::any( '/', 'UsersController@getList' );
                 //------------------------------------------------
                Route::any( '/store', 'UsersController@store' );
                //------------------------------------------------
                Route::any( '/{column}/{value}', 'UsersController@getItem' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/update', 'UsersController@update' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/delete', 'UsersController@delete' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/roles', 'UsersController@getItemRoles' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/roles/{role_slug}', 'UsersController@getItemRoles' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/permissions', 'UsersController@getItemPermissions' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/permissions/{permission_slug}', 'UsersController@getItemPermissions' );
                //------------------------------------------------
                //------------------------------------------------
                Route::any( '/{id}', 'UsersController@getUser' );
            });
        Route::group(
            [
                'prefix'     => '/orders',
            ],
            function () {
                 //------------------------------------------------
                Route::any( '/store', 'OrdersController@store' );
                //------------------------------------------------
                Route::any( '/', 'OrdersController@getList' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/update', 'OrdersController@update' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/delete', 'OrdersController@delete' );
                //------------------------------------------------
                Route::any( '/{id}', 'OrdersController@getOrder' );
            });
        Route::group(
            [
                'prefix'     => '/currency',
            ],
            function () {
                //------------------------------------------------
                Route::any( '/current', 'CurrencyController@getCurrent' );
                //------------------------------------------------
                Route::any( '/update/{currency_price_uah}', 'CurrencyController@update' );
            });        

        Route::group(
            [
                'prefix'     => '/roles',
            ],
            function () {
                //------------------------------------------------
                Route::any( '/', 'RolesController@getList' );
                //------------------------------------------------
                Route::any( '/create', 'RolesController@create' );
                //------------------------------------------------
                Route::any( '/{column}/{value}', 'RolesController@getItem' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/update', 'RolesController@update' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/delete', 'RolesController@delete' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/users', 'RolesController@getItemUsers' );

                //------------------------------------------------
                Route::any( '/{column}/{value}/permissions', 'RolesController@getItemPermissions' );
                //------------------------------------------------
            });

        Route::group(
            [
                'prefix'     => '/permissions',
            ],
            function () {
                //------------------------------------------------
                Route::any( '/', 'PermissionsController@getList' );
                //------------------------------------------------
                Route::any( '/{column}/{value}', 'PermissionsController@getItem' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/roles', 'PermissionsController@getItemRoles' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/users', 'PermissionsController@getItemUsers' );
                //------------------------------------------------
            });

        Route::group(
            [
                'prefix'     => '/taxonomies',
            ],
            function () {
                //------------------------------------------------
                Route::any( '/', 'TaxonomiesController@getList' );
                //------------------------------------------------
                Route::any( '/create', 'TaxonomiesController@create' );
                //------------------------------------------------
                Route::any( '/{column}/{value}', 'TaxonomiesController@getItem' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/update', 'TaxonomiesController@update' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/delete', 'TaxonomiesController@delete' );

            });


        Route::group(
            [
                'prefix'     => '/taxonomy-types',
            ],
            function () {
                //------------------------------------------------
                Route::any( '/', 'TaxonomyTypesController@getList' );
                //------------------------------------------------
                Route::any( '/create', 'TaxonomyTypesController@create' );
                //------------------------------------------------
                Route::any( '/{column}/{value}', 'TaxonomyTypesController@getItem' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/update', 'TaxonomyTypesController@update' );
                //------------------------------------------------
                Route::any( '/{column}/{value}/delete', 'TaxonomyTypesController@delete' );
            });
        //------------------------------------------------
 Route::group(
            [
                'prefix'     => '/jaluji',
            ],
            function () {
        // Routes for Products
        Route::get('/products', [ProductController::class, 'index']);
        Route::post('/products', [ProductController::class, 'store']);
        Route::get('/products/{id}', [ProductController::class, 'show']);
        Route::put('/products/{id}', [ProductController::class, 'update']);
        Route::delete('/products/{id}', [ProductController::class, 'destroy']);

        Route::get('/images', [ProductImageController::class, 'index']);
        Route::post('/images', [ProductImageController::class, 'store']);
        Route::get('/images/{product_id}', [ProductImageController::class, 'show']);
        Route::put('/images/{id}', [ProductImageController::class, 'update']);
        Route::delete('/images/{id}', [ProductImageController::class, 'destroy']);

         Route::get('/filters', [ProductFilterController::class, 'index']);
        Route::post('/filters', [ProductFilterController::class, 'store']);
        Route::get('/filters/{product_id}', [ProductFilterController::class, 'show']);
        Route::put('/filters/{id}', [ProductFilterController::class, 'update']);
        Route::delete('/filters/{id}', [ProductFilterController::class, 'destroy']);

// Routes for Categories
        Route::get('/categories', [CategoryController::class, 'index']);
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::get('/categories/{id}', [CategoryController::class, 'show']);
        Route::put('/categories/{id}', [CategoryController::class, 'update']);
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

// Routes for Colors
        Route::get('/colors', [ColorController::class, 'index']);
        Route::post('/colors', [ColorController::class, 'store']);
        Route::get('/colors/{id}', [ColorController::class, 'show']);
        Route::put('/colors/{id}', [ColorController::class, 'update']);
        Route::delete('/colors/{id}', [ColorController::class, 'destroy']);

// Routes for Transparencies
        Route::get('/transparencies', [TransparencyController::class, 'index']);
        Route::post('/transparencies', [TransparencyController::class, 'store']);
        Route::get('/transparencies/{id}', [TransparencyController::class, 'show']);
        Route::put('/transparencies/{id}', [TransparencyController::class, 'update']);
        Route::delete('/transparencies/{id}', [TransparencyController::class, 'destroy']);

// Routes for Collections
        Route::get('/collections', [CollectionController::class, 'index']);
        Route::post('/collections', [CollectionController::class, 'store']);
        Route::get('/collections/{id}', [CollectionController::class, 'show']);
        Route::put('/collections/{id}', [CollectionController::class, 'update']);
        Route::delete('/collections/{id}', [CollectionController::class, 'destroy']);

// Routes for Designs
        Route::get('/designs', [DesignController::class, 'index']);
        Route::post('/designs', [DesignController::class, 'store']);
        Route::get('/designs/{id}', [DesignController::class, 'show']);
        Route::put('/designs/{id}', [DesignController::class, 'update']);
        Route::delete('/designs/{id}', [DesignController::class, 'destroy']);

// Routes for Discounts
        Route::get('/discounts', [DiscountController::class, 'index']);
        Route::post('/discounts', [DiscountController::class, 'store']);
        Route::get('/discounts/{id}', [DiscountController::class, 'show']);
        Route::put('/discounts/{id}', [DiscountController::class, 'update']);
        Route::delete('/discounts/{id}', [DiscountController::class, 'destroy']);

        Route::get('/avalsbilities', [AvailabilityController::class, 'index']);
        Route::post('/avalsbilities', [AvailabilityController::class, 'store']);
        Route::get('/avalsbilities/{id}', [AvailabilityController::class, 'show']);
        Route::put('/avalsbilities/{id}', [AvailabilityController::class, 'update']);
        Route::delete('/avalsbilities/{id}', [AvailabilityController::class, 'destroy']);

         Route::get('/infos', [InfoController::class, 'index']);
        Route::post('/infos', [InfoController::class, 'store']);
        Route::get('/infos/{id}', [InfoController::class, 'show']);
        Route::put('/infos/{id}', [InfoController::class, 'update']);
        Route::delete('/infos/{id}', [InfoController::class, 'destroy']);
    });

});





