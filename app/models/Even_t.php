<?php
namespace App\Models;

class Even_t extends BaseModel {

	protected $table = 'events';

	protected $fillable = ['user_id'];

	public function user()
	{
		return $this->belongsTo('\App\Models\User');
	}

	public function event_type()
	{
		return $this->hasOne('\App\Models\EventType', 'event_id');
	}

	public function event_detail()
	{
		return $this->hasOne('\App\Models\EventDetail', 'event_id');
	}

	public function event_host()
	{
		return $this->hasMany('\App\Models\EventHost', 'event_id');
	}

	public function event_speaker()
	{
		return $this->hasMany('\App\Models\EventSpeaker', 'event_id');
	}

	public function event_img()
	{
		return $this->hasOne('\App\Models\EventImg', 'event_id');
	}

	public function event_attendee()
	{
		return $this->hasMany('\App\Models\EventAttendee', 'event_id');
	}

	public function event_template()
	{
		return $this->hasOne('\App\Models\EventTemplate', 'event_id');
	}


}
