<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['addressline','city','zip','phone', 'user_id'];
    public $table = "address";
}