<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\OsaRequest;
use App\Http\Controllers\Controller;
use App\Registration;
use App\Attendee;
use Mail;

class MmInvitationalController extends Controller
{
    public function osa(OsaRequest $request)
    {

        /**
        $registration = Registration::create([
            'email' => $request->email,
            'message' => $request->message
        ]);

        foreach ($request->attendees as $attendee)
        {
            $registration->attendees()->create([
                'name' => $attendee['name'],
                'competing' => $attendee['competing'],
                'ski_level' => $attendee['skiLevel']
            ]);
        }

        Mail::send('mail.notification', ['registration' => $registration], function ($m) use ($registration) {
            $m->from('ar.rapaport@gmail', 'MM Invitational');
            $m->to('ar.rapaport@gmail.com')->subject('Anmälan från ' . $registration->attendees->first()->name . '.');
        });
        **/

        dd('ok');
    }
}
