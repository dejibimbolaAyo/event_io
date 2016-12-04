<?php
namespace App\Models;

class EventHost extends BaseModel {
	protected $table = 'event_host';

	protected $fillable = ['event_id', 'host_name'];


}