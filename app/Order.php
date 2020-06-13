<?php

namespace App;
use App\Orderlist;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function orderlists(){
        return $this->hasMany(Orderlist::class);
    }
}
