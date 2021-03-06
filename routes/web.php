<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

class MyClass{
    public $foo = 'bar';
}
Route::get('/myclass', 'MycontController@index');

Route::get('/foo/bar', 'UriController@index');

Route::get('/register', function(){
    return view('register');
});

Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');

Route::get('/basic_response', function(){
    return 'Hello World';
});

Route::get('/header', function (){
    return response('Hello', 200) -> header('Content-Type', 'text/html');
});

Route::get('/cookie',function(){
    return response("Hello", 200)->header('Content-Type', 'text/html')->withcookie('name','Virat Gandhi');
});

Route::get('json',function(){
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('blade', function(){
    return view('page', array('name' => 'Virate Gandhi'));
});

Route::get('/test', ['as' => 'testing', function(){
    return view('test');
}]);

Route::get('redirect', function(){
    return redirect()->route('testing');
});

Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function(){
    return redirect()->action('RedirectController@index');
});

Route::get('/', function () {
    return view('welcome');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
    echo 'ID: '.$id;
});
// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name){
    echo "Name: ".$name;
});

Route::get('role', [
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index'
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index'
]);

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');