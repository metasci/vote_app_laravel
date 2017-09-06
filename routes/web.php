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
    return view('main');
})->name('main');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/new-poll', 'NewPollController@index')->name('new_poll');
    Route::post('/new-poll', 'NewPollController@store')->name('store_poll');

    Route::get('/my-polls', 'MyPollsController@index')->name('my_polls');
    Route::delete('/my-polls/delete-poll/{poll}', 'MyPollsController@destroy')->name('delete_poll');

    Route::get('/poll-info/{poll}', 'PollInfoController@index')->name('poll_info');
});

// use this route to send voters to voting page - excepts uniqid slug
Route::get('/vote/{url}', 'VoteController@index')->name('vote');
Route::get('/vote/cast-vote/{option}', 'VoteController@update')->name('cast_vote');
