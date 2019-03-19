<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'training_schedule';
    protected $guarded = [];
    public $timestamps = false;
}
