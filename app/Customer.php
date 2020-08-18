<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
    public $timestamps = false;
    protected $hidden = ["created_at", "updated_at"];
    protected $fillable = ['name', 'description'];
}
