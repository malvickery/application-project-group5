<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstructorInfo extends Model
{
    protected $table = 'instructor_info';
    protected $guarded = [];
    public $timestamps = false;
}