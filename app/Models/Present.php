<?php

namespace NCLP\Models;

use Illuminate\Database\Eloquent\Model;
class Present extends Model
{

	protected $fillable = ['attendance_id', 'student_id','present'];


	public function attendance(){
		return $this->belongsTo('NCLP\Models\Attendance', 'attendance_id', 'id');
	}
}
