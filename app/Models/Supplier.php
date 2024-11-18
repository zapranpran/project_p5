<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $filable = ['id', 'nama_supplier', 'alamat'];
    public $timestamp = true;
    
    public function produk()
    {
        return $this->hasMany(produk::class);
    }

}
