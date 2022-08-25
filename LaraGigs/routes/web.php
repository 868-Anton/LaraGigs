<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/who',function()
{
    return response('Connection 200, ok boss man',200)
    ->header('Content-Type', 'text/plain')
    ->header('Jigger', 'Man');
});


// where() is an constraint, the response will only happen if it is met
Route::get('/posts{id}', function ($id)
{
    // NEW TO ME - Dump,Die,Debug()
    // ddd($id);
    // dd($id); 

    return response('Post' . $id);
})->where('id','[0-9]+');

//Getting query string value in the url using Request
Route::get('/search', function(Request $request)
{
    return response($request->name .' '. $request->lastName);
});
