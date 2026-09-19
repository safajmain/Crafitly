<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    // ينتمي لمستخدم (لأن الجدول يحمل user_id)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // ينتمي لمنتج (لأن الجدول يحمل product_id)
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // يمتلك عدة خيارات داخل السلة (مثل تحديد المقاس واللون للقطعة)
    public function options(): HasMany
    {
        return $this->hasMany(CartItemOption::class);
    }
}