<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" id="_token" content="{!! csrf_token() !!}">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>

	<div class="row">
		<div class="large-6 column">
			<h1>Anmälningar</h1>
			<table width="100%">
				<tr style="font-weight: bold; text-decoration: underline;">
					<th>Email</th>
					<th>Meddelande</th>
				</tr>
				
				@foreach($registrations as $registration)
					<tr>
						<td>{{ $registration->email }}</td>
						<td>{{ $registration->message }}</td>
					</tr>
				@endforeach

			</table>
		</div>
		<div class="large-6 column">
			<h1>Gäster</h1>
			<table width="100%">
				<tr style="font-weight: bold; text-decoration: underline;">
					<th>Namn</th>
					<th>Deltar i MMI</th>
					<th>Skidklass</th>
				</tr>
				
				@foreach ($registrations as $registration)
					@foreach ($registration->attendees as $attendee)
						<tr>
							<td>{{ $attendee->name }}</td>
							<td>{{ $attendee->competing }}</td>
							<td>{{ $attendee->competing ? $attendee->ski_level : '' }}</td>
						</tr>
					@endforeach
				@endforeach

			</table>
		</div>
	</div>
	
</body>
</html>
