<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    //echo "Hello Laravel";
});
/*
Route::get('/country/{id}', function ($id) {
    $country = App\Country::find($id);

    echo $country->countryName . "<br>";

    echo"<ul>";

    foreach($country->city as $city){
         
         echo"<li>" . $city->cityName . "</li>";
    }

    echo"</ul>";

});
*/

Route::get('/country/{id}', '\App\Http\Controllers\Countrys@country');


Route::get('/home/{id}', [
       'uses' => '\App\Http\Controllers\Master@getResult'
	]
);

Route::get('/route', '\App\Http\Controllers\Master@getRoute');


Route::get('/get', [
    'uses' => '\App\Http\Controllers\Master@getMaster'
]);

Route::post('/get', [
    'uses' => '\App\Http\Controllers\Master@postMaster'
]);


Route::get('/model', function () {
    $country = App\Country::where('countryName', '=', 'Serbia')->first()->id;

    echo $country;
});


Route::get('/city', function (){
    $city = App\City::all();

    foreach ($city as $value) {

    	echo $value->cityName . " belongs to " . $value->country->countryName . "<br>";
    }

});

Route::get('/posts', 'PostController@getPosts');

Route::get('/profile/{name}', 'PostController@getProfile'); 

Route::get('/adresses/{id}', 'AddressesController@getAddresses'); 


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/ajax', 'AjaxController@getAjax');

Route::get('/ajaxResults/{param}', [
                 'uses' => 'AjaxController@getAjaxResults', 
                 'as' => 'ajaxResults'
            ]);

Route::get('admin', function(){
    echo 'You have access';
})->middleware('admin');



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
