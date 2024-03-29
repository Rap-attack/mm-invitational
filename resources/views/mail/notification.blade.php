<h1>Anmälan från {{ $registration->attendees()->first()->name }}</h1>

<b>Email:</b><br>
{{ $registration->email }}

<br><br>

<b>Meddelande:</b><br>
{!! nl2br(e($registration->message)) !!}

<br>

<h2>Kommande gäster:</h2>

@foreach ($registration->attendees as $attendee)
	<b>{{ $attendee->name }}</b><br>
	<b>Ställer upp i MMI:</b> {{ $attendee->competing }}<br>
	@if ($attendee->competing == 'Ja')
		<b>Nivå:</b> {{ $attendee->ski_level }}
	@endif
	<hr>
@endforeach
