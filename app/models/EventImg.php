<?php
namespace App\Models;

class EventImg extends BaseModel {
	protected $table = 'event_img';
	
	protected $fillable = ['event_id', 'event_logo_url', 'event_banner_url'];

	public function even_t()
	{
		return $this->belongsTo('\App\Models\Even_t');
	}
}