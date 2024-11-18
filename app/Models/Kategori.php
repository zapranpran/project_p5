<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $filable = ['id', 'nama_kategori'];
    public $timestamp = true;

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
