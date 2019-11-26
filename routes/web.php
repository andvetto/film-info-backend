<?php

use\App\Models\Favorite;
use\Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::apiResource('favorites', 'FavoritesController');


Route::get('favorites/list/{user_id}', 'FavoritesController@show')
//->middleware('auth')
;

Route::get('favorites', 'FavoritesController@index');

Route::post('favorites', 'FavoritesController@store');

Route::delete('favorites/{user_id}/delete/{imdbID}', 'FavoritesController@destroy');

/*

Route::get('favorites', function () {

    return Favorite::get();
    
});

*/

Route::get('favorites/{user_id}/detail/{imdbID}', function ($user_id, $imdbID) {

    return Favorite::where('user_id', $user_id)->where('imdbID', $imdbID)
        ->get();
    
});

/*

Route::post('favorites', function ( Request $req ) {

    return Favorite::create($req -> all());
    
});

Route::delete('favorites/{id}', function ( $id ) {

    $favorite = Favorite::findOrFail($id);
    $success = $favorite->delete();
    return response()->json([
        'data' => $favorite,
        'success' => $success
    ]);
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
