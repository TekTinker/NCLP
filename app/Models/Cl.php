<?php

namespace NCLP\Models;

use Illuminate\Database\Eloquent\Model;

class Cl extends Model
{
    public function stc(){
    	return $this->belongsTo('NCLP\Models\STC', 'stc_id', 'id');
	}

	public function students(){
		return $this->hasMany('NCLP\Models\Student', 'id', 'cl_id');
	}
}