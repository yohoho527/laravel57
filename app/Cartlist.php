<?php

namespace App;

use App\Production;
use Illuminate\Database\Eloquent\Model;

class Cartlist extends Model
{
    //

    public function productions()
    {
        return $this->belongsToMany(Production::class)->withTimestamps();
    }
}
