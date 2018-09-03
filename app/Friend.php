<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
	protected $guarded = [];
    public function relUsers()
    {
    	return $this->belongsTo(User::class);
    }

    public function relStudies()
    {
    	return $this->belongsToMany(Education::class, 'education_friend');
    }

    public function relAddress()
    {
    	return $this->belongsToMany(Location::class, 'friend_location');
    }
}
