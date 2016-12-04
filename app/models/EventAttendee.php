<?php
namespace App\Models;

class EventAttendee extends BaseModel {
	protected $table = 'event_attendees';

	protected $fillable = ['event_id','seat_no' , 'first_name', 'last_name', 'email', 'phone_no'];
	
	public function event_detail()
	{
		return $this->belongsTo('\App\Models\Even_t', 'event_id');
	}
}