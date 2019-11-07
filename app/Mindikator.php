<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mindikator extends Model
{
    protected $table = 'mindikator';
    public $timestamps = false;

    public function Mbaris()
    {
        return $this->hasOne('App\Mbaris', 'id', 'id');
    }

    public function Mkarakteristik()
    {
        return $this->hasOne('App\Mkarakteristik', 'id', 'id');
    }

    public function Mperiode()
    {
        return $this->hasOne('App\Mperiode', 'id', 'id');
    }

    public function Msatuan()
    {
        return $this->hasOne('App\Msatuan', 'id', 'id');
    }

    public function Msubjek()
    {
        return $this->hasOne('App\Msubjek', 'id', 'id');
    }
}
