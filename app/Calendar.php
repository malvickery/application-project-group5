<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'training_schedule';
    protected $guarded = [];
    protected $fillable = ['title','training_date','time_begins','time_ends'];
    public $timestamps = false;
}
