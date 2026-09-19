<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
    ];

    // ينتمي لطلب معين
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // ينتمي لمنتج محدد
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // يمتلك عدة خيارات محددة لهذا المنتج في الطلب
    public function options(): HasMany
    {
        return $this->hasMany(OrderItemOption::class);
    }
}