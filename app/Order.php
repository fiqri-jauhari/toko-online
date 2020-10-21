<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guardeed = [];

    public function invoice()
    {
         return $this->belongsTo(Invoice::class);
    }
}
