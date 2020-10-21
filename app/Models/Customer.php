<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
                  'name',
                  'number',
                  'quantity',
                  'dist_id'
              ];


    public function distributor()
    {
        return $this->belongsTo('App\User','dist_id');
    }
}
