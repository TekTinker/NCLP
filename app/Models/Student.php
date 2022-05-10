<?php

namespace NCLP\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	public function cl(){
		return $this->belongsTo('NCLP\Models\Cl', 'cl_id', 'id');
	}
}
