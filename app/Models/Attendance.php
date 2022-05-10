<?php

namespace NCLP\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

	protected $fillable = ['cl_id','class', 'stc_id', 'stc','user_id', 'user', 'location', 'lon', 'lat', 'VT', 'PD', 'PM'];
	public function presents(){
		return $this->hasMany('NCLP\Models\Present', 'id', 'attendance_id');
	}
}
