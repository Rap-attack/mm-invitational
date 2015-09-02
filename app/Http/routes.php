<?php


Route::get('/', function () {
    return view('app');
});

// API
post('api/osa', 'MmInvitationalController@osa');

