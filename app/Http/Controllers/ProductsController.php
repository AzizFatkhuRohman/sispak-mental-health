<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $products;
    public function __construct(products $products)
    {
        $this->products = $products;
    }
    public function getAdmin()
    {
        $title = 'Produk';
        $data = $this->products->Tampil();
        return view('produk.admin-produk', compact('title', 'data'));
    }
    public function postAdmin(Request $request)
    {
        $validasi = $request->validate([
            'nama_tansu' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg',
            'harga' => 'required|numeric',
            'deskripsi' => 'required'
        ], [
            'nama_tansu.required' => 'Nama tansu wajib di isi',
            'photo.required' => 'Photo wajib di isi',
            'photo.image' => 'Photo wajib berupa gambar',
            'photo.mimes' => 'Photo wajib format jpg,jpeg,png',
            'harga.required' => 'Harga wajib di isi',
            'harga.numeric' => 'Harga wajib angka',
            'deskripsi.required' => 'Deskripsi wajib di isi'
        ]);
        if (!$validasi) {
            return redirect()->back()->withErrors($validasi);
        } else {
            $photo = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('produk'), $photo);
            $this->products->Simpan([
                'nama_tansu' => $request->nama_tansu,
                'photo' => $photo,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect()->back()->with('success', 'Produk berhasil di tambah');
        }
    }
    public function findProduk($id)
    {
        $title = 'Detail Produk';
        $data = $this->products->FindProduk($id);
        return view('produk.lihat-produk', compact('title','data'));
    }
    public function putProduk(Request $request, $id){
        $validasi = $request->validate([
            'nama_tansu'=>'required',
            'harga'=>'required|numeric',
            'deskripsi'=>'required'
        ],[
            'nama_tansu.required'=>'Nama tansu wajib di isi',
            'harga.required'=>'Harga wajib di isi',
            'harga.numeric'=>'Harga wajib angka',
            'deskripsi'=>'Deskripsi wajib di isi'
        ]);
        if (!$validasi) {
            return redirect()->back()->withErrors($validasi);
        } else {
            $data = [
                'nama_tansu'=>$request->nama_tansu,
                'harga'=>$request->harga,
                'deskripsi'=>$request->deskripsi
            ];
            $this->products->UpdateProduk($id,$data);
            return redirect()->back()->with('success','Produk berhasil di ubah');
        }
    }
    public function deleteProduk($id){
        $this->products->DeleteProduk($id);
        return redirect('admin-produk')->with('delete','Produk berhasil di hapus');
    }
}
