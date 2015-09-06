Anmälan från {{ $registration->attendees()->first()->name }}

Meddelande: {{ $registration->message }}
Email: {{ $registration->email }}

Gäster:

@foreach ($registration->attendees as $attendee)
	<b>{{ $attendee->name }}</b>
	{{ $attendee->competing }}
	{{ $attendee->skiLevel }}
	<hr>
@endforeach
