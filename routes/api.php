<?php
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["middleware" => "auth.api"],function(){
    // auth.apiはKarnel.phpで定義されている。
    Route::get('/todo','TodoController@get');
    Route::post('/todo','TodoController@post');
    Route::delete('/todo/{id}','TodoController@delete');
    Route::put('/todo/{id}','TodoController@update');
});