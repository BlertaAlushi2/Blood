<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $fillable = [
        'blood_id','quantity','donation_date','Confirmed','confirm_request'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function blood()
    {
        return $this->belongsTo('App\Blood');
    }
}
