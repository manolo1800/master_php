<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    //relation many to one
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');        
    }

    // relation one to many
    public function image()
    {
        return $this->hasMany('App\image','image_id');
    }
    
}
