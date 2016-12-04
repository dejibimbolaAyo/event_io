<?php
namespace App\Models;


class Even_t extends BaseModel {

	protected $table = 'events';

	protected $fillable = ['user_id'];

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function eventDetail()
	{
		return $this->hasOne('App\Models\EventDetail', 'event_id');
	}

	public function eventHosts()
	{
		return $this->hasMany('\App\Models\EventHost', 'event_id');
	}

	public function eventSpeakers()
	{
		return $this->hasMany('\App\Models\EventSpeaker', 'event_id');
	}

	public function eventImages()
	{
		return $this->hasMany('\App\Models\EventImg', 'event_id');
	}

	public function eventAttendees()
	{
		return $this->hasMany('\App\Models\EventAttendee', 'event_id');
	}

	public function getFullEventDetailsAttribute()
	{
		
		$full_detail = array_merge([$this->eventDetail], [$this->eventHosts], [$this->eventSpeakers], [$this->eventImages]);
		return $full_detail;
	}
}
