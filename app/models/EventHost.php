<?php
namespace App\Models;

class EventHost extends BaseModel {
	protected $table = 'event_host';

	protected $fillable = ['event_id', 'host_name'];

	public function even_t()
	{
		return $this->belongsTo('\App\Models\Even_t');
	}
}