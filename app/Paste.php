<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    //
    protected $fillable = ['content','title','user_id'];

    public function tags(){
    return $this->belongsToMany('App\User');
    }
}
