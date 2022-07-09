<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Pembeli;
use App\Barang;
use App\Detailbarang;
use App\Penjualan;
use App\Detailpenjualan;
use App\Jenis;
use App\Pengguna;

class PencarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Request::get('q')=='') {
            $data['data']    = [];
        }else{
            $cari = Request::get('q');

            $query = DB::table('penjualan')
            ->join('detail_penjualan','penjualan.id_penjualan','=','detail_penjualan.id_penjualan')
            ->join('barang','detail_penjualan.id_barang','=','barang.id_barang')
            ->join('jenis','barang.id_jenis','=','jenis.id_jenis')
            ->join('pembeli','penjualan.id_pembeli','=','pembeli.id_pembeli')
            ->join('user','penjualan.id_user','=','user.id_user')
            ->select('penjualan.id_penjualan','pembeli.nama','barang.nama_barang','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','penjualan.total','penjualan.bayar')

            ->where('penjualan.id_pembeli','like','%'.$cari.'%')
            ->orWhere('penjualan.total','like','%'.$cari.'%')

            ->get();

            $data['data'] = $query;
        }

        return view('penjualan.pencarian',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function cetak()
    // {
    //     $query = DB::table('penjualan')
    //         ->join('detail_penjualan','penjualan.id_penjualan','=','detail_penjualan.id_penjualan')
    //         ->join('barang','detail_penjualan.id_barang','=','barang.id_barang')
    //         ->join('jenis','barang.id_jenis','=','jenis.id_jenis')
    //         ->join('pembeli','penjualan.id_pembeli','=','pembeli.id_pembeli')
    //         ->join('user','penjualan.id_user','=','user.id_user')
    //         ->select('penjualan.id_penjualan','pembeli.nama','barang.nama_barang','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','penjualan.total','penjualan.bayar')

    //         ->where('penjualan.id_pembeli','like','%'.$cari.'%')
    //         ->orWhere('penjualan.total','like','%'.$cari.'%')

    //         ->get();

    //         $data['data'] = $query;
    //     }

    //     return view('penjualan.cetak',$data);
    // }
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
