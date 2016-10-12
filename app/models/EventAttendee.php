<?php

class EventAttendee extends \Eloquent {
	protected $table = 'event_attendees';

	protected $fillable = ['event_id', 'first_name', 'last_name', 'email', 'phone_no'];
}