<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Submission extends Model
{
    protected $guarded = [];

    public function getDataAttribute($data)
    {
        return json_decode($data);
    }

    public function getCreatedAtAttribute($created_at)
    {
        return Carbon::parse($created_at)->diffForHumans();
    }
}
