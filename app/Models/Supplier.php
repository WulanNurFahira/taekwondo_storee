<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [
        'id'
    ];
    public function Supplier()
    {
        return $this->hasMany(Obat::class, 'id_obat', 'id');
    }
}
