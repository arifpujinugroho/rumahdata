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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/logout', function()    
{                     
    Auth::logout();
    return Redirect::to('/')
    ->with('login', 'logout');
})->name('logout');

Route::get('/', 'AuthController@Index');
Route::post('/login', 'AuthController@Login');

Route::prefix('admin')->group(function () {
    //Get Perekap Controller
        Route::get('/','AdminGetController@Home');
        Route::get('/daftarkk','AdminGetController@AllKK');
        Route::get('/kk/{id}','AdminGetController@KK');

        Route::post('/addkk','AdminPostController@AddKK');
        Route::post('/addkeluarga','AdminPostController@AddKeluarga');
        Route::post('/addfile','AdminPostController@AddFile');
});