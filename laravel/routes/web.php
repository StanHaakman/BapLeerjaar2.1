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

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/tekst', function () {
    return 'Mooie tekst';
});

Route::get('/test', function () {
    $data = array('Joe', 'Carl', 'Benny');
    return $data;
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/drivers', function(){
        $drivers = DB::table('drivers')->get();
        return view('drivers',['drivers' => $drivers]);
});

Route::get('/artikel/{nummer}', 'ArticleController@show')
    ->where('nummer', '\d+')
    ->name('artikel.opnummer');

Route::get('/artikel/{naam}', function ($naam) {
    return 'dit is artikel ' . $naam;
})
    ->where('naam','([a-zA-Z\-])+')
    ->name('artikel.opnaam')

;

