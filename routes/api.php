<?php

use Illuminate\Http\Request;
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

// OUTDATED: Route::middleware('auth:api')->get('/user', function (Request $request) {return $request->user();});
Route::middleware('auth:api')->get('/user', 'LoginController@AuthRouteAPI');

Route::post('create-payment', 'CustomerController@createPayPalPayment');
Route::post('execute-payment', 'PaymentController@executePayPalPayment');



Route::prefix('/v1')->middleware(['APIKey'])->group(function()
{
    //De-/Active Article quick
    Route::put('/activate_article/{id}', 'ArticleController@activate_article');
    Route::put('/deactive_article/{id}', 'ArticleController@deactive_article');

    //Initial Full Filling
    Route::match(array('PUT','POST'),'/init_data', 'ShopConfigController@initData');

    //Article Batch
    Route::match(array('PUT','POST'),'/article_batch', 'ShopConfigController@initData');



    //Preise Batch
    Route::match(array('PUT','POST'),'/prices_batch', 'ShopConfigController@pricesData');

    //Stock Batch
    Route::post('/stock_batch', 'ArticleVariationController@updateStockBatch');

    //validate Batch
    Route::match(array('PUT','POST'),'/article_verify', 'ShopConfigController@validateData');

    //Articles
    Route::put('/articles/{id}', 'ArticleController@update');
    Route::post('/articles', 'ArticleController@store');
    Route::post('/articles_delete/{id}', 'ArticleController@destroy');
    //Article Images
    Route::post('/images', 'ArticleImageController@store');
    Route::put('/images/{id}', 'ArticleImageController@update');
    Route::post('/images_delete/{id}', 'ArticleImageController@destroy');
    //Article Image Attributes
    Route::post('/image_attributes', 'ArticleImageAttributeController@store');
    Route::put('/image_attributes/{id}', 'ArticleImageAttributeController@update');
    Route::post('/image_attributes_delete/{id}', 'ArticleImageAttributeController@destroy');
    //Article Prices
    Route::post('/prices', 'ArticlePriceController@store');
    Route::put('/prices/{id}', 'ArticlePriceController@update');
    Route::post('/prices_delete/{id}', 'ArticlePriceController@destroy');
    //Article Attributes
    Route::post('/attributes', 'ArticleAttributeController@store');
    Route::put('/attributes/{id}', 'ArticleAttributeController@update');
    Route::post('/attributes_delete/{id}', 'ArticleAttributeController@destroy');
    //Article Marketing
    Route::post('/marketing', 'ArticleMarketingController@store');
    Route::put('/marketing/{id}', 'ArticleMarketingController@update');
    Route::post('/marketing_delete/{id}', 'ArticleMarketingController@destroy');

    //Variations
    Route::post('/variations', 'ArticleVariationController@store');
    Route::put('/variations/{id}', 'ArticleVariationController@update');
    Route::post('/variations_delete/{id}', 'ArticleVariationController@destroy');
    //Variation Images
    Route::post('/variation_images', 'ArticleVariationImageController@store');
    Route::put('/variation_images/{id}', 'ArticleVariationImageController@update');
    Route::post('/variation_images_delete/{id}', 'ArticleVariationImageController@destroy');
    //Variation Image Attributes
    Route::post('/variation_image_attributes', 'ArticleVariationImageAttributeController@store');
    Route::put('/variation_image_attributes/{id}', 'ArticleVariationImageAttributeController@update');
    Route::post('/variation_image_attributes_delete/{id}', 'ArticleVariationImageAttributeController@destroy');
    //Variation Prices
    Route::post('/variation_prices', 'ArticleVariationPriceController@store');
    Route::put('/variation_prices/{id}', 'ArticleVariationPriceController@update');
    Route::post('/variation_prices_delete/{id}', 'ArticleVariationPriceController@destroy');
    //Variation Attributes
    Route::post('/variation_attributes', 'ArticleVariationAttributeController@store');
    Route::put('/variation_attributes/{id}', 'ArticleVariationAttributeController@update');
    Route::post('/variation_attributes_delete/{id}', 'ArticleVariationAttributeController@destroy');

    //Categories
    Route::post('/categories', 'CategoryController@store');
    Route::put('/categories/{id}', 'CategoryController@update');
    Route::post('/categories_delete/{id}', 'CategoryController@destroy');

    //Vouchers
    Route::put('/vouchers/{id}', 'ShopConfigVoucherController@update');
    Route::post('/vouchers', 'ShopConfigVoucherController@store');
    Route::post('/vouchers_delete/{id}', 'ShopConfigVoucherController@destroy');

    // ReCaptcha
    Route::get('/', 'CaptchaFeedbackController@create');
    Route::get('/feedback', 'CaptchaFeedbackController@index');
    Route::post('/feedback/create', 'CaptchaFeedbackController@store');
    Route::get('/feedback/delete/{id}', 'CaptchaFeedbackController@destroy');

    //Synchrodaten verarbeiten
    //Route::match(array('PUT','POST'),'/syncros','ShopConfigController@process_syncros');
    Route::post('/process-syncros','ShopConfigController@processSyncros');
    Route::put('/process-syncros','ShopConfigController@processSyncros');
    Route::get('/process-syncros','ShopConfigController@processSyncros');

    //include(dirname(__DIR__)."/kunde/routes/api.php");
});
