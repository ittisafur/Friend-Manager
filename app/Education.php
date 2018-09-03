<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $timestamps = false;
    public $table = 'educations';
    protected $guarded = [];
    public function relFriends()
    {
    	return $this->belongsToMany(Friend::class, 'education_friend');
    }
}
