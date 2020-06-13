<?php

namespace App;

use App\Cartlist;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function cartlists()
    {
        return $this->hasMany(Cartlist::class);
    }
}
