<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Produk()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }
    
    public function detail_penjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_produk', 'id');
    }
}
