<?php
namespace App\Models;

class EventDetail extends BaseModel {
	protected $table = 'event_details';

	protected $fillable = ['event_id','event_name', 'event_type_id', 'event_time_from', 'event_time_to' ,'event_organizer',
 'event_email', 'event_phone', 'event_location','event_slug', 'event_description', 'event_detail', 'event_template_id', 'event_seats'];

 	public function even_t()
	{
		return $this->belongsTo('\App\Models\User');
	}

}