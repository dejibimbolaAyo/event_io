<?php
namespace App\Models;

use App\Models\Even_t as Even_t;

class EventDetail extends BaseModel {
	protected $table = 'event_details';

	protected $fillable = ['event_id','event_name', 'event_type_id', 'event_time_from', 'event_time_to' ,'event_organizer',
 'event_email', 'event_phone', 'event_location','event_slug', 'event_description', 'event_detail', 'event_template_id', 'event_seats'];

 	public function event()
	{
		return $this->belongsTo('Even_t', 'event_id');
	}

	public function eventType()
	{
		return $this->belongsTo('\App\Models\EventType', 'event_type_id');
	}

	public function eventTemplate()
	{
		return $this->belongsTo('\App\Models\EventTemplate', 'event_template_id');
	}

}