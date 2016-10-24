<?php
/**
 * Created by PhpStorm.
 * User: fariza
 * Date: 16/09/16
 * Time: 17:51
 */
namespace  App;

use Illuminate\DataBase\Elogunet\Model;

class Post extends  Model
{
    /**
     * @return mixed
     */
    public function user(){

        return $this->belongsTo('App\User');
    }

    /**
     * @return mixed
     */

    public function like()
    {
        return $this->hasMany('App\like');
    }

    public function scopeNotReply($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * @return mixed
     */
    public  function replies()
    {
        return $this->hasMany('App\post','parent_id');
    }
}
