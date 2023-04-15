<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'category_id',
        'product_desc',
        'product_price',
        'product_image',
    ];

    function rel_to_category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
