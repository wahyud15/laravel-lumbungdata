<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mkarakteristik extends Model
{
    protected $table = 'mkarakteristik';
    public $timestamps = false;

    public function Mkarakteristikitems()
    {
        return $this->hasMany('App\Mkarakteristikitems', 'mkarakteristik_id');
    }
}
