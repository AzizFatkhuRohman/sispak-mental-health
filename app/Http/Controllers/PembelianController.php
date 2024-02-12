<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\products;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    protected $Pembelian;
    protected $produk;
    public function __construct(Pembelian $Pembelian, products $produk){
        $this->Pembelian = $Pembelian;
        $this->produk = $produk;
    }
    public function getPenjualan(){
        $title = 'Riwayat Penjualan';
        $data = $this->Pembelian->GetData();
        return view('pembelian.riwayat-penjualan',compact('title','data'));
    }
    public function getProduk(){
        $title = 'Produk';
        $data = $this->produk->Tampil();
        return view('pembelian.produk',compact('title','data'));
    }
}
