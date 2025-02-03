<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'sku',
        'barcode',
        'brand',
        'model',
        'color',
        'size',
        'unit',
        'weight',
        'length',
        'width',
        'height',
        'discount',
        'discount_price',
        'cost',
        'tax',
        'tax_price',
        'shipping',
        'shipping_price',
        'total',
        'total_price',
        'profit',
        'profit_price',
        'price',
        'stock',
        'status',
        'image',
        'category_id',
        'user_id',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(static function ($product) {
            $product->slug = \Str::slug($product->name);
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
