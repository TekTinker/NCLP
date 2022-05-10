<?php

namespace NCLP;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NCLP\Models\STC;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
	use Notifiable;
	use HasRoles;

	/**
	 * The attributes that are mass as
	 * signable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password','gender','education','dob','address','ward','taluka','district','state','mobile','aadhar','pan','category','cast'
	];

	/**a
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function stcs()
	{
		return $this->belongsToMany('NCLP\Models\STC', 'user_stc', 'user_id', 'stc_id');
	}

	public function isOwner(STC $stc)
	{
		if ($this->stcs()->where('s_t_cs.id', $stc->id)->first()) {
			return true;
		}
		return false;
	}

	public function getSTCs()
	{
		if($this->hasPermissionTo('stc_admin')){
			return STC::all();
		} else
			return $this->stcs()->get();
	}

}
