<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Liste des Articles
Route::get('articles', 'ArticleController@index');

//Details sur un article
Route::get('article/{id}', 'ArticleController@show');

//Creer un article
Route::post('article', 'ArticleController@store');

//Modifier un article
Route::put('article', 'ArticleController@store');

//Supprimer un article
Route::delete('article/{id}', 'ArticleController@destroy');