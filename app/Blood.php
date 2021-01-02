<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    //
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function donations()
    {
        return $this->hasMany('App\Donation');
    }
}
