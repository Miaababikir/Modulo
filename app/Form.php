<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Form extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        static::creating(function ($form) {
            $form->token = Str::random(6);
        });
    }
}
