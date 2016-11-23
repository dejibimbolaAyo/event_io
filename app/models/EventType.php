<?php
namespace App\Models;

class EventType extends BaseModel {
	protected $fillable = ['type'];

	public function even_t()
	{
		return $this->belongsTo('\App\Models\Even_t');
	}
}