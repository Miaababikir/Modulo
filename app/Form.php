<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Form extends Model
{
    protected $guarded = [];
    protected $with = ['submissions'];

    protected static function booted()
    {
        static::creating(function ($form) {
            $form->token = Str::random(6);
        });
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
