import Vue from 'vue';

new Vue({
	'el': '#osa',

	'data': {
		'attendees': [
			{
				'name': '',
				'competing': false,
				'skiLevel': null
			}
		],

		'submitted': false
	},

	'computed': {
		'showRightColumn': function() {
			return this.attendees.some(function(attendee) {
				return attendee.competing;
			});
		}
	},

	'transitions': {

	},

	'methods': {
		'addAttendee': function(e) {
			e.preventDefault();

			if (this.attendees.length < 6) {
				this.attendees.push({
					'name': null,
					'competing': false,
					'skiLevel': null
				});
			}
		},

		'removeAttendee': function(e) {
			e.preventDefault();

			this.attendees.pop();
		}
	}
});
