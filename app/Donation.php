<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //

    protected $fillable = [
        'camp_id','blood_id','details','quantity','donation_date','confirm_donation',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function blood()
    {
        return $this->belongsTo('App\Blood');
    }
    public function camp()
    {
        return $this->belongsTo('App\Camp');
    }
}
