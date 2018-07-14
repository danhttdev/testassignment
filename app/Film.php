<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected $fillable = [
        'name',
        'description',
        'realease_date',
        'rating',
        'ticket_price',
        'country',
        'genre',
        'photo',
        'slug'
    ];
}
