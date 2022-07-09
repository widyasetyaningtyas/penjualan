<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table='penjualan';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('id_pembeli','id_user','total','bayar');

    public function detail_penjualan(){
    	return $this->hasMany('App\Detailpenjualan','id_detail_penjualan');
    }
    public function pembeli(){
    	return $this->hasMany('App\Pembeli','id_pembeli');
    }
}
