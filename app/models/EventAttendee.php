<?php
namespace App\Models;

class EventAttendee extends BaseModel {
	protected $table = 'event_attendees';

	protected $fillable = ['event_id','seat_no' , 'first_name', 'last_name', 'email', 'phone_no'];

	public function even_t()
	{
		return $this->belongsTo('\App\Models\Even_t');
	}
}