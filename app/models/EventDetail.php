<?php

class EventDetail extends \Eloquent {
	protected $table = 'event_details';

	protected $fillable = ['event_id','event_name', 'event_type', 'event_date', 'event_time' ,'event_organizer',
 'event_email', 'event_phone', 'event_location','event_slug', 'event_description', 'event_detail', 'event_template_id', 'event_seat'];
}