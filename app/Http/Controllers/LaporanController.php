<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Pembeli;
use App\Barang;
use App\Detailpenjualan;
use App\Penjualan;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('detail_penjualan')
            ->join('barang','barang.id_barang','=','detail_penjualan.id_barang')
            ->join('penjualan','penjualan.id_penjualan','=','detail_penjualan.id_penjualan')
            ->join('pembeli','pembeli.id_pembeli','=','penjualan.id_pembeli')
            ->join('user','user.id_user','=','penjualan.id_user')
            ->select('penjualan.id_penjualan','pembeli.nama','barang.nama_barang','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','penjualan.bayar','user.id_user','user.username','penjualan.created_at','penjualan.total')
            
            ->whereMonth('penjualan.created_at',Request::get('bulan'))
            ->get();

        $data['data'] = $query;
        return view('laporan.laporan_bulan',$data);
    }
    public function cetak()
    {
        $query = DB::table('detail_penjualan')
            ->join('barang','barang.id_barang','=','detail_penjualan.id_barang')
            ->join('penjualan','penjualan.id_penjualan','=','detail_penjualan.id_penjualan')
            ->join('pembeli','pembeli.id_pembeli','=','penjualan.id_pembeli')
            ->join('user','user.id_user','=','penjualan.id_user')
            ->select('penjualan.id_penjualan','pembeli.nama','barang.nama_barang','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','penjualan.bayar','user.id_user','user.username','penjualan.created_at','penjualan.total')

            ->whereMonth('penjualan.created_at',Request::get('bulan'))
            ->get();

        $data['data'] = $query;
        return view('laporan.cetak',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
