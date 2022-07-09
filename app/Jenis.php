<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table='jenis';
    protected $primaryKey='id_jenis';
    public $timestamps = false;
    protected $fillable=array('nama_jenis');
}
