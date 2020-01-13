<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloggerStatus extends Model
{
    public  function user(){
        return $this->belongsTo('App\User');
    }

    public function getNicknameAttriibute($value){
        return ucfirst($value);
    }
    public function getYoutubeChannelAttribute($value){
        return ucfirst($value);
    }
    public function country(){
        return $this->belongsTo('App\Country');
    }
}
