<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //relation many to one

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    // relation one to many
    public function image()
    {
        return $this->hasMany('App\image','image_id');
    }
    
}
