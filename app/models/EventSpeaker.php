<?php
namespace App\Models;

class EventSpeaker extends BaseModel {
	protected $table = 'event_speakers';

	protected $fillable = ['event_id', 'speaker_name'];


}