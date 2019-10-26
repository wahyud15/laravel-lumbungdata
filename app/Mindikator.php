<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mindikator extends Model
{
    protected $table = 'mindikator';
    public $timestamps = false;

    public function Mbaris()
    {
        return $this->hasOne('App\Mbaris', 'id');
    }

    public function Mkarakteristik()
    {
        return $this->hasOne('App\Mkarakteristik', 'id');
    }

    public function Mperiode()
    {
        return $this->hasOne('App\Mperiodewaktu', 'id');
    }

    public function Msatuan()
    {
        return $this->hasOne('App\Msatuan', 'id');
    }
}
