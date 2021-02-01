<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // RELAZIONE DB

    // posts-user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
