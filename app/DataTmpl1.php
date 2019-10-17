<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTmpl1 extends Model
{
    protected $table = "datatmpl1";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id', 
        'id_indikator', 
        'tahun', 
        'nu_karakteristik', 
        'nu_baris', 
        'nu_periode', 
        'data',
    ];

}
