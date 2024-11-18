<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $filable = ['id', 'nama_produk', 'deskripsi', 'harga', 'id_kategori', 'id_supplier'];
    public $timestamp = true;

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }

    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'id_supplier');
    }
    public function deleteImage(){
        if($this ->cover && file_exists(public_path('images/product'. $this->cover)))
        {unlink(public_path('images/product'. $this->cover));
        }
    }
}
