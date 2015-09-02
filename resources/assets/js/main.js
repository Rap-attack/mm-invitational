import Vue from 'vue';

Vue.use(require('vue-resource'));

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

		'message': '',

		'error': false,

		'submitted': false
	},

	'computed': {
		'showRightColumn': function() {
			return this.attendees.some(function(attendee) {
				return attendee.competing;
			});
		},

		'greeting': function() {
			if (this.attendees.length > 1) {
				return 'Tack, vad kul att ni kommer!';
			}

			return 'Tack ' + this.attendees[0].name.split(' ')[0] + ', vad kul att du kommer!';
		}
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
		},

		'submit': function(e) {
			e.preventDefault();

			var token = document.getElementById("_token").content;
			console.log(token);

			if(this.attendees.some(function(attendee) { return !attendee.name; })) {
				this.error = true;

				return false;
			}

			this.$http.post('/api/osa/', {
				'_token': token,
				'attendees': this.attendees,
				'message': this.message
			})
			.success(function(res) {
				this.submitted = true;
			})
			.error(function(res) {
				console.log(res);
			});
		}
	}
});
