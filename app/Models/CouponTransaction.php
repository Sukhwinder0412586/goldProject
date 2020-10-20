<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouponTransaction extends Model
{
    protected $fillable = [
                  'cust_id',
                  'coupon',
                  'distributor_id',
                  'amount'
              ];


   

}
