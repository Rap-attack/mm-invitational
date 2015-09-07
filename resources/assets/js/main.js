import Vue from 'vue';

Vue.use(require('vue-resource'));

new Vue({
	'el': '#osa',

	'data': {
		'attendees': [
			{
				'name': '',
				'competing': true,
				'skiLevel': 0
			}
		],

		'message': '',

		'email': '',

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
		},

		'validEmail': function() {
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    		
			if (!re.test(this.email)) {
				return false;
			}

			return true;
		},
	},

	'methods': {
		'addAttendee': function(e) {
			e.preventDefault();

			if (this.attendees.length < 6) {
				this.attendees.push({
					'name': null,
					'competing': true,
					'skiLevel': 0
				});
			}
		},

		'removeAttendee': function(e) {
			e.preventDefault();

			this.attendees.pop();
		},

		'submit': function(e) {
			e.preventDefault();

			// Check for empty names
			if (this.attendees.some(function(attendee) { return !attendee.name; })) {
				this.error = true;
			}

			// Check for empty or invalid email
			if (!this.email || !this.validEmail) {
				this.error = true;
			}

			if (this.error) return false;

			this.error = false;

			var token = document.getElementById("_token").content;

			this.$http.post('/api/osa/', {
				'_token': token,
				'attendees': this.attendees,
				'email': this.email,
				'message': this.message
			})
			.success(function(res) {
				this.submitted = true;
			})
			.error(function(res) {
				this.error = true;

				console.log(res);
			});
		}
	}
});
