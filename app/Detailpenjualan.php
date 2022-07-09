<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
    protected $table='detail_penjualan';
    protected $primaryKey='id_detail_penjualan';
    public $timestamps = false;
    protected $fillable=array('id_penjualan','id_barang','jumlah_beli','sub_total');

    public function penjualan(){
    	return $this->belongsTo('App\Penjualan','id_penjualan');
    }
    public function barang(){
    	return $this->hasMany('App\Barang','id_barang');
    }
}
