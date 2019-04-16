<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits


class InstructorInfo extends Model
{
    use SoftDeletes; //<--- use the softdelete traits
    protected $dates = ['deleted_at']; //<--- new field to be added in your table

    protected $table = 'instructor_info';
    protected $guarded = [];
    public $timestamps = false;
}
