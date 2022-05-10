<?php

namespace NCLP\Models;

use Illuminate\Database\Eloquent\Model;

class PMTalukaVisit extends Model
{
    protected $fillable = ['user_id', 'user_name', 'stc_uid', 'month', 'work', 'information', 'remark', 'date'];
}
