<?php
namespace App\Models;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/*
	validation rules for the user*/
	protected $rules = [
        'create' => [
            'email' => 'unique:users',
            'first_name' => 'min:2|required',
            'password' => 'confirmed',
            'last_name' => 'min:3',
        ],
        'update' => [

        ],
    ];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/*
	*	the fillable fields in the table
	*/

	protected $fillable = ['role_id', 'first_name', 'last_name', 'username', 'phone_no', 'email', 'password', 'remember_token'];

	public function even_t()
	{
		return $this->hasMany('\App\Models\Even_t', 'user_id');
	}

	public function role()
	{
		return $this->hasOne('\App\Models\Role');
	}

	public function getFullNameAttribute()
    {
      return $this->first_name . ' ' . $this->last_name;
    }

}
