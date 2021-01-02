<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    //
    protected $fillable = [
        'quantity'
    ];
    public function blood()
    {
        return $this->belongsTo('App\Blood');
    }
}
