<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;

    public function order(): BelongsTo
    {
        return $this->belongsTo('App\Models\Order');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo('App\Models\Product');
    }
}
