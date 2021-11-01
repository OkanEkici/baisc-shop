<?php

Route::get('/sale/{CategorySlug}', 'Pages\CategoryPageController@sale')->name('category.sale.category');

include(dirname(__DIR__)."/kunde/routes/web.php");