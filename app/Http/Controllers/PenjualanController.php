<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Pembeli;
use App\Barang;
use App\Detailbarang;
use App\Penjualan;
use App\Detailpenjualan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function NoPenjualan()
    {
        $tgl    = date('Y-m-d');
        $number = Penjualan::where("created_at","like","%".$tgl."%")->count();
        $angka  = $number + 1;
        $codes  = str_pad($angka, 1, rand(1,9), STR_PAD_LEFT);
        $code   = 'TRS-'.date('ymd').$codes;
        return $code;
    }
    public function index()
    {
        $data['query']= DB::table('detail_penjualan')
            ->join('barang','barang.id_barang','=','detail_penjualan.id_barang')
            ->join('penjualan','penjualan.id_penjualan','=','detail_penjualan.id_penjualan')
            ->join('pembeli','pembeli.id_pembeli','=','penjualan.id_pembeli')
            ->select('penjualan.id_penjualan','pembeli.nama','barang.nama_barang','barang.harga','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','penjualan.total')->get();
        return view('penjualan.index',$data);
    }
    public function struk()
    {
        return view('penjualan.struk');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['nomat'] = self::NoPenjualan();
        return view('penjualan.create',$data);
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
        $data['penjualan']= Penjualan::find($id);
        return view('penjualan.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['penjualan']=Penjualan::find($id);
        return view('penjualan.edit',$data);
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
        $penjualan =Penjualan::find($id)->delete();
        return redirect('penjualan');
    }
    public function cari(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Pembeli::where('id_pembeli','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }
        return response($data);
    }

    public function carii(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Barang::where('id_barang','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }
        return response($data);
    }

    public function simpan_transaksi(Request $request){

        $new = new Penjualan;
        $new->id_penjualan  = self::NoPenjualan();
        $new->id_pembeli    = Request::get('id_pembeli');
        $new->id_user       = ('1');
        $new->total         = Request::get('total');
        $new->bayar         = Request::get('bayar');
        $new->created_at    = date('Y-m-d H:i:s');

        $act = $new->save();
        if ($act) {
            $id_barang      = Request::get('dt_id_barang');
            $jumlah_beli    = Request::get('dt_jumlah_beli');
            $sub_total      = Request::get('dt_sub_total');

            foreach ($id_barang as $i => $key) {
                $baru = new Detailpenjualan;
                $baru->id_penjualan = Request::get('id_penjualan');
                $baru->id_barang = $key;
                $baru->jumlah_beli = $jumlah_beli[$i];
                $baru->sub_total = $sub_total[$i];
                $baru->save();
                $i++;
            }
            $data['query']= DB::table('detail_penjualan')
            ->join('barang','barang.id_barang','=','detail_penjualan.id_barang')
            ->join('penjualan','penjualan.id_penjualan','=','detail_penjualan.id_penjualan')
            ->join('pembeli','pembeli.id_pembeli','=','penjualan.id_pembeli')
            ->select('penjualan.id_penjualan','pembeli.nama','barang.nama_barang','barang.harga','detail_penjualan.jumlah_beli','detail_penjualan.sub_total','penjualan.total')

            ->where('penjualan.id_penjualan',Request::get('id_penjualan'))
            ->get();

            return view('penjualan.struk',$data);
        }else{
            return redirect('penjualan');
        }
    }
    
}
