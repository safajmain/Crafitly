<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItemOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_item_id',
        'product_option_id',
        'product_option_value_id',
    ];

    // ينتمي لعنصر طلب محدد
    public function orderItem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }

    // ينتمي لخيار المنتج الأصلي
    public function productOption(): BelongsTo
    {
        return $this->belongsTo(ProductOption::class, 'product_option_id');
    }

    // ينتمي لقيمة الخيار المختارة
    public function productOptionValue(): BelongsTo
    {
        return $this->belongsTo(ProductOptionValue::class, 'product_option_value_id');
    }
}