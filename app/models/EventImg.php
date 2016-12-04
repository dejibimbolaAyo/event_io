<?php
namespace App\Models;

class EventImg extends BaseModel {
	protected $table = 'event_img';
	
	protected $fillable = ['event_id', 'event_logo_url', 'event_banner_url'];

	public function eventDetail()
	{
		return $this->belongsTo('\App\Models\EventDetail', 'event_id');
	}
}