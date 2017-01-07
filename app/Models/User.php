<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    
    
    protected $table = 'users';
	public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('name', 'surname', 'email', 'password', 'status',);

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    
    public function products()
	{
		return $this->hasMany('Product', 'product_user_id');
	}

	public function commerce()
	{
		return $this->hasOne('Commerce', 'user_id');
	}
}
