<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustCoupon extends Model
{
    protected $fillable = [
                  'cust_id',
                  'coupon',
                  'distributor_id'
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
