<?php

namespace Laradex;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
