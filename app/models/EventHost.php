<?php

class EventHost extends \Eloquent {
	protected $table = 'event_host';

	protected $fillable = ['event_id', 'host_name'];
}