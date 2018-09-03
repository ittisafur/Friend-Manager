<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    public function relLocations()
    {
    	return $this->belongsToMany(Friend::class, 'friend_location');
    }
}
