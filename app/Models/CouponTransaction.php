<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponTransaction extends Model
{
    protected $fillable = [
                  'cust_id',
                  'coupon',
                  'distributor_id',
                  'amount',
                  'is_delivered'
              ];


    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','cust_id');
    }

    public function distributor()
    {
        return $this->belongsTo('App\User','distributor_id');
    }
   

}
