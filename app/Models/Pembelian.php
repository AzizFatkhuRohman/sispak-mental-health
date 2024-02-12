<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'pembelian';
    protected $fillable = [
        'userId',
        'produkId',
        'qty',
        'status',
        'total_bayar'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
    public function produk()
    {
        return $this->belongsTo(products::class, 'produkId');
    }
    public function TakeAdmin(){
        return $this->with('user','produk')->take(5)->get();
    }
    public function TakeUser($userId){
        return $this->with('user','produk')->where('userId', $userId)->take(5)->get();
    }
    public function GetData()
    {
        return $this->with('user', 'produk')->latest()->get();
    }
}
