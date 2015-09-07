<?php

use App\Registration;

Route::get('/', function() {
    return view('app');
});

Route::get('/gaster', ['middleware' => 'auth.basic', function() {
	$registrations = Registration::with('attendees')->get();

	return view('attendees', compact('registrations'));
}]);

// API
post('api/osa', 'MmInvitationalController@osa');

