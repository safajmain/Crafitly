<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItemOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_item_id',
        'product_option_id',
        'product_option_value_id',
    ];

    // ينتمي لعنصر سلة محدد
    public function cartItem(): BelongsTo
    {
        return $this->belongsTo(CartItem::class);
    }

    // ينتمي لخيار منتج (ليعرف أن هذا الخيار هو "اللون")
    public function productOption(): BelongsTo
    {
        return $this->belongsTo(ProductOption::class, 'product_option_id');
    }

    // ينتمي لقيمة خيار (ليعرف أن القيمة المختارة هي "أحمر")
    public function productOptionValue(): BelongsTo
    {
        return $this->belongsTo(ProductOptionValue::class, 'product_option_value_id');
    }
}