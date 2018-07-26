<?php


Route::get('/1','EmailcheckController@index1');
// Route::get('/1l','EmailcheckController@index1l');
Route::get('/','EmailcheckController@emails');
Route::get('/emails','EmailcheckController@emails');
// Route::get('/compose','EmailcheckController@index1l' );
Route::get('/compose','EmailcheckController@index' );
Route::delete('/emailldelete/{id}','EmailcheckController@destroy');

// Route::get('/emailaccounts','EmailcheckController@create');
Route::get('/addemailaccounts','EmailcheckController@addemail');
Route::get('/feeds','EmailcheckController@display');
Route::get('/showemaildetail/{id}','EmailcheckController@showemaildetail');


Route::post('/tracker','EmailcheckController@store');

Route::get('/welcome/{myid}','EmailcheckController@edit1');



Route::get('/emailaccounts','EmailAcountsController@index');
Route::post('/addmailaccount','EmailAcountsController@store');
Route::get('/emailaccounts/{id}/edit','EmailAcountsController@edit' );
Route::patch('/emailaccounts/{id}','EmailAcountsController@update');
Route::delete('/emailaccounts/{id}','EmailAcountsController@destroy');
