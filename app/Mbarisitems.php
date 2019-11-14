<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mbarisitems extends Model
{
    protected $table = 'mbarisitems';
    protected $fillable = ["id","no_urut", "nama_items", "mbaris_id"];
    public $timestamps = false;
}
