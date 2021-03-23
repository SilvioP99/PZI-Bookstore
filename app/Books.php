<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model 
{
    protected $fillable=['id','title','author','genre','price','pages','year','image'];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}