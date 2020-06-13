<?php

namespace App;

use App\Cartlist;
use App\Comment;
use App\Orderlist;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    public $production;

    //
    public function selectFirst()
    {
        $production = Production::first();
        return $production;
    }

    public function selectByNo(string $pno)
    {
        $production = Production::where('pNo', $pno)->get()->get(0);
        return $production;
    }
    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function cartlists()
    {
        return $this->belongsToMany(Cartlist::class)->withTimestamps();
    }

    public function orderlists()
    {
        return $this->belongsToMany(Orderlist::class)->withTimestamps();
    }
}
