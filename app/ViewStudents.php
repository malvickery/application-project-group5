<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewStudents extends Model
{
    protected $table = 'student_info';
    protected $guarded = [];
    public $timestamps = false;
}
