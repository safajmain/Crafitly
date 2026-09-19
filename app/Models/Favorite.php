<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    // ينتمي للعميل الذي أضافه للمفضلة
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // ينتمي للمنتج المفضل
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}