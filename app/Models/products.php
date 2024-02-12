<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nama_tansu',
        'photo',
        'harga',
        'deskripsi'
    ];
    public function pembelian(){
        $this->hasMany(Pembelian::class,'produkId');
    }
    public function Tampil()
    {
        return $this->latest()->get();
    }
    public function Simpan($data)
    {
        return $this->create($data);
    }
    public function FindProduk($id)
    {
        return $this->find($id);
    }
    public function UpdateProduk($id, $data)
    {
        return $this->find($id)->update($data);
    }
    public function DeleteProduk($id){
        return $this->find($id)->delete();
    }
}
