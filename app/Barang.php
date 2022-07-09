<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table='barang';
    protected $primaryKey='id_barang';
    public $timestamps = false;
    protected $fillable=array('nama_barang','harga','stok','tgl_expired','id_jenis');
}
