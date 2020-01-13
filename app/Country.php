<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function blogger_statues(){
        return $this->hasOne('App\BloggerStatuses');
    }
    public function blogs()
    {
        return $this->hasManyThrough('App\Blogs', 'App\BloggerStatus');
    }

}
