<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements  Authenticatable
{

    use Illuminate\Contracts\Auth\Authenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function like()
    {
        return $this->hasMany('App\like');
    }
}
