<?php

Route::get('/', function(){
    return view('welcome');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
    echo 'ID: '.$id;
});
// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
    echo "Name: ".$name;
});

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);