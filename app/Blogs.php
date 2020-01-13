<?php

namespace App;

use App\Scopes\BlogsScope;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new BlogsScope());
    }

    public function scopemyblogs($query)
    {
        return $query->where('user_id', Auth::id());
    }
    // accessor for title: convert it to upper case when retrieving it
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    //Mutator for Title: convert it to lower case before saving it
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }

}
