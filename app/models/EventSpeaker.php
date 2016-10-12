<?php

class EventSpeaker extends \Eloquent {
	protected $table = 'event_speakers';

	protected $fillable = ['event_id', 'speaker_name'];
}