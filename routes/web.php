<?php

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

Route::get('/mongodb', function () {
    return view('mongodb');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

///////////////////Admin.Songs2010 Route///////////////////

Route::get('/admin/2010_2011', 'SongsONEController@index');

Route::get('/admin/2010_2011/create', 'SongsONEController@Create');

Route::post('/admin/2010_2011/create', 'songsONEController@Store');

Route::post('/admin/2010_2011/edit', 'songsONEController@Update');

Route::get('/admin/2010_2011/delete/{id}', 'SongsONEController@delete');

Route::delete('/admin/2010_2011/delete', 'SongsONEController@remove');

Route::get('/admin/2010_2011/edit/{id}', 'SongsONEController@edit');

Route::get('/admin/2010_2011/{id}', 'SongsONEController@details');

//////////////////Users.Songs2010 Route////////////////////

Route::get('/2010_2011', 'SongsONEController@userindex1')->name('userindex1');

Route::get('/2010_2011/{id}', 'SongsONEController@userdetails1')->name('userdetails1');

////////////////////////Admin.Songs2012 Route///////////////////////////////////

Route::get('/admin/2012_2013', 'SongsTWOController@index');

Route::get('/admin/2012_2013/create', 'SongsTWOController@Create');

Route::post('/admin/2012_2013/create', 'songsTWOController@Store');

Route::post('/admin/2012_2013/edit', 'songsTWOController@Update');

Route::get('/admin/2012_2013/delete/{id}', 'SongsTWOController@delete');

Route::delete('/admin/2012_2013/delete', 'SongsTWOController@remove');

Route::get('/admin/2012_2013/edit/{id}', 'SongsTWOController@edit');

Route::get('/admin/2012_2013/{id}', 'SongsTWOController@details');

/////////////////////////User.Songs2012 Route////////////////////////////////////

Route::get('/2012_2013', 'SongsTWOController@userindex2')->name('userindex2');

Route::get('/2012_2013/{id}', 'SongsTWOController@userdetails2')->name('userdetails2');

/////////////////////////Admin.Songs2014 Route///////////////////////////////////

Route::get('/admin/2014_2015', 'SongsTHREEController@index');

Route::get('/admin/2014_2015/create', 'SongsTHREEController@Create');

Route::post('/admin/2014_2015/create', 'songsTHREEController@Store');

Route::post('/admin/2014_2015/edit', 'songsTHREEController@Update');

Route::get('/admin/2014_2015/delete/{id}', 'SongsTHREEController@delete');

Route::delete('/admin/2014_2015/delete', 'SongsTHREEController@remove');

Route::get('/admin/2014_2015/edit/{id}', 'SongsTHREEController@edit');

Route::get('/admin/2014_2015/{id}', 'SongsTHREEController@details');

///////////////////////////////User.songs2014 route///////////////////////////////////////////

Route::get('/2014_2015', 'SongsTHREEController@userindex3')->name('userindex3');

Route::get('/2014_2015/{id}', 'SongsTHREEController@userdetails3')->name('userdetails3');

/////////////////////////Admin.Songs2016//////////////////////////////////

Route::get('/admin/2016_2017', 'SongsFOURController@index');

Route::get('/admin/2016_2017/create', 'SongsFOURController@Create');

Route::post('/admin/2016_2017/create', 'songsFOURController@Store');

Route::post('/admin/2016_2017/edit', 'songsFOURController@Update');

Route::get('/admin/2016_2017/delete/{id}', 'SongsFOURController@delete');

Route::delete('/admin/2016_2017/delete', 'SongsFOURController@remove');

Route::get('/admin/2016_2017/edit/{id}', 'SongsFOURController@edit');

Route::get('/admin/2016_2017/{id}', 'SongsFOURController@details');

//////////////////////////user.songs2016 route/////////////////////////////////////////

Route::get('/2016_2017', 'SongsFOURController@userindex4')->name('userindex4');

Route::get('/2016_2017/{id}', 'SongsFOURController@userdetails4')->name('userdetails4');

///////////////////////////////////////////////////////////////////////////////////////

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
