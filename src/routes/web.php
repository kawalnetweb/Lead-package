<?php

// For package use only

// Route::group(['middleware' => ['web'],'namespace' =>'Netweb\Lead\Http\Controllers'],function(){

//     Route::group(['prefix' => config('lead.Admin_middleware_prefix')], function () {
//         Route::post('/store-interest-level','CrudController@store_interest_level');
//         Route::post('/edit-interest-level','CrudController@edit_interest_level');
//         Route::post('/delete-interest-level','CrudController@delete_interest_level');
//         Route::get('/admin-lead-status','CrudController@admin_lead_status');
//         Route::get('/admin-interest-level','CrudController@admin_interest_level');
//     });

//     Route::group(['prefix' => config('lead.User_middleware_prefix')], function () {

//         Route::get('/lead-history','CrudController@lead_history_view');
//     });
        
        
//         Route::get('crud/{id?}','CrudController@index')->name('crud-index');
//         Route::post('/insert','CrudController@insert');

//         Route::post('/edit-lead','CrudController@edit_lead');
//         Route::get('/delete-lead/{id?}','CrudController@delete_lead');
//         Route::get('/get-lead-history','CrudController@get_lead_history');
//         Route::post('/add-next-foolow-up','CrudController@add_next_foolow_up');

// });




////////latest



Route::group(['middleware' => ['web'],'namespace' =>'Netweb\Lead\Http\Controllers'],function(){

    Route::group(['prefix' => config('lead.Admin_middleware_prefix')], function () {
        Route::post('/store-interest-level','CrudController@store_interest_level');
        Route::post('/edit-interest-level','CrudController@edit_interest_level');
        Route::post('/delete-interest-level','CrudController@delete_interest_level');
        Route::get('/admin-lead-status','CrudController@admin_lead_status');
        Route::get('/admin-interest-level','CrudController@admin_interest_level');
    });

   
        
    Route::get('/get-lead-history','CrudController@get_lead_history');
        Route::get('crud/{id?}','CrudController@index')->name('crud-index');
        Route::post('/insert','CrudController@insert');
        Route::post('/add-next-foolow-up','CrudController@add_next_foolow_up');
        Route::post('/send-mail','CrudController@send_mail');
        Route::get('/delete-lead/{id?}','CrudController@delete_lead');

});

Route::group(['namespace' =>'Netweb\Lead\Http\Controllers','prefix' => config('lead.User_middleware_prefix'),'middleware' => ['web','auth:customer']], function () {
    Route::get('/lead-history','CrudController@lead_history_view');    
    Route::post('/edit-lead','CrudController@edit_lead');

});

?>