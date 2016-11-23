<?php
namespace App\Models;

class Role extends BaseModel {

	protected $table = 'roles';

	protected $fillable = ['role_name'];

	public function user()
	{
		return $this->belongsTo('\App\Models\User');
	}
}