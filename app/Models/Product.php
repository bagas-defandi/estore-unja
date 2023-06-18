<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'gambar', 'harga', 'stok', 'deskripsi'];

    public function orderDetails(): HasMany
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
