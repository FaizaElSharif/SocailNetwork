<?php
/**
 * Created by PhpStorm.
 * User: fariza
 * Date: 17/09/16
 * Time: 07:54
 */

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
class like extends Model
{
public function user(){

    return $this->belongsTo('App\User');
}
public  function post(){

    return $this->belongsTo('App\Post');

}

}