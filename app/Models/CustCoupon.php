<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustCoupon extends Model
{
    protected $fillable = [
                  'cust_id',
                  'coupon'
              ];
}
