<?php

class EventImg extends \Eloquent {
	protected $table = 'event_img';
	
	protected $fillable = ['event_id', 'event_logo_url', 'event_banner_url'];
}