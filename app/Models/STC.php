<?php

namespace NCLP\Models;

use Illuminate\Database\Eloquent\Model;

class STC extends Model
{
	protected $table = 's_t_cs';
	public function cls(){
		return $this->hasMany('NCLP\Models\Cl', 'id', 'stc_id');
	}

	public function users()
	{
		return $this->belongsToMany('NCLP\User', 'user_stc', 'stc_id', 'user_id');
	}
}
