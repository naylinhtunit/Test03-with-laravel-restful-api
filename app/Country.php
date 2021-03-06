<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public $timestamps = false;
    protected $hidden = ["created_at", "updated_at"];

    protected $fillable = ['city', 'firstName', 'lastName'];
}
