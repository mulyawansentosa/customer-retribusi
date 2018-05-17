<?php

Route::group(['prefix' => 'customer-retribusi'], function() {
    Route::get('demo', 'Bantenprov\CustomerRetribusi\Http\Controllers\CustomerRetribusiController@demo');
});
