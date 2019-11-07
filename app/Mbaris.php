<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mbaris extends Model
{
    protected $table = 'mbaris';
    public $timestamps = false;

    public function Mbarisitems()
    {
        return $this->hasMany('App\Mbarisitems', 'mbaris_id');
    }
}
