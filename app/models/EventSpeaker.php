<?php
namespace App\Models;

class EventSpeaker extends BaseModel {
	protected $table = 'event_speakers';

	protected $fillable = ['event_id', 'speaker_name'];

	public function even_t()
	{
		return $this->belongsTo('\App\Models\Even_t');
	}
}